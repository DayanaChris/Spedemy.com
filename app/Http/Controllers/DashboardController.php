<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


      // tutorial 10- 3:00
      // $user_id = auth()->user()->id;
      // $category = User::find($user_id);
      // return view('dashboard');

      $categorys = Category::orderBy('category_name' )->paginate(10); // paginate by 1 . 1 post per page.

      return view('dashboard')->with('categorys', $categorys);



    }

}
