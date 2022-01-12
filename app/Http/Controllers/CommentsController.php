<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CommentModel; //подключим Модель
//use App\Post;
use App\GalleryModel;

class CommentsController extends Controller
{
    public function store (Request $request, $id){
        echo 'create comment in action';
        $GalleryModelItem = new GalleryModel();
        $photo = $GalleryModelItem->find($id);

        CommentModel::create([
            'message' => request('message'),
            'photo_id' => $photo->id
        ]);
        return back();
    }

}
