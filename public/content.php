<?php
/** 
 * @author		David Sullivan
 * @package    	Borruso Harvest School
 * @version    	1
 * @since      	October 23, 2011
 */

$default_page = "main.php";
echo '<div id="content">';


if (!isset($_REQUEST['pid'])) include($default_page);
	else { 
	$_REQUEST['pid'] = str_replace(array('.', '/'), '', $_REQUEST['pid']); 
	
	$content = $_REQUEST['pid']; 
	$nextpage = $content . ".php";

	if (file_exists($nextpage)) { // check to see if include file exists.  If not, show home.inc.php
		/**
		 * @todo : remove echo statement
		 * @todo : make a test for this
		 */
		echo $nextpage;
		include($nextpage);
	} else { 
	  include($default_page);
	}
		
} 
echo '</div>';
			
?>
