<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('ahihi', function() {
    //

    return "ahihi";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('schema/rename', function() {
    //
    Schema::dr;
});

Route::get('query/selectAll', function() {
    //
  	// $data = DB::table('daint')->where('id',3)->get();
  	$data = DB::table('daint')->select('sodienthoai')->orderBy('sodienthoai','DESC')->get();


    echo "<pre>";
    var_dump($data);
    echo "</pre>";
});

Route::get('query/limit', function() {
    //
  	// $data = DB::table('daint')->where('id',3)->get();
  	$data = DB::table('daint')->skip('1')->take('2')->get();
  	
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
});

Route::get('model/selectAll', function() {
    $data = App\Product::all()->toArray();
    // $data = App\Product::all()->toJson();
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
});
// lay theo id
Route::get('model/selectId', function() {
    // $data = App\Product::findOrFail(2)->toArray();
    // $data = App\Product::all()->toJson();
	
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
});
//co where
Route::get('model/where', function() {
    // $data = App\Product::findOrFail(2)->toArray();
	 $data = App\Product::where('id','>','3')->get()->toArray();
	
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
});

Route::get('model/whereRaw', function() {
    // $data = App\Product::findOrFail(2)->toArray();
	 $data = App\Product::whereRaw('id=?',[3])->get()->toArray();
	
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
});

Route::get('model/create', function() {
    $data = [
        'monhoc' =>'ahihi',
        'giatien'=>'123',
        'giangvien'=>'anhTien' 
    ];
    App\Product::create($data);
});

Route::get('relation/one-many', function() {
    $data = App\Product::find(2)->images()->get()->toArray();
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
});


Route::get('form/layout', function() {
    return view('form.layout');
});

Route::post('form/input',['as'=>'send' ,function() {
    return 'ahihii';
}]);

Route::get('form/dangKi', function() {
    return view('form.dangki');
});
// Route::post('form/inputDk',['as'=>'dangKi','dangKi@them']);
Route::post('form/dangKi1',['as'=>'dangKi','uses'=>'dangki@them']);


Route::get('authen/login', ['uses'=>'ThanhVienController@getLogin']);

Route::post('authen/getLogin',['as'=>'postLogin','uses'=>'ThanhVienController@postLogin'] );


//AUTH

// Route::get('au/getRegister',['as'=>'getRegister','uses'=>'']);
// Route::get('au/getRegister',['as'=>'getRegister','uses'=>'auController@getRegister']);

// Route::post('au/postRegister',['as'=>'postRegister','uses'=>'auController@postRegister']);


Route::get('testtt', function() {
    //
    return view('admin.login.login');
});


// Route::get('dangNhap/login',['as'=>'login','uses'=>'Admin\loginController@getLogin']);

// 	Route::post('dangNhap/login',['as'=>'postLogin11','uses'=>'loginController@postLogin']);
	
// 	Route::get('dangNhap/getLogout',['as'=>'getLogout','uses'=>'loginController@getLogout']);


Route::group(['prefix' => 'dangNhap','namespace'=>'Admin'], function() {
    
    Route::get('login',['as'=>'login','uses'=>'loginController@getLogin']);

	Route::post('login',['as'=>'postLogin11','uses'=>'loginController@postLogin']);
	
	Route::get('getLogout',['as'=>'getLogout','uses'=>'loginController@getLogout']);
});

Route::get('admin1',['as'=>'admin1','middleware'=>'login',function() {
    return view('admin.dashboard.main');
}]);


Route::group(['middleware' => 'login'], function() {
    Route::group(['prefix' => 'admin'], function() {
        Route::get('home', function() {
            return view('admin.dashboard.main');
        });
        Route::get('cac', function() {
            return "ahihi";
        });

// CATEGORY
        Route::group(['prefix' => 'category','namespace'=>'Admin'], function() {
            Route::get('add',['as'=>'addCategory','uses'=>'categoryController@getAdd']);
            Route::post('add',['as'=>'postAddCategory','uses'=>'categoryController@postAdd']);
            Route::get('list',['as'=>'listCate','uses'=>'categoryController@list']);
            Route::get('delete/{id}',['as'=>'cateDelete','uses'=>'categoryController@cateDelete'])->where(['id'=>'[0-9]+']);
            
            Route::get('edit/{id}',['as'=>'cateEdit','uses'=>'categoryController@cateEdit'])->where(['id'=>'[0-9]+']);
            Route::post('edit/{id}',['as'=>'cateEditPost','uses'=>'categoryController@cateEditPost'])->where(['id'=>'[0-9]+']);
            
        });
//user
        Route::group(['prefix' => 'user','namespace'=>'Admin'], function() {
            Route::get('list',['as'=>'listUser','uses'=>'userController@getListUser']);
            Route::get('add',['as'=>'getAddUser','uses'=>'userController@getAddUser']);
            Route::post('add',['as'=>'postAddUser','uses'=>'userController@postAddUser']);
    //delete
            Route::get('delete/{id}',['as'=>'deleteUser','uses'=>'userController@deleteUser']);
    // edit
            Route::get('edit/{id}',['as'=>'getEditUser','uses'=>'userController@getEdit']);
        	Route::post('edit/{id}',['as'=>'postEditUser','uses'=>'userController@postEdit']);
        });
    



    });
});

//faker
Route::get('/customers', function(){
    $faker = Faker\Factory::create();
    $limit = 10
    ;
    $customers = [];
    for ($i = 0; $i < $limit; $i++) {
        $customers[$i] = [
            'Họ và tên'     => $faker->name,
            'Email'         => $faker->unique()->email,
            'Số điện thoại' => $faker->phoneNumber,
            'Website'       => $faker->domainName,
            'Tuổi'          => $faker->numberBetween(20,100),
            'Địa chỉ'       => $faker->address
        ];
    }
    return response()->json($customers);
});

Route::get('addProduct',['as'=>'addProduct','uses'=>'TestEvent\porduct@addProduct']);
Route::post('addProduct',['as'=>'addProduct','uses'=>'TestEvent\porduct@addProductPost']);



//test mail
Route::get('testMail',['as'=>'testMail','uses'=>'testGuiMail\UserController@sendEmailReminder']);

Route::get('guiMail/emailCui',['as'=>'emailCui','uses'=>'testGuiMail\mailCUI@showEmailForm']);
Route::post('guiMail/emailCui',['as'=>'emailCui','uses'=>'testGuiMail\mailCUI@sendEmail']);

Route::get('guiMail/emailPro',['as'=>'emailPro','uses'=>'testGuiMail\mailPro@showEmailForm']);
Route::post('guiMail/emailPro',['as'=>'emailPro','uses'=>'testGuiMail\mailPro@sendEmail']);

Route::get('test/testServiceContainer',['as'=>'testServiceContainer','uses'=>'TestController@TestController']);

Route::get('test/testReponsitoryCui',['as'=>'testReponsitory','uses'=>'testReponsitory\koDungReponsitory@TestController']);

Route::get('test/testReponsitoryPro',['as'=>'testReponsitory','uses'=>'testReponsitory\DungReponsitory@TestController']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::resource('/books', 'BookController');

// Route::group(['middleware' => 'auth'], function () {
//     Route::resource('/books', 'BooksController');
// });