<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TagType extends Model
{
    protected $fillable = [
        'TagName',
    ];

    public function elements()
    {
        return $this->hasMany(ElementType::class, 'tag_type_id');
    }
}