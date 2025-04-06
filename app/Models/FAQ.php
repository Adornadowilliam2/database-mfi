<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $table = 'faqs';

    protected $fillable = [
        'question',
        'paragraph',
        'enroll',
        'cta',
        'program'
    ];
}
