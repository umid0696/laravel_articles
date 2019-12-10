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

Route::get('/articles', 'ArticlesController@showArticles');

/*


Route::get('/articles/{id}', 'ArticlesController@showArticle');


Route::get('/test', 'ArticlesController@show1');
*/
/*
Route::get('/insert-json-file-to-database-table', function(){
	$json = file_get_contents(storage_path('demo.json'));
	$objs = json_decode($json,true);
	foreach($objs as $obj){
		foreach ($obj as $key => $value){
			$insertArr[str_slug($key,'_')] = $value;
		}
		DB::table('examples')->insert($insertArr);
	}
	dd("Finished adding data in examples table");
});
*/

/*
Route::get('/articles', function () {
    return view('/pages/articles');
});
*/
/*
Route::get('/test', function(){
    return view('/pages/test');
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
