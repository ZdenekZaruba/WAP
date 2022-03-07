<?php
$size = 10;
$field = [];
require_once "_karel.php";
$karel = new Karel();

$commands = filter_input(INPUT_POST, 'commands');
if (!empty($commands)) {
    $commands = explode("\n", $commands);
    foreach ($commands as $command) {
        $tmp = explode(" ", $command);
        $cmd = trim($tmp[0]);
        $prm = intval($tmp[1] ?? 1);
        switch ($cmd) {
            case "k":
                $karel->step($prm);
                break;
            case "v":
                $karel->turnLeft($prm);
                break;
            default:
        }
    }
}
