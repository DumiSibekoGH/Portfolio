<?php
    $file = $GET["file" ]."pdf";
    header("Content-Type: application/pdf");

    haader("Content-Disposition: attachment; filename='Screenshot 2024-06-04 at 10.32.32.png'");

    $image = file_put_contents($imageImg, file_get_contents());

    echo $image;
?>