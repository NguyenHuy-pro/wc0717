<?php namespace App\Http\Controllers\home;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index(){
        return view('home.home');
    }

}
