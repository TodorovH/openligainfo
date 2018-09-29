<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchesController extends Controller
{
    public function getAll() {

        $data = simplexml_load_file('https://www.openligadb.de/api/getmatchdata/bl1');

        var_dump($data);die;
    }
}
