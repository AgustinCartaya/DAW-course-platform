<form method="POST" enctype="multipart/form-data" action="">
    <div class="btn-group" role="group" aria-label="">
        <button type="submit" name="action" value="save"  class="btn btn-success">Save</button>
        <button type="submit" name="action" value="cancel"  class="btn btn-warning">Cancel</button>
        <button type="submit" name="action" value="delete"  class="btn btn-warning">Delete</button>
    </div>

    <div class = "form-group">
        <label for="courseId">ID:</label>
        <input type="text" required readonly class="form-control" value="<?php echo $course['id']; ?>" name="courseId" id="courseId">
    </div>

    <div class = "form-group">
        <label for="courseTitle">Title:</label>
        <input type="text" required class="form-control" value="<?php echo $course['title']; ?>" name="courseTitle" id="courseTitle" placeholder="Title">
    </div>

    <div class = "form-group">
        <label for="courseType">Type:</label>
        <input type="text" required class="form-control" value="<?php echo $course['type']; ?>" name="courseType" id="courseType" placeholder="Type">
    </div>

    <div class = "form-group">
        <label for="courseDescription">Description:</label>
        <input type="text" required class="form-control" value="<?php echo $course['description']; ?>" name="courseDescription" id="courseDescription" placeholder="courseDescription">
    </div>

    <div class = "form-group">
        <label for="courseThumbail">Image:</label>
        <input type="file" class="form-control" name="courseThumbail" id="courseThumbail" placeholder="Image">
    </div>

    <br/>
    <br/>
    
    <div class="btn-group" role="group" aria-label="">

        <div class = "form-group">
            <label for="resourceName">Name:</label>
            <input type="text" class="form-control"  name="resourceName" id="resourceName" placeholder="Resource Name">
        </div>

        <div class = "form-group">
            <label for="resourceType">Type:</label>
            <input type="text" class="form-control" name="resourceType" id="resourceType" placeholder="Select a file">
        </div>

        <div class = "form-group">
            <label for="resourceUrl">File:</label>
            <input type="file" class="form-control" name="resourceUrl" id="resourceUrl" placeholder="Resource url">
        </div>

        <div class = "form-group">
            <button type="submit" name="action" value="addResource"  class="btn btn-success">Add resource</button>
        </div>
    </div>
</form>