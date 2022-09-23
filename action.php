<?php 

echo "Hello Action ";
?>
<?php
include('database/config.php');

if(isset($_POST['save_contact'])){
    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $company = $_POST['company'];
    $job_title = $_POST['job_title'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $birthday = $_POST['birthday'];
    $note = $_POST['note'];
    $photo = $_FILES['photo'];

    $imageLocation = $_FILES['photo']['tmp_name'];
    $imageName = $_FILES['photo']['name'];
    $image_des = "upload/".$imageName;

    $query = "INSERT INTO `contact`(`first_name`, `last_name`, `company`, `job_title`, `email`, `phone`, `birthday`, `note`, `profile`) VALUES ('$first_name','$last_name','$company','$job_title','$email','$phone','$birthday','$note','$image_des')";

    $query_run = mysqli_query($db_conn,$query);
    if($query_run){

        move_uploaded_file($imageLocation,$image_des);

        echo "<script>alert('Contact Added ');</script>";
        echo "<script>location.href='create_contact.php';</script>";
         
    }else{
        echo "<script>alert('Contact Not Added ');</script>"; 
        echo "<script>location.href='create_contact.php';</script>";
    }
}


/* Update Contact */



if(isset($_POST['update_btn'])){

    $id = $_POST['edit_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $company = $_POST['company'];
    $job_title = $_POST['job_title'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $birthday = $_POST['birthday'];
    $note = $_POST['note'];
    $photo = $_FILES['photo'];

 
    $imageLocation = $_FILES['photo']['tmp_name'];
    $imageName = $_FILES['photo']['name'];
    $image_des = "upload/".$imageName;

    $query = "UPDATE `contact` SET `first_name`='$first_name',`last_name`='$last_name',`company`='$company',`job_title`='$job_title',`email`='$email',`phone`='$phone',`birthday`='$birthday', `note`='$note', `profile`='$image_des' WHERE id = '$id'";

    $query_run = mysqli_query($db_conn,$query);

    if($query_run){

        move_uploaded_file($imageLocation,$image_des);

        echo "<script>alert('Contact Updated ');</script>";
        echo "<script>location.href='contact_details.php';</script>";
        
    }else{
        echo "<script>alert('Contact not Updated ');</script>";
        echo "<script>location.href='contact_details.php';</script>";
    }
    
}


// Delete Contact

if(isset($_POST['delete_btn'])){
    $id = $_POST['delete_id'];
    $query = "DELETE FROM `contact` WHERE `id`= '$id' ";
    $query_run = mysqli_query($db_conn,$query);
    if($query_run){
        echo "<script>alert('Contact Delete ');</script>";
        echo "<script>location.href='contact_details.php';</script>";
    }else{
        echo "<script>alert('Contact Delete fails');</script>";
        echo "<script>location.href='contact_details.php';</script>";
    }
}




?>