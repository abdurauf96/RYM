<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class AboutPage extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable=['title', 'body', 'history_block_title', 'opinion_block_title', 'opinion_block_body', 'opinion_block_author', 'team_block_title', 'team_block_description',   'seo_title', 'seo_description', 'seo_keywords'];
}
