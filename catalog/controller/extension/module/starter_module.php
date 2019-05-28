<?php
class ControllerExtensionModuleStarterModule extends Controller {
    public function index($setting) {
	        
		$this->load->language('extension/module/starter_module');

		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['name']   	   = $setting['name'];
		$data['new']    	   = (int) $setting['new'];
		$data['status'] 	   = (int) $setting['status'];

		return $this->load->view('extension/module/starter_module', $data);

    }
}
