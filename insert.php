<?php
/**
 * Created by PhpStorm.
 * User: Sucrase
 * Date: 2018/4/12
 * Time: 10:17
 * PHP7
 */

$manager = new MongoClient('mongodb://127.0.0.1:27017');
$db = $manager -> new_adn;
$collection = $db -> publisher;

$document1 = array(
    "publisherId" => 2331,
    "publisher" => array(
        "publisherId"  => 2331,
        "username" => "DukeYu",
        "status" => 1,
        "apiKey" => "14785019e6f213cef6f0682e0ab33fe0",
        "type" => 4,
        "mvSourceStatus" => 1,
        "forceDeviceId" => 1,
        "created" => 1441077843
    ),
    "blackPackageNameList" => [],
    "updated" => 1477044178,
    "updatedDate" => "2016-10-21 18:02:58",
    "offsetList" => []
);

$document2 = array(
    "publisherId" => 2332,
    "publisher" => array(
        "publisherId"  => 2332,
        "username" => "DukeYu",
        "status" => 1,
        "apiKey" => "14785019e6f213cef6f0682e0ab33fe0",
        "type" => 4,
        "mvSourceStatus" => 1,
        "forceDeviceId" => 1,
        "created" => 1441077843
    ),
    "blackPackageNameList" => [],
    "updated" => 1477044178,
    "updatedDate" => "2016-10-21 18:02:58",
    "offsetList" => []
);
$document3 = array(
    "publisherId" => 2333,
    "publisher" => array(
        "publisherId"  => 2333,
        "username" => "DukeYu",
        "status" => 1,
        "apiKey" => "14785019e6f213cef6f0682e0ab33fe0",
        "type" => 4,
        "mvSourceStatus" => 1,
        "forceDeviceId" => 1,
        "created" => 1441077843
    ),
    "blackPackageNameList" => [],
    "updated" => 1477044178,
    "updatedDate" => "2016-10-21 18:02:58",
    "offsetList" => []
);
$document4 = array(
    "publisherId" => 2334,
    "publisher" => array(
        "publisherId"  => 2334,
        "username" => "DukeYu",
        "status" => 1,
        "apiKey" => "14785019e6f213cef6f0682e0ab33fe0",
        "type" => 4,
        "mvSourceStatus" => 1,
        "forceDeviceId" => 1,
        "created" => 1441077843
    ),
    "blackPackageNameList" => [],
    "updated" => 1477044178,
    "updatedDate" => "2016-10-21 18:02:58",
    "offsetList" => []
);

//$collection -> insert($document1);
//$collection -> insert($document2);
$collection -> insert($document4);

echo "数据插入成功";