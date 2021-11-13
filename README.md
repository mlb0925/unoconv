# unoconv
An Object Oriented library which allow easy to use file conversion with Unoconv.
```
composer require mlb0925/unoconv
```
```
<?php
include "vendor/autoload.php";
$unoconv = mlb0925\Unoconv\Unoconv::create(array(
    'timeout'          => 42,
    'unoconv.binaries' => '/usr/bin/unoconv',
));
$a = $unoconv->transcode('document.docx', 'pdf', 'document.pdf');
```
