<?php 
require('readcfg.php');
//require_once('memory.php');
?>
<html>
<head>

<title><?php echo $title;?></title>
<?php 
      
	   echo $stylelink;
      echo $layoutlink;
      echo $jquery_link;
	   echo $jqueryui_link;
      echo $jqueryui_style;
	   echo $corejs;
?>

</head>
<body>

<div id = "head">
     <div id = "head_acct"></div>
     <div id = "head_logo"><button onclick = 'testPHPfunction()'>Press Me</button></div>
     <div id = "head_nav"></div>
</div>

<div id = "main">
	<div id = "test">
		
	</div>
	
</div>

<div id = "footer">
<<<<<<< HEAD
<button onclick = 'loadPicForm()'>Press Me</button>
=======

>>>>>>> 9b2e6384db14e74fd0a8a4850c09642e9c8b481c
</div>
</body>

</html>