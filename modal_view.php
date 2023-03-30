<?php
include('db.php');
?>

<!-- Guest Info View -->
<div class="modal fade" id="modalguestview">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Guest Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label">Guest Name</label>
                            <input class="form-control form-control-lg guest_name" readonly />
                        </div>
                    </div>
                
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label">NRC / Passport</label>
                            <input class="form-control form-control-lg guest_nrc" readonly />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" >Prepaid</label>
                            <input class="form-control form-control-lg prepaid" readonly />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" >Booking Date/Time</label>
                            <input class="form-control form-control-lg bookingdate" readonly />
                        </div>
                    </div>
                </div>

                <div class="row">
                  <div class="col-md-4 mb-4">
                    <div class="form-outline">
                       <label class="form-label" >Gender</label>
                       <input class="form-control form-control-lg roomid guest_gender"  readonly/>
                    </div>
                  </div>

                    <div class="col-md-4 mb-4">
                        <div class="form-outline">
                            <label class="form-label" >Adult</label>
                            <input class="form-control form-control-lg adult"  readonly/>
                        </div>
                      </div>

                      <div class="col-md-4 mb-4">
                        <div class="form-outline">
                            <label class="form-label" >Child</label>
                            <input class="form-control form-control-lg child" readonly />
                        </div>
                      </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" >Email</label>
                        <input class="form-control form-control-lg guest_email" readonly />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" >Phone Number</label>
                        <input class="form-control form-control-lg guest_phone" readonly />
                        </div>
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-md-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label">Address</label>
                            <input class="form-control form-control-lg guest_address" readonly/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" >Reserve Date</label>
                            <input class="form-control form-control-lg reservedate" readonly />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" >Check In Date/Time</label>
                            <input class="form-control form-control-lg checkin" readonly />
                        </div>
                    </div>
                </div>
            </form>
      </div>

    </div>
  </div>
</div>

<!-- ----------------------------------------------------------------------------------------------------- -->

<!-- Guest Info Edit -->

<div class="modal fade" id="modalguestedit">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Edit Guest Info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

<form method="POST" action="function/guest_update.php">
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12 mb-4">
            <div class="form-outline">
                <label class="form-label" for="guestid">Guest ID</label>
                <input type="text" name="guestid"  class="form-control form-control-lg guest_id"  readonly />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 mb-4">
            <div class="form-outline">
                <label class="form-label" for="guestname">Guest Name</label>
                <input type="text" name="guestname"  class="form-control form-control-lg guest_name"  />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 mb-4">
            <div class="form-outline">
                <label class="form-label" for="guestnrc">NRC/ Passport</label>
                <input type="text" name="guestnrc"  class="form-control form-control-lg guest_nrc" />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="form-outline">
                <label class="form-label" for="guestdob">Date of Birth</label>
                <input type="date" name="guestdob"  class="form-control form-control-lg guest_dob"  />
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="form-outline">
                <label class="select form-control-sm">Gender</label>
                <select name="guestgender" class="form-select form-select-lg guest_gender" aria-label=".form-select example" >
                    <option value="1" readonly>Choose Option</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 mb-4">
            <div class="form-outline">
                <label class="form-label" for="guestemail">Email</label>
                <input type="email" name="guestemail"  class="form-control form-control-lg guest_email"  />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 mb-4">
            <div class="form-outline">
                <label class="form-label" for="guestphone">Phone</label>
                <input type="number" name="guestphone"  class="form-control form-control-lg guest_phone"  />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 mb-4">
            <div class="form-outline">
                <label class="form-label" for="guestaddress">Address</label>
                <input type="text" name="guestaddress"  class="form-control form-control-lg guest_address"  />
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="form-outline">
                <label class="form-label" for="adult">Adult</label>
                <input type="number" name="adult"  class="form-control form-control-lg adult"  />
            </div>
          </div>

          <div class="col-md-6 mb-4">
            <div class="form-outline">
                <label class="form-label" for="child">Child</label>
                <input type="number" name="child"  class="form-control form-control-lg child"  />
            </div>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="guest_update">Update</button>
      </div>

</form>
    </div>
  </div>
</div>