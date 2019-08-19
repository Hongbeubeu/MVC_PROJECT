

<?php require PATH_APPLICATION . '/view/widget/header.php' ?>
<div class="row">
<div class="col-md-6 mx-auto">
  <div class="card card-body bg-light mt-5">
     <h3>Login</h3>
     <p>Please fill in your credentials to login</p>
     <form action="admin.php?controller=user&action=login" method="post">
        <div class="form-group">
           <label for="name">Email: <sup>*</sup></label>
           <input type="email" name="email" class="form-control form-control" value="">
           <span class="invalid-feedback"></span>
        </div>
        <div class="form-group">
           <label for="name">Password: <sup>*</sup></label>
           <input type="password" name="password" class="form-control form-control" value="">
           <span class="invalid-feedback"></span>
        </div>
        <div class="row">
           <div class="col">
              <input type="submit" value="Login" class="btn btn-success btn-block"/>
           </div>
           <div class="col">
              <a href="admin.php?controller=page&action=register" class="btn btn-light btn-block">No account? Register</a>
           </div>
        </div>
     </form>
  </div>
</div>
<?php require PATH_APPLICATION . '/view/widget/footer.php' ?>