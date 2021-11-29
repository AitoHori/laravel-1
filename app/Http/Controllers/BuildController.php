<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildController extends Controller
{
    public function index(){
        return"建物です";
    }
        public function room($param)
    {
        $item = [
            'param' => $param
        ];
        return view('room', $item);
    }
}
