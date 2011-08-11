<?php
/**
 * System Controller
 *
 * PHP version 5
 *
 * @category System.Controller
 * @package  QuickApps
 * @version  1.0
 * @author   Christopher Castro <chris@quickapps.es>
 * @link     http://cms.quickapps.es
 */
class SystemController extends SystemAppController {
	var $name = 'System';
	var $uses = array();
	
	function admin_index(){
		$this->redirect("/admin/system/dashboard");
	}
}