<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    protected $table = "c_cours";

    protected $fillable = [
        "id",
        "id_user",
        "type",
        "titre",
        "tags",
        "image",
        "description",
        "certified",
        "date"
    ];

    public function user()
    {
        return $this->belongsTo(Users::class, "user_id");
    }
}
