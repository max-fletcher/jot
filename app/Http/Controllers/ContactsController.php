<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
// A symfony component library class that be used instead of returning a raw status code
use Symfony\Component\HttpFoundation\Response;
// Renaming a ContactResource so that it doesn't conflict with the model "Contact"
use App\Http\Resources\Contact as ContactResource;

class ContactsController extends Controller
{
    public function index(){

  // Passing an empty contact so authorize passes. The "viewAny" method is called which is pretty much empty right now.
  // Maybe later it will contain more logic
        $this->authorize('viewAny', Contact::class);        
  // We created a user in ContactsTest.php with a preset api_token and id.
  // Since his api_token was sent here via an api get request, it is possible to identify the user
  // as logged in using request()->user(), since his api_token matches that which is stored in DB.
  // Using a " ContactResource ", we are calling a collection method and wrapping " request()->user()->contact "
  // so it can be returned as a collection. Otherwise, resource methods normally cant return collections
        return ContactResource::collection( request()->user()->contacts );

    }

    public function store(){

  // Passing an empty contact so authorize passes. The "create" method is called which is pretty much empty right now.
  // Maybe later it will contain more logic
  $this->authorize('create', Contact::class);        
    // This lines would work normally but since we are now using api_tokens and Model Relations,
    // it will no longer work
        // Contact::create($contact);

        $contact = $this->validateData();
        // request contains api_token of user so we use it to fetch the user, then traverse a
        // model relation to get associated contact model and then create a new contact for that user
        // the user_id is automatically set to the id of user creating it
        // create method returns the data when saved in a variable so $contact is overwritten
        $contact = request()->user()->contacts()->create($contact);
        
        // return $contact attach with a response code of 201. For some reason this requires brackets to chain
        return (new ContactResource($contact))->response()->setStatusCode(Response::HTTP_CREATED);

    }

    public function show(Contact $contact){

        // If you don't want to use route model binding
        // $contact = Contact::find($contactid);
        // return response()->json($contact);
        
        // if the current user id does not match the contact's user_id ("view" method inside policy),
        // returns a response of 403 (unatuthorized). Else, wll proceed to the next line.
        $this->authorize( 'view' , $contact);        

        return new ContactResource($contact);
        //return $contact;

    }

    public function update(Contact $contact){
        // if the current user id does not match the contact's user_id ("update" method inside policy),
        // returns a response of 403 (unatuthorized). Else, wll proceed to the next line.
        $this->authorize( 'update' , $contact); 

        $data = $this->validateData();
        $contact->update($data);

        return (new ContactResource($contact))->response()->setStatusCode(Response::HTTP_OK);

    }

    public function destroy(Contact $contact){
        // if the current user id does not match the contact's user_id ("delete" method inside policy),
        // returns a response of 403 (unatuthorized). Else, wll proceed to the next line.
        $this->authorize( 'delete' , $contact);

        $contact->delete();
        // send an empty array and a status of 204. Since the contact was deleted, we cannot send it back.
        return response([], Response::HTTP_NO_CONTENT);
    }

    private function validateData(){

        return request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'birthday' => 'required',
            'company' => 'required',
        ]);
    }

}
