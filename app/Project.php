<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    protected $table = 'projects';

    public function projectPerson()
    {
    	// return $this->belongsTo(ProjectPerson::class);
    	// return $this->belongsTo(ProjectPerson::class);
    	return $this->hasMany(ProjectPerson::class, 'project_id', 'id');
    } 

}
