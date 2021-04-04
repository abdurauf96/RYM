<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Region extends Model
{
    use HasFactory;
    use Translatable;
    protected $translatable=['name'];

    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
