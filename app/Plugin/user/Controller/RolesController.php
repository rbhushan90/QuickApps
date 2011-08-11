<?php
/**
 * Roles Controller
 *
 * PHP version 5
 *
 * @category User.Controller
 * @package  QuickApps
 * @version  1.0
 * @author   Christopher Castro <chris@qucikapps.es>
 * @link     http://cms.quickapps.es
 */
class RolesController extends UserAppController {
	var $name = 'Roles';
	var $uses = array('User.User');
	
	function admin_index(){
        if ( isset($this->data['Role']) ){
            if ( $this->User->Role->save($this->data) ){
                $this->flashMsg(__t('Role has been saved'), 'success');
            } else {
                $this->flashMsg(__t('Role could not be saved. Please, try again.'), 'error');
            }
        }

        $roles = $this->User->Role->find('all');
        $this->set('results', $roles);
		$this->setCrumb('/admin/user/');
		$this->setCrumb( array(__t('User roles'), '') );
		$this->title( __t('User Roles') );
	}

    function admin_edit($id){
        if ( isset($this->data['Role'])  ){
            if ( $this->User->Role->save($this->data) ){
                $this->flashMsg(__t('Role has been saved'), 'success');
                $this->redirect($this->referer());
            } else {
                $this->flashMsg(__t('Role could not be saved. Please, try again.'), 'error');
            }           
        }
        $this->data = $this->User->Role->findById($id) or $this->redirect('/admin/user/roles');
		$this->setCrumb('/admin/user/');
		$this->setCrumb( array(__t('User roles'), '/admin/user/roles') );
		$this->setCrumb( array(__t('Editing role'), '') );
		$this->title( __t('Editing Role') );
    }
    
    function admin_delete($id){
        if ( in_array($id, array(1, 2, 3)) )
            $this->redirect('/admin/user/roles');
        $this->User->Role->delete($id);
        $this->redirect('/admin/user/roles');
    }
}