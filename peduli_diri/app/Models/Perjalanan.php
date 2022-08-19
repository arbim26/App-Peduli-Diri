<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Perjalanan extends Model
{
    use HasFactory;

    protected $table = 'perjalanan';
    protected $fillable = ['user_id','tanggal','waktu','lokasi','suhu'];
    
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
