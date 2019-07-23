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


Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function(){

    Route::get('setlocale/{lang}', function ($lang) {

        $referer = Redirect::back()->getTargetUrl(); //URL предыдущей страницы
        $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

        //разбиваем на массив по разделителю
        $segments = explode('/', $parse_url);

        //Если URL (где нажали на переключение языка) содержал корректную метку языка
        if (in_array($segments[1], App\Http\Middleware\LocaleMiddleware::$languages)) {

            unset($segments[1]); //удаляем метку
        }

        //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
        if ($lang != App\Http\Middleware\LocaleMiddleware::$mainLanguage){
            array_splice($segments, 1, 0, $lang);
        }

        //формируем полный URL
        $url = Request::root().implode("/", $segments);

        //если были еще GET-параметры - добавляем их
        if(parse_url($referer, PHP_URL_QUERY)){
            $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
        }
        return redirect($url); //Перенаправляем назад на ту же страницу

    })->name('setlocale');
    Route::get('/', function () {
        return view('site.home_content');
    });
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/portfolio','HomeController@portfolio')->name('portfolio');
    Route::get('/portfolio/{id}','HomeController@portfolioItem')->name('portfolioItem');
    Route::get('/blog','HomeController@blog')->name('Blog');
    Route::get('/team','HomeController@team')->name('Team');
    Route::get('/contact','HomeController@contact')->name('Contact');
    Route::any('/send_email','HomeController@sendEmail')->name('send_email');
    Route::get('/hiring','HomeController@hiring')->name('Hiring');
    Route::get('/services','HomeController@services')->name('Services');
    Route::get('/about_us','HomeController@AboutUs')->name('AboutUs');
});

Auth::routes();


Route::group(['prefix'=>'admin','middleware'=>'admin'],function (){
    Route::get('/', ['uses'=>'AdminController@index','as'=>'admin']);
    Route::resource('portfolio','PortfolioController');
    Route::resource('blog','BlogController');
    Route::resource('team','TeamController');
    Route::resource('contact','ContactController');
    Route::resource('hiring','HiringController');
    Route::resource('work','WorkController');
    Route::resource('about_team','AboutTeamController');
    Route::resource('office','OfficeController');
    Route::resource('about_office','AboutOfficeController');
});