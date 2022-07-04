<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client as Mongo;

class MongoTest extends Controller
{
    //
    function mongoConnect()
    {
        $mongo = new Mongo;
        $connnection = $mongo->myappdb->laraC;
        return $connnection->find()->toArray();

        // echo "code will be here";
    }
}
