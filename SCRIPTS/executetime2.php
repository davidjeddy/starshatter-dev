<?php
$timeEnd=gettimeofday();
$timeEnd_uS=$timeEnd["usec"];
$timeEnd_S=$timeEnd["sec"];

$ExecTime_S=($timeEnd_S+($timeEnd_uS/1000000))-($timeStart_S+($timeStart_uS/1000000));
Print "Execution Time: ".($ExecTime_S*1000)." milliseconds";
?>
