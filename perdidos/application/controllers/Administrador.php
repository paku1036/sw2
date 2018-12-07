<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Administrador extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Administrador_model');
    } 

    /*
     * Listing of administrador
     */
    function index()
    {
        $data['administrador'] = $this->Administrador_model->get_all_administrador();
        
        $data['_view'] = 'administrador/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new administrador
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'PERSONAidPersona' => $this->input->post('PERSONAidPersona'),
				'admin' => $this->input->post('admin'),
				'pass' => $this->input->post('pass'),
            );
            
            $administrador_id = $this->Administrador_model->add_administrador($params);
            redirect('administrador/index');
        }
        else
        {
			$this->load->model('Persona_model');
			$data['all_persona'] = $this->Persona_model->get_all_persona();
            
            $data['_view'] = 'administrador/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a administrador
     */
    function edit($idAdmin)
    {   
        // check if the administrador exists before trying to edit it
        $data['administrador'] = $this->Administrador_model->get_administrador($idAdmin);
        
        if(isset($data['administrador']['idAdmin']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'PERSONAidPersona' => $this->input->post('PERSONAidPersona'),
					'admin' => $this->input->post('admin'),
					'pass' => $this->input->post('pass'),
                );

                $this->Administrador_model->update_administrador($idAdmin,$params);            
                redirect('administrador/index');
            }
            else
            {
				$this->load->model('Persona_model');
				$data['all_persona'] = $this->Persona_model->get_all_persona();

                $data['_view'] = 'administrador/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The administrador you are trying to edit does not exist.');
    } 

    /*
     * Deleting administrador
     */
    function remove($idAdmin)
    {
        $administrador = $this->Administrador_model->get_administrador($idAdmin);

        // check if the administrador exists before trying to delete it
        if(isset($administrador['idAdmin']))
        {
            $this->Administrador_model->delete_administrador($idAdmin);
            redirect('administrador/index');
        }
        else
            show_error('The administrador you are trying to delete does not exist.');
    }
    
}
