<?php
include_once __DIR__ . '/../config/Database.php';
include_once __DIR__ . '/../models/Produk.php';


class ProdukControllers{
    private $db;
    private $produk;

    public function __construct(){
        $database = new Database();
        $this->db = $database->getConnection();
        $this->produk = new produk($this->db); 
    }

    
}

?>