<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'name',
        'cnpj',
        'address'
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
