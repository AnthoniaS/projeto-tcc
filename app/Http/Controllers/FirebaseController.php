<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    public function index()
    {
       

        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'/chave.json')
        ->withDatabaseUri('https://projeto-tcc-5be8c-default-rtdb.firebaseio.com');

        $database = $factory->createDatabase();
        $users = $database->getReference('Users')->getSnapshot();

        print_r($users->getValue());
     

    }
}
