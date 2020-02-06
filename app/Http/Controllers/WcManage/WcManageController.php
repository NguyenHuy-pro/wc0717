<?php namespace App\Http\Controllers\WcManage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WcManageController extends Controller {

	public function getIndex($object=''){
        return view('wc-manage.panel');
    }

    public function getSystem()
    {
        return view('wc-manage.system.index');
    }

    public function getStaff()
    {
        return view('wc-manage.staff.index');
    }
}
