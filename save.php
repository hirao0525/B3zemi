<?php
  $data = array();
  $data[] = explode(",",$_GET["value0"]);
  $data[] = explode(",",$_GET["value1"]);
  $data[] = explode(",",$_GET["value2"]);
  $data[] = explode(",",$_GET["value3"]);
  $data[] = explode(",",$_GET["value4"]);
  $data[] = explode(",",$_GET["value5"]);
  $data[] = explode(",",$_GET["value6"]);
  $name = $_GET["namevalue"];

  for($i=0;$i<7;$i++) {
    for($j=0;$j<25;$j++) {
      $data[$i][$j] = (int)$data[$i][$j];
    }
  }

  $fp = fopen($name,"w");
  fwrite($fp,json_encode($data));

?>