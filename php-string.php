
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php練習與字串</title>
<style type="text/css">
h1{color:
	color: #232C31;
}
.box{
	background: #232C31;
	color: #CECEFF;
	padding: 1%;
	/* [disabled]padding: 10px; */
	float: left;
	width: 98%;
	margin-bottom: 20px;
	}
.boxPro{
	float: left;
	width: 48%;
	}
.boxR{
	float: right;
	width: 50%;
	height: auto;
	padding: 10px;
	background-color: #FFF;
}
.boxR p{
	color: #333;
	font-size: 2em;
	}
</style>
</head>

<body>
<h1>PHP5 string</h1>
2015年2月20日 
<div class="box">
<div class="boxPro">
<h1>string substr to array</h1>
<p>
</p>
</div>
<div class="boxR"> 
  <p>
  <?php
	$my="ABCDEG";
	$setA=array();
	function abc($num,$ar){
		
		for($i=0;$i<5;$i++){
			
			$letter=substr($num,$i,1)."<br />";
			 echo $ar[$i]=$letter;
			 
		
		}
		 $answer=array_rand($ar,1);
		 echo $ar[$answer];
	}
	abc($my,$setA);
	
	?>
  
  </p>
</div>
</div>
<div class="box">
<div class="boxPro">
<h1>Length of a String<!--code hare-----string------></h1>
<h3>
  strlen("Hello world!")
</h3>
<!--code hare-----string------>

</div>
<div class="boxR"> 
  <p>
  <!--code hare -->
  <?php
	echo strlen("Hello world!"); // outputs 12
  ?>
   <!--code hare -->
  </p>
</div>
</div>
<div class="box">
<div class="boxPro">
<h1>Count The Number of Words in a String<!--code hare-----string------></h1>
<h3>
  str_word_count("Hello world!")
</h3>
<!--code hare-----string------>

</div>
<div class="boxR"> 
  <p>
  <!--code hare -->
	<?php
    echo str_word_count("Hello world!"); // outputs 2
    ?>    

<!--code hare -->
  </p>
</div>
</div>
<div class="box">
<div class="boxPro">
<h2>Reverse a String</h2>
<h1><!--code hare-----string------></h1>
<h3>
 strrev("Hello world!")
</h3>
<!--code hare-----string------>

</div>
<div class="boxR"> 
  <p>
  <!--code hare -->
	<?php
    echo strrev("Hello world!"); // outputs !dlrow olleH
    ?> 
<!--code hare -->
  </p>
</div>
</div>
<div class="box">
<div class="boxPro">
<h2>Search For a Specific Text Within a String</h2>
<h1><!--code hare-----string------></h1>
<h3>
 strpos("Hello world!", "world")
</h3>
<!--code hare-----string------>

</div>
<div class="boxR"> 
  <p>
  <!--code hare -->
	 <?php
		echo strpos("Hello world!", "world"); // outputs 6
    ?>
<!--code hare -->
  </p>
</div>
</div>
<div class="box">
<div class="boxPro">
<h2>Replace Text Within a String</h2>
<h1><!--code hare-----string------></h1>
<h3>
 str_replace("world", "Dolly", "Hello world!")
</h3>
<!--code hare-----string------>

</div>
<div class="boxR"> 
  <p>
  <!--code hare -->
	<?php
    echo str_replace("world", "Dolly", "p world!"); // outputs Hello Dolly!
    ?> 
<!--code hare -->
  </p>
</div>
</div>
</body>
</html>
