/* Header JS Code */

var menu = document.querySelector('#menu-btn');
var navbar = document.querySelector('.navbar');
var header = document.querySelector('.header');

menu.onclick = () =>{
    menu.classList.toggle('fa-xmark');
    navbar.classList.toggle('active');
}
window.onscroll = () =>{
    menu.classList.remove('fa-xmark');
    navbar.classList.remove('active');
    if(window.scrollY > 0){
        header.classList.toggle('active');
    }else{
        header.classList.remove('active');
    }
}

/*  Create Contact Popup */
var create_contact_btn = document.querySelector('#create_contact');
var pop_contact_add = document.querySelector('.pop-contact-add');
 
create_contact_btn.onclick = () =>{
    pop_contact_add.classList.toggle('active');
}
window.onscroll = () =>{
    pop_contact_add.classList.remove('active');
}
 

var contact_bg = document.querySelector('.contact-bg');
contact_bg.onclick = () =>{
    contact_bg.classList.toggle('active');
}


$(document).ready(function () {
    $('#datatablesapi').DataTable({
        "pagingType" : "full_numbers",
        "lengthMenu": [
            [10,25,50,-1],
            [10,25,50,"All"]
        ],
        responsive : true,
        language : {
            search : "_INPUT_",
            searchPlaceholder: "search contact"
        }, 
    });
});