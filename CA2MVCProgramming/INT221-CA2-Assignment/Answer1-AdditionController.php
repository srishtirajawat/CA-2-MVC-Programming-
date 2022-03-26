<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;

class AdditionController extends Controller
{
        function addnum(Request $req)
        {
            $numberOne = $req->input('numberOne');
            $numberTwo = $req->input('numberTwo');
            $addition = $numberOne + $numberTwo;
            dd($addition);
            return redirect('/')->with('addition', $addition)->withInput();

        }   
}
