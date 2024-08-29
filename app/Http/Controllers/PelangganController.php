<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan;
use Illuminate\Http\RedirectResponse as HttpRedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Iluminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\RedirectResponse as HttpFoundationRedirectResponse;

use function PHPUnit\Framework\returnValueMap;

class PelangganController extends Controller
{
    //

    public function index()
    {
        return view('pelanggan.tabel', [
        "title" => "Pelanggan",
        "data" => Pelanggan::all()
        ]);
    }

    public function create():View
    {
        return view('pelanggan.tambah')->with(["title" => "Tambah Data Pelanggan"]);
    }
    public function store(Request $request): HttpRedirectResponse
    {
            $request->validate([
            "nama"=>"required",
            "alamat"=>"required",
            "nohp"=>"nullable"
        ]);

        Pelanggan::create($request->all());
        return redirect()->route ('pelanggan.index')->with('success','Data Pelanggan Berhasil Ditambahkan');
    }
    
    public function edit(Pelanggan $pelanggan):View
    {
        return view('pelanggan.edit',compact('pelanggan'))->with(["title" => " Ubah Data Pelanggan"]);
    }
        
        public function update(Request $request, Pelanggan $pelanggan): HttpRedirectResponse
        {
                $request->validate([
                "nama"=>"required",
                "alamat"=>"required",
                "nohp"=>"nullable"
            ]);
    
            $pelanggan->update($request->all());
            return redirect()->route ('pelanggan.index')->with('Updated','Data Pelanggan Berhasil Diubah');
        }
        public function show(Pelanggan $pelanggan):View
        {
            return view('pelanggan.tampil',compact('pelanggan'))->with(["title" => "Data Pelanggan"]);
        }
        
}
