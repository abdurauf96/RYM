<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Event extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable=['title', 'description', 'body', 'category', 'seo_title', 'seo_description', 'seo_keywords'];
}
