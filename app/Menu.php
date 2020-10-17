<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Menu extends Model
{
    use Notifiable;
        protected $fillable = [
        'kategori','tarifadi','kackisi','malzemeler','hazirlanisi','photo'

    ];

}
