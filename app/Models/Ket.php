<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ket extends Model
{
    use HasFactory;
    protected $table='kets';
    protected $guarded=['id_ket'];
    protected $fillable=['name_kategori', 'slug_kat', 'desc', 'image'];

    public function topic()
    {
        return $this->hasMany(Topic::class);
    }
}
