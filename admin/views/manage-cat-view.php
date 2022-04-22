<?php 
    $obj_adminBack = new Admin();
    $ctg_data = $obj_adminBack->displayCategory();

    if(isset($_GET['status'])){
        $get_id = $_GET['id'];
        if($_GET['status'] =="publish"){
            $obj_adminBack->publishCategory($get_id);
        }elseif($_GET['status'] = 'unpublish'){
            $obj_adminBack->unpublishCategory($get_id);
        }
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
                    <a href="" class="btn btn-success">Update</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>

        <?php
            }
        
        ?>
    </tbody>
</table>