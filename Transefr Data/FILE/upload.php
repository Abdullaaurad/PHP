<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
    $file = $_FILES['file'];

    // Check for upload errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        echo "Error uploading file.";
        exit;
    }

    // Verify file type (e.g., allow only image/jpeg)
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($file['type'], $allowedTypes)) {
        echo "Invalid file type. Allowed types: " . implode(', ', $allowedTypes);
        exit;
    }
    $fileSize = filesize($filePath);
    echo "filesize =".$fileSize."\n";
    // Move uploaded file to a permanent location
    $uploadsDir = 'uploads/';
    $destination = $uploadsDir . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $destination)) {
        echo "File uploaded successfully!";
    } else {
        echo "Error moving file to destination.";
    }
} else {
    echo "No file uploaded or invalid request.";
}
?>
