<?php

namespace App;

use App\CommentModel;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    protected $fillable = ['message'];
    public function comments() {
        return $this->hasMany(CommentModel::class);
    }

    public function addComment($message) {
        $this->comments()->create(compact('message'));
    }

}

