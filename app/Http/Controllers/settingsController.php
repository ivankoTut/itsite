<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;

class settingsController extends Controller
{
    public function view()
    {
        $k=Settings::all();
        return view('settings.view',['c'=>$k]);
    }
    public function save(Request $r)
    {
        //dd($r->all());
        for($i=0; $i<count($r->id);$i++)
        {
            $n= new Settings();
            $n=Settings::find($r->id[$i]);
            if (isset($n))
            {
                $n->key=$r->key[$i];
                $n->name=$r->name[$i];
                $n->save();
            }else
            {
                if( $r->name[$i]=="") continue;
                $n2= new Settings();
                $n2->key=$r->key[$i];
                $n2->name=$r->name[$i];
                $n2->save();
            }
        }
        return back()->with('alert','Сохранено');
    }
    public function delete($id)
    {
        $c= Settings::find($id);
        if(isset($c))
        {
            $c->delete();
        }
        return back()->with('alert','Удалено');
    }
    //
}
