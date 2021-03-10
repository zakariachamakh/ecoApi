<?php

namespace App\Http\Controllers\Api;

use App\Catogery;
use App\Http\Controllers\Controller;
use App\Http\Resources\CatogeryResource;
use Illuminate\Http\Request;

class CatogeryController extends Controller
{
    public  function  index(){
        return CatogeryResource::collection(Catogery::paginate());
    }

    public  function  show($catogery){
        return new  CatogeryResource(Catogery::find($catogery));
    }
}
