<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','details','image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        '',
    ];

    /**
     *  User Relation
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
