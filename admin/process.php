<?php include 'connection/connection.php' ?>
<?php include 'connection/session.php' ?>
<?php include 'reference.php' ?>

<?php 
    if(isset($_GET['status']))
    {
        //* check payment status
        if($_GET['status'] == 'cancelled')
        {
            // echo 'YOu cancel the payment';
            header('Location: annualdues.php');
        }
        elseif($_GET['status'] == 'successful')
        {
            $txid = $_GET['transaction_id'];

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/{$txid}/verify",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                  "Content-Type: application/json",
                  "Authorization: Bearer FLWSECK_TEST-4d3145b0ca30d81526b728825d892519-X"
                ),
              ));
              
              $response = curl_exec($curl);
              
              curl_close($curl);
              
              $res = json_decode($response);
              if($res->status)
              {
                $amountPaid = $res->data->charged_amount;
                $amountToPay = $res->data->meta->price;
                $Paymentmethod = $res->data->payment_type;
                $Paymentstatus = $res->data->status;
                $txreference = $res->data->tx_ref;
                $flwreference = $res->data->flw_ref;
                $paymentdate = $res->data->created_at;
                if($amountPaid >= $amountToPay)
                {

                    mysqli_query($conn, "INSERT INTO `customer_details`
                    (`member_id`, `amount_paid`, `payment_method`, `payment_status`, `transaction_reference`, `flw_reference`, `payment-date`)
                    VALUES ('$s_member_id','$amountPaid','$Paymentmethod','$Paymentstatus','$txreference','$flwreference','$paymentdate')")
                    or die('cannot insert into customer_details');

                    header('Location: update-successful.php');
                    //* Continue to give item to the user
                }
                else
                {
                    echo 'Fraud transaction detected';
                }
              }
              else
              {
                  echo 'Can not process payment';
              }
        }
    }
?>