<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class DashboardController extends Controller
{
    //Funciton view user
    public function index() {
        $data = User::all();
        return view('Admin/dashboard/dasboard',['view_user' => $data]);
    }
    //Function create form user 
    public function cre_use_form() {
        return view('Admin/user/create');
    }
}
