<?php 
 include('includes/header.php');
 include('includes/navbar.php');
 include('database/config.php');
?>
  
    <div class="col-md-10 mt-5">
      <div class="row">
        <div class="col-md-6">
        
          <div class="crteate-contact-form">

          <?php 
                // Edit Button Actions 
                if(isset($_POST['edit_btn'])){
                    $id = $_POST['edit_id'];
                    $query = "SELECT * FROM `contact` WHERE id='$id'";
                    $query_run = mysqli_query($db_conn,$query);

                    foreach($query_run as $row)
                    {
                        ?>

            <form action="action.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?php echo $row['first_name']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?php echo $row['last_name']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="company" class="form-control" placeholder="Company" value="<?php echo $row['company']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="job_title" class="form-control" placeholder="Job Title" value="<?php echo $row['job_title']; ?>">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>">
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" class="form-control" placeholder="Phone Number" value="<?php echo $row['phone']; ?>">
                </div>
                <div class="form-group">
                    <input type="date" name="birthday" class="form-control" placeholder="Birthday" value="<?php echo $row['birthday']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" name="note" class="form-control" placeholder="Note" value="<?php echo $row['note']; ?>">
                </div>
                <div class="form-group">
                    <input type="file" name="photo" class="form-control" value="<?php echo $row['profile']; ?>">
                </div>
                <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">
                <div class="text-right">
                    <button type='submit' name='update_btn' class="btn btn-primary">Update</button>
                </div> 
            </form>

            <a href='create_contact.php'><button type='submit' class='btn btn-warning'> CANCEL </button></a>
                        <?php

                    }
                }
                
            ?>
          </div>
        </div>
        <div class="col-md-6">
       
        </div>
      </div>    
    </div>


    </div>
  </div>
</section>

   
 <?php 
 include('includes/script.php'); 
 include('includes/footer.php'); 
 ?>
