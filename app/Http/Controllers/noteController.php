<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use App\Kategory;
use App\Image;
use App\Page;
use Slug;
use DB;
class noteController extends Controller
{
    public function view($id)
    {
        $f=Note::find($id);
        return view('note.view',['f'=>$f]);
    }
    public  function url($id)
    {
        $f = Note::where('url','=',$id)->get()->first();
        if(isset($f))
        {
            return view('note.view',['f'=>$f]);
        }else{
            return redirect('/');
        }
    }
    public function add(){


        $k=Kategory::all();
        return view('note.add',['kat'=>$k]);
    }
    public function save(Request $r)
    {
        $t= new Note();
        $t->label=$r->label;
        $t->kat=$r->kat;
        $t->text=$r->text;
        if(isset($r->url))
        {
            $t->url=$r->url;
        }else
        {
            $t->url=Slug::make($r->label);

        }

        $t->save();
        $d = $r->allFiles();
        $root = $_SERVER['DOCUMENT_ROOT'] . "/upload/photo/";
        $ds = date('Ymdhis');

        $id=$t->id;

        if(isset($d['foto']))
        {
            foreach ($d['foto'] as $f) {
                if (!isset($f)) continue;

                /*            if (!in_array($f->getClientOriginalExtension(), array('jpg', 'JPG', 'png', 'PNG', 'bmp', 'BMP', 'svg'))) {
                                continue;
                            }*/
                $name = $ds . $f->getClientOriginalName();
                $name = str_replace(array(' ', '%', '^', '=', '+', '-', '_', '$', '|', '/', '?', '*', '#', '{', '[', ']', '}', '<', '>', '`', '~', '@', '&', '!', '(', ')'), '', $name);
                // $name = Auth::user()->id."_" . $name;
                $f->move($root , $name);
                $im = new Image();
                $im->ID_NOTE = $id;
                $im->url = $name;
                $im->save();

            }

        }

        return back()->with('alert','Сохранено');

    }
    public function delete($id)
    {
        $a= Note::find($id);

        $imgs = Image::where('ID_NOTE', '=', $id)->get();
        foreach ($imgs as $img) {

            if(file_exists($_SERVER['DOCUMENT_ROOT'] . "/upload/photo/" . $img->url))
                unlink($_SERVER['DOCUMENT_ROOT'] . "/upload/photo/" . $img->url);
        }
        DB::table('notes')->where('id', '=', $id)->delete();
        DB::table('images')->where('ID_NOTE', '=', $id)->delete();
        return back()->with('alert','Удалено');
    }

    public function list()
    {
        $f = Note::paginate(15);
        return view('note.list',['p'=>$f]);
    }
    public function edit($id)
    {
        $k=Kategory::all();
        $f=Note::find($id);
        return view('note.edit',['f'=>$f,'kat'=>$k]);
    }
    public function imgdel($id)
    {
        $i=Image::find($id);
        if(isset($i))
        {
            $i->delete();
            return back()->with('alert','Удалено');
        }else
        {
            return back()->with('alert','Ошибка удаления');
        }


    }
    public function editsave(Request $r)
    {
        //dd($r);
        $t=Note::find($r->id);
        if(isset($t))
        {
            if(isset($r->url))
            {
                $t->url=$r->url;
            }else
            {
                $t->url=Slug::make($r->label);

            }

            $t->label=$r->label;
            $t->kat=$r->kat;
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

                    /*            if (!in_array($f->getClientOriginalExtension(), array('jpg', 'JPG', 'png', 'PNG', 'bmp', 'BMP', 'svg'))) {
                                    continue;
                                }*/
                    $name = $ds . $f->getClientOriginalName();
                    $name = str_replace(array(' ', '%', '^', '=', '+', '-', '_', '$', '|', '/', '?', '*', '#', '{', '[', ']', '}', '<', '>', '`', '~', '@', '&', '!', '(', ')'), '', $name);
                    // $name = Auth::user()->id."_" . $name;
                    $f->move($root , $name);
                    $im = new Image();
                    $im->ID_NOTE = $id;
                    $im->url = $name;
                    $im->save();

                }

            }

            return back()->with('alert','Сохранено');


        }else
        {
            return back()->with('alert','Не найдено');
        }
    }
    //
}
