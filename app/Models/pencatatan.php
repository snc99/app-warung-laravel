<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pencatatan extends Model
{
    use HasFactory;


    public $table = "pencatatan";
    protected $fillable = ['id', 'nama', 'tanggal', 'total_transaksi'];

    public function totalTagihan()
    {
        return $this->hasOne(TotalTagihan::class, 'nama', 'nama');
    }
}

// test branch
