<?php

class Auth_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserByUsername($username)
    {
        $this->db->query('SELECT * FROM tabel_user WHERE username = :username');
        $this->db->bind(':username', $username);
        return $this->db->fetch();
    }
}
