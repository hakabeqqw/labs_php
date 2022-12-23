<?php

require_once 'Directory.php';
require_once 'Disk.php';
require_once 'File.php';

interface computer
{
    public function render();
    public function getCount();
}

$file1 = new File("файл1");
$file2 = new File("файл2");
$directory1 = new Directorys("директория1");
$directory2 = new Directorys("директория2");
$disk1 = new Disk("А");
$disk2 = new Disk("Б");
$directory1->elementAdd($file1);
$directory2->elementAdd($file2);
$disk2->elementAdd($directory2);

echo $disk2->render() . "\n";

$file3 = new File("file3");
$file4 = new File("file4");
$file5 = new File("file5");
$file6 = new File("file5");
$disk1->elementAdd($file3);
$disk1->elementAdd($file4);
$disk2->elementAdd($file5);
$disk2->elementAdd($file6);

echo $disk1->render() . "\n";
echo $disk2->render() . "\n";

$array[] = $disk1;
$array[] = $disk2;

$swaper = new Disk("swap");
foreach ($array as $value) {
    for ($i = 1; $i < count($array); $i++) {
        $swaper = $array[$i];
        $array[$i] = $array[$i - 1];
        $array[$i - 1] = $swaper;
    }
}

foreach ($array as $value) {
    echo $value->getNameOfDisk();
}
