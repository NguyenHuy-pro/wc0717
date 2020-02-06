<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#===============================================================================================================
#------------- ------------ ----------- ------------ BACK END ------------- ------------ ----------- -----------
#===============================================================================================================
Route::group(['prefix' => 'wc-manage'], function () {
    # ========== ========== ========== FRUIT ========== ========== ==========
    Route::group(['prefix' => 'fruit'], function () {

    });

    # ========== ========== ========== FOOD ========== ========== ==========
    Route::group(['prefix' => 'food'], function () {

    });

    # ========== ========== ========== TRAVEL ========== ========== ==========
    Route::group(['prefix' => 'travel'], function () {

    });

    # ========== ========== ========== WALL ========== ========== ==========
    Route::group(['prefix' => 'wall'], function () {

    });

    # ========== ========== ========== STAFF ========== ========== ==========
    Route::group(['prefix' => 'staff'], function () {

        #----------- ---------- department ---------- -----------
        Route::group(['prefix' => 'department'], function () {
            /*# list
            Route::get('list', ['as' => 'wc.m.staff.department.list.get', 'uses' => 'WcManage\Staff\Department\DepartmentController@getList']);
            # add new
            Route::get('add', ['as' => 'wc.m.staff.department.add.get', 'uses' => 'WcManage\Staff\Department\DepartmentController@getAdd']);
            Route::post('add', ['as' => 'wc.m.staff.department.add.post', 'uses' => 'WcManage\Staff\Department\DepartmentController@postAdd']);
            # edit
            Route::get('edit/{departmentId?}', ['as' => 'wc.m.staff.department.edit.get', 'uses' => 'WcManage\Staff\Department\DepartmentController@getEdit']);
            Route::post('edit/{departmentId?}', ['as' => 'wc.m.staff.department.edit.post', 'uses' => 'WcManage\Staff\Department\DepartmentController@postEdit']);

            # update status
            Route::get('status/{departmentId?}/{status?}', ['as' => 'wc.m.staff.department.status.update', 'uses' => 'WcManage\Staff\Department\DepartmentController@updateStatus']);
            # delete
            Route::get('delete/{departmentId?}', ['as' => 'wc.m.staff.department.delete', 'uses' => 'WcManage\Staff\Department\DepartmentController@delete']);*/
        });

        Route::get('/', ['as' => 'wc.manage.staff', 'uses' => 'WcManage\WcManageController@getStaff']);
    });
    # ========== ========== ========== SYSTEM ========== ========== ==========
    Route::group(['prefix' => 'system'], function () {

        #----------- ---------- country ---------- -----------
        Route::group(['prefix' => 'country'], function () {
           /* # list
            Route::get('list', ['as' => 'wc.m.system.country.list.get', 'uses' => 'WcManage\System\Country\CountryController@getList']);
            # add new
            Route::get('add', ['as' => 'wc.m.system.country.add.get', 'uses' => 'WcManage\System\Country\CountryController@getAdd']);
            Route::post('add', ['as' => 'wc.m.system.country.add.post', 'uses' => 'WcManage\System\Country\CountryController@postAdd']);
            # edit
            Route::get('edit/{countryId?}', ['as' => 'wc.m.system.country.edit.get', 'uses' => 'WcManage\System\Country\CountryController@getEdit']);
            Route::post('edit/{countryId?}', ['as' => 'wc.m.system.country.edit.post', 'uses' => 'WcManage\System\Country\CountryController@postEdit']);

            # update status
            Route::get('status/{countryId?}/{status?}', ['as' => 'wc.m.system.country.status.update', 'uses' => 'WcManage\System\Country\CountryController@statusUpdate']);
            # delete
            Route::get('delete/{countryId?}', ['as' => 'wc.m.system.country.delete', 'uses' => 'WcManage\System\Country\CountryController@getDelete']);*/
        });

        #----------- ---------- province type ----------- ----------
        Route::group(['prefix' => 'province-type'], function () {

        });

        #----------- ---------- province ----------- ----------
        Route::group(['prefix' => 'province'], function () {

        });

        #----------- ---------- district ----------- ----------
        Route::group(['prefix' => 'district'], function () {

        });

        Route::get('/', ['as' => 'wc.manage.system', 'uses' => 'WcManage\WcManageController@getSystem']);
    });

    Route::get('/{object?}', ['as' => 'wc.m.panel', 'uses' => 'WcManage\WcManageController@getIndex']);
});

#===============================================================================================================
#------------- ------------ ----------- ------------ FRONT END ------------- ------------ ----------- -----------
#===============================================================================================================

#========== ========== ========== REGISTER ========== ========== ==========
Route::group(['prefix' => 'register'], function () {
    Route::get('register/{pageLog?}', ['as' => 'wc.register.get', 'uses' => 'Auth\AuthController@getRegister']);
    Route::post('register/{pageLog?}', ['as' => 'wc.register.post', 'uses' => 'Auth\AuthController@postRegister']);
});

#========== ========== ========== LOGIN ========== ========== ==========
Route::group(['prefix' => 'login'], function () {
    Route::get('login/{pageLog?}', ['as' => 'wc.login.get', 'uses' => 'Auth\AuthController@getLogin']);
    Route::post('login/{pageLog?}', ['as' => 'wc.login.post', 'uses' => 'Auth\AuthController@postLogin']);
    Route::get('forget/{pageLog?}', ['as' => 'wc.login.forget.get', 'uses' => 'Auth\AuthController@getForgetPass']);
    Route::post('forget/{pageLog?}', ['as' => 'wc.login.forget.post', 'uses' => 'Auth\AuthController@postForgetPass']);
});

#========== ========== ========== FRUIT ========== ========== ==========
Route::group(['prefix' => 'fruit'], function () {
    # ----------- article -----------
    Route::group(['prefix' => 'knowledge'], function () {
        Route::get('/{typeKnowledge?}/{namePost?}', ['as' => 'wc.fruit.knowledge.get', 'uses' => 'Fruit\Knowledge\KnowledgeController@index']);
    });

    Route::group(['prefix' => 'article'], function () {
        Route::get('/', ['as' => 'wc.fruit.article.posts.get', 'uses' => 'Fruit\Article\ArticleController@getPosts']);
    });
    #----------- supplier -----------
    Route::group(['prefix' => 'supplier'], function () {
        # list supplier
        Route::get('list/{typeFruit?}/{province?}', ['as' => 'wc.fruit.supplier.get', 'uses' => 'Fruit\Supplier\SupplierController@getSupplier']);

        #register
        Route::get('register', ['as' => 'wc.fruit.supplier.register.get', 'uses' => 'Fruit\Supplier\SupplierController@getRegister']);

        #detail supplier
        Route::get('/{supplierId?}/{alias?}', ['as' => 'wc.fruit.supplier.detail.get', 'uses' => 'Fruit\Supplier\SupplierController@getDetail']);
    });

    # ---------- advisory -----------
    Route::group(['prefix' => 'advisory'], function () {
        Route::get('/{typeKnowledge?}/{typeFruit?}', ['as' => 'wc.fruit.advisory.get', 'uses' => 'Fruit\Advisory\AdvisoryController@getAdvisory']);
    });

    # ---------- search ------------
    Route::group(['prefix' => 'search'], function () {
        Route::get('/{searchKey?}', ['as' => 'wc.fruit.search', 'uses' => 'Fruit\FruitController@getSearch']);
        Route::post('/', ['as' => 'wc.fruit.search.post', 'uses' => 'Fruit\FruitController@postSearch']);
    });

    # list fruit
    Route::get('list/{typeFruit?}/{province?}', ['as' => 'wc.fruit.list.get', 'uses' => 'Fruit\FruitController@getList']);

    #detail fruit
    Route::get('detail/{nameFruit?}', ['as' => 'wc.fruit.fruit.detail.get', 'uses' => 'Fruit\FruitController@getDetailFruit']);

    Route::group(['prefix' => 'action'], function () {
        Route::get('/', ['as' => 'wc.fruit.action.get', 'uses' => 'Fruit\FruitController@getAction']);
    });
    Route::get('/{accessObject?}', ['as' => 'wc.fruit.get', 'uses' => 'Fruit\FruitController@index']);
});

#========== ========== ========== TRAVEL ========== ========== ==========
Route::group(['prefix' => 'travel'], function () {
    Route::get('/{name?}', ['as' => 'wc.travel', 'uses' => 'travel\TravelController@index']);
});

#========== ========== ========== FOOD ========== ========== ==========
Route::group(['prefix' => 'food'], function () {
    Route::get('/{name?}', ['as' => 'wc.food', 'uses' => 'food\FoodController@index']);
});

#========== ========== ========== WALL ========== ========== ==========
Route::group(['prefix' => 'wall'], function () {
    Route::get('/{name?}', ['as' => 'wc.wall', 'uses' => 'wall\WallController@index']);
});


Route::get('/{name?}', ['as' => 'wc.home', 'uses' => 'WcController@index']);

// develop later
#Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
