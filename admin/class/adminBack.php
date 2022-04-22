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

    function adminLogout() {
        unset($_SESSION['adminId']);
        unset($_SESSION['adminUser']);
        unset($_SESSION['adminEmail']);
        unset($_SESSION['adminPass']);
        header("location: index.php");
    }

    function addCategory($data){
        $ctgName = $data['ctgName'];
        $ctgDes = $data['ctgDes'];
        $ctgStatus = $data['ctgStatus'];

        $query = "INSERT INTO `Category_table`(`cat_name`, `cat_des`, `cat_status`) VALUES ('$ctgName','$ctgDes','$ctgStatus')";

        if(mysqli_query($this->conn,$query)){
            $msg = "Product category added successfully";
            return $msg;
        }else{
            $msg = "Product category can't added";
            return $msg;
        }
    }

    function displayCategory(){
        $query = "SELECT * FROM `Category_table`";
        if(mysqli_query($this->conn,$query)){
            $returnCtg = mysqli_query($this->conn,$query);
            return $returnCtg;
        }
    }

    function publishCategory($id){
        $query = "UPDATE `Category_table` SET `cat_status`=1 WHERE `cat_id` = '$id'";
        mysqli_query($this->conn,$query);
    }

    function unpublishCategory($id){
        $query = "UPDATE `Category_table` SET `cat_status`=0 WHERE `cat_id` = '$id'";
        mysqli_query($this->conn,$query);
    }

    function deleteCategory($id){
        $query = "DELETE FROM Category_table WHERE `Category_table`.`cat_id` = '$id'";
        if(mysqli_query($this->conn,$query)){
            $msg = 'Category deleted successfully';
            return $msg;
        }
    }
}