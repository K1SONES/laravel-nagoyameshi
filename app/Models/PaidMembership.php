<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaidMembership extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}