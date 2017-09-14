<?php include 'includes/header.php';?>
    
    <h2 class="page-header">Edit Job Listing</h2>

    <form method="post" action="edit.php?id=<?php echo $job->id; ?>">

        <div class="form-group">
            
            <label for="company">Company</label>
            <input type="text" id="company" name="company" class="form-control"
            value="<?php echo $job->company; ?>">

            <label for="category">Category</label>
            <select class="form-control" id="category" name="category" >
          
                <option value="0">Choose Category</option>

                <?php foreach($categories as $category): ?>
                    
                    <?php if($job->category_id == $category->id ): ?>
                        <option value="<?php echo $category->id; ?>" selected ><?php echo $category->name; ?></option>
                    <?php else: ?>
                        <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                    <?php endif; ?>                
                    
                <?php endforeach; ?>

            </select>

            <label for="job_title">Job title</label>
            <input type="text" id="job_title" name="job_title" class="form-control"
            value="<?php echo $job->job_title; ?>">

            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control">
                <?php echo $job->description; ?>
            </textarea>

            <label for="location">Location</label>
            <input type="text" id="location" name="location" class="form-control"
            value="<?php echo $job->location; ?>">

            <label for="salary">Salary</label>
            <input type="text" id="salary" name="salary" class="form-control"
            value="<?php echo $job->salary; ?>">

            <label for="contact_user">Contact User</label>
            <input type="text" id="contact_user" name="contact_user" class="form-control"
            value="<?php echo $job->contact_user; ?>">

            <label for="contact_email">Contact Email</label>
            <input type="text" id="contact_email" name="contact_email" class="form-control"
            value="<?php echo $job->contact_email; ?>">

        </div>

        <input type="submit" value="Submit" name="submit" class="btn btn-default btnjob">

    </form>

<?php include 'includes/footer.php';?>