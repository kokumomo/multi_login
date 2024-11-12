<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    public function showComponent(){
        $message = 'メッセージ';
        return view('tests.component-test', compact('message'));
    }
}
