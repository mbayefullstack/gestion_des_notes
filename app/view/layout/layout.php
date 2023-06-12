<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous">

      <style>
         body {
         width : 100vw;
         height : 100vh
         }
         .nav-link {
         padding: 10px 20px;
         }
         .nav-item:hover .nav-link {
         background-color: blue;
         }
         /* nav {
         background-color: lightblue;
         } */
         h1 {
         text-align:center;
         }
         .table {
         width :60%;
         height : 30%;
         margin-left : 20%;
         }
      </style>
      <title>Année Scolaire</title>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark text-uppercase  mb-5">
         <a class="navbar-brand" href="#"><img src="logo.png" alt="Logo"></a>
         <div class="collapse navbar-collapse justify-content-end text-blue" id="navbarNav" style="margin: 0 10px;">
            <ul class="navbar-nav text-light">
               <li class="nav-item active">
                  <a class="nav-link text-light" href="#">Accueil</a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link text-light" href="http://localhost:3011/eleve/getAllData">Élève</a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link text-light" href="http://localhost:3011/classe/getAllData">Classe</a>
               </li>
               <li class="nav-item active ">
                  <a class="nav-link text-light" href="#">Niveau</a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link text-light" href="http://localhost:3011/annee/getAllData">Année</a>
               </li>
            </ul>
         </div>
      </nav>




<?= $page?>




      <!-- footer -->

   <footer class="bg-dark text-light mt-5">
  <div class="container py-4">
    <div class="row">
      <div class="col-md-6">
        <h3>Breukh S'cool</h3>
        <p>Apprendre n'a jamais été facile</p>
      </div>
      <div class="col-md-6">
        <h3>Contact</h3>
        <ul class="list-unstyled">
          <li><i class="fas fa-map-marker-alt"></i> Médina Rue 11 x 6, Dakar, Sénégal</li>
          <li><i class="fas fa-envelope"></i> mmbaye11@gmail.com</li>
          <li><i class="fas fa-phone"></i> +221 78 000 00 00</li>
        </ul>
      </div>
    </div>
  </div>
</footer>
 </body>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

<script src="http://localhost:3011/js/main.js"></script>
<script src="http://localhost:3011/js/mainEleve.js"></script>



</html>