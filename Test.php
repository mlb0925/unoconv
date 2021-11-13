<?php
include "vendor/autoload.php";
$unoconv = mlb0925\Unoconv\Unoconv::create(array(
    'timeout'          => 42,
    'unoconv.binaries' => '/usr/bin/unoconv',
));
$a = $unoconv->transcode('document.docx', 'pdf', 'document.pdf');