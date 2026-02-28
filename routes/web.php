<?php

use Illuminate\Support\Facades\Route;
/*

Route::get('login',function (){
         return  "page Login";
           
});

Route::get('/page 1',function (){
         return  "page numero 1";
        
});


Route::get('{n}',function ($n){
         return  "je suis la page .$n. '!'";
        
});


Route::get('contact',function (){
         return  " c'est moi le Contact";
        
});



Route::get('/test/{params}',function ($params){
         return  "Params=".$params;
        
});




Route::get('/testvue/{params}',function ($params){
         return  view('view1', ["params"=>$params]);
        
        
});


Route::view('/testview','welcom', '[params]');

Route::get(
    '/Formation/{formation}/filiere/{filiere}/groupe/{groupe}/stagiaire/{stagiaire} ',function ($formation , $filliere , $group ,$stagiaire ){
        if ($stagiaire === null){
            $stagiaire = date('y');
        }

        return " formation <br>
        filliere: $filliere <br>
        groupe : $groupe <br>
        stagiaire : $stagiaire
        ";
    });


*
tp5//////////////////////////
use Illuminate\Http\Request;

Route::get('/home/ {result?}', function ($result =null ){
return view ("calculatriceview" , compact('result'));
})->name ("home");
   

Route::post('/calculer' , function(Request $request){

    $a=$request->input('a');
    $b=$request->input('b');
    $op=$request->input('op');
  
     $resulta ="";

    switch($op){
        case '+';
        $res=$a+$b;
        break ;

        case '-';
        $res=$a-$b;
        break ;

        case '*';
        $res=$a*$b;
        break ;

        case '/';
        $res=($b != 0 )? $a /$b :' Erreur division par zero' ;
        break ;
    };

return redirect() ->route('home', ['result' => $res]);

});

EXERCICE

Route::get('/home',function(){
    return view ('home');
});

Route::get('/About',function(){
    return view ('About');
});

Route::get('/products', function(){
    $products =[
        ["title"=>"title 1", "price"=>200],
        ["title"=>"title 2", "price"=>250],
        ["title"=>"title 3", "price"=>300],
    ];
    return view ('products' , compact('products'));
});

*/




//*
/*
Route::get('/',function(){
    return view('home');
});
Route::get('/About',function(){
    return view('about');
});



use App\Http\Controllers\EtudiantController;
Route::get('/Etudiant/create', [EtudiantController::class, 'create'])->name('Etudiant.create');
Route::post('/Etudiant', [EtudiantController::class, 'store'])->name('Etudiant.store');



use App\Http\Controllers\ProductController;
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/product/create', [ProductController::class, 'ajouter'])->name('product.ajouter');
Route::post('/create', [ProductController::class, 'store'])->name('product.store');
 


Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/product/create', [ProductController::class, 'ajouter'])->name('product.ajouter');
Route::post('/create', [ProductController::class, 'store'])->name('product.store');


Route::get('/films' , function(){

 $films=DB::table("films")->get();
 dd($films);
});


Route::get('/films{id}' , function(){

$film=DB::table("films")->find($id);
dd($film);
});



Route::get('/stagiaires', [StagiaireController::class, 'index'])->name('stagiaires.index');

Route::get('/stagiaires/create', [StagiaireController::class, 'create'])->name('stagiaires.create');

Route::post('/stagiaires', [StagiaireController::class, 'store'])->name('stagiaires.store');

Route::get('/stagiaires/{id}', [StagiaireController::class, 'show'])->name('stagiaires.show');

Route::get('/stagiaires/{id}/edit', [StagiaireController::class, 'edit'])->name('stagiaires.edit');

Route::put('/stagiaires/{id}', [StagiaireController::class, 'update'])->name('stagiaires.update');

Route::delete('/stagiaires/{id}', [StagiaireController::class, 'destroy'])->name('stagiaires.destroy'); 
*/



use App\Http\Controllers\AnnonceController;

Route::get('/', function () {
    return view('helllo');
});

Route::resource('annonces', AnnonceController::class);
Route::get('/annonces/dashboard', [AnnonceController::class,'dashboard']);