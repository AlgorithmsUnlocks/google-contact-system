
 <script>
              
              var contact_bg = document.querySelector('.contact-bg');
              var count_contact = document.querySelector('#count_contact');
              contact_bg.onclick = () =>{
                  contact_bg.classList.toggle('active');
                  count_contact.classList.toggle('show');
              
              }
              $(document).ready(function () {
    $('#searchcontact').DataTable({
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
              </script>
  </body>
</html>