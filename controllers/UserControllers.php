<?php
include_once __DIR__ . '/../config/Database.php';
include_once __DIR__ . '/../models/Customer.php';

class UserControllers{
    private $db;
    private $customer;

    public function __construct(){
        $database = new Database();
        $this->db = $database->getConnection();
        $this->customer = new Customer($this->db); 
    }

    public function index() {
    // Load the view
    include_once __DIR__ . '/../view/public/Home.php';
    }

    public function about() {
    // Load the view
    include_once __DIR__ . '/../view/public/About_us.php';
    }

    public function singin() {
    // Load the view
    include_once __DIR__ . '/../view/public/auth/login_user.php';
    }

    public function sigup() {
    // Load the view
    include_once __DIR__ . '/../view/public/auth/register_user.php';
    }

    public function comm_sun(){
        include_once __DIR__ . '/../view/error_massage/error.php';
    }

    public function form_beli(){
        include_once __DIR__ . '/../view/public/form_pembelian.php';
    }

    public function kirim_wa(){
        echo "<script>alert('oke,terbeli,silahkan ss dulu dan kirimkan ke instagram dengan ss tersebut,jangan nipu,saya tau stocknya')
        window.location.href='https://www.instagram.com/cristiano?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==';</script>";
    }

    public function logout(){
        if (session_status() === PHP_SESSION_NONE) {
        session_start();
        }
        session_unset();

        //nyembunyiin error dan hapus session
        @session_destroy();
        echo "<script>alert('keluar')
        window.location.href='index.php?controller=User&action=login';</script>" ;
    }

    public function create(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $this->customer->nama_user = $_POST['nama'];
            $this->customer->username = $_POST['uName'];
            $this->customer->email_user = $_POST['email'];
            $this->customer->no_user = $_POST['no_hp'];
            $this->customer->Pass_usser= password_hash($_POST['pass'],PASSWORD_DEFAULT);
            if($this->customer->create()){
            echo "<script>alert('Data User berhasil ditambahkan')
            window.location.href='index.php?controller=User&action=login';</script>";
            }else{
            echo "<script>alert('Data User gagal ditambahkan')
            window.location.href='index.php?controller=User&action=create';</script>";   
            }
        }else{
            include_once __DIR__ . '/../view/public/auth/register_user.php';
        }
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $user = $this->customer->username = $_POST['uName'];
            $pw = $this->customer->Pass_usser = $_POST['pass'];

            $user_cus=$this->customer->login();

            if($user_cus && password_verify($pw,$user_cus['Pass_usser'])){
                $_SESSION['islogin']=true;
                $_SESSION['namaUser']=$user_cus['nama_user'];
                //var_dump($_SESSION);
                //exit;
                echo "<script>alert('Password & username match,silahkan masuk')
                window.location.href='index.php?controller=User&action=index';</script>";
                exit;
            }else{
                echo "<script>alert('Password atau Username salah') 
                window.location.href='index.php?controller=User&action=login';</script>";
                //var_dump($user_cus);
                //exit;
            }
           
        }else{
        include_once __DIR__ . '/../view/public/auth/login_user.php';
        }
    }

    public function beli(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(!isset($_SESSION['namaUser'])){
                echo "<script>alert('belum login,masuk ke form login dulu')
                window.location.href='index.php?controller=User&action=login';</script>";
            }else{
                echo "<script>alert('arahkan ke form pembelian')
                window.location.href='index.php?controller=User&action=form_beli';</script>"; 
            }
        }
    }
    
    public function alertLanjut(){
        echo "<script>window.location.href='index.php?controller=User&action=kirim_wa';</script>";
    }
}
?>