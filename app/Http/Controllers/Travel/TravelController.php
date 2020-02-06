<?php namespace App\Http\Controllers\travel;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use File;
use DB;

class TravelController extends Controller {
    public function index(){
        return view('travel.index');
    }

}
