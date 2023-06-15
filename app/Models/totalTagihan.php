<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TotalTagihan extends Model
{
    use HasFactory;

    protected $table = 'total_tagihan';
    protected $fillable = ['nama', 'total_tagihan', 'bayar', 'sisa_tagihan'];

    // Definisikan relasi dengan model Pencatatan
    public function pencatatan()
    {
        return $this->belongsTo(Pencatatan::class, 'nama', 'nama');
    }

    // Metode untuk mengambil data nama dari tabel "pencatatan"
    public static function getPilihanNama()
    {
        return Pencatatan::pluck('nama', 'id')->toArray();
    }
}
