<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>testview</p>
<form action="{{ route('imageUpload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="fileItem"><br><br>
    <input type="text" name="description"><br><br>
    <input type="submit" value="upload">
</form>
</body>
</html>
