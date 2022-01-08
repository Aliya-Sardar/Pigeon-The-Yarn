<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = ['User_Email','Address','Phone_Number'];

    // Info is the child table of user
    public function user()
    {
        return $this->belongsTo(User::class, 'User_Email');
    }
}
