<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
  public function index(){
        $KategoriArtikel=KategoriArtikel::all();

        return view('kategori_artikel.index',compact ('KategoriArtikel'));
    }

    public function show($id){
        
        $KategoriArtikel=KategoriArtikel::find($id);

        if(empty($KategoriArtikel)){
          return redirect(route('Kategori_Artikel.index'));
        }

        return view('kategori_artikel.show',compact('KategoriArtikel'));
    }
    public function create(){
      return view( 'kategori_artikel.create');
    }
    public function store(Request $request)
    {
      $input= $request->all();
      KategoriArtikel::create($input);

      return redirect(route('Kategori_Artikel.index'));
    }
    public function edit($id){
      $KategoriArtikel=KategoriArtikel::find($id);

      if(empty($KategoriArtikel)){
        return redirect(route('Kategori_Artikel.index'));
      }

      return view( 'kategori_artikel.edit',compact('KategoriArtikel'));
      }
      public function update($id,Request $request){
        $KategoriArtikel=KategoriArtikel::find($id);
        $input= $request->all();


      if(empty($KategoriArtikel)){
        return redirect(route('Kategori_Artikel.index'));
      }
      $KategoriArtikel->update($input);

      return redirect(route('Kategori_Artikel.index'));
    }
    public function destroy($id)
    {
      $KategoriArtikel=KategoriArtikel::find($id);

      if(empty($KategoriArtikel)){
        return redirect(route('Kategori_Artikel.index')); }

        $KategoriArtikel->delete();
        return redirect(route('Kategori_Artikel.index'));
      }
      public function trash(){
        $kategoriartikel=kategoriartikel::onlyTrashed();

        return view('kategori_artikel.index',compact ('KategoriArtikel'));
    }
}
