<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirebaseController extends Controller
{
    private $database;
    private $tablename;

    public function __construct()
    {
        $this->database = app('firebase.database');
        $this->tablename = 'quiz';
    }

    public function main()
    {
        $reference = $this->database->getReference($this->tablename)->getValue();
        return response()->json([
            'status' => 'success',
            'data' => $reference
        ]);
    }
}
