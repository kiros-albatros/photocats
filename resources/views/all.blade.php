<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All</title>
</head>
<body>
<div class="gallery"></div>
<h2>All photos</h2>
@guest
    <p>show if guest</p>
@endguest
<ul class="gallery__list">
    @foreach ($photos as $photo)
        <li class="gallery__item">
            <img src="/storage/images/<?=$photo->name?>" alt="">
            <p><?=$photo->name?></p>
            <p><?=$photo->description?></p>
            <ul>
                @foreach($comments as $comment)
                    @if($photo->id == $comment->photo_id)
                    <li>{{$comment->message}}</li>
                    @endif
                @endforeach
            </ul>
            <a href="onePic/<?=$photo->id?>">Details</a><br>
            <form action="/all/{{$photo->id}}" method="POST">
                @csrf
                <textarea name="message" placeholder="your comment" id="" width="100%"></textarea><br>
                <input type="submit" name="" value="comment">
            </form>
        </li>
    @endforeach
</ul>



<?php echo $photos->render(); ?>

</body>
</html>
