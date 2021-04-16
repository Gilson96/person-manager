<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;
use App\Http\Requests\API\PersonRequest;
use App\Http\Resources\API\PersonResource;

class Persons extends Controller
{
   
    public function index()
    {
        return Person::all();

    }

   
    public function store(PersonRequest $request)
    {
        // get all the request data
        // returns an array of all the data the user sent
        $data = $request->all();
        
        // create Person with data and store in DB
        // and return it as JSON
        // automatically gets 201 status as it's a POST request
        return Person::create($data);
    }

    
    public function show(Person $person)
    {
        return $person;
    }

    
    public function update(PersonRequest $request, Person $person)
    {
        // get the request data
        $data = $request->all();
        // update the article using the fill method
        // then save it to the database
        $person->fill($data)->save();
        
        // return the updated version
        return $person;
    }

    
    public function destroy(Person $person)
    {
          // delete person from DB
          $person->delete();

          // use a 204 code as there is no content in response
          return response(null, 204);
    }
}
