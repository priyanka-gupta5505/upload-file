Route::get('/', function () {
    return view('welcome');
});
Route:: post('upload','Users@index');
Route:: view('form','userform');
