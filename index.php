<?php

$structure = sys_get_temp_dir().'/bla';

if (isdir($structure)) {
  echo 'Directory exists: ' . $structure;
  if (!mkdir($structure, 0, true)) {
      die('Failed');
  }
}

?>