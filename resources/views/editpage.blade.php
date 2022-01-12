<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit page</title>
</head>
<body>
<p>edit page</p>
<form action="{{ route ('imageChange', $editItem->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="fileItem"><br><br>
    <input type="text" value="<?=$editItem->description?>" name="description"><br><br>
    <input type="submit" value="update">
</form>
</body>
</html>
