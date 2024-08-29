<?php

namespace App\Http\Livewire;
use Exception;

use App\Models\Transaksi;
use App\Models\Detiltransaksi;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Transaksis extends Component
{
    public $total;
    public $transaksi_id;
    public $produk_id;
    public $qty=1;
    public $uang;
    public $kembali;

    public function render()
    {
        $transaksi=Transaksi::select('*')->where('user_id','=',Auth::user()->id)->orderBy('id','desc')->first();

        $this->total=$transaksi->total;
        $this->kembali=$this->uang-$this->total;
        return view('livewire.transaksis')
        ->with("data",$transaksi)
        ->with("dataProduk",Produk::where('stok','>','0')->get())
        ->with("dataDetiltransaksi",Detiltransaksi::where('transaksi_id','=',$transaksi->id)->get());
    }

    public function store()
    {
        $this->validate([
            'produk_id'=>'required'
        ]);
        $transaksi=Transaksi::select('*')->where('user_id','=',Auth::user()->id)->orderBy('id','desc')->first();
        $this->transaksi_id=$transaksi->id;
        $produk=Produk::where('id','=',$this->produk_id)->get();
        $harga=$produk[0]->harga;
        Detiltransaksi::create([
            'transaksi_id'=>$this->transaksi_id,
            'produk_id'=>$this->produk_id,
            'qty'=>$this->qty,
            'harga'=>$harga
        ]);

        $total=$transaksi->total;
        $total=$total+($harga*$this->qty);
        Transaksi::where('id','=',$this->transaksi_id)->update([
            'total'=>$total
        ]);
        $this->produk_id=NULL;
        $this->qty=1;
    }

    public function delete($id_detiltransaksi)
    {
        $detiltransaksi=Detiltransaksi::find($id_detiltransaksi);
        $detiltransaksi->delete();

        //update total
        $detiltransaksi=Detiltransaksi::select('*')->where('transaksi_id','=',$this->transaksi_id)->get();
        $total=0;
        foreach($detiltransaksi as $od){
            $total+=$od->qty*$od->harga;
        }

        try{
            Transaksi::where('id','=',$this->transaksi_id)->update([
                'total'=>$total
            ]);
        }catch(Exception $e){
            dd($e);
        }
    }

    public function receipt($id)
    {
        //update stok
        $detiltransaksi=Detiltransaksi::select('*')->where('transaksi_id','=',$id)->get();
        //dd($order_detail);
        foreach ($detiltransaksi as $od) {
            $stoklama=Produk::select('stok')->where('id','=',$od->produk_id)->sum('stok');
            $stok=$stoklama-$od->qty;
            try {
                Produk::where('id','=',$od->produk_id)->update([
                    'stok'=>$stok
                ]);
            }catch (Exception $e) {
                dd($e);
            }
        }
        return Redirect::route('cetakReceipt')->with(['id'=>$id]);
    }
}


