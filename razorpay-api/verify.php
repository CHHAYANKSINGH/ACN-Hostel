<?php
error_reporting(0);
require('config.php');

//db connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

/*$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}*/

if ($success === true)
{

    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $price = $_SESSION['price'];
    $customername = $_SESSION['customername'];
    $contactno = $_SESSION['contactno'];
    $email = $_SESSION['email'];
    $Id = $_SESSION['Id'];
    $room_id = $_SESSION['room_id'];

    $sql = "INSERT INTO `payments` (`Id`,`Room_Id`, `Name`, `Contact_no`, `Email`, `order_id`, `razorpay_payment_id`, `Amount`, `Status`) 
    VALUES ('$Id', '$room_id', '$customername', '$contactno', '$email', '$razorpay_order_id', '$razorpay_payment_id', '$price', 'success');";
    mysqli_query($conn, $sql);



    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
