<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Link extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable=['addres', 'footer_text',  'seo_title', 'seo_description', 'seo_keywords'];
}
