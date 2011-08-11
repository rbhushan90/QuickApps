<?php
/**
 * Taxonomy Controller
 *
 * PHP version 5
 *
 * @category Taxonomy.Controller
 * @package  QuickApps
 * @version  1.0
 * @author   Christopher Castro <chris@quickapps.es>
 * @link     http://cms.quickapps.es
 */
class TaxonomyController extends TaxonomyAppController {

	var $name = 'Taxonomy';
	var $uses = array();
	
	function admin_index(){
		$this->redirect('/admin/taxonomy/vocabularies');
	}
}