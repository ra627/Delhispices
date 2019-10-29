<html>
<head>
<title>Delhi Spice - Booking</title>
</head>
<body>
<?php 
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
    $title = $_POST["title"];
    $fname = $_POST["fname"];    
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $tms = $_POST["time"];
    $people = $_POST["people"];
    $dd = $_POST["datepicker"];
    $mssg = $_POST["message"];
    
   $messages = "<table width='100%' border='1'>";

   $messages .= "<tr><td bgcolor='red' colspan='8'><center><font color='white'><b>Table Booking</b></font></center></td></tr>";
   
   $messages .= "<tr><td>TITLE</td><td>NAME</td><td>EMAIL</td><td>TEL</td><td>TIME</td><td>PEOPLE</td><td>DATE:</td><td>MESSAGE</td></tr>";
       
    $cbooking = "Customer Booking Details\n\n";
    
    $ctitle = "$title";
    
    $cname = "$fname";
    
    $cemail = "$email";
    
    $ctel = "$tel";
    
    $ctime = "$tms"; 
    
    $cpeople = "$people"; 
    
    $cdates = "$dd";
    
    $cmessage = "$mssg"; 
    
    $subject = "Delhi Spice: Online Booking"; 
     
    $messages .= "<tr><td>$ctitle</td><td>$cname</td><td>$cemail</td><td>$ctel</td><td>$ctime</td><td>$cpeople</td><td>$cdates</td><td>$cmessage</td></tr></table>";      
   
   //$messages = "$cbooking $ctitle $cname $cemail $ctel $ctime $cpeople $cdates $cmessage";
   
   $headers  = 'MIME-Version: 1.0' . "\r\n";
   $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $headers .= 'From: Table Booking <me@mysite.com>' . "\r\n"; 
   
   
    if (mail("ra627@live.co.uk",$subject,$messages,$headers)) {
          
          include 'confirm.php';    
    }
  
   else {

    echo "Unable to Send Email.";    
  }    
  
} //main if       

else {

echo "Please go back to fill the form";

}

?>

</body>
</html>
