<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Desaparecido extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Desaparecido_model');
    } 

    /*
     * Listing of desaparecidos
     */
    function index()
    {
        $data['desaparecidos'] = $this->Desaparecido_model->get_all_desaparecidos();
        
        $data['_view'] = 'desaparecido/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new desaparecido
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'fechaDes' => $this->input->post('fechaDes'),
				'edadDes' => $this->input->post('edadDes'),
				'lugarDes' => $this->input->post('lugarDes'),
				'vestimentaDes' => $this->input->post('vestimentaDes'),
            );
            
            $desaparecido_id = $this->Desaparecido_model->add_desaparecido($params);
            redirect('desaparecido/index');
        }
        else
        {            
            $data['_view'] = 'desaparecido/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a desaparecido
     */
    function edit($idDes)
    {   
        // check if the desaparecido exists before trying to edit it
        $data['desaparecido'] = $this->Desaparecido_model->get_desaparecido($idDes);
        
        if(isset($data['desaparecido']['idDes']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'fechaDes' => $this->input->post('fechaDes'),
					'edadDes' => $this->input->post('edadDes'),
					'lugarDes' => $this->input->post('lugarDes'),
					'vestimentaDes' => $this->input->post('vestimentaDes'),
                );

                $this->Desaparecido_model->update_desaparecido($idDes,$params);            
                redirect('desaparecido/index');
            }
            else
            {
                $data['_view'] = 'desaparecido/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The desaparecido you are trying to edit does not exist.');
    } 

    /*
     * Deleting desaparecido
     */
    function remove($idDes)
    {
        $desaparecido = $this->Desaparecido_model->get_desaparecido($idDes);

        // check if the desaparecido exists before trying to delete it
        if(isset($desaparecido['idDes']))
        {
            $this->Desaparecido_model->delete_desaparecido($idDes);
            redirect('desaparecido/index');
        }
        else
            show_error('The desaparecido you are trying to delete does not exist.');
    }
    
}
