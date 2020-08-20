<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Contact extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // The only reason the returned data is wrapped inside a data wrapper(double wrapping) is so we can 
        // include another array called 'links'. Otherwise, if it returned just an array, it would by default
        // be wrapped inside a data wrapper.
        return [
            'data' => [
                // renamed id to contact_id
                'contact_id' => $this->id,
                'name' => $this->name,
                'email' => $this->email,
                // modifying date to desired format then returning it
                'birthday' => $this->birthday->format('m/d/Y'),
                'company' => $this->company,      
                // diffForHumans() is a carbon method that returns a readable string for
                'last_updated' => $this->updated_at->diffForHumans(),
            ],
            'links' => [
                'self' => $this->path(),
            ],            
        ];
    }
}
