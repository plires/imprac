<?php
header('Content-disposition: attachment; filename=lista-imprac.pdf');
header('Content-type: application/pdf');
readfile('lista-imprac.pdf');
?>
