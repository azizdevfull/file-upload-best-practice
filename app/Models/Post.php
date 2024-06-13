<?php

namespace App\Models;

use App\Models\Attachment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'body'];

    public function images()
    {
        return $this->morphMany(Attachment::class, 'attachment');
    }
}
