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

    function getEditToUpdateCategory($id){
        $query = "SELECT `cat_id`, `cat_name`, `cat_des`, `cat_status` FROM `Category_table` WHERE `cat_id` = '$id'";
        if(mysqli_query($this->conn,$query)){
            $cat_info = mysqli_query($this->conn,$query);
            $ct_info = mysqli_fetch_assoc($cat_info);
            return $ct_info;
        }
    }

    function updateCategory($receivedId){
        $ctg_id = $receivedId['uCtgId'];
        $ctg_name = $receivedId['uCtgName'];
        $ctg_des = $receivedId['uCtgDes'];

        $query = "UPDATE `Category_table` SET `cat_name`='$ctg_name',`cat_des`='$ctg_des' WHERE `cat_id` = '$ctg_id'";
        if(mysqli_query($this->conn,$query)){
            $msg = "category updated successfully";
            return $msg;
        }
    }

    function addProduct($data){
        $pdtName = $data['pdtName'];
        $pdtPrice = $data['pdtPrice'];
        $pdtDes = $data['pdtDes'];
        $pdtCategory = $data['pdtCategory'];
        $pdtImgName = $_FILES['pdtImage']['name'];
        $pdtTmpName = $_FILES['pdtImage']['tmp_name'];
        $pdtImgSize = $_FILES['pdtImage']['size'];
        $pdt_ext = pathinfo($pdtImgName, PATHINFO_EXTENSION);
        $pdtStatus = $data['pdtStatus'];

        if($pdt_ext == 'jpg' or $pdt_ext == 'png' or $pdt_ext == 'jpeg'){
            if($pdtImgSize <= 2097152){
                $query ="INSERT INTO `product_table`(`pdt_name`, `pdt_price`, `pdt_des`, `pdt_ctg`, `pdt_img`, `pdt_status`) VALUES ('$pdtName','$pdtPrice','$pdtDes','$pdtCategory','$pdtImgName','$pdtStatus')";

                $uploads_dir = 'uploads/';
                if(mysqli_query($this->conn,$query)){
                    move_uploaded_file($pdtTmpName, $uploads_dir.$pdtImgName);
                    $msg = "Your Product Upload Successfully";
                    return $msg;
                }

            }else{
                $msg = "File size must be under 2 MB";
                return $msg;
            }
        }else{
            $msg = "Your File must be a jpg or png or jpeg";
            return $msg;
        }
    }
}