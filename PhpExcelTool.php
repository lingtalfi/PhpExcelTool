<?php


namespace PhpExcelTool;


/**
 * Class PhpExcelTool
 * @package PhpExcelTool
 *
 * This is a simple wrapper around the library here:
 * https://github.com/PHPOffice/PHPExcel
 * (since I tend to loose memory)
 *
 * Before you can use this tool, please install the PHPOffice/PHPExcel library, instructions are in the
 * install.txt at the top of this repository.
 *
 */
class PhpExcelTool
{

    /**
     * @param $columnName , str the name of the column (i.e. A, B, ...)
     * @return $ret array, an array containing all the values for column $columnName
     */
    public static function getColumnValues($columnName, $file)
    {
        $ret = [];
        $objPHPExcel = \PHPExcel_IOFactory::load($file);
        $worksheet = $objPHPExcel->getActiveSheet();
        $lastRow = $worksheet->getHighestRow();
        for ($row = 1; $row <= $lastRow; $row++) {
            $cell = $worksheet->getCell($columnName . $row);
            $val = $cell->getValue();
            $ret[] = $val;
        }
        return $ret;
    }


}