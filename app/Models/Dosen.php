<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosens';
    protected $fillable = ['nip', 'nama'];
    protected $appends = ['total_mahasiswa'];
    
    public function mahasiswa(): HasMany
    {
        return $this->hasMany(Mahasiswa::class);
    }

    public function getTotalMahasiswaAttribute()
    {
        return $this->mahasiswa->count();
    }
}
