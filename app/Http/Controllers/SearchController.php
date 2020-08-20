<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
// Renaming a ContactResource so that it doesn't conflict with the model "Contact"
use App\Http\Resources\Contact as ContactResource;

class SearchController extends Controller
{
    public function index()
    {
        // validate that it is required
        $data = request()->validate([
           'searchTerm' => 'required',
        ]);
        
        // Search and return
        $contact = Contact::search($data['searchTerm'])->get();
        
        // Send $contact as a resource when an API calls it
        return ContactResource::collection($contact);
    }
}
