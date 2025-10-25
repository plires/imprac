<?php
header('Content-disposition: attachment; filename=lista-agosto-2020.pdf');
header('Content-type: application/pdf');
readfile('lista-agosto-2020.pdf');
?>
