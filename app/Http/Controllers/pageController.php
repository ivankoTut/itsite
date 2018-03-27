<?php

namespace App\Http\Controllers;

use App\Note;
use Illuminate\Http\Request;
use App\Kategory;
use App\Image;
use App\Page;
use Slug;
use App\Files;
class pageController extends Controller
{
    public function index()
    {
        $k = Kategory::all();
        return view('index',['k'=>$k]);

    }

    public function add()
    {
        return view('page.add');
    }

    public function save(Request $r)
    {
        if (isset($r->id)) {
            $p = Page::find($r->id);
            if (isset($p)) {
                $p->label = $r->label;
                if(isset($r->url))
                {
                    $p->url=$r->url;
                }else
                {
                    $p->url=Slug::make($r->label);

                }
                $p->text = $r->text;
                if(isset($r->sort)){
                    $p->sort=$r->sort;
                }
                $p->sort=$r->sort;
                $p->save();
                $d = $r->allFiles();
                $root = $_SERVER['DOCUMENT_ROOT'] . "/upload/files/";
                $ds = date('Ymdhis');
                $id=$p->id;
                if(isset($d['file']))
                {
                    foreach ($d['file'] as $f) {
                        if (!isset($f)) continue;
                        $name = $ds . $f->getClientOriginalName();
                        $name = str_replace(array(' ', '%', '^', '=', '+', '-', '_', '$', '|', '/', '?', '*', '#', '{', '[', ']', '}', '<', '>', '`', '~', '@', '&', '!', '(', ')'), '', $name);
                        // $name = Auth::user()->id."_" . $name;
                        $f->move($root , $name);
                        $im = new Files();
                        $im->id_page = $id;
                        $im->url = $name;
                        $im->save();
                    }
                }
            }
        } else {
            $p = new Page();
            $p->label = $r->label;
            if(isset($r->url))
            {
                $p->url=$r->url;
            }else
            {
                $p->url=Slug::make($r->label);

            }
             if(isset($r->sort)){
                    $p->sort=$r->sort;
                }else
                {
                    $p->sort=500;
                }
            $p->text = $r->text;
            $p->save();

            $d = $r->allFiles();
            $root = $_SERVER['DOCUMENT_ROOT'] . "/upload/files/";
            $ds = date('Ymdhis');
            $id=$p->id;
            if(isset($d['file']))
            {
                foreach ($d['file'] as $f) {
                    if (!isset($f)) continue;
                    $name = $ds . $f->getClientOriginalName();
                    $name = str_replace(array(' ', '%', '^', '=', '+', '-', '_', '$', '|', '/', '?', '*', '#', '{', '[', ']', '}', '<', '>', '`', '~', '@', '&', '!', '(', ')'), '', $name);
                    // $name = Auth::user()->id."_" . $name;
                    $f->move($root , $name);
                    $im = new Files();
                    $im->id_page = $id;
                    $im->url = $name;
                    $im->save();
                }
            }

        }
        return redirect('/page/list')->with('alert', 'Сохранено');
    }

    public function list()
    {
        $p = Page::all();
        return view('page.list', ['p' => $p]);
    }

    public function del($id)
    {
        $p = Page::find($id);
        if (isset($p)) {
            $p->delete();
            return back()->with('alert', 'Удалено');
        }
        return back()->with('alert', 'Ошибка удаления');
    }

    public function edit($id)
    {
        $p = Page::find($id);
        if (isset($p)) {
            return view('page.edit', ['p' => $p]);
        } else {
            return back()->with('alert', 'Не найдена страница');
        }

    }

    public function view($id)
    {
        $p = Page::find($id);
        if (isset($p)) {
            return view('page.view', ['f' => $p]);
        } else {
            return back()->with('alert', 'Не найдено');
        }


    }


    //
}
