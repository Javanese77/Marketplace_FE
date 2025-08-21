<?php
class Database{
    private $host = "127.0.0.1";
    private $db_name = "web_crud_tws_m10";
    private $username = "root";
    private $password = "";
    public $db_conn;
    public function getConnection(){
    $this->db_conn = null;
        try{
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8";
            $this->db_conn = new PDO($dsn, $this->username, $this->password);
            $this->db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $exception){
            echo "Connection down: " . $exception->getMessage();
            //echo "<script>windows.location.href='/JB_Marketplace/view/error_massage/error.php'</script>";
        }
        return $this->db_conn;
    }
}
?>