<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) 2002 - 2013 Nick Jones
| http://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: flv_bbcode_include.php
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

$text = preg_replace('#\[flv\](http://|ftp://|https://|ftps://)([^\s\'\"\(\)]*?)([\r\n]*)\[/flv\]#si', '<embed src=\''.INCLUDES.'bbcodes/flv/player.swf\' width=\'470\' height=\'320\' bgcolor=\'#ffffff\' allowscriptaccess=\'always\' allowfullscreen=\'true\' flashvars=\'file=\1\2\3&\' />', $text);
$text = preg_replace('#\[flv\](.*?)\[/flv\]#si', '<embed src=\''.INCLUDES.'bbcodes/flv/player.swf\' width=\'470\' height=\'320\' bgcolor=\'#ffffff\' allowscriptaccess=\'always\' allowfullscreen=\'true\' flashvars=\'file=http://\1&\' />', $text);
$text = preg_replace('#\[flv=([a-fA-F0-9]{6})\](http://|ftp://|https://|ftps://)([^\s\'\"\(\)]*?)([\r\n]*)\[/flv\]#si', '<embed src=\''.INCLUDES.'bbcodes/flv/player.swf\' width=\'470\' height=\'320\' bgcolor=\'#\1\' allowscriptaccess=\'always\' allowfullscreen=\'true\' flashvars=\'file=\2\3\4&\' />', $text);
$text = preg_replace('#\[flv=([a-fA-F0-9]{6})\](.*?)\[/flv\]#si', '<embed src=\''.INCLUDES.'bbcodes/flv/player.swf\' width=\'470\' height=\'320\' bgcolor=\'#\1\' allowscriptaccess=\'always\' allowfullscreen=\'true\' flashvars=\'file=http://\2&\' />', $text);
$text = preg_replace('#\[flv=([a-fA-F0-9]{3})\](http://|ftp://|https://|ftps://)([^\s\'\"\(\)]*?)([\r\n]*)\[/flv\]#si', '<embed src=\''.INCLUDES.'bbcodes/flv/player.swf\' width=\'470\' height=\'320\' bgcolor=\'#\1\' allowscriptaccess=\'always\' allowfullscreen=\'true\' flashvars=\'file=\2\3\4&\' />', $text);
$text = preg_replace('#\[flv=([a-fA-F0-9]{3})\](.*?)\[/flv\]#si', '<embed src=\''.INCLUDES.'bbcodes/flv/player.swf\' width=\'470\' height=\'320\' bgcolor=\'#\1\' allowscriptaccess=\'always\' allowfullscreen=\'true\' flashvars=\'file=http://\2&\' />', $text);
?>