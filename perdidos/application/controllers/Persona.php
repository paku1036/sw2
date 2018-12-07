<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Persona extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Persona_model');
    } 

    /*
     * Listing of persona
     */
    function index()
    {
        $data['persona'] = $this->Persona_model->get_all_persona();
        
        $data['_view'] = 'persona/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new persona
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'CI' => $this->input->post('CI'),
				'telefono' => $this->input->post('telefono'),
				'nombre' => $this->input->post('nombre'),
				'direccion' => $this->input->post('direccion'),
				'correo' => $this->input->post('correo'),
				'sexo' => $this->input->post('sexo'),
				'fechaNac' => $this->input->post('fechaNac'),
            );
            
            $persona_id = $this->Persona_model->add_persona($params);
            redirect('persona/index');
        }
        else
        {            
            $data['_view'] = 'persona/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a persona
     */
    function edit($idPersona)
    {   
        // check if the persona exists before trying to edit it
        $data['persona'] = $this->Persona_model->get_persona($idPersona);
        
        if(isset($data['persona']['idPersona']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'CI' => $this->input->post('CI'),
					'telefono' => $this->input->post('telefono'),
					'nombre' => $this->input->post('nombre'),
					'direccion' => $this->input->post('direccion'),
					'correo' => $this->input->post('correo'),
					'sexo' => $this->input->post('sexo'),
					'fechaNac' => $this->input->post('fechaNac'),
                );

                $this->Persona_model->update_persona($idPersona,$params);            
                redirect('persona/index');
            }
            else
            {
                $data['_view'] = 'persona/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The persona you are trying to edit does not exist.');
    } 

    /*
     * Deleting persona
     */
    function remove($idPersona)
    {
        $persona = $this->Persona_model->get_persona($idPersona);

        // check if the persona exists before trying to delete it
        if(isset($persona['idPersona']))
        {
            $this->Persona_model->delete_persona($idPersona);
            redirect('persona/index');
        }
        else
            show_error('The persona you are trying to delete does not exist.');
    }
    
}