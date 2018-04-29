<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectPerson extends Model
{
    //
    protected $table = 'project_person';

    protected $fillable = [ 'user_id', 'project_id', 'project_num', 'project_name'];

    public function user()
  	{
    	return $this->belongsTo(User::class);
    	// return $this->belongsTo(Project::class);
 	}
  	// public function project()
  	// {
  	// 	// return $this->hasMany(Project::class, 'id', 'project_id');
   //  	return $this->belongsTo(Project::class, 'project_id', 'id');
  	// }
}
