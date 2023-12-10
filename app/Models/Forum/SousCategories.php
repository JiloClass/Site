<?php

namespace App\Models\Forum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousCategories extends Model
{
    use HasFactory;

    protected $table = "f_souscategories";

    protected $fillable = [
        "id",
        "category_id",
        "slug",
        "name"
    ];
}
