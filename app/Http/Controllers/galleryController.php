<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Image;
use Illuminate\Http\Request;
use DB;
use Slug;

class galleryController extends Controller
{
    //
    public function url($id)
    {
        $f = Gallery::where('url','=',$id)->get()->first();
        if(isset($f))
        {
            return view('gallery.view',['f'=>$f]);
        }else{
            return redirect('/');
        }

    }
    public function add(){

        return view('gallery.add');
    }
    public  function view($id){
        $f=Gallery::find($id);
        if(!isset($f)){
            $f=Gallery::inRandomOrder()->get();
        }
        // dd($f);
        return view('gallery.view',['f'=>$f]);
    }

    public function save(Request $r)
    {
        $t= new Gallery();
        $t->name=$r->name;
        if(isset($r->url))
        {
            $t->url=$r->url;
        }else
        {
            $t->url=Slug::make($r->name);

        }
        $t->text=$r->text;
        $t->save();
        $d = $r->allFiles();
        $root = $_SERVER['DOCUMENT_ROOT'] . "/upload/photo/";
        $ds = date('Ymdhis');
        $id=$t->id;
        if(isset($d['foto']))
        {
            foreach ($d['foto'] as $f) {
                if (!isset($f)) continue;
                $name = $ds . $f->getClientOriginalName();
                $name = str_replace(array(' ', '%', '^', '=', '+', '-', '_', '$', '|', '/', '?', '*', '#', '{', '[', ']', '}', '<', '>', '`', '~', '@', '&', '!', '(', ')'), '', $name);
                // $name = Auth::user()->id."_" . $name;
                $f->move($root , $name);
                $im = new Image();
                $im->id_gallery = $id;
                $im->url = $name;
                $im->save();
            }
        }
        return redirect()->route('list')->with('alert','Сохранено');
    }
    public function delete($id)
    {
        $a= Gallery::find($id);
        $imgs = Image::where('ID_gallery', '=', $id)->get();
        foreach ($imgs as $img) {
            if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/upload/photo/" . $img->url))
                unlink($_SERVER['DOCUMENT_ROOT'] . "/upload/photo/" . $img->url);
        }
        DB::table('galleries')->where('id', '=', $id)->delete();
        DB::table('images')->where('id_gallery', '=', $id)->delete();
        return back()->with('alert','Удалено');
    }
    public function list()
    {
        $p=Gallery::all();

        return view('gallery.list',['p'=>$p]);
    }
    public function edit($id)
    {
        $f=gallery::find($id);
        return view('gallery.edit',['f'=>$f]);
    }

    public function editsave(Request $r)
    {
        //dd($r);
        $t=Gallery::find($r->id);
        $t->name=$r->name;
        if(isset($r->url))
        {
            $t->url=$r->url;
        }else
        {
            $t->url=Slug::make($r->name);

        }
        $t->text=$r->text;
        $t->save();
        $d = $r->allFiles();
        $root = $_SERVER['DOCUMENT_ROOT'] . "/upload/photo/";
        $ds = date('Ymdhis');
        $id=$t->id;
        if(isset($d['foto']))
        {
            foreach ($d['foto'] as $f) {
                if (!isset($f)) continue;
                $name = $ds . $f->getClientOriginalName();
                $name = str_replace(array(' ', '%', '^', '=', '+', '-', '_', '$', '|', '/', '?', '*', '#', '{', '[', ']', '}', '<', '>', '`', '~', '@', '&', '!', '(', ')'), '', $name);
                // $name = Auth::user()->id."_" . $name;
                $f->move($root , $name);
                $im = new Image();
                $im->id_gallery = $id;
                $im->url = $name;
                $im->save();
            }
        }
        return redirect()->route('list')->with('alert','Сохранено');
    }
}
