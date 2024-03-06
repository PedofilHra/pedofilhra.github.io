<?php
// Directory to scan
$directory = 'images/';

// Check if the directory exists
if (is_dir($directory)) {
    // Open the directory
    if ($handle = opendir($directory)) {
        // Loop through each file in the directory
        while (($file = readdir($handle)) !== false) {
            // Exclude . and .. directories
            if ($file != "." && $file != "..") {
                // Display the file path
                echo $directory . $file . "\n";
            }
        }
        // Close the directory handle
        closedir($handle);
    }
}
?>
