<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formData</title>
</head>
<body>
<h1>formData</h1>
<p><?= $path; ?></p>
<p><?= $description; ?></p>
<img width="200"  src="/storage/<?=$path?>" alt="">
<p>{{ $success ?? '' }}</p>
<p><a href="/all">all photos</a></p>
</body>
</html>
