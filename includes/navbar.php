 <?php
 include('database/config.php');
 ?>
     <!-- Header HTML-->
    
     <header class="header">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="header-left-items d-flex align-items-center">
                    <a href="#" class="logo">
                        <i class="fa-solid fa-bars"></i> 
                    </a>
                    <a href="#" class="ml-3">
                        <img src="assets/icons/contacts_48dp.png" alt="">
                        <span class="contacts-up">Contacts</span>
                    </a>
                    <form action="#" method="post" class="ml-5">
                      <i class="fa-solid fa-magnifying-glass search-icon-top"></i>
                      <input type="search" name="search-contact" id="search-contact" placeholder="Seach">
                    </form>
                     
                </div>
                <div class="header-right-items d-flex align-items-center">
                   <div class="help-setting">
                    <a href="#" class="help-menu ml-3">
                        <i class="fa-regular fa-circle-question"></i>
                    </a>
                    <a href="#" class="setting-menu ml-3">
                        <i class="fa-solid fa-gear"></i>
                    </a>
                   </div>
                   <div class="google-apps-account ml-5">
                        <a href="#" class="google-apps ml-3">
                          <i class="fa-solid fa-braille"></i>
                        </a>
                        <a href="#" class="google-account ml-3">
                           <i class="fa-solid fa-circle"></i>
                        </a>
                   </div>

                    <div id="menu-btn" class="fas fa-bars">
                    </div>
                </div>
                 
                
            </div>
        </div>
    </header>   <!-- Header HTML END-->

    <!-- Main Content HTML-->
  <section class="content-section">
        <div class="conatainer-fluid">
          <div class="row">
            <div class="col-md-2">
              <div class="left-content-section">
                <div class="create-contact p-3">
                  <button class="create-contact-btn" id="create_contact">
                    <i class="fa-solid fa-plus mr-1"></i>
                    Create contact
                  </button>
                  <div class="pop-contact-add">
                    <h6>
                      <a href="create_contact.php">
                       <i class="fa-solid fa-user-plus mr-2"></i>
                       Create a contact
                      </a>
                      
                    </h6>
                    <h6>
                      <a href="#">
                        <i class="fa-solid fa-user-plus mr-2"></i>
                       Create multiple contact
                      </a>
                    </h6>
                  </div>
                </div>
                <div class="contact-details">
                  <div class="contact-info">
                    <div class="row align-items-center justify-content-between contact-bg">
                      <a href="contact_details.php">
                        <i class="fa-regular fa-address-book mr-2"></i>
                        <span>Contacts</span>
                      </a>
                      <?php
                                
                         $query = "SELECT `id` FROM `contact` ORDER BY `id`";
                           $query_run= mysqli_query($db_conn,$query);
                           $row = mysqli_num_rows($query_run); 
                                                                                          
                       ?>
                                        
                      <a href="#" id="count_contact">
                          <?php echo $row;  ?>
                      </a>
                    </div>
                    <div class="row align-items-center justify-content-between contact-bg">
                      <a href="#">
                        <i class="fa-regular fa-address-book mr-2"></i>
                        <span>Frequently contacted</span>
                      </a>
                       <a href="#">

                       </a>
                    </div>
                    <div class="row align-items-center justify-content-between contact-bg">
                      <a href="#">
                        <i class="fa-regular fa-address-book mr-2"></i>
                        <span>Merge & fix</span>
                      </a>
                        <a href="#">
                        
                       </a>
                    </div>
                    <hr>
                    <div class="row align-items-center justify-content-between contact-bg">
                      <a href="#">
                        <i class="fa-regular fa-address-book mr-2"></i>
                        <span>Labels</span>
                      </a>
                      <a href="#">
                        
                        </a>
                    </div>
                    <hr>
                    <div class="row align-items-center justify-content-between contact-bg">
                      <a href="#">
                        <i class="fa-regular fa-address-book mr-2"></i>
                        <span>import</span>
                      </a>
                      <a href="#">
                        
                        </a> 
                    </div>
                    <div class="row align-items-center justify-content-between contact-bg">
                      <a href="#">
                        <i class="fa-regular fa-address-book mr-2"></i>
                        <span>export</span>
                      </a>
                      <a href="#">
                        
                        </a>
                    </div>
                    <div class="row align-items-center justify-content-between contact-bg">
                      <a href="#">
                        <i class="fa-regular fa-address-book mr-2"></i>
                        <span>print</span>
                      </a>
                      <a href="#">
                        
                        </a>
                    </div>
                    <hr>
                    <div class="row align-items-center justify-content-between contact-bg">
                      <a href="#">
                        <i class="fa-regular fa-address-book mr-2"></i>
                        <span>Other contact</span>
                      </a>
                      <a href="#">
                        
                        </a>
                    </div>
                    <div class="row align-items-center justify-content-between contact-bg">
                      <a href="#">
                        <i class="fa-regular fa-address-book mr-2"></i>
                        <span>Tash</span>
                      </a>
                      <a href="#">
                        
                        </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>







<?php
/* Internal Js */
?>

<script>
              
var contact_bg = document.querySelector('.contact-bg');
var count_contact = document.querySelector('#count_contact');
contact_bg.onclick = () =>{
    contact_bg.classList.toggle('active');
    count_contact.classList.toggle('show');

}
 
</script>