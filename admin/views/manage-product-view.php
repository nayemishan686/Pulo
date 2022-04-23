<?php 
    $obj_adminBack = new Admin();
    $viewPdt = $obj_adminBack->displayProduct();

    if(isset($_GET['prostatus'])){
        $pro_id = $_GET['id'];
        if($_GET['prostatus'] == 'delete'){
           $returnMsg = $obj_adminBack->deleteProduct($pro_id);
        }
    }
?>

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
<h2>Manage Product</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
            <th>Category</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            while ($product = mysqli_fetch_assoc($viewPdt)){
        ?>
        <tr>
            <td><?php echo $product['pdt_id'];?></td>
            <td><?php echo $product['pdt_name'];?></td>
            <td><?php echo $product['pdt_price'];?></td>
            <td><?php echo $product['pdt_des'];?></td>
            <td><img style="height: 60px;" src="uploads/<?php echo $product['pdt_img'];?>" alt=""></td>
            <td><?php echo $product['cat_name'];?></td>
            <td>
                <?php 
                    if($product['pdt_status'] == 1) {
                        echo "Published";
                ?>
                    <a href="" class="btn btn-danger">Unpublished</a>
                <?php
                    }else{
                        echo "Unpublished";
                ?>
                    <a href="" class="btn btn-success">Published</a>
                <?php
                    }
                ?>
            </td>
            <td>
                    <a href="" class="btn btn-success">Edit</a>
                    <a href="?prostatus=delete&&id=<?php echo $product['pdt_id'];?>"class="btn btn-danger">Delete</a>
                </td>
        </tr>
        <?php 
            }
        ?>
    </tbody>
</table>