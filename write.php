<?php
  $data = $_POST['data'];
  $filename = $_POST['filename'];
  $append = $_POST['append'];

  $fp = fopen($filename, 'a'); // open in append mode
  if ($fp) {
    flock($fp, LOCK_EX); // exclusive lock
    $timestamp = date('Y-m-d H:i:s'); // get the current timestamp
    fwrite($fp, 'Timestamp: ' . $timestamp . "\n"); // add the timestamp
    fwrite($fp, $data);
    fwrite($fp, "\n\n"); // add two newline characters to separate sections
    flock($fp, LOCK_UN); // release lock
    fclose($fp);
  }
?>