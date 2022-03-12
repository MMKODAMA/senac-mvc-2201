<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/avisos', function(){
    return view('avisos',[  'nome'=> 'Makoto',
                            'mostrar'=>true,
                            'avisos' => [['id' =>1, 'aviso'=>'Mussum Ipsum, cacilds vidis litro abertis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non.'],
                                        ['id' =>2, 'aviso'=>'Mussum Ipsum, cacilds vidis litro abertis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non.'],
                                        ['id' =>3, 'aviso'=>'Mussum Ipsum, cacilds vidis litro abertis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non.']
                                        ]]);
});
/*
Route::get('/produtos',function(){
    return view('produtos',['nome'=>'Makoto',
                            'mostrar'=>true,
                            'produtos'=>[['id'=>1,'img'=>'x.jpg','nome'=>'Monster'],
                                        ['id'=>2,'img'=>'x.jpg','nome'=>'redbull']
                                        ]]);
});
*/
Route::get('/produtos2',function(){
    $vetor = ['produtos'=>\App\Models\Produtos::all()];
    return view('produtos',$vetor);

});