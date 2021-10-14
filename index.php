<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ckeditor 4 upload image</title>
</head>

<body>
    <div class="container">
        <h1>click upload image</h1>
        <textarea name="editor" id="editor"></textarea>
    </div>

    <script src="ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor', {
            height: 400,
            extraPlugins: 'filebrowser',
            filebrowserBrowseUrl: 'browser.php',
            filebrowserUploadMethod: 'form',
            filebrowserUploadUrl: 'upload.php',
        });
    </script>
</body>

</html>