<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Perjalanan extends Model
{
    use HasFactory;

    protected $table = 'perjalanan';
    protected $guarded = ['']; 

    public function perjalana()
    {
        return $this->hasOne(user::class);
    }
}
