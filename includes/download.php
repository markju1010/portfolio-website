<?php
// Path to the CV file
$file = '../assets/cv/CV.pdf';

// Check if the file exists
if (file_exists($file)) {
    // Set headers for the file download
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));

    // Read the file and send it to the output
    readfile($file);
    exit;
} else {
    // Handle the case where the file is missing
    echo "File not found.";
}
