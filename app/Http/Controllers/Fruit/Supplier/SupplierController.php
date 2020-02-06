<?php namespace App\Http\Controllers\Fruit\Supplier;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SupplierController extends Controller
{

    //get list
    public function getSupplier($nameSupplier = '', $typeFruit = '', $province = '')
    {
        $accessObject = 'supplier';
        $accessSupplier = 'list';
        return view('fruit.supplier.supplier', compact('accessObject', 'accessSupplier', 'typeFruit', 'province'));
    }

    public function getDetail($supplierId = '', $alias = '')
    {
        $accessObject = 'supplier';
        return view('fruit.supplier.supplier.detail', compact('accessObject'));
    }

    # register
    public function getRegister()
    {
        $accessObject = 'supplier';
        $accessSupplier = 'register';
        $typeFruit = '';
        $province = '';
        return view('fruit.supplier.supplier', compact('accessObject', 'accessSupplier', 'typeFruit', 'province'));
    }
}
