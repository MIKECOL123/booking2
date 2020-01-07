<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\MyOwnResetPassword as ResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'first_name', 'last_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    
    
	/**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

/**
	 * Get the user's full name by concatenating the first and last names
	 *
	 * @return string
	 */
	public function getFullName()
	{
		return $this->first_name . ' ' . $this->last_name;
    } 

    //valida si hay mas de 1 rol   
    public function hasAnyRole($roles){
    if (is_array($roles)){
        //foreach ($role)
    }
        else {
            if($this->hasRole($roles)){
        return true;
            }
        }
    }

    //valida si tiene rol
    public function hasRole ($role){
         if ($this-> roles()->where ('name',$role)->first() ){
             return true;
         }
         return false;
    }
}
