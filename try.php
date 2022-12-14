<!-- modals start for registration -->
<div class="modal" tabindex="-1" id="mymodal1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h2 class="text-center">New User Registration</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- <p>Modal body text goes here.</p> -->
            <form action="" method="POST" enctype="multipart/form-data">
            <!-- user field -->
                        <div class="form-outline  mb-4">
                            <label for="user_username" class="form-label">Username</label>
                            <input type="text" id="user_username" class="form-control" placeholder="Enter your name" autocomplete="off" required="required" name="user_username">
                        </div>
                        <!-- email -->
                        <div class="form-outline mb-4">
                            <label for="user_password" class="form-label">Email</label>
                            <input type="email" id="user_password" class="form-control" placeholder="Enter your email" autocomplete="off" required="required" name="user_email">
                        </div>
                        <!-- password -->
                        <div class="form-outline mb-4">
                            <label for="user_password" class="form-label">Password</label>
                            <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="user_password">
                        </div>
                        <!-- c_password -->
                        <div class="form-outline mb-4">
                            <label for="user_password" class="form-label">Password</label>
                            <input type="password" id="user_password" class="form-control" placeholder="Enter your password" autocomplete="off" required="required" name="c_password">
                        </div>
                        <!-- Role -->
                        <div class="form-outline mb-4">
                        <label for="user_password" class="form-label">Role</label>
                        <select class="form-select" aria-label="Default select example" name="user_role">
                            <option value="Customer">Customer</option>
                            <option value="Seller">Seller</option>
                            <option value="Admin">Admin</option>
                        </select>
                        </div>
                    
            
                        <!-- image -->
                        <div class="form-outline mb-4">
            <input type="file" class="form-control m-auto" name="user_image">
        </div>
                        <!-- button -->
                        <div class="form-outline mb-4">
                            <input type="submit" value="Register" class="btn btn-info" name="user_register">
                        </div>

                    </form>
      </div>
    </div>
  </div>
</div>