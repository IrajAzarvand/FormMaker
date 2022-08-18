<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElementType extends Model
{
    protected $fillable = [
        'TypeName',
        'tag_type_id',
    ];

    public function tag()
    {
        return $this->belongsTo(TagType::class);
    }
}