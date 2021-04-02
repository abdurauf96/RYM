<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class News extends Model
{
    use HasFactory;
    protected $table="news";
    use Translatable;
    protected $translatable=['title', 'description', 'body', 'seo_title', 'seo_description', 'seo_keywords'];

    public function category()
    {
        return $this->belongsTo(NewsCategory::class, 'category_id');
    }
}
