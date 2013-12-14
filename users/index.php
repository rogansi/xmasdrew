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
     <div id = "head_logo"></div>
     <div id = "head_nav"></div>
</div>

<div id = "main">
	<div id = "test">
		
	</div>
	
</div>

<div id = "footer">
<button onclick = 'listMemorys()'>Press Me</button>
</div>
</body>

</html>