<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="restable.css" />


  </head>
  <body>
<section id="root_content">
<h1 class="text-center">Sukishi Checkpoint Online</h1>
    
    <form  method="post">
        <!-- <input type="number" name="customerid" placeholder="CustomerID"> -->
        <input type="text" name="customerid" placeholder="CustomerID" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
</input>
        <input type="submit" class="flatbutton" value="checkpoint">
    </form>

<?php
  include 'func.php';
  include 'conf/conn.php';

  $customerid = $_POST['customerid'] ;

  if ($customerid != '') {
    echo '';
    // showArray($customerid);
  
?>

<section id="cus_transection">
<h1>Customer Transection</h1>
<table class="rwd-table">
<tr>
  <th>CustomerID</th>
  <th>Point</th>
  <th>DiscountName</th>
  <th>Date</th>

</tr>

<?php
// $query_transection = 'SELECT TOP (200) customerid,SUM(point + addpoint - delpoint) AS sumpoint FROM tcustomerlog_cal
//           WHERE     (customerid = \''.$customerid.'\')
//           GROUP BY customerid';

$query_transection = 'SELECT TOP (200) SUM(tcustomerlog_cal.point + tcustomerlog_cal.addpoint - tcustomerlog_cal.delpoint) AS sumpoint, tcustomerlog_cal.customerid, tcustomerlog_cal.pycode, 
                      T_Otherdiscount.Othdiscname, CONVERT(VARCHAR(17), tcustomerlog_cal.systemdate, 13) AS systemdate
FROM         tcustomerlog_cal LEFT OUTER JOIN
                      T_Otherdiscount ON tcustomerlog_cal.pycode = T_Otherdiscount.Othdisccode
WHERE     (tcustomerlog_cal.customerid = \''.$customerid.'\')
GROUP BY tcustomerlog_cal.customerid, tcustomerlog_cal.pycode, T_Otherdiscount.Othdiscname, tcustomerlog_cal.systemdate';

// echo "$query_transection";
// simple query  
$stmt = $conn->query( $query_transection );
if (!$stmt) {
  echo "string";
}
while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){  
  echo "<tr>";
   print_r( "<td data-th=\"CusID\">".$row['customerid'] ."</td>" );
   print_r( "<td data-th=\"CusPoint\">".$row['sumpoint'] ."</td>" );
   print_r( "<td data-th=\"CusPoint\">".$row['Othdiscname'] ."</td>" );
   print_r( "<td data-th=\"CusPoint\">".$row['systemdate'] ."</td>" );


   echo "</tr>";
} 

echo "</table>";

  
?>
</section>

<section id="sum_point">
<h1>Customer Summary Point</h1>
<table class="rwd-table">
<tr>
  <th>CustomerID</th>
  <th>SumPoint</th>

</tr>

<?php
$query_point = 'SELECT TOP (200) customerid,SUM(point + addpoint - delpoint) AS sumpoint FROM tcustomerlog_cal
          WHERE     (customerid = \''.$customerid.'\')
          GROUP BY customerid';

// simple query  
$stmt = $conn->query( $query_point );  
while ( $row = $stmt->fetch( PDO::FETCH_ASSOC ) ){  
  echo "<tr>";
   print_r( "<td data-th=\"CusID\">".$row['customerid'] ."</td>" );
   print_r( "<td data-th=\"CusPoint\">".$row['sumpoint'] ."</td>" );

   echo "</tr>";
} 

// query for one column  
// $stmt = $conn->query( $query, PDO::FETCH_COLUMN, 1);  
// while ( $row = $stmt->fetch() ){  
//    echo "$row\n";  
// }  


echo '</table>';
echo '</section>';
}
?>
</section>
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Add respond.js for responsive table-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>
