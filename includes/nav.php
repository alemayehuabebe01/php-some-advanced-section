<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('index.php') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Contact Us</a>
        </li> 
      
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
            </a>
          </li>
          <li class="nav-item">
         
          <form class="nav-link" action="" method="POST">
            <button type="submit" name ="logout_btn">Logout</button>
          </form>
          
        </li>

      

        <li class="nav-item">
        <a class="nav-link" href="<?= base_url('login.php') ?>">Login</a>
     </li>

 <li class="nav-item">
<a class="nav-link" href="<?= base_url('register.php') ?>">Register</a>
   </li>

   
      </ul>
      <form class="d-flex">
        
      </form>
      
    </div>
  </div>
</nav> 