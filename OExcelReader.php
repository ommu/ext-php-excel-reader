<?php

/**
 * JPhpExcelReader class file.
 *
 * @author jerry2801 <jerry2801@gmail.com>
 * @version alpha 2 2010-5-18 14:26
 *
 * @modify Putra Sudaryanto <putra@sudaryanto.id>
 * @copyright Copyright (c) 2017 Ommu Platform (opensource.ommu.co)
 * @created date 25 September 2017, 05:24 WIB
 * @link https://github.com/ommu/php-excel-reader
 * @contact (+62)856-299-4114
 *
 * A typical usage of OExcelReader is as follows:
 * <pre>
 * Yii::import('application.vendor.ommu.php-excel-reader.OExcelReader');
 * $data=new OExcelReader('example.xls');
 * echo $data->dump(true,true);
 * </pre>
 */

require_once dirname(__FILE__).DIRECTORY_SEPARATOR.'excel_reader2.php';

class OExcelReader extends Spreadsheet_Excel_Reader
{
}