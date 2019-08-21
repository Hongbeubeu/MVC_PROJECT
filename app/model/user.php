<?php
if ( ! defined('PATH_SYSTEM')) 
    die ('Bad requested!');

    class user{
        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function register($data){
            $this->db->query('INSERT INTO users (name, email, password) values (:name, :email, :password)');
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);

            if ( $this->db->execute() ) {
                return true;
            } else {
                return false;
            }
        }
    
        public function delete_user($id){
            $this->db->query('DELETE FROM users where id = :id');

            $this->db->bind(':id', $id);
        

            if( $this->db->execute() ){
                return true;
            } else {
                return false;
            }
        }
        
        public function login($email,$password){
            $this->db->query('SELECT * from users where email = :email');
            $this->db->bind(':email', $email);
            $row = $this->db->single();

            $hashed_password = $row->password;
            if ( $hashed_password === md5($password) ) {
                return $row;
            } else {
                return false;
            }
        }
    
        public function check_password($email,$password){
            $this->db->query('SELECT * from users where email = :email');
            $this->db->bind(':email', $email);
            $row = $this->db->single();
    
            $hashed_password = $row->password;
            if ($hashed_password === md5($password) ) {
                return $row;
            } else {
                return false;
            }
        }

        public function get_user_by_email($email){
            $this->db->query('SELECT * FROM users WHERE email = :email');

            $this->db->bind(':email', $email);
            $this->db->single();


            if ( $this->db->rowCount() > 0 ) {
                return true;
            } else {
                return false;
            }
        }

        public function get_user_by_id($id){
            $this->db->query('SELECT * FROM users WHERE id = :id');

            $this->db->bind(':id', $id);
            return $this->db->single();
        }
    
        public function get_users(){
            $this->db->query('SELECT * FROM users');
            return $this->db->resultSet();
        }    
    }