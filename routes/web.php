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
   /* return view('welcome');*/
   return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dato', 'HomeController@ActAcad');


/* esto indica que todo lo que este aqui debe de estar autentificado  */
Route::group(['middleware' => ['auth']], function () {
    Route::resource('usuario', 'UsuarioController');
    /* Route::delete('usuario/{id}', 'UsuarioController@destroy'); */
    Route::resource('usuario/roles','admin\UsersRolesController');
/* Rutas a las cuales puede acceder el editor */
    Route::resource('ciclo','edit\CicloController');
    Route::resource('gestion','edit\GestionController');
  	Route::resource('prioridad','edit\PrioridadController');
  	Route::resource('accion','edit\LineaAccionController');
    Route::resource('cuenta','edit\CuentaController');
    Route::resource('ccontable','edit\CcontableController');
    //copiar Ccontable
    Route::get('ccontablec/{id}','edit\CcontableController@copy')->name('ccontable.copy');
    Route::resource('concepto','edit\ConceptoController');
  	Route::resource('seccion','edit\SeccionController');
    Route::resource('area','edit\AreaController');
    Route::resource('extra','edit\ExtraController');
/* aqui estan las rutas de los pdf's   */
    Route::get('/pdfsecciones','pdf\PdfController@pdfsecciones')->name('pdf');
    Route::get('/pdfccontable','pdf\PdfController@pdfccontable')->name('pdfccontable');
    Route::get('/pdfcuenta','pdf\PdfController@pdfcuenta')->name('pdfcuenta');
    Route::get('/pdflaccion','pdf\PdfController@pdflaccion')->name('pdflaccion');
    Route::get('/pdfarea','pdf\PdfController@pdfarea')->name('pdfarea');
    Route::get('/pdfact/{id}','pdf\PdfController@pdfact')->name('pdfact');

/* Rutas a las cuales puede acceder el Proyectista  */
    Route::resource('project','Project\ProyectoController');
    Route::resource('actacad','Project\ActAcadController');
    Route::get('expimp','Project\ActAcadController@expimp')->name('actexpimp');
    Route::put('actexportar', 'Project\ActAcadController@actexportar')->name('actexportar');
    Route::post('actimportar', 'Project\ActAcadController@actimportar')->name('actimportar');


    Route::resource('desgloce','Project\DesgloceController');
    Route::get('desgloce/create/{id}', 'Project\DesgloceController@create')->name('desglosando');
    Route::get('desgloce/expimp/{id}', 'Project\DesgloceController@expimp')->name('expimp');
    Route::get('desgloce/exportar/{id}', 'Project\DesgloceController@exportar')->name('exportar');
    Route::post('desgloce/importar/{id}', 'Project\DesgloceController@importar')->name('importar');

    Route::resource('coment','coment\ComentarioController');

/* Rutas a las cuales puede acceder el Supervisor  */
Route::get('pre','super\ReportesController@prescolar')->name('reportes.pre');
Route::post('presec','super\ReportesController@PrescolarSeccion')->name('reportes.PreSec');

Route::get('Reporte/{id}','super\ReportesController@Reporte')->name('reportes');
Route::post('Reportefiltro','super\ReportesController@ReporteFiltro')->name('reportes.filtro');


Route::put('aprobado/{id}','Project\ActAcadController@Aprobar')->name('reportes.aprobado');
});




