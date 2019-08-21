<?php require PATH_APPLICATION . '/view/widget/header.php' ?>
<div class="row">
   <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
         <h3>Create an account</h3>
         <p>Please fill out this form to register with us</p>
         <form action=<?php echo URL_ROOT . "/admin/user/register"; ?> method="post">
            <div class="form-group">
               <label for="name">Name: <sup>*</sup></label>
               <input type="text" name="name" class="form-control form-control" value="">
               <span class="invalid-feedback"><?php if (isset($data['name_err'])) echo $data['name_err']; ?></span>
            </div>
            <div class="form-group">
               <label for="name">Email: <sup>*</sup></label>
               <input type="email" name="email" class="form-control form-control" value="<?php if(isset($data['email'])) echo $data['email']; ?>">
               <span class="invalid-feedback"><?php if (isset($data['email_err'])) echo $data['email_err']; ?></span>
            </div>
            <div class="form-group">
               <label for="name">Password: <sup>*</sup></label>
               <input type="password" name="password" class="form-control form-control" value="">
               <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
               <label for="name">Confirm Password: <sup>*</sup></label>
               <input type="password" name="confirm_password" class="form-control form-control" value="">
               <span class="invalid-feedback"><?php if (isset($data['confirm_password_err'])) echo $data['confirm_password_err']; ?></span>
            </div>
            <div class="row">
               <div class="col">
                  <input type="submit" value="Register" class="btn btn-success btn-block"/>
               </div>
               <div class="col">
                  <a href=<?php echo URL_ROOT . "/admin/page/login"; ?> class="btn btn-light btn-block">Have an account? Login</a>
               </div>
            </div>
         </form>
   </div>
</div>
<?php require PATH_APPLICATION . '/view/widget/footer.php' ?>

