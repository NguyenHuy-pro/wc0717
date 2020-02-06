<?php namespace App\Http\Controllers\Fruit\Knowledge;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class KnowledgeController extends Controller
{

    public function index($typeKnowledge='',$namePost='')
    {
        $accessObject = 'knowledge';
        if($namePost == ''){
            return view('fruit.knowledge.knowledge',compact('accessObject','typeKnowledge','namePost'));
        }else{
            return view('fruit.knowledge.knowledge-detail',compact('accessObject','typeKnowledge','namePost'));
        }
    }

}
