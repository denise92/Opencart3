<?php
class ControllerExtensionModuleStarterModule extends Controller {
    public function index($setting) {
	        
           $this->load->language('extension/module/starter_module');

            $data['heading_title'] = $this->language->get('heading_title');
            
            $data['new'] = $this->config->get('new');
            
            $data['new'] = (int) $setting['new'];  
         
           return $this->load->view('extension/module/starter_module', $data);
            
    }    
}
