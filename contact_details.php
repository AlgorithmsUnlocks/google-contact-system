<?php 
 include('includes/header.php');
 include('includes/navbar.php');
 include('database/config.php');
?>

   <div class="col-md-10 mt-5 p-5">

   <div class="table-responsive">    
    <?php 
            $query = "SELECT * FROM `contact`";
            $query_run = mysqli_query($db_conn,$query);
        ?>
    <table class="table table-bordered" id="datatablesapi" width="100%" cellspacing="0" id="datatablesapi">
                    <thead>
                        <tr>
                            <th>Name </th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Job Title & Company</th>
                            <th>Email</th>  
                            <th>Action</th>         
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name </th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Job Title & Company</th>
                            <th>Email</th>           
                            <th>Action</th>       
                        </tr>
                    </tfoot>
                    <tbody>
                        
                        <?php

                        if(mysqli_num_rows($query_run) > 0){
                            while($row = mysqli_fetch_assoc($query_run)){
                                ?>
                        <tr>
                            <td><?php echo '<img src='.$row['profile'].' alt="Image" width="60px" style="border-radius: 100%; border: 1px solid green; padding: 2px ">  '.$row['first_name'].' '.$row['last_name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['job_title'].' & '.$row['company']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td>
                             <div class="d-flex align-items-center">
                                <form action="contact_edit.php" method="post" class="ml-3">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class='btn' name='edit_btn'>
                                    <i class="fa-solid fa-pen-to-square"> Edit </i>
                                    </button> 
                                </form>
                                <form action="contact_view.php" method="post" class="ml-3">
                                    <input type="hidden" name="view_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class='btn' name='view_btn'>
                                     <i class="fa-solid fa-eye"> View</i>
                                    </button>
                                </form>
                                <form action="action.php" method="post" class="ml-3">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class='btn btn-warning' name='delete_btn'>
                                    <i class="fa-sharp fa-solid fa-delete-left"></i>
                                    </button>
                                </form>
                                 
                             </div>
                               
                            
                            </td>
                                
                                        
                        </tr>    
                            
                                <?php
                            }

                        }else{
                            echo "Not Contact Found";
                        }
                        ?>
                        
                        
                    </tbody>
                </table>
          </div>                     
    </div>


    </div>
  </div>
</section>

  
<?php 
 include('includes/script.php'); 
 include('includes/footer.php'); 
 ?>