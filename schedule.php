<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>schedule</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<script type="text/javascript" src="jquery-2.0.3.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
	<?php
        $fp1 = file_get_contents('user1.json');
        $fp2 = file_get_contents('user2.json');
        $fp3 = file_get_contents('user3.json');
        $fp4 = file_get_contents('user4.json');
        $fp5 = file_get_contents('user5.json');

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

          for($j=1;$j<24;$j++) {
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
      var edit=0;
      var mycoler = new Array("#8f8f8f","#e70000","#0000e7","#00e700");

      var obj1 = new Array(7);
      var obj2 = new Array(7);
      var obj3 = new Array(7);
      var obj4 = new Array(7);
      var obj5 = new Array(7);
      var obj = new Array(obj1,obj2,obj3,obj4,obj5);

      var obj0 = new Array(7);
      for(var i=0;i<7;i++) {
        obj0[i] = new Array(24);
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

	<script type="text/javascript">

		myTbl = new Array("Sun.","Mon.","Tue.","Wed.","Thu.","Fri.","Sat.","Sun.","Mon.","Tue.","Wed.","Thu.","Fri.","Sat.");
		myD = new Date();
	 
		myYear = myD.getFullYear();
		myMonth = myD.getMonth() + 1;
		myDate = myD.getDate();
		myDay = myD.getDay();
	 
		myMess1 = myYear + " " + myMonth + "/" + myDate + " ";
		myMess2 = myTbl[myDay] + "";

	</script>
</head>

<body onload="loadData()">
	<table border ="0" width="100%" height="100%">
		<tr height="4%" style="color:#FFFFFF">
			<script>
				document.write('<td width="12%" bgcolor="#000000">');
				document.write('menu');
				document.write('</td>');

				document.write('<td width="3.5%" bgcolor="#000000">');
				document.write('Time');
				document.write('</td>');

				document.write('<td width="12%" bgcolor="#000090">');
				document.write(myYear + " " + myMonth + "/" + (myDate) + " "+myTbl[myDay] + "" );
				document.write('</td>');
				document.write('<td width="12%" bgcolor="#000080">');
				document.write(myYear + " " + myMonth + "/" + (myDate+1) + " "+myTbl[myDay+1] + "" );
				document.write('</td>');
				document.write('<td width="12%" bgcolor="#000070">');
				document.write(myYear + " " + myMonth + "/" + (myDate+2) + " "+myTbl[myDay+2] + "" );
				document.write('</td>');
				document.write('<td width="12%" bgcolor="#000060">');
				document.write(myYear + " " + myMonth + "/" + (myDate+3) + " "+myTbl[myDay+3] + "" );
				document.write('</td>');
				document.write('<td width="12%" bgcolor="#000050">');
				document.write(myYear + " " + myMonth + "/" + (myDate+4) + " "+myTbl[myDay+4] + "" );
				document.write('</td>');
				document.write('<td width="12%" bgcolor="#000040">');
				document.write(myYear + " " + myMonth + "/" + (myDate+5) + " "+myTbl[myDay+5] + "" );
				document.write('</td>');
				document.write('<td width="12%" bgcolor="#000030">');
				document.write(myYear + " " + myMonth + "/" + (myDate+6) + " "+myTbl[myDay+6] + "" );
				document.write('</td>');
			</script>
		</tr>

		<tr height="96%">
			<td width="12.5%" bgcolor="#cccccc">

				<form name="q1">
				    <input type="checkbox" checked> user1<BR>
				    <input type="checkbox" checked> user2<BR>
				    <input type="checkbox" checked> user3<BR>
				    <input type="checkbox" checked> user4<BR>
				    <input type="checkbox" checked> user5<BR>
				    <BR>
				    <input type="button" value="読み込み" onclick="loadData()">
				</form>

				<form name="q2">
					<input type="radio" name="coler" value="0" checked>Black<BR>
					<input type="radio" name="coler" value="1">red<BR>
					<input type="radio" name="coler" value="2">blue<BR>
					<input type="radio" name="coler" value="3">green<BR>
				</form>

			    <form name="q3">
				    <input type="radio" name="user" checked>user1<BR>
				    <input type="radio" name="user">user2<BR>
				    <input type="radio" name="user">user3<BR>
				    <input type="radio" name="user">user4<BR>
				    <input type="radio" name="user">user5<BR>
				    <input type="button" value="編集" onclick="changeData()">
			    </form>

			    <form name="q4">
			    	<input type="button" value="保存" onclick="afterchangeData()" disabled>
			    </form>

			</td>
			<td width="3.5%" bgcolor="#cccccc">
				<table border = "0" width="100%">
				<script>
					var time = 0;
					for(var i =0;i<24;i++){
						document.write('<TR><TD>'+time+':00</TD></TR>');
						time = time +1;
					}
				</script>
				</table>
			</td>
			<td width="12%" bgcolor="#6050ff">		
				<table border = "0" width="100%" id='d1'>
				<script>
					for(var i =0;i<24;i++){
						document.write('<TR onClick="mClickTR(this,0);"><TD><BR></TD></TR>');
					}
				</script>
				</table>
			</td>
			
			<td width="12%" bgcolor="#6050ef">
				<table border = "0" width="100%" id='d2'>
				<script>
					for(var i =0;i<24;i++){
						document.write('<TR onClick="mClickTR(this,1);"><TD><BR></TD></TR>');
					}
				</script>
				</table>
			</td>
			<td width="12%" bgcolor="#6050df">
				<table border = "0" width="100%" id='d3'>
				<script>
					for(var i =0;i<24;i++){
						document.write('<TR onClick="mClickTR(this,2);"><TD><BR></TD></TR>');
					}
				</script>
				</table>			
			</td>
			<td width="12.5%" bgcolor="#6050cf">
				<table border = "0" width="100%" id='d4'>
				<script>
					for(var i =0;i<24;i++){
						document.write('<TR onClick="mClickTR(this,3);"><TD><BR></TD></TR>');
					}
				</script>
				</table>
			</td>
			<td width="12%" bgcolor="#6050bf">
				<table border = "0" width="100%" id='d5'>
				<script>
					for(var i =0;i<24;i++){
						document.write('<TR onClick="mClickTR(this,4);"><TD><BR></TD></TR>');
					}
				</script>
				</table>
			</td>
			<td width="12%" bgcolor="#6050af">
				<table border = "0" width="100%" id='d6'>
				<script>
					for(var i =0;i<24;i++){
						document.write('<TR onClick="mClickTR(this,5);"><TD><BR></TD></TR>');
					}
				</script>
				</table>
			</td>
			<td width="12%" bgcolor="#60509f">
				<table border = "0" width="100%" id='d7'>
				<script>
					for(var i =0;i<24;i++){
						document.write('<TR onClick="mClickTR(this,6);"><TD><BR></TD></TR>');
					}
				</script>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>