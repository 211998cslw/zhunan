<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
// use App\Member;

class MemberController extends Controller
{
    public function index()
    {
        //$member=new Member();
        //$members=Member::where('id','2')->get();
        //return $members;
        // $op = Member::whereIn('id', [5, 7]);
        //->update(['name' =>'name']);
        //$op = DB::update('update newmember set name=name||"abcd" where id in(5,7)');
        // return $this->success($op);
        return $this->success();

        //return $op;
        //$member->name='Lucy';
        //$member->save();
    }

}