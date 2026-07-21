<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
   protected $fillable = [
        'title',
        'slug',
        'seo_title',
        'seo_description',
        'seo_keywords',
    ];}
