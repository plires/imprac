<?php
header("Content-disposition: attachment; filename=seg-febrero-2021.pdf");
header("Content-type: application/pdf");
readfile("seg-febrero-2021.pdf");
?>