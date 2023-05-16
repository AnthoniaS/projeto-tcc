<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Factory;

use Illuminate\Http\Request;

class TrainingSheetsController extends Controller
{
    public function index()
    {
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        
        $trainingBD = $database->getReference('Trainings')->getSnapshot();

        $treinos = $trainingBD->getValue();

        return view('trainingSheets/index')->with(compact('treinos'));    
    }

    public function show()
    {
        $url = $_SERVER['REQUEST_URI'];
        $array = explode("/", $url);

        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        $treinos = $database->getReference('Training/' . $array[2] )->getSnapshot();

        $treino = $treinos->getValue();

        $dias = '';
        $exercicios = [];

        if(isset($treino['peito'])){
            $exercicios['peito'] = $treino['peito'];
        }
        if(isset($treino['triceps'])){
            $exercicios['triceps'] = $treino['triceps'];
        }
        if(isset($treino['biceps'])){
            $exercicios['biceps'] = $treino['biceps'];
        }

        if(isset($treino['segunda'])){
            $dias = $dias.'Segunda ';
        }
        if(isset($treino['terca'])){
            $dias = $dias.' Terça ';
        }
        if(isset($treino['quarta'])){
            $dias = $dias.' Quarta ';
        }
        if(isset($treino['quinta'])){
            $dias = $dias.' Quinta';
        }
        if(isset($treino['sexta'])){
            $dias = $dias.' Sexta';
        } 
       
        return view('trainingSheets/show')->with(compact('treino','exercicios','dias'));   
    }

    public function create(Request $request )
    {
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        $novo = [
            'name' => $_POST['name'],
            'dateInitial' => $_POST['dateInitial'],
            'objetivo' => $_POST['objetivo']
        ];
        if(isset($_POST['segunda'])){
            $novo['segunda'] = $_POST['segunda'];
        }
        if(isset($_POST['terca'])){
            $novo['terca'] = $_POST['terca'];
        }
        if(isset($_POST['quarta'])){
            $novo['quarta'] = $_POST['quarta'];
        }
        if(isset($_POST['quinta'])){
            $novo['quinta'] = $_POST['quinta'];
        }
        if(isset($_POST['sexta'])){
            $novo['sexta'] = $_POST['sexta'];
        }
        if(isset($_POST['peito'])){
            $novo['peito'] = $_POST['peito'];            
        }
        if(isset($_POST['triceps'])){
            $novo['triceps'] = $_POST['triceps'];            
        }
        if(isset($_POST['biceps'])){
            $novo['biceps'] = $_POST['biceps'];
        }
        if(isset($_POST['ombro'])){
            $novo['ombro'] = $_POST['ombro'];
        }
        if(isset($_POST['costas'])){
            $novo['costas'] = $_POST['costas'];
        }
        if(isset($_POST['abdomen'])){
            $novo['abdomen'] = $_POST['abdomen'];
        }
        if(isset($_POST['panturrilha'])){
            $novo['panturrilha'] = $_POST['panturrilha'];
        }
        if(isset($_POST['gluteo'])){
            $novo['gluteo'] = $_POST['gluteo'];
        }
        $database->getReference('Training/' . $_POST['name'])->set($novo);

        if(isset($_POST['peito'])){
            $linha1 =[
                'numExercPeito' => $_POST['addNPeito'][0],
                'addExerciciosPeito' => $_POST['addExerciciosPeito'][0],
                'addRepetsPeito' => $_POST['addRepetsPeito'][0],
                'addRepetsPeito1' => $_POST['addRepetsPeito1'][0],
                'addRepetsPeito2' => $_POST['addRepetsPeito2'][0],
                'addRepetsPeito3' => $_POST['addRepetsPeito3'][0],
                'addKgPeito' => $_POST['addKgPeito'][0],
                'addKgPeito1' => $_POST['addKgPeito1'][0],
                'addKgPeito2' => $_POST['addKgPeito2'][0],
                'addKgPeito3' => $_POST['addKgPeito3'][0],
                'ObsPeito' => $_POST['ObsPeito'][0],
                'descPeito' => $_POST['descPeito'][0]
    
            ];
            $database->getReference('Training/' . $_POST['name']. '/peito/linha1')->set($linha1);
            $linha2 =[
                'numExercPeito' => $_POST['addNPeito'][1],
                'addExerciciosPeito' => $_POST['addExerciciosPeito'][1],
                'addRepetsPeito' => $_POST['addRepetsPeito'][1],
                'addRepetsPeito1' => $_POST['addRepetsPeito1'][1],
                'addRepetsPeito2' => $_POST['addRepetsPeito2'][1],
                'addRepetsPeito3' => $_POST['addRepetsPeito3'][1],
                'addKgPeito' => $_POST['addKgPeito'][1],
                'addKgPeito1' => $_POST['addKgPeito1'][1],
                'addKgPeito2' => $_POST['addKgPeito2'][1],
                'addKgPeito3' => $_POST['addKgPeito3'][1],
                'ObsPeito' => $_POST['ObsPeito'][1],
                'descPeito' => $_POST['descPeito'][1]
    
            ];
            $database->getReference('Training/' . $_POST['name']. '/peito/linha2')->set($linha2);
            
            $linha3 =[
                'numExercPeito' => $_POST['addNPeito'][2],
                'addExerciciosPeito' => $_POST['addExerciciosPeito'][2],
                'addRepetsPeito' => $_POST['addRepetsPeito'][2],
                'addRepetsPeito1' => $_POST['addRepetsPeito1'][2],
                'addRepetsPeito2' => $_POST['addRepetsPeito2'][2],
                'addRepetsPeito3' => $_POST['addRepetsPeito3'][2],
                'addKgPeito' => $_POST['addKgPeito'][2],
                'addKgPeito1' => $_POST['addKgPeito1'][2],
                'addKgPeito2' => $_POST['addKgPeito2'][2],
                'addKgPeito3' => $_POST['addKgPeito3'][2],
                'ObsPeito' => $_POST['ObsPeito'][2],
                'descPeito' => $_POST['descPeito'][2]
    
            ];
            $database->getReference('Training/' . $_POST['name']. '/peito/linha3')->set($linha3);
            
            $linha4 =[
                'numExercPeito' => $_POST['addNPeito'][3],
                'addExerciciosPeito' => $_POST['addExerciciosPeito'][3],
                'addRepetsPeito' => $_POST['addRepetsPeito'][3],
                'addRepetsPeito1' => $_POST['addRepetsPeito1'][3],
                'addRepetsPeito2' => $_POST['addRepetsPeito2'][3],
                'addRepetsPeito3' => $_POST['addRepetsPeito3'][3],
                'addKgPeito' => $_POST['addKgPeito'][3],
                'addKgPeito1' => $_POST['addKgPeito1'][3],
                'addKgPeito2' => $_POST['addKgPeito2'][3],
                'addKgPeito3' => $_POST['addKgPeito3'][3],
                'ObsPeito' => $_POST['ObsPeito'][3],
                'descPeito' => $_POST['descPeito'][3]
    
            ];
            $database->getReference('Training/' . $_POST['name']. '/peito/linha4')->set($linha4);
        }

        if(isset($_POST['triceps'])){
            $linha1 =[
                'numExercTriceps' => $_POST['addNTriceps'][0],
                'addExerciciosTriceps' => $_POST['addExerciciosTriceps'][0],
                'addRepetsTriceps' => $_POST['addRepetsTriceps'][0],
                'addRepetsTriceps1' => $_POST['addRepetsTriceps1'][0],
                'addRepetsTriceps2' => $_POST['addRepetsTriceps2'][0],
                'addRepetsTriceps3' => $_POST['addRepetsTriceps3'][0],
                'addKgTriceps' => $_POST['addKgTriceps'][0],
                'addKgTriceps1' => $_POST['addKgTriceps1'][0],
                'addKgTriceps2' => $_POST['addKgTriceps2'][0],
                'addKgTriceps3' => $_POST['addKgTriceps3'][0],
                'ObsTriceps' => $_POST['ObsTriceps'][0],
                'descTriceps' => $_POST['descTriceps'][0]
    
            ];
            $database->getReference('Training/' . $_POST['name']. '/triceps/linha1')->set($linha1);
            $linha2 =[
                'numExercTriceps' => $_POST['addNTriceps'][1],
                'addExerciciosTriceps' => $_POST['addExerciciosTriceps'][1],
                'addRepetsTriceps' => $_POST['addRepetsTriceps'][1],
                'addRepetsTriceps1' => $_POST['addRepetsTriceps1'][1],
                'addRepetsTriceps2' => $_POST['addRepetsTriceps2'][1],
                'addRepetsTriceps3' => $_POST['addRepetsTriceps3'][1],
                'addKgTriceps' => $_POST['addKgTriceps'][1],
                'addKgTriceps1' => $_POST['addKgTriceps1'][1],
                'addKgTriceps2' => $_POST['addKgTriceps2'][1],
                'addKgTriceps3' => $_POST['addKgTriceps3'][1],
                'ObsTriceps' => $_POST['ObsTriceps'][1],
                'descTriceps' => $_POST['descTriceps'][1]
    
            ];
            $database->getReference('Training/' . $_POST['name']. '/triceps/linha2')->set($linha2);
            
            $linha3 =[
                'numExercTriceps' => $_POST['addNTriceps'][2],
                'addExerciciosTriceps' => $_POST['addExerciciosTriceps'][2],
                'addRepetsTriceps' => $_POST['addRepetsTriceps'][2],
                'addRepetsTriceps1' => $_POST['addRepetsTriceps1'][2],
                'addRepetsTriceps2' => $_POST['addRepetsTriceps2'][2],
                'addRepetsTriceps3' => $_POST['addRepetsTriceps3'][2],
                'addKgTriceps' => $_POST['addKgTriceps'][2],
                'addKgTriceps1' => $_POST['addKgTriceps1'][2],
                'addKgTriceps2' => $_POST['addKgTriceps2'][2],
                'addKgTriceps3' => $_POST['addKgTriceps3'][2],
                'ObsTriceps' => $_POST['ObsTriceps'][2],
                'descTriceps' => $_POST['descTriceps'][2]
    
            ];
            $database->getReference('Training/' . $_POST['name']. '/triceps/linha3')->set($linha3);
            
            $linha4 =[
                'numExercTriceps' => $_POST['addNTriceps'][3],
                'addExerciciosTriceps' => $_POST['addExerciciosTriceps'][3],
                'addRepetsTriceps' => $_POST['addRepetsTriceps'][3],
                'addRepetsTriceps1' => $_POST['addRepetsTriceps1'][3],
                'addRepetsTriceps2' => $_POST['addRepetsTriceps2'][3],
                'addRepetsTriceps3' => $_POST['addRepetsTriceps3'][3],
                'addKgTriceps' => $_POST['addKgTriceps'][3],
                'addKgTriceps1' => $_POST['addKgTriceps1'][3],
                'addKgTriceps2' => $_POST['addKgTriceps2'][3],
                'addKgTriceps3' => $_POST['addKgTriceps3'][3],
                'ObsTriceps' => $_POST['ObsTriceps'][3],
                'descTriceps' => $_POST['descTriceps'][3]
    
            ];
            $database->getReference('Training/' . $_POST['name']. '/triceps/linha4')->set($linha4);
        }

        if(isset($_POST['biceps'])){
            $linha1 =[
                'numExercBiceps' => $_POST['addNBiceps'][0],
                'addExerciciosBiceps' => $_POST['addExerciciosBiceps'][0],
                'addRepetsBiceps' => $_POST['addRepetsBiceps'][0],
                'addRepetsBiceps1' => $_POST['addRepetsBiceps1'][0],
                'addRepetsBiceps2' => $_POST['addRepetsBiceps2'][0],
                'addRepetsBiceps3' => $_POST['addRepetsBiceps3'][0],
                'addKgBiceps' => $_POST['addKgBiceps'][0],
                'addKgBiceps1' => $_POST['addKgBiceps1'][0],
                'addKgBiceps2' => $_POST['addKgBiceps2'][0],
                'addKgBiceps3' => $_POST['addKgBiceps3'][0],
                'ObsBiceps' => $_POST['ObsBiceps'][0],
                'descBiceps' => $_POST['descBiceps'][0]
    
            ];
            $database->getReference('Training/' . $_POST['name']. '/biceps/linha1')->set($linha1);
            $linha2 =[
                'numExercBiceps' => $_POST['addNBiceps'][1],
                'addExerciciosBiceps' => $_POST['addExerciciosBiceps'][1],
                'addRepetsBiceps' => $_POST['addRepetsBiceps'][1],
                'addRepetsBiceps1' => $_POST['addRepetsBiceps1'][1],
                'addRepetsBiceps2' => $_POST['addRepetsBiceps2'][1],
                'addRepetsBiceps3' => $_POST['addRepetsBiceps3'][1],
                'addKgBiceps' => $_POST['addKgBiceps'][1],
                'addKgBiceps1' => $_POST['addKgBiceps1'][1],
                'addKgBiceps2' => $_POST['addKgBiceps2'][1],
                'addKgBiceps3' => $_POST['addKgBiceps3'][1],
                'ObsBiceps' => $_POST['ObsBiceps'][1],
                'descBiceps' => $_POST['descBiceps'][1]
    
            ];
            $database->getReference('Training/' . $_POST['name']. '/biceps/linha2')->set($linha2);
            
            $linha3 =[
                'numExercBiceps' => $_POST['addNBiceps'][2],
                'addExerciciosBiceps' => $_POST['addExerciciosBiceps'][2],
                'addRepetsBiceps' => $_POST['addRepetsBiceps'][2],
                'addRepetsBiceps1' => $_POST['addRepetsBiceps1'][2],
                'addRepetsBiceps2' => $_POST['addRepetsBiceps2'][2],
                'addRepetsBiceps3' => $_POST['addRepetsBiceps3'][2],
                'addKgBiceps' => $_POST['addKgBiceps'][2],
                'addKgBiceps1' => $_POST['addKgBiceps1'][2],
                'addKgBiceps2' => $_POST['addKgBiceps2'][2],
                'addKgBiceps3' => $_POST['addKgBiceps3'][2],
                'ObsBiceps' => $_POST['ObsBiceps'][2],
                'descBiceps' => $_POST['descBiceps'][2]
    
            ];
            $database->getReference('Training/' . $_POST['name']. '/biceps/linha3')->set($linha3);
            
            $linha4 =[
                'numExercBiceps' => $_POST['addNBiceps'][3],
                'addExerciciosBiceps' => $_POST['addExerciciosBiceps'][3],
                'addRepetsBiceps' => $_POST['addRepetsBiceps'][3],
                'addRepetsBiceps1' => $_POST['addRepetsBiceps1'][3],
                'addRepetsBiceps2' => $_POST['addRepetsBiceps2'][3],
                'addRepetsBiceps3' => $_POST['addRepetsBiceps3'][3],
                'addKgBiceps' => $_POST['addKgBiceps'][3],
                'addKgBiceps1' => $_POST['addKgBiceps1'][3],
                'addKgBiceps2' => $_POST['addKgBiceps2'][3],
                'addKgBiceps3' => $_POST['addKgBiceps3'][3],
                'ObsBiceps' => $_POST['ObsBiceps'][3],
                'descBiceps' => $_POST['descBiceps'][3]
    
            ];
            $database->getReference('Training/' . $_POST['name']. '/biceps/linha4')->set($linha4);
        }
       

        return response()->json(['response' => true]);
    }

    public function edit(Request $request){

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
    }
    public function delete(Request $request){
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        $database->getReference('Training/' . key($_POST))->remove();
 
        return response()->json(['response' => true]);

    }

    public function trainingDias (Request $request){
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        
        $trainingBD = $database->getReference('Training')->getSnapshot();

        $treinos = $trainingBD->getValue();

        return view('trainingSheets/dias')->with(compact('treinos'));

    }

    public function addteste (Request $request){

        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        $novo = [
            'name' => $_POST['name'],
            'dateInitial' => $_POST['dateInitial'],
            'objetivo' => $_POST['objetivo']
        ];

        if(isset($_POST['title'])){
            $novo['title'] = $_POST['title'];
        }
        if(isset($_POST['dia1'])){
            $novo['dia1'] = $_POST['dia1'];
            $novo['exercdia1'] = $_POST['exercdia1'];
        }
        if(isset($_POST['dia2'])){
            $novo['dia2'] = $_POST['dia2'];
            $novo['exercdia2'] = $_POST['exercdia2'];
        }
        if(isset($_POST['dia3'])){
            $novo['dia3'] = $_POST['dia3'];
            $novo['exercdia3'] = $_POST['exercdia3'];
        }
        if(isset($_POST['dia4'])){
            $novo['dia4'] = $_POST['dia4'];
            $novo['exercdia4'] = $_POST['exercdia4'];
        }
        if(isset($_POST['dia5'])){
            $novo['dia5'] = $_POST['dia5'];
            $novo['exercdia5'] = $_POST['exercdia5'];
        }

        $database->getReference('Trainings/' . $_POST['name'])->set($novo);


        return response()->json(['response' => true]);
    }

    public function criatreino (Request $request) {
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        
        $trainingBD = $database->getReference('Training')->getSnapshot();

        $treinos = $trainingBD->getValue();
        $categories = $database->getReference('Categories')->getSnapshot();
        $category = $categories->getValue();

/* foreach ($treinos as $trein){
    foreach ($trein as $tr){
        dd($tr);
    }
} */


/* foreach($treinos['exemplo3'] as $exemplos){
    foreach($exemplos['exercdia1'] as $exerc){
        foreach ($category as $chave => $dados) {
dd($chave, $dados);
if($chave == $exerc)


            $arr_cars[] = $chave;
         }
        foreach ($category as $ttt){
            if($category === 'peito'){
                dd($ttt);
            }
            dd('nao');
            dd($category);
            dd($ttt);
        }
        foreach($category[$exerc] as $teste ){
dd($teste);
    }
    }
}
 */

 
return view('trainingSheets/create')->with(compact('treinos','category'));    

    }

    public function show2 (Request $request) {
        $url = $_SERVER['REQUEST_URI'];
        $array = explode("/", $url);
        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        $treinos = $database->getReference('Trainings/' . $array[2] )->getSnapshot();

        $treino = $treinos->getValue();

        return view('trainingSheets/show')->with(compact('treino'));   

    }

    public function exerc (Request $request){


        $url = $_SERVER['REQUEST_URI'];
        $array = explode("/", $url);

        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        
        $categoria = $database->getReference('Categories/' . $array[3])->getSnapshot();

        $exercCategoria = $categoria->getValue();

        return view('trainingSheets/exerc')->with(compact('exercCategoria'));  

    }
}
