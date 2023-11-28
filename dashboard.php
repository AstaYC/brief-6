<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.scc">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/main.css">
    <title>MyRessources</title>
  </head>
  <body>
  
    <aside> 
        <ul class="p-0">
          <li>
            <a href="index.php"></a>
              <span>Utilisateur</span>
          </li>
          <li>
            <a href="squad/index.php"></a>
              <span>Squads</span>
          </li>
          <li>
            <a href="projectss/index.php"></a>
              <span>Projects</span>
          </li>
          <li>
            <a href="ressource/index.php"></a>
              <span>Ressources</span>
          </li>
          <li>
            <a href="category/index.php"></a>
              <span>Category</span>
          </li>
          <li>
            <a href="sub_category/index.php"></a>
              <span>Sub Category</span>
          </li>
          <li class="active">
              <a href="dashboard.php"></a>
              <span>Dashboard</span>
          </li>
        </ul>
    
    </aside>
      
     <main class="flex-grow-1 d-flex flex-column px-4 py-3">
        <header class="d-flex justify-content-between">
          <h2 class="fs-2">Dashboard</h2>
          <div class="d-flex align-items-center gap-3">
            <i class="fa-solid fa-bell"></i><i class="fa-solid fa-gear"></i>
            <div class="profile_img"></div>
          </div>
        </header>
        <section class="flex-grow-1 mt-4">
            <div class="flex">
            
              <?php 
                
                require 'connection.php';
                #- Get users table fields :
             
              $utilisateur = $con->query('SELECT * FROM utilisateur');
              $squad = $con->query('SELECT * FROM squad');
              $project = $con->query('SELECT * FROM project');
              $ressource = $con->query('SELECT * FROM ressource');
              $category = $con->query('SELECT * FROM category');
              $sub_category = $con->query('SELECT * FROM sub_Category');
               
              ?>
            
              <figure class="statics_card">
                  <i class="fa-solid fa-user"></i>
                  <div class="static_info">
                    <h5>User Table</h5>
                    <p><?php echo $utilisateur->num_rows ?></p>
                  </div>
              </figure>
              <figure class="statics_card">
                  <i class="fa-solid fa-users"></i>
                  <div class="static_info">
                    <h5>Squad Table</h5>
                    <p><?php echo $squad->num_rows ?></p>
                  </div>
              </figure>
              <figure class="statics_card">
                  <i class="fa-solid fa-list-check"></i>
                  <div class="static_info">
                    <h5>Project Table</h5>
                    <p><?php echo $project->num_rows ?></p>
                  </div>
              </figure>
              <figure class="statics_card">
                  <i class="fa-solid fa-paperclip"></i>
                  <div class="static_info">
                    <h5>Ressource Table</h5>
                    <p><?php echo $ressource->num_rows ?></p>
                  </div>
              </figure>
              <figure class="statics_card">
                  <i class="fa-solid fa-layer-group"></i>
                  <div class="static_info">
                    <h5>Category Table</h5>
                    <p><?php echo $category->num_rows ?></p>
                  </div>
              </figure>
              <figure class="statics_card">
                  <i class="fa-solid fa-layer-group"></i>
                  <div class="static_info">
                    <h5>SubCategory Table</h5>
                    <p><?php echo $sub_category->num_rows ?></p>
                  </div>
              </figure>
            </div>
        </section>
      </main>
  </div>

    <script src="./scripts/bootstrap.js"></script>
    <script src="./scripts/main.js"></script>
  </body>
</html>
<?php mysqli_close($con) ?>