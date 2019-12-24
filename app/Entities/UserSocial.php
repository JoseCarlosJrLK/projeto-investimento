<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class UserSocial extends Model
{
    use Notifiable;
    use SoftDeletes;

    public $timestamps = true;
    protected $table = 'users';
    protected $fillable = ['user_id', 'social_network', 'social_email', 'social_id', 'social_avatar'];
    protected $casts = ['email_verified_at' => 'datetime',];

}
