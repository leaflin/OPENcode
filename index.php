<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a responsive product landing page.">
<title>Landing Page &ndash; Layout Examples &ndash; Pure</title>
<link rel="stylesheet" type="text/css" href="css/marketing.css" />
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<script type="text/javascript" src="ajax.js"> </script>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
<div class="content">
        <h2 class="content-head is-center">cofe order</h2>
        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked">
                    <fieldset>
                        <label for="name">Your name</label>
                        <input id="name" type="text" placeholder="Your Name">
                        
						<label for="state">State</label>
				        <select id="state">
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
                        
                        <label for="state2">State2</label>
				        <select id="state2">
				            <option>AL</option>
				            <option>CA</option>
				            <option>IL</option>
				        </select>

                        <button type="button" class="pure-button" onclick="getSize()">Sign Up</button>
                    </fieldset>
                </form>
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>訂閱狀態</h4>
                <p id="textINIT">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                </p>

                <h4>More Information</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>




</div>













</body>
</html>
