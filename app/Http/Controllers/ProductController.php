<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function save(Request $request){

        $data['pname'] = $request->pname;
        $data['stock'] = $request->stock;
        $data['price'] = $request->price;
        $data['time'] = time();

        $content = [];

        $scontent = Storage::get('datastorage.json');

        if(empty($scontent)){
            $content[] = $data;
        }else{
            //print_r($scontent); die();
            $content = json_decode($scontent);
            $content[] = $data;
        }

        $content = json_encode($content);

        Storage::put('datastorage.json', $content);

        return "success";

    }

    public function getAll(){
        $contents = Storage::get('datastorage.json');
        return $contents;
    }

}