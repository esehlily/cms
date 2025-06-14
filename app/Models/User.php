<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;

// use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Complaint;

use Illuminate\Database\Eloquent\Casts\Attribute;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'matric_number',
        'password',
        'type',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
    ];

    // protected function role(): Attribute
    // {
    //     return new Attribute(
    //         get: fn ($value) =>  ["student", "admin"][$value],
    //     );
    // }

    /**
     * Check if user is admin
     */
    public function isAdmin()
    {
        return $this->role === 'admin' || $this->type === '1' || $this->type === 'admin';
    }

    /**
     * Check if user is student
     */
    public function isStudent()
    {
        return $this->role === 'student' || $this->type === '0';
    }

    /**
     * Get the username field (matric_number)
     */
    public function username()
    {
        return 'matric_number';
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }
}
