<?php
header('Content-disposition: attachment; filename=descargas/icono_electronica.zip');
header('Content-type: application/png');
readfile('descargas/icono_electronica.zip');
?>
