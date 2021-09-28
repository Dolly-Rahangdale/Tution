<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tution;

class TutionController extends Controller
{
    public function getform()
    {
        return view('form');
    }

    public function submitform(Request $request)
    {
        $tution = new Tution();
        $tution->full_name = $request->full_name;
        $tution->email = $request->email;
        $tution->save();
        return redirect('table');
    }
    public function gettable()
    {
        $data = Tution::all();
        return view('table',compact('data'));
    }

    public function edittable($id)
    {
        $data = Tution::find($id);
        return view('edit',compact('data'));
    }

    public function updateform(Request $request,$id)
    {
        $tution= Tution::find($id);
        $tution->full_name = $request->full_name;
        $tution->email = $request->email;
        $tution->update();
        return redirect('table');
    }

    public function deleteform(Request $request,$id)
    {
        $tution= Tution::find($id);
        $tution->full_name = $request->full_name;
        $tution->email = $request->email;
        $tution->delete();
        return redirect('table');
    }
    
}

