<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class totalTagihan extends Model
{
    use HasFactory;

    public $table = "total_tagihan";
    protected $fillable = ['id', 'nama', 'total_tagihan', 'bayar', 'sisa_tagihan'];

    public function pencatatan()
    {
        return $this->belongsTo(Pencatatan::class, 'nama', 'nama');
    }
}
