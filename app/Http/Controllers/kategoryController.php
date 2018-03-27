<?php

namespace App\Http\Controllers;

use App\Kategory;
use Illuminate\Http\Request;

class kategoryController extends Controller
{
    public function view()
    {
        $k=Kategory::all();
        return view('kat.view',['c'=>$k]);
    }
    public function save(Request $r)
    {

        //dd($r->all());

        for($i=0; $i<count($r->id);$i++)
        {

            $n= new Kategory();
            $n=Kategory::find($r->id[$i]);
            if (isset($n))
            {
                $n->key=$r->key[$i];
                $n->name=$r->name[$i];
                $n->save();
            }else
            {
                if( $r->name[$i]=="") continue;
                $n2= new Kategory();
                $n2->key=$r->key[$i];
                $n2->name=$r->name[$i];
                $n2->save();
            }

        }
        return back()->with('alert','Сохранено');
    }
    public function delete($id)
    {
        $c= Kategory::find($id);
        if(isset($c))
        {
            $c->delete();
        }
        return back()->with('alert','Удалено');
    }
    //
}
