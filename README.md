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




How to
==========


```php
<?php

$file = "/Users/me/Downloads/Liste des Villes Equipements.xlsx";
$colValues = PhpExcelTool::getColumnValues("C", $file);

```





```php
<?php

$rows = [];
// populating rows...

$target = __DIR__ . "/baked/liste-salle-sport.xlsx";
$ret = PhpExcelTool::createExcelFileByData($target, $rows, [
    'propertiesFn' => function (PHPExcel_DocumentProperties $props) {
        $props->setCreator("LingTalfi")
            ->setTitle("Liste des salles de sport")
            ->setSubject("Liste des salles");
    }
]);
a($ret); // null, means ok

```


```php
<?php 
$file = "/myphp/leaderfit/leaderfit/class-modules/ThisApp/assets/fixtures/ID_CATEGORIES.XLSX";
$rows = PhpExcelTool::getColumnsAsRows([
    "A" => "parent_id",
    "B" => "id",
    "C" => "name",
], $file, 1);
az($rows);
```


History Log
------------------
    
- 1.2.0 -- 2018-04-13

    - add getColumnsAsRows method
    - Now ships with the PHPOffice/PHPExcel library, since it's marked as deprecated by its authors
    
- 1.1.0 -- 2017-10-18

    - add PhpExcelTool::createExcelFileByData method
    
- 1.0.0 -- 2017-10-17

    - initial commit