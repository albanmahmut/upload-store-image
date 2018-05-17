<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Image and Store</title>
    <style type="text/css">
        <?php
            $css = file_get_contents('style.css');
                echo $css;
?>
    </style>
</head>
<body>
    <div class="container">
        <div class="upfrm">
            <form action="upload.php" method="post" enctype="multipart/form-data">
             Select Image File to Upload:
                <div class="upload-btn-wrapper">
                    <input class="btn" type="file" name="file">
                    <input class="upload-btn-wrapper" type="submit" name="submit" value="Upload">
            </form>
        </div>
    </div>
</body>
</html>