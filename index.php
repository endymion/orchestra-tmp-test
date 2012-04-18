<?php

$structure = sys_get_temp_dir().'/bla';

if (!mkdir($structure, 0, true)) {
    die('Failed');
}

?>