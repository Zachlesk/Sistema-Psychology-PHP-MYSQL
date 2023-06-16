<aside class="main-sidebar sidebar-dark-purple elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link navbar-purple">
      <img src="views/assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"> Psychology 1.0</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="views/assets/img/angie.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> Angie Suarez </a>
        </div>
      </div>

    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item">
            <a href="/SkylAb-104/Clase/pyschology/home" class="nav-link active <?php if ($routesArray[4] == "users"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Home
              </p>
            </a>
          </li>


               <li class="nav-item">
            <a href="/SkylAb-104/Clase/pyschology/users" class="nav-link <?php if ($routesArray[4] == "users"): ?> active <?php endif ?> ">
              <i class="nav-icon far fa-user"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/SkylAb-104/Clase/pyschology/clinic-history" class="nav-link <?php if ($routesArray[4] == "clinic-history"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Clinic History
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/SkylAb-104/Clase/pyschology/interviews" class="nav-link <?php if ($routesArray[4] == "interviews"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Interviews
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/SkylAb-104/Clase/pyschology/psychologists" class="nav-link <?php if ($routesArray[4] == "psychologists"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Psychologists
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/SkylAb-104/Clase/pyschology/treatment" class="nav-link <?php if ($routesArray[4] == "treatment"): ?> active <?php endif ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                Treatment
              </p>
            </a>
          </li>


          
              
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>