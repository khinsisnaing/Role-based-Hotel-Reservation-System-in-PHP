<?php 
 
// Load the database configuration file 
include '../db.php'; 
 
// Fetch records from database 
$query = mysqli_query($connect,"SELECT * FROM staff"); 
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "staff_data_" . date('d-m-Y') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('Staff ID','Staff Name', 'Staff NRC','Date Of Birth','Gender','Phone','Address','Job Role', 'Salary', 'Working Hours', 'Entry Date'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        
        $lineData = array($row['staff_id'], $row['staff_name'], $row['staff_nrc'], $row['staff_dob'], $row['staff_gender'], $row['staff_phone'], $row['staff_address'],  $row['staff_role'], $row['staff_salary'], $row['staff_workinghr'], $row['staff_entry']);
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