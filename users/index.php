<?php 
require('readcfg.php');
session_start();
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
	<div id = "userNav">
	      
	</div>
	<div id = "output">
	<div id = "formTest">
		
	      </div>
	      <div id = "loginTest">
		
	      </div>
	      <div id = "test">
		
	      </div>
	</div>
	<div id = "interactive">
		
	</div>
</div>

<div id = "footer">

</div>
</body>

</html>