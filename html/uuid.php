<?php
// get a uuid for no apparent reason
header('Content-Type: text/plain');
$uuid = file_get_contents('/proc/sys/kernel/random/uuid');
echo $uuid;
