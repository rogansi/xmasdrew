<?php
$init_vars = parse_ini_file('../config/memoryjar.cfg',true);
$title = $init_vars['header information']['title'];
$stylesheet = $init_vars['header information']['stylelink'];

if($init_vars['header information']['layouttype']=='1'){
$stylelink = '<link href = "../layout/css/'.'trilayout.css'.'" type="text/css" rel = "stylesheet"/>';
}

$layoutlink = '<link href = "../layout/css/'.$stylesheet.'" type="text/css" rel = "stylesheet"/>';

/** jquery variables **/
$jquery_link = "<script src = \"../".$init_vars['header information']['jquery']."\" type = \"text/javascript\"></script>";
$jqueryui_link = "<script src = \"../".$init_vars['header information']['jquery_ui_script']."\" type = \"text/javascript\"></script>";
$jqueryui_style = '<link href = "../'.$init_vars['header information']['jquery_ui_style'].'" type="text/css" rel = "stylesheet"/>';
?>