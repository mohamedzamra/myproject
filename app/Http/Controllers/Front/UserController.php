<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
  public function showUserName(){
      return 'mohamedzamra';
  }
  public function getIndex(){
      /*$obj =new \stdClass();
  $obj->name='mohamed';
  $obj->id=25;
  $obj->gender='male';*/
  $date=['mohamed','asem'];

    return view('welcome',compact('date'));
    
  }
}
