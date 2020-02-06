<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use File;
use DB;

class WcController extends Controller {
    public function index(){
        return view('home.index');
    }
}
