<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




// Define isAdmin() and isCustomer() methods as described in your requirements
public function isAdmin()
{
    return $this->role === 'admin';
}

public function isCustomer()
{
    return $this->role === 'customer';
}

// Define the rentals() relationship
public function rentals()
{
    return $this->hasMany(Rental::class);
}






}
