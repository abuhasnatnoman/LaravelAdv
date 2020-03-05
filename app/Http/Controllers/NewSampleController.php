<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class NewSampleController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function search($search){
        $user = User::find(153);
        $user->delete();
        //$user->update(['name'=>"Fally Beauty Shops"]);
        return $user;
        return User::search($search)->get();
        return "search";
    }
}
