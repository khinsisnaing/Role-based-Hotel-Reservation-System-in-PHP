<?php
include('db.php');
?>






<div class="modal fade" id="staffForm_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title"><b>Staff Edit Form</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form method="POST" action="function/staff_update.php">
            <div class="row" hidden>
                    <div class="col-md-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="staffid">Staff ID</label>
                            <input type="text" name="staffid"  class="form-control form-control-lg staffid" readonly />
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="staffname">Name</label>
                            <input type="text" name="staffname" class="form-control form-control-lg staffname" />
                        </div>
                    </div>
                
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="staffnrc">NRC / Passport</label>
                            <input type="text" name="staffnrc" class="form-control form-control-lg staffnrc" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="staffdob">Date of Birth</label>
                            <input type="date" name="staffdob" class="form-control form-control-lg staffdob" />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="select form-control-sm">Gender</label>
                            <select class="form-select form-select-lg staffgender" aria-label=".form-select example" name="staffgender">
                                <option value="1" readonly>Choose Option</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">  
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="staffphone">Phone Number</label>
                        <input type="number" name="staffphone" placeholder="959-----------" class="form-control form-control-lg staffphone" />
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="staffentry">Entry Date</label>
                            <input type="date" name="staffentry" placeholder="DD/MM/YY" class="form-control form-control-lg staffentry" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="staffaddress">Address</label>
                            <input type="text" name="staffaddress" class="form-control form-control-lg staffaddress" />
                        </div>
                    </div>
                </div>
                        
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="select form-control-sm">Job Role</label>
                            <select class="form-select form-select-lg staffrole" aria-label=".form-select example" name="staffrole">
                                <option value="1" readonly>Choose option</option>
                                <option value="Manager">Manager</option>
                                <option value="Receptionist">Receptionist</option>
                                <option value="Housekeeper">Housekeeper</option>
                                <option value="Worker">Worker</option>
                                <option value="Guard">Guard</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="staffsalary">Salary</label>
                            <input type="number" name="staffsalary" class="form-control form-control-lg staffsalary" />
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 mb-4">
                    <label class="select form-control-sm">Choose Working Hours</label>
                        <select class="form-select form-select-lg staffworkinghr" aria-label=".form-select-lg example" name="staffworkinghr">
                            <option value="1" readonly>Choose option</option>
                            <option value="Morning Shift">Morning Shift (5:00 am - 12:00 pm)</option>
                            <option value="Evening Shift">Evening Shift (12:00 pm - 7:00 pm)</option>
                            <option value="Night Shift">Night Shift (7:00 pm - 2:00 am)</option>
                        </select>
                    </div>
                </div>

            
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="staff_update">Update</button>
      </div>
      </form>
      
    </div>
  </div>
</div>