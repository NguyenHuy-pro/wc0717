<?php namespace App\Http\Controllers\Fruit\Advisory;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdvisoryController extends Controller {

    public function getAdvisory($typeKnowledge='',$typeFruit=''){
        $accessObject = 'advisory';
        return view('fruit.advisory.advisory',compact('accessObject','typeKnowledge','typeFruit'));
    }

}
