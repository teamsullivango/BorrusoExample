<?php
/**
 * Index page - contains entire site 
 * 
 * Set universal setting for all of the 
 * 
 * @author		David Sullivan
 * @package    	Borruso Harvest School
 * @version    	1
 * @since      	October 23, 2011
 */

/**
 * @todo : set the timezone to the appropriate African setting
 */
date_default_timezone_set('America/Detroit');

/**
 * @todo : set display erros to off
 */
@ini_set('display_errors','On');
@ini_set('log_errors','On');
@ini_set('max_execution_time', 300);
error_reporting(E_ALL | E_STRICT);
@ini_set('error_log','../logs/errors.log');

/**
 * in order to be able to include other files, regardless of the hosting
 * system, SLASH will be defined so that the same path instructions can
 * be used   
 */
if( PATH_SEPARATOR  == ';' ) {
	define('SLASH','\\');
}
else { define('SLASH','/');  }

/**
 * Get path to the directory where this file is running
 * which should be "Source Files"
 */
define('APP_PATH', realpath(dirname(__FILE__)));

/**
 * establish path to project files, array contains paths to all relevant
 * libraries
 */  
set_include_path('.'.PATH_SEPARATOR.implode(PATH_SEPARATOR, array(
    //realpath(APP_PATH . SLASH . 'library' . SLASH . 'Swift' . SLASH . 'V4.0.6' . SLASH . 'lib' ),
    realpath(APP_PATH)
  )));  


?>
<!DOCTYPE head PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>


<?php
/**
 * css and presenation layer scripts
 */
include 'header.php';
?>
</head>

<?php 
/**
 * @uses Coda
 */
?>

<body class="coda-slider-no-js">
<?php 
/**
 * page content
 */

include 'content.php';

/**
 * scripts for metrics and functionality
 */
include 'footer.php';	
?>

</body>
</html>
