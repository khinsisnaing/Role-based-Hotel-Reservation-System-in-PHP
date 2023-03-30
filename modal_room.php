<?php
include('db.php');
?>


<div class="modal fade" id="roomForm_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title"><b>Room Edit Form</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">

        <form method="POST" action="function/room_update.php">
                <div class="row" hidden>
                    <div class="col-md-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="roomid">Room ID</label>
                            <input type="text" name="roomid"  class="form-control form-control-lg roomid" readonly />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="roomno">Room No</label>
                            <input type="text" name="roomno" class="form-control form-control-lg roomno" />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="roomtype">Room Type</label>
                            <input type="text" name="roomtype" class="form-control form-control-lg roomtype" />
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="roomprice">Room Price</label>
                        <input type="number" name="roomprice" class="form-control form-control-lg roomprice" />
                        </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="roommax">Max Person</label>
                        <input type="number" name="roommax" class="form-control form-control-lg roommax" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="roomdescription">Room Description</label>
                        <input type="text" name="roomdescription" class="form-control form-control-lg roomdescription" />
                        </div>

                    </div>
                </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="room_update">Update</button>
      </div>

      </form>

    </div>
  </div>
</div>

<!--  -->