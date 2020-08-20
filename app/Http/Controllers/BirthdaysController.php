<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Contact as ContactResource;

class BirthdaysController extends Controller
{
    public function index(){
        
        // birthday is a scope that is inside contact model. It can be used to specify how or what data will be
        // fetched from the model. Its like a custom query
        $contacts = request()->user()->contacts()->birthdays()->get();

        // Call Contact Resource (imported above) and put $contacts into it as a collection
        return ContactResource::collection($contacts);
    }
}
