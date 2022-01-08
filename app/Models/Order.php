<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = ['User_Email','Product','Quantity','Price'];

    // Order is the child of User
    public function user()
    {
        return $this->belongsTo(User::class, 'User_Email');
    }
}

