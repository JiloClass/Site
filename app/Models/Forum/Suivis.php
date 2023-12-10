<?php

namespace App\Models\Forum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suivis extends Model
{
    use HasFactory;

    protected $table = "f_suivis";

    protected $fillable = [
        "id",
        "user_id",
        "topic_id"
    ];
}
