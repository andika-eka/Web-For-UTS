<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class bayar extends Model
{
    use HasFactory;
    protected $fillable = ['id_sewa', 'bulan','keterangan', 'user_id'];
    public function sewa(){
        return $this->belongsTo(sewa::class);
    }
    public function user(){
      return  $this->belongsTo(User::class);
    }
}
