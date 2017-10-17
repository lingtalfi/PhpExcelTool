PhpExcelTool
===========
2017-10-17


A personal helper for using the PHPOffice/PHPExcel library.


This is part of the [universe framework](https://github.com/karayabin/universe-snapshot).


Install
==========
Using the [uni](https://github.com/lingtalfi/universe-naive-importer) command.
```bash
uni import PhpExcelTool
```

Or just download it and place it where you want otherwise.



Depends on
=============

Prior to the planet install, you need to manually install the following library:

- https://github.com/PHPOffice/PHPExcel



How to
==========


```php
<?php

$file = "/Users/me/Downloads/Liste des Villes Equipements.xlsx";
$colValues = PhpExcelTool::getColumnValues("C", $file);

```





History Log
------------------
    
- 1.0.0 -- 2017-10-17

    - initial commit