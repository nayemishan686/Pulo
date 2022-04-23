<?php 
    $obj_adminBack = new Admin();
    if(isset($_GET['status'])){
        $get_id = $_GET['id'];
        if($_GET['status'] == 'edit'){
            $returnData = $obj_adminBack->getEditToUpdateCategory($get_id);
        }
    }

    if(isset($_POST['updateBtn'])){
        $returnMsg = $obj_adminBack->updateCategory($_POST);
    }
?>

<form action="" method="post">
    <h2>Update Category</h2>
    <?php 
        if(isset($returnMsg)){
    ?>
        <div class="alert alert-dark">
            <?php echo $returnMsg; ?>
        </div>
    <?php
        }
    ?>
    <div class="form-group">
        <input hidden type="text" name="uCtgId" class="form-control" placeholder="Enter Category Name" value = <?php echo $returnData['cat_id']; ?> required>
    </div>

    <div class="form-group">
        <label for="uCtgName" class="h6">Category Name :</label>
        <input type="text" name="uCtgName" class="form-control" placeholder="Enter Category Name" value = <?php echo $returnData['cat_name']; ?> required>
    </div>
    
    <div class="form-group">
        <label for="uCtgDes" class="h6">Category Description :</label>
        <textarea name="uCtgDes" id="" cols="30" rows="10" class="form-control" placeholder="Enter Category Description" required><?php echo $returnData['cat_des']; ?></textarea>
    </div>
    <input type="submit" value="Update Category" name="updateBtn" class="btn btn-primary"> 
</form>