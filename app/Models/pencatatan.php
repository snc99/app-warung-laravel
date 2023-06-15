<?php

namespace App\Models;

use App\Models\TotalTagihan;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencatatan extends Model
{
    use HasFactory;

    protected $table = 'pencatatan';
    protected $fillable = ['id', 'nama', 'tanggal', 'total_transaksi'];


    // Definisikan relasi dengan model totalTagihan
    public function totalTagihan()
    {
        return $this->hasOne(TotalTagihan::class, 'nama', 'nama');
    }
}
