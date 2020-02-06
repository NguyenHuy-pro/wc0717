<?php namespace App\Http\Controllers\wall;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WallController extends Controller
{

    public function index()
    {
        return view('wall.index');
    }

}
