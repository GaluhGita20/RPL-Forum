<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriForum extends Model
{
    use HasFactory;
    protected $table='kategori_forums';
    protected $primarykey='id';
    protected $fillable=['name', 'slug', 'desc', 'image'];
    // public $timestamps = false;
    // protected $dates = ['created_at'];
    // protected $timestamps = false;
    // const CREATED_AT = 'create_time';

    public function topic()
    {
        return $this->hasMany(Topic::class);
    }
}
