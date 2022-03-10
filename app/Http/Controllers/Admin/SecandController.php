<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
class SecandController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function showString1(){
    return 'Hello mohamed0';
    }
    public function showString2(){
        return 'Hello mohamed2';
    }
    public function showString3(){
            return 'Hello mohamed3';
    }
    public function showString4(){
        return 'Hello mohamed4';
    }

}
