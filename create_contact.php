<?php 
 include('includes/header.php');
 include('includes/navbar.php');
?>
  
    <div class="col-md-10 mt-5">
      <div class="row">
        <div class="col-md-6">
        
          <div class="crteate-contact-form">
            <form action="action.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="first_name" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input type="text" name="company" class="form-control" placeholder="Company">
                </div>
                <div class="form-group">
                    <input type="text" name="job_title" class="form-control" placeholder="Job Title">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
                </div>
                <div class="form-group">
                    <input type="date" name="birthday" class="form-control" placeholder="Birthday">
                </div>
                <div class="form-group">
                    <input type="text" name="note" class="form-control" placeholder="Note">
                </div>
                <div class="form-group">
                    <input type="file" name="photo" class="form-control">
                </div>
                <div class="text-right">
                    <button type='submit' name='save_contact' class="btn btn-primary">Save</button>
                </div> 
            </form>
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
