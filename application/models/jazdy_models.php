<?php
/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 16.04.2018
 * Time: 21:42
 */

function getRows($id= "") {
    if(!empty($id)){
        $query = $this->db->get_where('kniha_jazd', array('id' => $id));
        return $query->row_array();
    }else{
        $query = $this->db->get('kniha_jazd');
        return $query->result_array();
    }
}
// vlozenie zaznamu
public function insert($data = array()) {
    $insert = $this->db->insert('kniha_jazd', $data);
    if($insert){
        return $this->db->insert_id();
    }else{
        return false; }
}
// aktualizacia zaznamu
public function update($data, $id) {
    if(!empty($data) && !empty($id)){
        $update = $this->db->update('kniha_jazd', $data,
            array('id'=>$id));
        return $update?true:false;
    }else{
        return false;
    }
}
// odstranenie zaznamu
public function delete($id){
    $delete = $this->db->delete('kniha_jazd',array('id'=>$id));
    return $delete?true:false;
}