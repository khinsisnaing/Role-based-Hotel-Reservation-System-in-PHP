<?php 
 
// Load the database configuration file 
include '../db.php'; 
 
// Fetch records from database 
$query = mysqli_query($connect,"SELECT * FROM invoice"); 
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "invoices_data_" . date('d-m-Y') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('Invoice No','Booking ID','Guest ID', 'Guest Name', 'Guest NRC', 'Phone', 'Room-No', 'Room-Type', 'Room-Price', 'Check In','Check Out','Prepaid','Sub Total','Discount','Total'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        
        $lineData = array($row['invoice_id'], $row['booking_id'], $row['guest_id'], $row['guest_name'], $row['guest_nrc'], $row['guest_phone'], $row['room_no'], $row['room_type'], $row['room_price'], $row['checkin'], $row['checkout'], $row['prepaid'],$row['subtotal'], $row['discount'], $row['total']);
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>