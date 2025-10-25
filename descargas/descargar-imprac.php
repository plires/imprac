<?php
header("Content-disposition: attachment; filename=lista-imprac-ene-2023.pdf");
header("Content-type: application/pdf");
readfile("lista-imprac-ene-2023.pdf");
?>