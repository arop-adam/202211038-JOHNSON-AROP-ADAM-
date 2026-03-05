<!DOCTYPE html>
<html>
<head>
    <title>Arop Isaac PHP</title>
</head>
<body>
<h1>Arop Isaac PHP</h1>
<pre>
    *****
    *   *
    *   *
    * * *
    *   *
    *   *
    
    *****
     *
     *
     *
     *
    *   *
</pre>
<?php
    echo "<pre>\n";
    echo "SHA256 Hash of 'Arop': " . hash('sha256', 'Arop') . "\n";
    echo "SHA256 Hash of 'Isaac': " . hash('sha256', 'Isaac') . "\n";
    echo "</pre>\n";
?>
<p>
    <a href="check.php">Click here to check the error setting</a>
</p>
<p>
    <a href="fail.php">Click here to cause a traceback</a>
</p>
</body>
</html>
