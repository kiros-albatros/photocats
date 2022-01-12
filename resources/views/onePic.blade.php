<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>OnePic</title>
</head>
<body>
<h2>OnePic</h2>
<div class="gallery__item">
    <img width="200" src="/storage/images/<?=$item->name?>" alt="">
    <p>Name: <?=$item->name?></p>
    <p>Description: <?=$item->description?></p>
    <div class="buttons-container">
    <a href="/onePic/editItem/<?=$item->id?>">Edit</a>
    <a href="/onePic/deleteItem/<?=$item->id?>">Delete</a>
    </div>
</div>
</body>
</html>
