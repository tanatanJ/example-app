<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar = "Hellow world!" ;
    function _construct(){

    }
    function index(){
        return view('home');
    }
    public function store(Request $req){
        $data['myinput'] = $req->input('myinput');
        return view('myrout',$data);
    }

}
