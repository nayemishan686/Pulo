<?php 
    $obj_adminBack = new Admin();
    $pdtCtg = $obj_adminBack->displayCategory();
    if(isset($_POST['addpdtBtn'])){
        $returnMsg = $obj_adminBack->addProduct($_POST);
    }
?>

<form class="form" action="" method="post" enctype="multipart/form-data">
    <?php 
        if(isset($return_msg)){
    ?>
        <div class="alert alert-dark">
            <?php echo $return_msg; ?>
        </div>
    <?php
        }
    ?>
    <h2>Add Product</h2>
    <div class="form-group">
        <label for="pdtName" class="h6">Product Name :</label>
        <input type="text" name="pdtName" class="form-control" placeholder="Enter Product Name" required>
    </div>

    <div class="form-group">
        <label for="pdtPrice" class="h6">Product Price :</label>
        <input type="number" name="pdtPrice" class="form-control" placeholder="Enter Product Price" required>
    </div>

    <div class="form-group">
        <label for="pdtDes" class="h6">Product Description :</label>
        <textarea  name="pdtDes" class="form-control" placeholder="Enter Product Description" cols="30" rows="5" required></textarea>
    </div>

    <div class="form-group">
        <label for="pdtCategory" class="h6">Product Category :</label>
        <select required="true" name="pdtCategory" id="" class="form-control" required>
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
        <label for="pdtImage" class="h6">Product Image :</label>
        <input type="file" name="pdtImage" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="pdtStatus" class="h6">Product Status :</label>
        <select required="true" name="pdtStatus" id="" class="form-control" required>
            <option selected disabled value="" >Select One</option>
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>
    </div>

    <input type="submit" value="Add Category" name="addpdtBtn" class="btn btn-primary">

</form>