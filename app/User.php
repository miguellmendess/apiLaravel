<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;

    protected $fillable = [
        'name',
        'username',
        'password',
        'email',
        'address',
        'cpf',
        'organization_id'
    ];


    public function organizations(){
        return $this->belongsToMany(Organization::class);
    }
}
