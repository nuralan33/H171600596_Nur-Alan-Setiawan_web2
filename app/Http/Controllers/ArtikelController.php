<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\KategoriArtikel;

class ArtikelController extends Controller
{
    function index(){
        $artikel=artikel::all();

        return view('artikel.index',compact ('artikel'));
    }
    public function show($id)
    {
    
    	$artikel=artikel::find($id);

    	return view('artikel.show',compact( 'artikel'));
    }



    public function create()
    {
    	$KategoriArtikel=KategoriArtikel::pluck('nama','id');
    	

    	return view( 'artikel.create',compact('KategoriArtikel'));
    }




    public function store(Request $request)
    {
    	$input=$request->all();
    	
    	artikel::create($input);

    	return redirect(route('artikel.index'));
    }


    
    public function edit($id){

        $artikel=artikel::find($id);
        $KategoriArtikel=KategoriArtikel::pluck('nama','id');

        if(empty($artikel)){
          return redirect(route('artikel.index'));
        }
  
        return view('artikel.edit',compact('artikel','KategoriArtikel'));
        }
      
    public function update($id,Request $request){

          $artikel=artikel::find($id);

          $input= $request->all();
  
  
        if(empty($artikel)){
          return redirect(route('artikel.index'));
        }
        $artikel->update($input);
  
        return redirect(route('artikel.index'));
      }
      public function destroy($id)
      {
        $artikel=artikel::find($id);
  
        if(empty($artikel)){

          return redirect(route('artikel.index')); }
  
          $artikel->delete();
          
          return redirect(route('artikel.index'));
        }
  
}
