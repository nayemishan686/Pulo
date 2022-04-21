<form action="" method="post">
    <h2>Add Category</h2>
    <div class="form-group">
        <label for="ctgName" class="h6">Category Name :</label>
        <input type="text" name="ctgName" class="form-control" placeholder="Enter Category Name" required>
    </div>
    
    <div class="form-group">
        <label for="ctgDes" class="h6">Category Description :</label>
        <textarea name="ctgDes" id="" cols="30" rows="10" class="form-control" placeholder="Enter Category Description" required></textarea>
    </div>

    <div class="form-group">
        <label for="ctgStatus" class="h6">Category Status :</label>
        <select required="true" name="ctgStatus" id="" class="form-control" required>
            <option selected disabled value="" >Select One</option>
            <option value="1">Published</option>
            <option value="0">Unpublished</option>
        </select>
    </div>

    <input type="submit" value="Add Category" class="btn btn-primary">
</form>