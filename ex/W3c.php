<html>
<head>
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","W3c_db.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
  <select name="users" onchange="showUser(this.value)">
  <option value="choose"></option>
  <?php
						header("Content-Type: text/html; charset=utf-8");
						mysql_connect('localhost','root','usbw');
						mysql_query("SET NAMES 'utf8'");
						mysql_select_db("b32_15818905_757");
						$result=mysql_query("SELECT * FROM `students`");
						//$myResult=mysql_query("SELECT * FROM `students` WHERE 1");
						$sql=mysql_query("SELECT cID, cName FROM students");
						while($row=mysql_fetch_assoc($sql)){
							echo '<option value="'.$row['cID'].'">'.$row['cName'].'</option>';
							}
  
  
  
  ?>


  </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

</body>
</html>
