<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'role', 'aip_id', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function projectPerson()
    {
        return $this->hasMany(ProjectPerson::class);
        // return $this->hasManyThrough(Project::class, ProjectPerson::class, 'project_id', 'user_id', 'id');
    }
    // public function projectPerson(){

    //     return $this->hasMany(ProjectPerson::class, 'person_id', 'id');
    // }
      // public function getSmth()
      // {
      //   return "YOU'R DICK";
      // }
    // foreach (User::find($person_id)->projects as $project)
    // { 
    //     var_dump($project->project_name);
    // }
    // protected $table = ['users'];
}
