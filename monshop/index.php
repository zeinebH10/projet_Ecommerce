    
<?php  
    require('securite/cmd.php');
    $myprod=afficher();


    ?>
    <!doctype html>
    <html lang="en" data-bs-theme="auto">
      <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.118.2">
        <title>AXIA STORE</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>



        <style>
          .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
          }

          @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
          }

          .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
          }

          .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
          }

          .bi {
            vertical-align: -.125em;
            fill: currentColor;
          }

          .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
          }

          .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
          }

          .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
          }

          .bd-mode-toggle {
            z-index: 1500;
          }

          .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
          }

          
        </style>

        
    
      <body>
    <header>
    <?php   include 'C:/xampp/htdocs/monshop/nav.php' ?>
    </header>
    <!-- -->
    <main>
    <div class="album py-5 bg-light">
    
      <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">
          <?php foreach($myprod as $prod){ ?>    
            <div class="col"><!--begin -->
              <div class="card shadow-sm" style="width: 80%;">
                  <h4 style=" text-align: center;"><?= $prod->nom  ?></h4>
                  <img src="<?= $prod->image ?>"class="card-img-top" style="object-fit: cover; height: 300px;" >
                <div class="card-body">
                  <p class="card-text" ><?= substr($prod->description,0,40); ?></p>
                  <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  <form method="post" action="panier.php">
                      <input type="hidden" name="id" value="<?= $prod->id ?>"/>
                      <a href="user/connecter.php" type="submit" class="btn btn-sm btn-outline-secondary" name="ajouter"><i class="fa fa-shopping-cart"></i></a>
          </form>
                    </div>
                  
                    <small class="text-body-secondary"><?= $prod->prix ?> DT</small>
                  </div>
                </div>
              </div>
          </div>

        <?php } ?>

    </div>
        </div>
        </div> 
        <?php 
        include 'footer.php' ?>

    </main> 
    </body>
    </html>

