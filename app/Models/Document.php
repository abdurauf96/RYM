<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Document extends Model
{
    use Translatable;
    protected $translatable=['title', 'body', 'seo_title', 'seo_description', 'seo_keywords'];
    use HasFactory;
}
