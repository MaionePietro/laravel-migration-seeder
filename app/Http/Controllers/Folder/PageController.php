<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dbRequest(){
        $trains = Train::all();

        //dd($trains); //per vedere il db a schermo
        $data = [
            'trains' => $trains
        ];
        return view('welcome', $data);
    }
}
