<?php
/* SVN FILE: $Id: routes.php 5118 2007-05-18 17:19:53Z phpnut $ */
/**
 * Short description for file.
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework <http://www.cakephp.org/>
 * Copyright 2005-2007, Cake Software Foundation, Inc.
 *								1785 E. Sahara Avenue, Suite 490-204
 *								Las Vegas, Nevada 89104
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright		Copyright 2005-2007, Cake Software Foundation, Inc.
 * @link				http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package			cake
 * @subpackage		cake.app.config
 * @since			CakePHP(tm) v 0.2.9
 * @version			$Revision: 5118 $
 * @modifiedby		$LastChangedBy: phpnut $
 * @lastmodified	$Date: 2007-05-18 12:19:53 -0500 (Fri, 18 May 2007) $
 * @license			http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.thtml)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'view','home'));

	Router::connect('/admin/', array('controller' => 'projects', 'action' => 'index','admin'=>"admin"));
	
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/page/*', array('controller' => 'pages', 'action' => 'view'));	

/*	Router::connect('/pagina/*', array('controller' => 'pages', 'action' => 'view'));	

	Router::connect('/servicio/*', array('controller' => 'categories', 'action' => 'view'));		
	
	Router::connect('/cliente/*', array('controller' => 'clients', 'action' => 'view'));	
*/
	
/**
 * Then we connect url '/test' to our test controller. This is helpfull in
 * developement.
 */

?>