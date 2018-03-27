<?php

namespace App\Http\Controllers;

use App\UKat;
use Illuminate\Http\Request;
use App\CRM;
use Auth;

class crmController extends Controller
{
    public function addform()
    {
        $kat=UKat::all();
        return view('crm.addform',['ukat'=>$kat]);

    }
    public function view()
    {
        $k=CRM::where('user','=',Auth::user()->id)->get();
        $kat=UKat::all();
        return view('crm.view',['c'=>$k,'ukat'=>$kat]);
    }
    public function date($id)
    {
        $kat=UKat::all();
        $k=CRM::where('date','like',"$id%")->get();
        return view('crm.view',['c'=>$k,'d'=>$id,'ukat'=>$kat]);
    }
    public function save(Request $r)
    {

      // dd($r->all());

        for($i=0; $i<count($r->kat);$i++)
        {
            if(isset($r->id[$i]))
            {
                $n=CRM::find($r->id[$i]);
                if (isset($n))
                {
                   // dd($r->all());

                    $n->name=$r->name[$i];
                    $n->kat=$r->kat[$i];
                    $n->date = $r->date;
                    $n->status = $r->status[$i];
                    $n->time = $r->time[$i];
                    $n->price = $r->price[$i];
                    $n->user=Auth::user()->id;
                    $n->save();
                }

            }else
            {
                if( $r->name[$i]=="") continue;
                $n2= new CRM();
                $user=Auth::user()->id;
                if(isset($user))
                {
                    $n2->user=Auth::user()->id;
                }

                $n2->name=$r->name[$i];
                $n2->kat=$r->kat[$i];
                $n2->status = $r->status[$i];
                $n2->date = $r->date;
                $n2->time = $r->time[$i];
                $n2->price = $r->price[$i];
                $n2->user=Auth::user()->id;
                $n2->save();

            }

        }
        return back()->with('alert','Сохранено');
    }
    public function delete($id)
    {
        $c= CRM::find($id);
        if(isset($c))
        {
            $c->delete();
        }
        return back()->with('alert','Удалено');
    }
    //
}
