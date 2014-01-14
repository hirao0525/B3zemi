<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <script type="text/javascript" src="jquery-2.0.3.js"></script>
    <title>サンプル</title>
      <?php
        $fp1 = file_get_contents('data1.json');
        $fp2 = file_get_contents('data2.json');
        $fp3 = file_get_contents('data3.json');
        $fp4 = file_get_contents('data4.json');
        $fp5 = file_get_contents('data5.json');

        $data1 = json_decode($fp1);
        $data2 = json_decode($fp2);
        $data3 = json_decode($fp3);
        $data4 = json_decode($fp4);
        $data5 = json_decode($fp5);

 
        $arraydata1 = array();
        $arraydata2 = array();
        $arraydata3 = array();
        $arraydata4 = array();
        $arraydata5 = array();

        for($i=0;$i<7;$i++) {
          $arraydata1[] .= $data1[$i][0];
          $arraydata2[] .= $data2[$i][0];
          $arraydata3[] .= $data3[$i][0];
          $arraydata4[] .= $data4[$i][0];
          $arraydata5[] .= $data5[$i][0];

          for($j=1;$j<25;$j++) {
            $arraydata1[$i] .= ",";
            $arraydata1[$i] .= $data1[$i][$j];
            $arraydata2[$i] .= ",";
            $arraydata2[$i] .= $data2[$i][$j];
            $arraydata3[$i] .= ",";
            $arraydata3[$i] .= $data3[$i][$j];
            $arraydata4[$i] .= ",";
            $arraydata4[$i] .= $data4[$i][$j];
            $arraydata5[$i] .= ",";
            $arraydata5[$i] .= $data5[$i][$j];
          }
        }
      ?>
    <script type="text/javascript">

      var user;
      var color;

      var obj1 = new Array(7);
      var obj2 = new Array(7);
      var obj3 = new Array(7);
      var obj4 = new Array(7);
      var obj5 = new Array(7);
      var obj = new Array(obj1,obj2,obj3,obj4,obj5);

      var obj0 = new Array(7);
      for(var i=0;i<7;i++) {
        obj0[i] = new Array(25);
      }


      obj[0][0] = [<?php echo $arraydata1[0]; ?>];
      obj[0][1] = [<?php echo $arraydata1[1]; ?>];
      obj[0][2] = [<?php echo $arraydata1[2]; ?>];
      obj[0][3] = [<?php echo $arraydata1[3]; ?>];
      obj[0][4] = [<?php echo $arraydata1[4]; ?>];
      obj[0][5] = [<?php echo $arraydata1[5]; ?>];
      obj[0][6] = [<?php echo $arraydata1[6]; ?>];

      obj[1][0] = [<?php echo $arraydata2[0]; ?>];
      obj[1][1] = [<?php echo $arraydata2[1]; ?>];
      obj[1][2] = [<?php echo $arraydata2[2]; ?>];
      obj[1][3] = [<?php echo $arraydata2[3]; ?>];
      obj[1][4] = [<?php echo $arraydata2[4]; ?>];
      obj[1][5] = [<?php echo $arraydata2[5]; ?>];
      obj[1][6] = [<?php echo $arraydata2[6]; ?>];

      obj[2][0] = [<?php echo $arraydata3[0]; ?>];
      obj[2][1] = [<?php echo $arraydata3[1]; ?>];
      obj[2][2] = [<?php echo $arraydata3[2]; ?>];
      obj[2][3] = [<?php echo $arraydata3[3]; ?>];
      obj[2][4] = [<?php echo $arraydata3[4]; ?>];
      obj[2][5] = [<?php echo $arraydata3[5]; ?>];
      obj[2][6] = [<?php echo $arraydata3[6]; ?>];

      obj[3][0] = [<?php echo $arraydata4[0]; ?>];
      obj[3][1] = [<?php echo $arraydata4[1]; ?>];
      obj[3][2] = [<?php echo $arraydata4[2]; ?>];
      obj[3][3] = [<?php echo $arraydata4[3]; ?>];
      obj[3][4] = [<?php echo $arraydata4[4]; ?>];
      obj[3][5] = [<?php echo $arraydata4[5]; ?>];
      obj[3][6] = [<?php echo $arraydata4[6]; ?>];

      obj[4][0] = [<?php echo $arraydata5[0]; ?>];
      obj[4][1] = [<?php echo $arraydata5[1]; ?>];
      obj[4][2] = [<?php echo $arraydata5[2]; ?>];
      obj[4][3] = [<?php echo $arraydata5[3]; ?>];
      obj[4][4] = [<?php echo $arraydata5[4]; ?>];
      obj[4][5] = [<?php echo $arraydata5[5]; ?>];
      obj[4][6] = [<?php echo $arraydata5[6]; ?>];

    </script>
    <script type="text/javascript" src="test.js"></script>
  </head>
  <body>
    <input type="button" value="ボタン１" onclick="downloadData()">
    <input type="button" value="ボタン2" onclick="uploadData()">
    <input type="button" value="ボタン3" onclick="readData()">
    <br>
    <textarea id="out1" value=""></textarea>
    <textarea id="out2" value=""></textarea>
    <textarea id="out3" value=""></textarea>
    <textarea id="out4" value=""></textarea>
    <textarea id="out5" value=""></textarea>
    <textarea id="out0" value=""></textarea>
    <br>
    <form name="q1">
    <input type="checkbox" checked> user1<BR>
    <input type="checkbox" checked> user2<BR>
    <input type="checkbox" checked> user3<BR>
    <input type="checkbox" checked> user4<BR>
    <input type="checkbox" checked> user5<BR>
    <BR>
    <input type="button" value="ボタン3" onclick="loadData()">
    </form>

    <br>
    <form name="q2">
    <input type="radio" name="color" checked>Black<BR>
    <input type="radio" name="color">red<BR>
    <input type="radio" name="color">blue<BR>
    <input type="radio" name="color">green<BR>
    </form>
    <BR>
    <form name="q3">
    <input type="radio" name="user" checked>user1<BR>
    <input type="radio" name="user">user2<BR>
    <input type="radio" name="user">user3<BR>
    <input type="radio" name="user">user4<BR>
    <input type="radio" name="user">user5<BR>
    <BR>
    <input type="button" value="ボタン4" onclick="changeData()">
    </form>
    <form name="q4">
    <input type="button" value="ボタン5" disabled>
    </form>
  </body>
</html>