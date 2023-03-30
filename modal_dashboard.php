<?php
include('db.php');
?>

<!-- Booking Form Modal -->

<div class="modal fade" id="bookingForm_Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title"><b>Booking Form</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form method="POST" action="function/makebooking.php">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="roomid">Room ID</label>
                            <input type="text" name="roomid"  class="form-control form-control-lg roomid" readonly />
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="roomno">Room No</label>
                            <input type="text" name="roomno" class="form-control form-control-lg roomno"  readonly />
                        </div>
                    </div>

                    <div class="col-md-4 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="roomType">Room Type</label>
                            <input type="text" name="roomtype" class="form-control form-control-lg roomtype" readonly />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="reservedate">Room Reserve Date</label>
                            <input type="date" name="reservedate"  class="form-control form-control-lg" required/>
                        </div>
                    </div>
                </div>

        	   <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="guestname">Name</label>
                            <input type="text" name="guestname" class="form-control form-control-lg" required/>
                        </div>
                    </div>
                
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="guestphone">Phone Number</label>
                        <input type="number" name="guestphone" class="form-control form-control-lg" required />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="bookingdate">Booking Date</label>
                            <input type="datetime-local" name="bookingdate" placeholder="DD/MM/YY" class="form-control form-control-lg" required/>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="prepaid">Prepaid</label>
                            <input type="number" name="prepaid" class="form-control form-control-lg" required />
                        </div>
                    </div>
                </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button name="booking_confirm" class="btn btn-primary">Confirm</button>
      </div>

      </form>

    </div>
  </div>
</div>

<!-- ---------------------------------------------------------------------------------------------------- -->

<!-- Check In form -->

<div class="modal fade" id="checkinForm_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Check In Form</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="function/makecheckin.php">
            <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="guestid">Guest ID</label>
                            <input type="text" name="guestid" class="form-control form-control-lg guest_id" readonly />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="reservedate">Room Reserve Date</label>
                            <input class="form-control form-control-lg reservedate" readonly/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="guestname">Name</label>
                            <input type="text" name="guestname" class="form-control form-control-lg guest_name" readonly />
                        </div>
                    </div>
                
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="guestnrc">NRC / Passport</label>
                            <input type="text" name="guestnrc" class="form-control form-control-lg guest_nrc" required/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="guestdob">Date of Birth</label>
                            <input type="date" name="guestdob" class="form-control form-control-lg" />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="select form-control-sm">Gender</label>
                            <select class="form-select form-select-lg guestgender" aria-label=".form-select example" name="guestgender">
                                <option value="Non" readonly>Choose Option</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="guestemail">Email</label>
                        <input type="email" name="guestemail" class="form-control form-control-lg" />
                        </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="guestphone">Phone Number</label>
                        <input type="number" name="guestphone" class="form-control form-control-lg guest_phone" readonly />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="guestaddress">Address</label>
                            <input type="text" name="guestaddress" class="form-control form-control-lg" />
                        </div>
                    </div>
                </div>
                        
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="roomno">Room No</label>
                            <input type="text" name="roomno" class="form-control form-control-lg roomno" readonly />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="roomtype">Room Type</label>
                            <input type="text" name="roomtype" class="form-control form-control-lg roomtype" readonly />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="adult">Adult Person</label>
                        <input type="number" name="adult" class="form-control form-control-lg" />
                        </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="child">Child</label>
                        <input type="number" name="child" class="form-control form-control-lg" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="checkin">Check In</label>
                            <input type="datetime-local" placeholder="DD/MM/YY" name="checkin" class="form-control form-control-lg" required/>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="prepaid">Prepaid</label>
                            <input type="number" name="prepaid" class="form-control form-control-lg prepaid" readonly/>
                        </div>
                    </div>
                </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="checkin_confirm">Check In</button>
      </div>

      </form>
    </div>
  </div>
</div>

<!-- ---------------------------------------------------------------------------------------------------- -->

<!-- Check Out form -->

<div class="modal fade" id="checkoutForm_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Check Out Form</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="function/makecheckout.php">
                <div class="row" hidden> 
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="guestid">Guest ID</label>
                            <input type="number" name="guestid" class="form-control form-control-lg guest_id" readonly />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="bookingid">Booking ID</label>
                            <input type="number" name="bookingid" class="form-control form-control-lg booking_id" readonly />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="guestname">Name</label>
                            <input type="text" name="guestname" class="form-control form-control-lg guest_name" readonly />
                        </div>
                    </div>
                
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="guestnrc">NRC / Passport</label>
                            <input type="text" name="guestnrc" class="form-control form-control-lg guest_nrc" readonly />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="guestemail">Email</label>
                        <input type="email" name="guestemail" class="form-control form-control-lg guest_email" readonly />
                        </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">
                        <div class="form-outline">
                        <label class="form-label" for="guestphone">Phone Number</label>
                        <input type="number" name="guestphone" class="form-control form-control-lg guest_phone" readonly />
                        </div>
                    </div>
                </div>

                        
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="roomno">Room No</label>
                            <input type="text" name="roomno" id="room_no1" class="form-control form-control-lg room_no" readonly />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="roomtype">Room Type</label>
                            <input type="text" name="roomtype" id="room_type1" class="form-control form-control-lg room_type" readonly />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="checkin1">Check In</label>
                            <input name="checkin" id="checkin1" class="form-control form-control-lg checkin1" readonly />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="checkout">Check Out</label>
                            <input type="datetime-local" name="checkout" id="checkout1" placeholder="DD/MM/YY" class="form-control form-control-lg "  required/>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="form-label" for="roomprice">Room Price</label>
                        <input type="number" name="roomprice" id="room_price1" class="form-control form-control-lg room_price" readonly />
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                        <label class="form-label" for="subtotal">Sub Total</label>
                        <input type="number" name="total" id="total1" class="form-control form-control-lg remaintotal1" readonly />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="prepaid">Prepaid </label>
                            <input type="number" name="prepaid" id="prepaid1" class="form-control form-control-lg prepaid" readonly />
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="discount">Discount</label>
                            <input type="number" name="discount" id="discount1" class="form-control form-control-lg discount" required />
                        </div>
                    </div>
                </div>

                <div class="row"> 
                    <div class="col-md-12 mb-4">
                        <div class="form-outline">
                            <label class="form-label" for="remaintotal">Remaining Total Price</label>
                            <input type="number" name="remaintotal" id="remaintotal2" class="form-control form-control-lg remaintotal2" required />
                        </div>
                    </div>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="checkout_confirm">Check Out</button>
      </div>

      </form>
      
    </div>
  </div>
</div>

<!-- ---------------------------------------------------------------------------------------------------- -->

<script type="text/javascript">
$(document).ready(function()
{
    $(document).on('change','#discount1','#checkout1', function() 
    {   
       
        var checkout1 = $('#checkout1').val();
        var checkin1 = $('#checkin1').val();
        var room_price1 = $('#room_price1').val();
        var total1= $('#total1').val();
        var prepaid1= $('#prepaid1').val();
        var discount1= $('#discount1').val();
        var remaintotal2= $('#remaintotal1').val();
       
        //alert(checkout);
        //alert(checkin1);
        //alert(room_price);
        //alert(prepaid);
        //alert(discount1);

        var date1 = new Date(checkin1);
        var date2 = new Date(checkout1);
        var duration1 = date2.getDate() - date1.getDate();
        //alert(duration);
        
        total1=duration1 * room_price1;    
       // alert(total1);


        var remaintotal1 = total1 - prepaid1;
        //alert(remaintotal1);
        $(".remaintotal1").val(remaintotal1);

        
        remaintotal2 = remaintotal1 - discount1;
    
        // alert(remaintotal2);
        
        $(".remaintotal2").val(remaintotal2);
        

       
        

    });
})

    

   


</script>   