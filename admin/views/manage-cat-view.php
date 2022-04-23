<?php 
    $obj_adminBack = new Admin();
    $ctg_data = $obj_adminBack->displayCategory();

    if(isset($_GET['status'])){
        $get_id = $_GET['id'];
        if($_GET['status'] =='delete'){
           $deleteMsg = $obj_adminBack->deleteCategory($get_id);
        }elseif($_GET['status'] =='publish'){
            $obj_adminBack->publishCategory($get_id);
        }elseif($_GET['status'] =='unpublish'){
            $obj_adminBack->unpublishCategory($get_id);
        }
    }
?>
<!-- Msg print -->
<?php 
        if(isset($deleteMsg)){
    ?>
        <div class="alert alert-dark">
            <?php echo $deleteMsg; ?>
        </div>
    <?php
        }
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
                <td>
                    <?php 
                        if(($ctg['cat_status']) == 1){
                            echo "Published";
                    ?>
                        <a href="?status=unpublish&&id=<?php echo $ctg['cat_id']; ?>" class="btn btn-danger">Unpublished</a>
                    <?php
                        }else{
                            echo "Unpublished";
                    ?>
                        <a href="?status=publish&&id=<?php echo $ctg['cat_id']; ?>" class="btn btn-success">Published</a>
                    <?php 
                        }
                    ?>
                </td>
                <td>
                    <a href="edit-cat.php?status=edit&&id=<?php echo $ctg['cat_id']; ?>" class="btn btn-success">Edit</a>
                    <a href="?status=delete&&id=<?php echo $ctg['cat_id']; ?>"class="btn btn-danger">Delete</a>
                </td>
            </tr>

        <?php
            }
        
        ?>
    </tbody>
</table>