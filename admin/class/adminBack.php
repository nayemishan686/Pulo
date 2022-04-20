<?php 
class Admin{
    
    private $conn;
    public function __construct(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "Fulo";

        $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(!$this->conn){
            echo "Failed to connect";
            die();
        }
    }

    function adminLogin($data){
        $admin_email = $data['adminEmail'];
        $admin_password = md5($data['adminPass']);

        $query = "SELECT * FROM `Admin_Login` WHERE admin_email='$admin_email'  AND admin_pass='$admin_password' ";

        if($admin_email != '' && $admin_password != ''){
            
            if(mysqli_query($this->conn,$query)){
                $result = (mysqli_query($this->conn,$query));
                $admin_details = mysqli_fetch_assoc($result);
                if($admin_details){
                    header("location: dashboard.php");
                    session_start();
                    $_SESSION['adminId'] = $admin_details['id'];
                    $_SESSION['adminUser'] = $admin_details['admin_username'];
                    $_SESSION['adminEmail'] = $admin_details['admin_email'];
                }else{
                    echo "Wrong email or password";
                }
            }
            
        }else{
            echo "Please enter email and password";
        }
    }
}