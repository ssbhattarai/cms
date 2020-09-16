<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Activitylog\Traits\LogsActivity;


class User extends Authenticatable
{
    use Notifiable, HasRoles, LogsActivity;

    // vendor\laravel\framework\src\Illuminate\Foundation\Auth\AuthenticatesUsers.php 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status' , 'last_login_ip', 'last_login'
    ];
    
    protected static $logOnlyDirty = true;
    protected static $logAttributes = ['name', 'email', 'status' ];
    protected static $logName = 'user';

    public function getDescriptionForEvent(string $eventName): string
    {
        return "The User has been {$eventName}";
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Student()
    {
        return $this->hasOne('App\Models\Student', 'email');
    }

}
