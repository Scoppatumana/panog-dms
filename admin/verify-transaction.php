<?php
    include 'connection/connection.php'
?>
<?php
$ref=  $_GET['reference'];

if ($ref ==""){
  header("location:javascript://history.go(-1)");
}
  $curl = curl_init();
       
  ?>
<?php
  curl_setopt_array($curl, array(

    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),

    CURLOPT_RETURNTRANSFER => true,

    CURLOPT_ENCODING => "",

    CURLOPT_MAXREDIRS => 10,

    CURLOPT_TIMEOUT => 30,

    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

    CURLOPT_CUSTOMREQUEST => "GET",

    CURLOPT_HTTPHEADER => array(

      "Authorization: Bearer sk_test_affd06bf23ea2aa300a90d1ecf5f0c7340ee6ad8",

      "Cache-Control: no-cache",

    ),

  ));

  

  $response = curl_exec($curl);

  $err = curl_error($curl);

  curl_close($curl);

  

  if ($err) {

    echo "cURL Error #:" . $err;

  } else {

    echo $response;
    

  }

  if($result->data->status == 'success'){
        $status= $result->data->status;
        $reference= $result->data->reference;
        $lname=$result->data->customer->last_name;
        $fname=$result->data->customer->first_name;
        $fullname=$lname. " ". $fname;
        $cus_email=$result->data->customer->email;
        date_default_timezone_set('Africa/Lagos');

         
        mysqli_query($conn, "INSERT INTO `customer_details` (`status`, `reference`, `fullname`, `date_purchased`, `email`)
         VALUES ('$status', '$reference', '$fullname', NOW(), '$cus_email')") or die('cannot insert into the database');
?>
         <script>
          window.parent(location="payment-success.php?status=success"); 
          </script>
<?php

  }else{
?>
    <script>
    window.parent(location="payment-error.php?<?php echo $response ?><?php echo $status ?><?php echo $reference ?><?php echo $lname ?><?php echo $fname ?><?php echo $cus_email ?>"); 
    </script>
<?php
  }

?>