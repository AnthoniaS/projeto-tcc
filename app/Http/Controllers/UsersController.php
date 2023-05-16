<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Factory;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        
        $users = $database->getReference('Users')->getSnapshot();

        $usr = $users->getValue();
  

        return view('users/index')->with(compact('usr'));    
    }
      public function create(Request $request){
       
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        $novo = [
            'name' => $request->name,
            'nascimento' => $request->date,
            'contact' => $request->contact
        ];
        $database->getReference('Users/' . $request->name)->set($novo); 

        return response()->json(['response' => true]);

    }
    public function delete(Request $request){
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        $database->getReference('Users/' . key($_POST))->remove();
 
        return response()->json(['response' => true]);

    }

    public function edit (Request $request){
        $url = $_SERVER['REQUEST_URI'];
        $array = explode("/", $url);
      
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        $users = $database->getReference('Users/' . $array[3] )->getSnapshot();

        $aluno = $users->getValue();

        return view('users/edit')->with(compact('aluno'));    
        
    }

    public function update (Request $request){

        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        $novo = [
            'name' => $request->name,
            'nascimento' => $request->date,
            'contact' => $request->contact
        ];
        $database->getReference('Users/' . $request->name)->set($novo); 

        return response()->json(['response' => true]);
        
    }


}
