<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriForum extends Model
{
    use HasFactory;
    protected $table='kategori_forums';
    protected $primarykey='id';
    protected $fillable=['name_kategori', 'slug', 'desc', 'image'];

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}
