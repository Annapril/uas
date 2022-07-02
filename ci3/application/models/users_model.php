<?php
class Users_model extends CI_model{
    public $id, $username, $password, $email, $created_at, $last_login, $status, $role;

    public function getAll(){
        // menampilkan seluruh data yang ada di table users menggunakan query builder
        $query = $this->db->get('users');
        return $query->result();
    }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('users', ['id'=>$id]);
        return $query->row();
    }
    public function simpan($data){
        //insert into bertujuan untuk menginput atau memasukan data yang dikirim ke dalam database
        $sql = "INSERT INTO users (username,password,email,created_at,last_login,status,role) VALUES (?,?,?,?,?,?,?)";

        $this->db->query($sql, $data);

        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE users SET username=?,password=?,email=?,created_at=?,last_login=?,status=?,role=? WHERE id=?";
        this->db->query($sql, $data);
    }
    public function delete($data){
        // hapus data users
        $sql = "DELETE FROM users WHERE id=?";
        $this->db->query($sql, $data);
    }
}

?>