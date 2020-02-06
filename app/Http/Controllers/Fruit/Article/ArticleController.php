<?php namespace App\Http\Controllers\Fruit\Article;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ArticleController extends Controller {

    public function getArticle($typeKnowledge='',$namePost=''){
        $accessObject = 'knowledge';
        if($namePost == ''){
            return view('fruit.knowledge.knowledge',compact('accessObject','typeKnowledge','namePost'));
        }else{
            return view('fruit.knowledge.detail',compact('accessObject','typeKnowledge','namePost'));
        }
    }

    public function getPosts($typeFruit=null,$fruit=null){
        $accessObject = 'posts';
        return view('fruit.article.article',compact('accessObject','typeFruit','fruit'));
    }
}
