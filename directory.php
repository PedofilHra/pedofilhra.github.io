<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Images</title>
    <style>
        #fileList {
            margin-top: 20px;
        }
        .file-link {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<h2>Images Directory</h2>

<div id="fileList">
<?php
$directory = 'images/';
// Check if the directory exists
if (is_dir($directory)) {
    // Get the list of files in the directory
    $files = scandir($directory);
    // Remove "." and ".." from the list
    $files = array_diff($files, array('.', '..'));
    // Display the files as links
    foreach ($files as $file) {
        echo "<a href='$directory$file' class='file-link'>$file</a>";
    }
}
?>
</div>

</body>
</html>