<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2013 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: mp3_bbcode_include_var.php
| Author: Arda Kılıçdağı
+--------------------------------------------------------+
| The FLV Media Player is licensed under a 
|Creative Commons License. It allows you to 
| use, modify and redistribute the script, 
| but only for noncommercial purposes. 
| For corporate use, please apply for a commercial license.
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
if (!defined("IN_FUSION")) { die("Access Denied"); }

$__BBCODE__[] = 
array(
"description"		=>	$locale['bb_flv_description'],
"value"			=>	"flv",
"bbcode_start"		=>	"",
"bbcode_end"		=>	"",
"usage"			=>	"[flv=(".$locale['bb_flv_hexcode'].")]".$locale['bb_flv_usage']."[/flv]",
"onclick"		=>	"return overlay(this, 'bbcode_flv_color_".$textarea_name."', 'rightbottom');",
"onmouseover"		=>	"",
"onmouseout"		=>	"",
"includejscript"	=>	"",
"calljscript"		=>	"",
"html_start"		=>	"<div id='bbcode_flv_color_".$textarea_name."' class='tbl1' style='display: none; border:1px solid black; position: absolute; width: 55px; height: auto; text-align: center' onclick=\"overlayclose('bbcode_flv_color_".$textarea_name."');\">",
"html_middle"		=>	"<input type='button' value='FLV' class='button' onclick=\"addText('".$textarea_name."', '[flv]', '[/flv]', '".$inputform_name."');return false;\" /><br /><input type='button' value='".$locale['bb_flv_red']."' class='button' onclick=\"addText('".$textarea_name."', '[flv=ff0000]', '[/flv]', '".$inputform_name."');return false;\" /><br /><input type='button' value='".$locale['bb_flv_blue']."' class='button' onclick=\"addText('".$textarea_name."', '[flv=0000ff]', '[/flv]', '".$inputform_name."');return false;\" /><br /><input type='button' value='".$locale['bb_flv_green']."' class='button' onclick=\"addText('".$textarea_name."', '[flv=00ff00]', '[/flv]', '".$inputform_name."');return false;\" /><br /><input type='button' value='".$locale['bb_flv_black']."' class='button' onclick=\"addText('".$textarea_name."', '[flv=000000]', '[/flv]', '".$inputform_name."');return false;\" /><br /><input type='button' value='".$locale['bb_flv_white']."' class='button' onclick=\"addText('".$textarea_name."', '[flv=ffffff]', '[/flv]', '".$inputform_name."');return false;\" /><br /><input type='button' value='".$locale['bb_flv_yellow']."' class='button' onclick=\"addText('".$textarea_name."', '[flv=ffff55]', '[/flv]', '".$inputform_name."');return false;\" />",
"html_end"		=>	"</div>",
);
?>
