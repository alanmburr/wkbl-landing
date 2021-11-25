<?php
require 'Parsedown.php'; require 'Extends.Parsedown.php';
$epd = new ParsedownExtra();
echo "<style>html{font-family: 'Segoe UI';}</style>" . $epd->text(file_get_contents($_GET['url']));
?>