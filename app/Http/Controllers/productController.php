<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        {
            if($request->has ('search')) {
                $data = Product::where('Kode_Barang', 'LIKE', '%' . $request->search. '%')
                ->orWhere('Nama_Barang', 'LIKE', '%' . $request->search. '%')
                ->orWhere('Kategori_Barang', 'LIKE', '%' . $request->search. '%')
                ->get();
            }else {
                $data = Product::get();
            }
            return view('dasboard.halaman.halaman')->with('data', $data);
            
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dasboard.halaman.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $r->validate([
            'kode'=>'required',
            'nama'=>'required',
            'kategori'=>'required',
            'harga'=>'required',
            'jumlah'=>'required'
        ],[
            'kode.required'=>'Kode Barang Wajib di isi',
            'nama.required'=>'Nama Barang Wajib di isi',
            'kategori.required'=>'Kategori Barang Wajib di isi',
            '.required'=>'Harga Barang Wajib di isi',
            'jumlah.required'=>'Jumlah Barang Wajib di isi',
        ]
    );
        
        $kode=$r->kode;
        $nama=$r->nama;
        $kategori=$r->kategori;
        $jumlah=$r->jumlah;
        $harga=$r->harga;
        $p=new product();
        $p->Kode_Barang=$kode;
        $p->Nama_Barang=$nama;
        $p->Kategori_Barang=$kategori;
        $p->Jumlah_Barang=$jumlah;
        $p->Harga_Barang=$harga;
        $p->save();
        return redirect()->route('product.index')->with('success', 'Product berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=product::where('id',$id)->first();
        return view('dasboard.halaman.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        $r->validate([
            'kode'=>'required',
            'nama'=>'required',
            'kategori'=>'required',
            'harga'=>'required',
            'jumlah'=>'required'
        ],[
            'id.required'=>'Id Wajib di isi',
            'kode.required'=>'Kode Barang Wajib di isi',
            'nama.required'=>'Nama Barang Wajib di isi',
            'kategori.required'=>'Kategori Barang Wajib di isi',
            '.required'=>'Harga Barang Wajib di isi',
            'jumlah.required'=>'Jumlah Barang Wajib di isi',
        ]
    );
         
        $kode=$r->kode;
        $nama=$r->nama;
        $kategori=$r->kategori;
        $jumlah=$r->jumlah;
        $harga=$r->harga;
        $p=product::find($id);
        $p->Kode_Barang=$kode;
        $p->Nama_Barang=$nama;
        $p->Kategori_Barang=$kategori;
        $p->Jumlah_Barang=$jumlah;
        $p->Harga_Barang=$harga;
        $p->save();
    return redirect()->route('product.index')->with('success', 'Product Berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product::where('Kode_Barang',$id)->delete();
        return redirect()->route('product.index')-> with('success', 'Product Berhasil di delete');
    }
}