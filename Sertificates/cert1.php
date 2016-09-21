<?php
/**
 * Created by PhpStorm.
 * User: Milenica
 * Date: 9/20/2016
 * Time: 4:56 PM
 */

$file = 'one.pdf';
$filename = 'pd.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
