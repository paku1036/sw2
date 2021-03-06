<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Publicacion extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Publicacion_model');
    } 

    /*
     * Listing of publicacion
     */
    function index()
    {
        $data['publicacion'] = $this->Publicacion_model->get_all_publicacion();
        
        $data['_view'] = 'publicacion/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new publicacion
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'DESAPARECIDOSidDes' => $this->input->post('DESAPARECIDOSidDes'),
				'USUARIOidUsuario' => $this->input->post('USUARIOidUsuario'),
				'fecha' => $this->input->post('fecha'),
				'celular' => $this->input->post('celular'),
				'estado' => $this->input->post('estado'),
            );
            
            $publicacion_id = $this->Publicacion_model->add_publicacion($params);
            redirect('publicacion/index');
        }
        else
        {
			$this->load->model('Desaparecido_model');
			$data['all_desaparecidos'] = $this->Desaparecido_model->get_all_desaparecidos();

			$this->load->model('Usuario_model');
			$data['all_usuario'] = $this->Usuario_model->get_all_usuario();
            
            $data['_view'] = 'publicacion/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a publicacion
     */
    function edit($idPubli)
    {   
        // check if the publicacion exists before trying to edit it
        $data['publicacion'] = $this->Publicacion_model->get_publicacion($idPubli);
        
        if(isset($data['publicacion']['idPubli']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'DESAPARECIDOSidDes' => $this->input->post('DESAPARECIDOSidDes'),
					'USUARIOidUsuario' => $this->input->post('USUARIOidUsuario'),
					'fecha' => $this->input->post('fecha'),
					'celular' => $this->input->post('celular'),
					'estado' => $this->input->post('estado'),
                );

                $this->Publicacion_model->update_publicacion($idPubli,$params);            
                redirect('publicacion/index');
            }
            else
            {
				$this->load->model('Desaparecido_model');
				$data['all_desaparecidos'] = $this->Desaparecido_model->get_all_desaparecidos();

				$this->load->model('Usuario_model');
				$data['all_usuario'] = $this->Usuario_model->get_all_usuario();

                $data['_view'] = 'publicacion/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The publicacion you are trying to edit does not exist.');
    } 

    /*
     * Deleting publicacion
     */
    function remove($idPubli)
    {
        $publicacion = $this->Publicacion_model->get_publicacion($idPubli);

        // check if the publicacion exists before trying to delete it
        if(isset($publicacion['idPubli']))
        {
            $this->Publicacion_model->delete_publicacion($idPubli);
            redirect('publicacion/index');
        }
        else
            show_error('The publicacion you are trying to delete does not exist.');
    }
    
}
