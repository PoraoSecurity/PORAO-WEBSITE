<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <title>Porão Security</title>
      <link rel="stylesheet" href="../CSS/styles.css">
   </head>
   <style>
      
   </style>
   <body>
      <div class="content">
         <div class="image">
            <nav class="navbar navbar-light bg-light" style="padding: 0px;">
               <div class="d-flex w-100" style="display: ruby;">
                  <a class="navbar-brand" href="#" style="margin: 0px;">
                     <img src="../IMG/logos_team-ai2.png" width="70" height="70" style="border: 0px;" class="d-inline-block" alt="">
                  </a>
                  <div class="d-flex align-items-center" id="navbarNav">
                     <ul class="nav justify-content-center"> 
                        <li class="nav-item">
                           <a class="nav-link text-nav" href="#" data-page="home">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-nav" href="#" data-page="about">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-nav" href="#" data-page="contacts">Contacts</a>
                        </li>  
                     </ul>
                  </div>
                  <a class="navbar-brand ml-auto d-flex align-items-center" href="http://localhost/PORAO-SITE/PORAO-SITE/PHP/index-br.php" style="margin: 0px; ">
                     <img src="../IMG/br.svg" width="30" height="30" style="border: 0px; margin-right: 10px;" class="d-inline-block" alt="">
                  </a>
               </div>
            </nav>
            <div class="content2" id="content-area">
               
           </div>
         </div>
      </div>
      <div class="footer">
         <a>Copyright © 2024 Porão Security®. All rights reserved.</a>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

      <script>
        $(document).ready(function() {
            // Function to handle navbar clicks and load content dynamically
            $('.nav-link').click(function(event) {
                event.preventDefault();
                const page = $(this).data('page');

                // Load the page content via AJAX
                $.ajax({
                    url: page + '.php',
                    method: 'GET',
                    success: function(data) {
                        $('#content-area').html(data); // Update content area
                    },
                    error: function() {
                        $('#content-area').html('<p>Sorry, the page could not be loaded.</p>');
                    }
                });
            });
        });
    </script>
   </body>
   </html>  