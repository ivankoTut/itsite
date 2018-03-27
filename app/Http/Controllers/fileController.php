<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Files;

class fileController extends Controller
{
    //
    public function update(Request $r)
    {
        for($i=0; $i<count($r->id);$i++) {

            $n = Files::find($r->id[$i]);
            if (isset($n)) {
                $n->label = $r->label[$i];
                $n->save();
            }
        }
        return back()->with('alert','сохранено');

    }
    public function delete($id)
    {
        $i=Files::find($id);
        if(isset($i))
        {
            $i->delete();
            return back()->with('alert','Удалено');
        }else
        {
            return back()->with('alert','Ошибка удаления');
        }
    }
}
