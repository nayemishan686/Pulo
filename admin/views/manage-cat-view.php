<?php 
    $obj_adminBack = new Admin();
    $ctg_data = $obj_adminBack->displayCategory();
?>
<h2>Manage Category</h2>
<table class="table table-striped">
    <thead>
        <th>ctg_id</th>
        <th>ctg_name</th>
        <th>ctg_des</th>
        <th>ctg_status</th>
        <th>action</th>
    </thead>

    <tbody>
        <?php 
            while($ctg = mysqli_fetch_assoc($ctg_data)){
        ?>
            <tr>
                <td><?php echo $ctg['cat_id']; ?></td>
                <td><?php echo $ctg['cat_name']; ?></td>
                <td><?php echo $ctg['cat_des']; ?></td>
                <td><?php echo $ctg['cat_status']; ?></td>
                <td>
                    <a href="" class="btn btn-success">Update</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>

        <?php
            }
        
        ?>
    </tbody>
</table>