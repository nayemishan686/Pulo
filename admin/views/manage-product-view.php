<?php 
    $obj_adminBack = new Admin();
    $viewPdt = $obj_adminBack->displayProduct();
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
            <td><?php echo $product['pdt_status'];?></td>
            <td>
                    <a href="" class="btn btn-success">Edit</a>
                    <a href=""class="btn btn-danger">Delete</a>
                </td>
        </tr>
        <?php 
            }
        ?>
    </tbody>
</table>