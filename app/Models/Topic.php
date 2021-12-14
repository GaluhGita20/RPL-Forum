<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $table='topics';
    protected $guarded=['id_topic'];
    protected $fillable=['ket_id','user_id','name_topic', 'slug_topic','is_pinned'];
    protected $dates = ['created_at','updated_at'];

    public function ket()
    {
        return $this->belongsTo(Ket::class);
    }
}
