<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sewa extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'NIK', 'email', 'tlp', 'no_unit','harga','dari','sampai','keterangan', 'user_id', 'update_user_id'];
    public function User(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function bayar(){
       return $this->hasMany(bayar::class);
    }
}
