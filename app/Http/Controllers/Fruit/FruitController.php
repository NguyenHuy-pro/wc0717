<?php namespace App\Http\Controllers\fruit;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use File;
use DB;

class FruitController extends Controller
{
    public function index($accessObject = '')
    {
        if ($accessObject == '') {
            $accessObject = 'action';
            return view('fruit.action.action', compact('accessObject'));
        } else {
            return view('fruit.fruit', compact('accessObject'));
        }
    }

    # list fruit
    public function getList($typeFruit = '', $province = '')
    {
        $accessObject = 'list';
        return view('fruit.fruit.fruit', compact('accessObject', 'typeFruit', 'province'));
    }

    public function getDetailFruit($nameFruit = '')
    {
        $accessObject = 'list';
        return view('fruit.fruit.fruit-detail', compact('accessObject', 'nameFruit'));
    }

    public function getAction()
    {
        $accessObject = 'action';
        return view('fruit.action.action', compact('accessObject'));
    }

    public function getSearch($searchKey = '')
    {
        $accessObject = 'search';
        return view('fruit.search', compact('accessObject', 'searchKey'));
    }

    public function postSearch()
    {
        $accessObject = 'search';
        $searchKey = '';
        return view('fruit.search', compact('accessObject', 'searchKey'));
    }
}
