<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $table='topics';
    protected $primarykey='id';
    protected $fillable=['kategori_forum_id', 'name_topic', 'is_pinned'];

    public function kategori_forums()
    {
        return $this->belongsTo(KategoriForum::class);
    }
}
