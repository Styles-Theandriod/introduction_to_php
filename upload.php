<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the file was uploaded without errors
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Check if the file already exists
        if (file_exists($target_file)) {
            echo "Sorry, the file already exists.";
        } else {
            // Verify if the file was uploaded via HTTP POST
            if (is_uploaded_file($_FILES["file"]["name"])) {
                // Check file size
                if ($_FILES["file"]["size"] > 500000) {
                    echo "Sorry, your file is too large. Please try again with a smaller file.";
                } else {
                    // Check file type and restrict to certain extensions
                    $allowed_extensions = array("jpg", "jpeg", "png", "gif", "txt");
                    $file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if (!in_array($file_extension, $allowed_extensions)) {
                        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
                    } else {
                        // Move the uploaded file to the specified directory
                        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                            echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
                        } else {
                            echo "Sorry, there was an error moving your file.";
                        }
                    }
                }
            } else {
                echo "Sorry, invalid file upload attempt.";
            }
        }
    } else {
        echo "Error: " . $_FILES["file"]["error"];
    }
}
?>
