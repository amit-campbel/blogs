<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static $rules = [
        'title' => 'required|string|max:255',
    ];

    protected $fillable = [
        'title', 'description', 'created_by', 'updated_by'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }
}
