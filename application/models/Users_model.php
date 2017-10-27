<?php

class Users_model extends CI_Model {

function __construct()

{

parent::__construct();

$this->load->database();


}

// public function get_all_student()

// {
// $query = $this->db->get('students');
// return $query->result();
// }


    function get_all_users($limit, $start) {

        $this->db->limit($limit, $start);
        $query = $this->db->get("students");

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {

                $data[] = $row;
            }

            return $data;
        }else{
            $not_found = "No data found";
            return $not_found;
        }

        return $query->result();
    }



	
	

 function get_students_of_dept($deprt)
 {
$this->db->select("*");

$this->db->from('students');

$this->db->where('dept', $deprt);
$query = $this->db->get();

return $query->result();
}

function get_students_of_dept_sem($deprt, $sem)
 {
$this->db->select("*");

$this->db->from('students');

$this->db->where(array('dept' => $deprt,'sem'=>$sem ));
$query = $this->db->get();

return $query->result();
}


function record_count() {

    return $this->db->count_all("students");
}


public function insert_users_to_db($data, $url)

{
    $this->db->set('img', $url);
    return $this->db->insert('students', $data, $url);
}

//////////////////////////////
    public function getById($id){
        $query = $this->db->get_where('students', array('id' => $id));
        return $query->row_array();
    }

public function data_id($id)
{
    $this->db->select("*");

    $this->db->from('students');

    $this->db->where('id', $id);
    $query = $this->db->get();

return $query->result();
}





public function search($name)
{
    $this->db->select("*");

    $this->db->from('students');

    $this->db->where('name', $name);
    $query = $this->db->get();

return $query->result();


}

public function data_roll($roll)
{
    $this->db->select("*");

    $this->db->from('students');

    $this->db->where('roll', $roll);
    $query = $this->db->get();

return $query->result();


}



    /////////////////////////////////
public function update_info($data,$id)

{
    // $this->db->set('img', $url);
$this->db->where('students.id',$id);

return $this->db->update('students', $data);

}



public function delete_a_user($id)

{
$this->db->where('students.id',$id);
return $this->db->delete('students');
}
public function delete_a_user_img($roll)

{
$this->db->where('students.roll',$roll);


return ;//$this->db->delete('students');
}


}

?>
