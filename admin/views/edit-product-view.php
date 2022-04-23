<?php 
    $obj_adminBack = new Admin();
    $pdtCtg = $obj_adminBack->displayCategory();
    if(isset($_GET['prostatus'])){
        $get_id = $_GET['id'];
        if($_GET['prostatus'] == 'edit'){
            $product_info =$obj_adminBack->getEditToUpdateProduct($get_id);
        }
    }

    if(isset($_POST['updatepdtBtn'])){
        $returnMsg = $obj_adminBack->updateProduct($_POST);
    }
?>

<form class="form" action="" method="post" enctype="multipart/form-data">
    <!-- Msg print -->
    <?php 
        if(isset($returnMsg)){
    ?>
        <div class="alert alert-dark">
            <?php echo $returnMsg; ?>
        </div>
    <?php
        }
    ?>
    <h2>Update Product</h2>
    <div class="form-group">
        <input hidden type="text" name="uPdtId" class="form-control" placeholder="Enter Category Name" value="<?php echo $product_info['pdt_id']; ?>" required>
    </div>
    <div class="form-group">
        <label for="updtName" class="h6">Product Name :</label>
        <input type="text" name="updtName" class="form-control" placeholder="Enter Product Name" value="<?php echo $product_info['pdt_name']; ?>"required>
    </div>

    <div class="form-group">
        <label for="updtPrice" class="h6">Product Price :</label>
        <input type="number" name="updtPrice" class="form-control" placeholder="Enter Product Price" value="<?php echo $product_info['pdt_price']; ?>" required>
    </div>

    <div class="form-group">
        <label for="updtDes" class="h6">Product Description :</label>
        <textarea  name="updtDes" class="form-control" placeholder="Enter Product Description" cols="30" rows="5" required><?php echo $product_info['pdt_des']; ?></textarea>
    </div>

    <div class="form-group">
        <label for="updtCategory" class="h6">Product Category :</label>
        <select required="true" name="updtCategory" id="" class="form-control" required>
            <option selected disabled value="" >Select One</option>
            <?php
                while($ctg = mysqli_fetch_assoc($pdtCtg)){
            ?>
                <option value="<?php echo $ctg['cat_id']; ?>"><?php echo $ctg['cat_name']; ?></option>
            <?php 
                }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="updtImage" class="h6">Product Image :</label>
        <input type="file" name="updtImage" class="form-control" required>
    </div>


    <input type="submit" value="Update Category" name="updatepdtBtn" class="btn btn-primary">

</form>