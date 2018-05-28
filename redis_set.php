<?php

$eol = '<br>';

$redis = new Redis();

if ($redis->connect('redis', 6379));
echo "Connection to server sucessfully" . $eol;

if ($redis->select(1));
echo "Database Select 1" . $eol;

switch ($_GET['id']) {

    case "1":
        if ($redis->sadd('test1', $_SERVER["REQUEST_TIME"]))
            echo 'add OK!' . $eol;
        else
            echo 'add error!' . $eol;
        break;
    case "2":
        echo $redis->scard('test1') . $eol;
        break;
    case "3":
        if ($redis->flushDb())
            echo 'del ok' . $eol;
        else
            echo 'del error' . $eol;
        break;

}

$redis->close();

?>