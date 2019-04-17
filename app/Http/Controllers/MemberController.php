<?php
namespace  App\Http\Controllers;
use App\Member;
class MemberController extends  Controller
{
    public function   info($id){
       // return $id;

      return  Member::getMember();
        //return view('member/info',['name'=>'stone','age'=>18]);
    }
}
