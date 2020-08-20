<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Laravel\Scout\Searchable;

class Contact extends Model
{
    // Add this line to make this model searchable by algolia. Also remember to add "use Laravel\Scout\Searchable; " at the top
    use Searchable;

    protected $guarded = [];

    // set birthday as a date property. Needed so that dates do not cause problems when stored and retrieved by api calls.
    protected $dates = ['birthday'];

    // This function only knows how to access its own resources(i.e contacts)
    // This is so that we can deliver a path to the contact that is freshly created. Without this, the 'links'
    // array will not work in tests as well as in other places
    public function path()
    {
        return '/contacts/' . $this->id; 
    }

    // this is a custom query scope that will be used inside the birthdays controller index method to find/search all birthdays.
    // There is a problem with carbon date-time that causes the year to go missing if a month is searched so we are using this.
    public function scopeBirthdays($query)
    {   // 1st parameter is the database field name and the second parameter is the current month (formatted using carbon)
        return $query->whereMonth('birthday', now()->format('m'));
    }

    // mutator method for processing and formatting dates properly
    public function setBirthdayAttribute($birthday){       
        $this->attributes['birthday'] = Carbon::parse($birthday);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
