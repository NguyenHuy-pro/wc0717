<?php namespace App\Http\Controllers\food;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use File;
use DB;

class FoodController extends Controller {
    public function index(){
        return view('food.food');
    }

}
