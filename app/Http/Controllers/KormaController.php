<?php

namespace App\Http\Controllers;

use App\Model\Korm;
use Illuminate\Http\Request;

class KormaController extends Controller
{
    public function index()
    {
        $kormDog =  Korm::where('category_id', '=', 1)->orderBy('id', 'desc')->get();
        $kormCats =  Korm::where('category_id', '=', 2)->orderBy('id', 'desc')->get();


        return view('layouts/korma',['kormDogs'=> $kormDog,'kormCats'=> $kormCats]);
    }
    public function singlpage(Request $request){
        $id = (int) $request->id;
        $korm = Korm::where('id', $id)->firstOrFail();
        return view('layouts/kormPage',['korm' => $korm ]);
    }
}
