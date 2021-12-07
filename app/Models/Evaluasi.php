<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluasi extends Model
{
    use HasFactory;

    protected $table= 'evaluasis';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'unit_id',
        'judul',
        'dokumen',
        'status',
        'komentar',
        'tanggal'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'unit_id', 'id');
    }
}
