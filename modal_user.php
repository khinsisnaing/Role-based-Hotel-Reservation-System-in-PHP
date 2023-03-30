<?php
include('db.php');
?>


<div class="modal fade" id="userForm_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title"><b>User Edit Form</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">

        <form method="POST" action="function/user_update.php">
                <div class="row" hidden>
                    <div class="col-md-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="user_id">User ID</label>
                            <input type="text" name="user_id"  class="form-control form-control-lg user_id" readonly />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="username">Username</label>
                            <input type="text" name="username" class="form-control form-control-lg username" />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="select form-control-sm">Job Role</label>
                        <select class="form-select form-select-lg role" aria-label=".form-select example" name="role">
                            <option value="1" disabled>Choose option</option>
                            <option value="Manager">Manager</option>
                            <option value="Receptionist">Receptionist</option>
                        </select>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" name="email" class="form-control form-control-lg email" readonly />
                        </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="password">Password</label>
                        <input type="text" name="password" class="form-control form-control-lg password" />
                        </div>
                    </div>
                </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="user_update">Update</button>
      </div>

      </form>

    </div>
  </div>
</div>

<!--  -->