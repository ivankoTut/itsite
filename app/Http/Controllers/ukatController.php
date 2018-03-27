<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UKat;
use Auth;

class ukatController extends Controller
{
    public function view()
    {
        $k=UKat::all();
        return view('ukat.view',['c'=>$k]);
    }
    public function save(Request $r)
    {

        //dd($r->all());

        for($i=0; $i<count($r->id);$i++)
        {

            $n= new UKat();
            $n=UKat::find($r->id[$i]);
            $uid=Auth::user()->id;

            if (isset($n))
            {
                $n->name=$r->name[$i];
                $n->id_user=$uid;
                $n->save();
            }else
            {
                if( $r->name[$i]=="") continue;
                $n2= new UKat();
                $n2->id_user=$uid;
                $n2->name=$r->name[$i];
                $n2->save();
            }

        }
        return back()->with('alert','Сохранено');
    }
    public function delete($id)
    {
        $c= UKat::find($id);
        if(isset($c))
        {
            $c->delete();
        }
        return back()->with('alert','Удалено');
    }
    //
}
