<?php

/*
|--------------------------------------------------------------------------
| NOTAS GENERALES
|--------------------------------------------------------------------------
| Es necesario tener la siguiente línea de código para el correcto funcionamiento de las rutas,
| Una vez importado en la parte superior (está por defecto) ya se tiene acceso a los diferentes métodos en las rutas.
|
|--------------------------------------------------------------------------
| NOTAS view
|--------------------------------------------------------------------------
| No es necesario colocar la ruta o el nombre completo de la vista como: welcome.blade.php
| Cuando usamos la funcion view, laravel sabe automaticamente que las vistan estan en la carpteta resouces/view y que contienen la extensión blade.php
| Por ende solo colocamos el nombre de la vista, en caso de tener subcarpeta si es necesario colocar la ruta de la carpeta y el archivo, se puede hacer 
| con un / o con un . por ejemplo: subcarpeta/mivista o subcarpeta.mivista, para entrar a una carpeta.
|
|--------------------------------------------------------------------------
| NOTAS PROPIEDAD name
|--------------------------------------------------------------------------
| Cada ruta puede tener un nombre, es recomendable hacerlo ya que al momento de accedera una ruta lo aremos por medio del nombre que se le haya asignado
| de esta forma si la ruta quiere cambiar el URL puede hacerlo visualmente pero internamente estara relacionado por medio del name.
| Por ejemplo: Route::view('/contacto', 'contact')->name('nameRouteContact'); Cuando queramos enviar a alguien a esta ruta se necesitara el name no el /contacto
| de la misma forma si cambiamos el /contacto por /nuevarutacontacto todo seguira funcionando igual solo cambiara el nombre visual en el navegador.
|
|
|
*/

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {

//     //Es posible colocar return para hacer pruebas,
//     //Se puede regresar cualquier tipo de dato, por ejemplo: 
//     //return 'Hola soy un string de prueba';
//     //return ['aprendible' => '.com'];

//     return view('welcome');
// });

/**
 * Cuando no necesaitamos hacer logia podemos usar el metodo view en esta caso: 
 * 
 * 
 * Primer parametro: Recibe la URL a la cual va a responder.
 * Segundo parametro: La vista que se quiere mostrar que esta dentro de la carpeta views: ejemplo contact.blade.php = contact.
 * Tercer parametro opcional podemos pasar datos.
 * 
 * NOTA: NOMBRE COMPLETO VISTA, LEE NOTAS VIEW EN LA PARTE DE ARRIBA.
 */
Route::view('/', 'welcome')->name('nameRouteWelcome');

Route::view('/contacto', 'contact')->name('nameRouteContact');

// Route::view('/blog', 'blog')->name('nameRouteBlog');

/**
 * La ruta tipo get devuelve la vista dentro del controlador.
 * 
 * Como primer parametro es la ruta que se mostrara en el navegador
 * El segundo parametro es  la clase del controlador junto al metodo a usar, en este caso es index pero puede ser cualqueira de la clase / controlador indicado
 */
Route::get('/blog', [PostController::class, 'index'] )->name('nameRouteBlog');

Route::view('/about', 'about')->name('nameRouteAbout');
