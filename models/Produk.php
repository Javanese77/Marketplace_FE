<?php
class produk{
    private $conn;
    private $table_name="produk";
    public $id_produk;
    public $nama_produk;
    public $jenis_produk;
    public $stock_produk;
    public $harga_produk;



    public function __construct($db){
        $this->conn = $db;
        
    }

    public function ambil_produk(){
        $data_product_select="SELECT nama_produk,jenis_produk,stock_produk,harga_produk FROM " . $this->table_name;
        $stmt = $this->conn->prepare($data_product_select);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
}
?>