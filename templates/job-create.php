<?php include 'includes/header.php';?>
    
    <h2 class="page-header">Create Job Listing</h2>

    <form method="post" action="create.php">

        <div class="form-group">
            
            <label for="company">Company</label>
            <input type="text" id="company" name="company" class="form-control">

            <label for="category">Category</label>
            <select class="form-control" id="category" name="category" >
          
                <option value="0">Choose Category</option>

                <?php foreach($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php endforeach; ?>

            </select>

            <label for="job_title">Job title</label>
            <input type="text" id="job_title" name="job_title" class="form-control">

            <label for="description">Description</label>
            <textarea id="description" name="description" class="form-control"></textarea>

            <label for="location">Location</label>
            <input type="text" id="location" name="location" class="form-control">

            <label for="salary">Salary</label>
            <input type="text" id="salary" name="salary" class="form-control">

            <label for="contact_user">Contact User</label>
            <input type="text" id="contact_user" name="contact_user" class="form-control">

            <label for="contact_email">Contact Email</label>
            <input type="text" id="contact_email" name="contact_email" class="form-control">

        </div>

        <input type="submit" value="Submit" name="submit" class="btn btn-default btnjob">

    </form>

<?php include 'includes/footer.php';?>