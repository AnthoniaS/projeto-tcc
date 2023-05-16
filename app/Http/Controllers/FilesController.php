<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Factory;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function index(Request $request){

      $url = $_SERVER['REQUEST_URI'];
      $array = explode("/", $url);

      if($array[2] != null){
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        $users = $database->getReference('Users/' . $array[2] )->getSnapshot();

        $aluno = $users->getValue();

        return view('files/create')->with(compact('aluno'));    
        }else{
          return view('files/create');    
        }    

    }


    public function create (Request $request){
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        $novo = [
            'name' => $request->name,
            'date' => $request->date,
            'profission' => $request->profission,
            'weeklyActivity' => $request->weeklyActivity,
            'frequency' => $request->frequency,
            'cardiometabolicCondition' => $request->cardiometabolicCondition,
            'osteoarticularCondition' => $request->osteoarticularCondition,
            'selectMedicine' => $request->selectMedicine,
            'medicines' => $request->medicines,
            'goal' => $request->goal,
            'initialDate' => $request->initialDate,
            'weight' => $request->weight,
            'height' => $request->height,
            'circumAbdom' => $request->circumAbdom,
            'circumHip' => $request->circumHip,
            'circumForearm' => $request->circumForearm,
            'triceps' => $request->triceps,
            'biceps' => $request->biceps,
            'subscapular' => $request->subscapular,
            'middleAxillary' => $request->middleAxillary,
            'suprailiac' => $request->suprailiac,
            'abd' => $request->abd,
            'thigh' => $request->thigh,
            'calf' => $request->calf,
            'testVo2' => $request->testVo2,
            'testLimit' => $request->testLimit,
            'complementaryRemarks' => $request->complementaryRemarks
        ];
        $database->getReference('Files/' . $request->name )->set($novo); 

        return response()->json(['response' => true]);
      }

    public function listFichas (Request $request){

      $factory = (new Factory)
      ->withServiceAccount(__DIR__.'/chave.json')
      ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

      $database = $factory->createDatabase();
      
      $filesDB = $database->getReference('Files')->getSnapshot();

      $files = $filesDB->getValue();

      return view('files/listFichas')->with(compact('files')); 
    }

    public function show (Request $request){

      $url = $_SERVER['REQUEST_URI'];
      $array = explode("/", $url);
      $nome = str_replace('-', ' ', $array[2]);

      $factory = (new Factory)
      ->withServiceAccount(__DIR__.'/chave.json')
      ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

      $database = $factory->createDatabase();
      $users = $database->getReference('Files/' . $nome )->getSnapshot();

      $aluno = $users->getValue();

      return view('files/show')->with(compact('aluno'));  
    }

    public function show2 (Request $request){

      $url = $_SERVER['REQUEST_URI'];
      $array = explode("/", $url);
      $nome = str_replace('-', ' ', $array[2]);

      $factory = (new Factory)
      ->withServiceAccount(__DIR__.'/chave.json')
      ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

      $database = $factory->createDatabase();
      $users = $database->getReference('Files/' . $nome )->getSnapshot();

      $aluno = $users->getValue();

      return view('files/showw')->with(compact('aluno'));  
    }


    public function update(Request $request){

      $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        $novo = [
            'name' => $request->name,
            'date' => $request->date,
            'profission' => $request->profission,
            'weeklyActivity' => $request->weeklyActivity,
            'frequency' => $request->frequency,
            'cardiometabolicCondition' => $request->cardiometabolicCondition,
            'osteoarticularCondition' => $request->osteoarticularCondition,
            'selectMedicine' => $request->selectMedicine,
            'medicines' => $request->medicines,
            'goal' => $request->goal,
            'initialDate' => $request->initialDate,
            'weight' => $request->weight,
            'height' => $request->height,
            'circumAbdom' => $request->circumAbdom,
            'circumHip' => $request->circumHip,
            'circumForearm' => $request->circumForearm,
            'triceps' => $request->triceps,
            'biceps' => $request->biceps,
            'subscapular' => $request->subscapular,
            'middleAxillary' => $request->middleAxillary,
            'suprailiac' => $request->suprailiac,
            'abd' => $request->abd,
            'thigh' => $request->thigh,
            'calf' => $request->calf,
            'testVo2' => $request->testVo2,
            'testLimit' => $request->testLimit,
            'complementaryRemarks' => $request->complementaryRemarks
        ];
        $database->getReference('Files/' . $request->name )->set($novo); 

        return response()->json(['response' => true]);
    }

    public function delete(Request $request){

      $factory = (new Factory)
      ->withServiceAccount(__DIR__.'/chave.json')
      ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

      $database = $factory->createDatabase();
      $database->getReference('Files/' . key($_POST))->remove();

      return response()->json(['response' => true]);

    }

}
