<?php
class Menulist_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function getList(){
        $query = $this->db->query('SELECT a.menu_id, a.menu_name, a.url, a.root_id FROM menu_list AS a ');
        $listResult = array();
        foreach($query->result_array() as $resultKey => $resultVal){
            if(!empty($resultVal['root_id'])){
                $listResult[$resultVal['root_id']]['sub'][$resultVal['menu_id']] = array(
                    'name' => $resultVal['menu_name'], 'url' => $resultVal['url']
                );
            }else{
                $listResult[$resultVal['menu_id']] = array(
                    'name' => $resultVal['menu_name'], 'url' => $resultVal['url']
                );
            }
            
        }

        return $listResult;
    }

    public function getListBy($where = null){

        $query = $this->db->query('SELECT a.menu_id, a.menu_name, a.url, a.root_id FROM menu_list AS a WHERE '.$where);
        $listResult = array();
        foreach($query->result_array() as $resultKey => $resultVal){
            if(!empty($resultVal['root_id'])){
                $listResult[$resultVal['root_id']]['sub'][$resultVal['menu_id']] = array(
                    'name' => $resultVal['menu_name'], 'url' => $resultVal['url']
                );
            }else{
                $listResult[$resultVal['menu_id']] = array(
                    'name' => $resultVal['menu_name'], 'url' => $resultVal['url']
                );
            }

        }

        return $listResult;
    }

    public function setMenu($data = array()){
        if(count($data) > 0){
            if(isset($data['menu_id'])){
                $this->db->where('menu_id', $data['menu_id']);
                $this->db->update('menu_list', $data);
            }else{
                $this->db->insert('menu_list', $data);
            }
        }
    }

    public function unsetMenu($id = null){
        if(!empty($id)){
            $this->db->delete('menu_list', array('menu_id' => $id));
        }
    }
}

?>
