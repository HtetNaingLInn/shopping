<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website_Info extends Model
{
    use HasFactory;

    protected $fillable=[
        'name','logo','phone','email','address','facebook','viber','is_disable_website','is_disable_app'
    ];
}
