<?php 
 include('includes/header.php');
 include('includes/navbar.php');
 include('database/config.php');
?>

    <div class="col-md-10">
          <div class="row">
         
            <div class="col-md-8 d-flex align-items-end justify-content-between">

            <?php 
                // Edit Button Actions 
                if(isset($_POST['view_btn'])){
                    $id = $_POST['view_id'];
                    $query = "SELECT * FROM `contact` WHERE id='$id'";
                    $query_run = mysqli_query($db_conn,$query);

                    foreach($query_run as $row)
                    {
                        ?>
              <div class="profile-info">
                <div class="profile-back mr-3">
                  <a href="contact_details.php">
                  <i class="fa-solid fa-arrow-left"></i>
                  </a>
                </div>
                
                <div class="profile-name-image d-flex align-items-center">
                    <div class="profile-image ml-5">
                      <?php  echo '<img src='.$row['profile'].' alt="Image" width="180px" class="rounded-circle">'; 
                      ?>
                    </div>
                    <div class="profile-name-title ml-4">
                        <h3> <?php echo $row['first_name'].' '.$row['last_name']; ?></h3>
                        <h6><?php echo $row['job_title'].' & '.$row['company']; ?></h6>
                    </div>
                </div>
                
              </div>
              <div class="profile-edit">
                <a href="#">
                                <form action="contact_edit.php" method="post" class="ml-3">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class='btn' name='edit_btn'>
                                    <i class="fa-solid fa-pen-to-square"> Edit </i>
                                    </button> 
                                </form>
                </a>
              </div>

              <a href='contact_details.php'><button type='submit' class='btn btn-warning'> CANCEL </button></a>
                         
            </div>
            <div class="col-md-4">
        
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4">
              <div class="contact-details border border-2 p-3">
                <h5 class="ml-3">Contact Details</h5>
                <ul class="ml-3">
                    <li>
                        <i class="fa-solid fa-envelope"></i>
                        <span><?php echo $row['email']; ?></span>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone"></i>   
                        <span><?php echo $row['phone']; ?></span>
                    </li>
                    <li>
                        <i class="fa-solid fa-cake-candles"></i>
                        <span><?php echo $row['birthday']; ?></span>
                    </li>
                    <li>
                        <i class="fa-regular fa-note-sticky"></i>
                        <span><?php echo $row['note']; ?></span>
                    </li>
                     
                    <li>
                        <i class="fa-solid fa-clock"></i>
                        <span><?php echo $row['create-at']; ?></span>
                    </li>
                </ul>
              </div>
               
            </div>
            <?php

                    }
                }
                
            ?>
            <div class="col-md-8">
        
            </div>
          </div>
    </div>
         
         
    </div>
 </div>
</section>

<style>
    .contact-details{
        border-radius: 15px;
    }
    .contact-details ul{
   list-style: none;
  
}
.contact-details ul li i{
    margin-right: 1rem;
}
</style>


  
<?php 
 include('includes/script.php'); 
 include('includes/footer.php'); 
 ?>