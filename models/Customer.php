<?php
session_start();
//membuat class customer
class Customer{
    private $conn;
    private $table_name="customer_tws";
    public $id_user;
    public $nama_user;
    public $username;
    public $email_user;
    public $no_user;
    public $Pass_usser;

    public function __construct($db){
        $this->conn = $db;
        
    }

    //masukkan data customer ke database
    public function create(){
        $data_customer_masuk="INSERT INTO " . $this->table_name . " SET nama_user=:nama, username=:uName, email_user=:email, no_user=:nomor_hp, Pass_usser=:password_user";
        $stmt = $this->conn->prepare($data_customer_masuk);
        //ambil data dengan enkripsi agar terhindar xss and sql injection
        $this->nama_user = htmlspecialchars(strip_tags($this->nama_user));
        $this->email_user = htmlspecialchars(strip_tags($this->email_user));
        $this->no_user = htmlspecialchars(strip_tags($this->no_user));
        $this->Pass_usser = htmlspecialchars(strip_tags($this->Pass_usser));
        //prepare statement 
        $stmt->bindParam(":nama", $this->nama_user);
        $stmt->bindParam(":uName", $this->username);
        $stmt->bindParam(":email", $this->email_user);
        $stmt->bindParam(":nomor_hp", $this->no_user);
        $stmt->bindParam(":password_user", $this->Pass_usser);

        if($stmt->execute()){
            return true;
        }
        return false;
    }

    //handle login customer
    public function login(){
        $data_customer_select="SELECT nama_user,Pass_usser FROM " . $this->table_name . " WHERE username=:uName";
        $stmt = $this->conn->prepare($data_customer_select);
        $stmt->bindParam(':uName',$this->username);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
}
?>