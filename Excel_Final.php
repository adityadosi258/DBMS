<?php

require 'convert.class.php';

$exporter = new ExportDataExcel('browser', 'test.xls');

$exporter->initialize(); // starts streaming data to web browser

$exporter->addRow(array("This", "is", "a", "test")); 
$exporter->addRow(array(1, 2, 3, "123-456-7890"));
$exporter->addRow(array("foo")); 

$exporter->finalize();

exit();
?>