<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Administrador_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get administrador by idAdmin
     */
    function get_administrador($idAdmin)
    {
        return $this->db->get_where('administrador',array('idAdmin'=>$idAdmin))->row_array();
    }
        
    /*
     * Get all administrador
     */
    function get_all_administrador()
    {
        $this->db->order_by('idAdmin', 'desc');
        return $this->db->get('administrador')->result_array();
    }
        
    /*
     * function to add new administrador
     */
    function add_administrador($params)
    {
        $this->db->insert('administrador',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update administrador
     */
    function update_administrador($idAdmin,$params)
    {
        $this->db->where('idAdmin',$idAdmin);
        return $this->db->update('administrador',$params);
    }
    
    /*
     * function to delete administrador
     */
    function delete_administrador($idAdmin)
    {
        return $this->db->delete('administrador',array('idAdmin'=>$idAdmin));
    }
}