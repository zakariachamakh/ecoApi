<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TagResource;
use App\Tag;
use Illuminate\Http\Request;


class TagController extends Controller
{
   public  function  index(){
       return TagResource::collection(Tag::paginate());
   }

    public  function  show($tag){
        return new TagResource(Tag::find($tag));
    }

}
