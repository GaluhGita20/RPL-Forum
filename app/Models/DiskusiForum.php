<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiskusiForum extends Model
{
    use HasFactory;
    protected $table='diskusi_forums';
    protected $guarded=['id_diskusi'];
    protected $fillable=['topic_id', 'user_id', 'diskusi'];
    protected $dates = ['created_at', 'updated_at'];

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topics_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
