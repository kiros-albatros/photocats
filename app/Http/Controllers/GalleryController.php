<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // подключим класс Request
use App\GalleryModel; //подключим Модель
use App\CommentModel; //подключим Модель

class GalleryController extends Controller
{
    public function show() {
        return view('testview');
    }

    public function showFormData(Request $request)
    {
        $modelItem = new GalleryModel();
        $name = $request->fileItem->getClientOriginalName();
        $modelItem->name=$name;
        $modelItem->description=$request->input('description');
        if($modelItem->save()) {
            $success = 'yep!';
        } else {
            $success = 'nope!';
        }

        if($request->hasFile('fileItem')){
            echo 'has file <br>';
            var_dump($request->file('fileItem'));
            var_dump($request->input('description'));// введем переданное значение
            $description = $request->input('description');
        } else {
            echo 'has no file';
        }

        if ($request->file('fileItem')->isValid()) {echo '<br> valid <br>';
           $name = $request->fileItem->getClientOriginalName();
           $path = $request->file('fileItem')->storeAs('images', $name,'public');
            return view('formview', ['path' => $path, 'description' => $description, 'success' => $success]);
        }
    }

    public function showPhotos(){
        $photos = GalleryModel::paginate(3);
        $comments = CommentModel::all();
        return view('all', ['photos' => $photos, 'comments' => $comments]);
    }

    public function one($id){
        $modelItem = new GalleryModel();
        echo $id;
        return view('onePic', ['item' => $modelItem->find($id)]);
    }

    public function deleteItem($id)
    {
      GalleryModel::find($id)->delete();
      $photos = GalleryModel::all();
      return redirect()->route('allPhotos', ['photos' => $photos]);
    }

    public function editItem($id)
    {
        $editItem = GalleryModel::find($id);
        return view('editpage', ['editItem' => $editItem]);
    }

    public function rewriteItem($id, Request $request)
    {
       // $editItem = GalleryModel::find($id);

        $modelItem = GalleryModel::find($id);
        $name = $request->fileItem->getClientOriginalName();
        $modelItem->name=$name;
        $modelItem->description=$request->input('description');
        if($modelItem->save()) {
            $success = 'yep!';
        } else {
            $success = 'nope!';
        }

        $name = $request->fileItem->getClientOriginalName();
        $description = $request->input('description');
        $path = $request->file('fileItem')->storeAs('images', $name,'public');
        return view('formview', ['path' => $path, 'description' => $description, 'success' => $success]);

    }
}
