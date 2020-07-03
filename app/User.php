<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [ ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [

        'email_verified_at' => 'datetime',
    ];

    public function getAvatarAttribute($value){
        if(isset($value)){

            return asset( 'storage/'.$value );
            
        } else{
            return asset('/images/avatar.jpg');
        }
          
    }

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    public function timeline(){
        //users tweets and who they follow
        $friends = $this->follows()->pluck('id');

        return Tweet::whereIn('user_id', $friends)
        ->orWhere('user_id', $this->id)
        ->latest()->paginate(30);
    }

    public function tweets(){
        return $this->hasMany(Tweet::class)->latest();
    }

    public function path($append = ''){

        $path = route('profile', $this->username);

        return $append ? "{$path}/{$append}" : $path;
    }

    

}

