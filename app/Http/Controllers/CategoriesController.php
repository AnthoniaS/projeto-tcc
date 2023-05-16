<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Factory;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Request $request){


        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        
        $category = $database->getReference('Categories')->getSnapshot();

        $categories = $category->getValue();

        $arrayCategories = array_keys($categories);
   
  
        return view('categories/index')->with(compact('arrayCategories'));    

        

    }


    public function create (Request $request){
        
return view('categories/create');   
/*         return response()->json(['response' => true]);
 */      }

   
    public function show (Request $request){

      

/*       return view('files/show')->with(compact('aluno'));  
 */    }

    
    public function update(Request $request){

/*         return response()->json(['response' => true]);
 */    }

    public function delete(Request $request){

      
/*       return response()->json(['response' => true]);
 */
    }

    public function addTreino(Request $request){
        $url = $_SERVER['REQUEST_URI'];
        $array = explode("/", $url);
        $tipo = $array[2];

        return view('categories/add')->with(compact('tipo'));   
    }

    public function AdicionaExercicio(Request $request){

        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
       

        $database->getReference('Categories/' . $_POST['tipo'])->set($_POST['exercicios']);

        return response()->json(['response' => true]);

    }

}
