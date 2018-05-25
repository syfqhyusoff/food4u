<link rel="icon" type="image/png" href="images/icons/favicon.jpg"/>
<?php
include 'conn.php';

//save Transaction information from PayPal
$item_number = $_GET['item_number']; 
$txn_id = $_GET['tx'];
$payment_gross = $_GET['amt'];
$currency_code = $_GET['cc'];
$payment_status = $_GET['st'];

//Get product price
$productResult = $db->query("SELECT price FROM tbl_product WHERE id = ".$item_number);
$productRow = $productResult->fetch_assoc();
$productPrice = $productRow['price'];

if(!empty($txn_id) && $payment_gross == $productPrice){
	//Check if payment data exists with the same TXN ID.
    $prevPaymentResult = $db->query("SELECT payment_id FROM payments WHERE txn_id = '".$txn_id."'");

    if($prevPaymentResult->num_rows > 0){
        $paymentRow = $prevPaymentResult->fetch_assoc();
        $last_insert_id = $paymentRow['payment_id'];
    }else{
        //Insert tansaction data into the database
        $insert = $db->query("INSERT INTO payments(item_number,txn_id,payment_gross,currency_code,payment_status) VALUES('".$item_number."','".$txn_id."','".$payment_gross."','".$currency_code."','".$payment_status."')");
        $last_insert_id = $db->insert_id;
    }
?>
	<p>Thank you for your payment. 
            Your transaction has been completed, and a receipt for your purchase has been email to you.
            You may log into your account at www.paypal.com to view details of this transaction.</p>
        <h2>Your Payment Details</h2>
        <h4>Your Payment ID: 00<?php echo $last_insert_id; ?></h4>
        <h4>Transaction ID: <?php echo $txn_id; ?></h4>
        <h4>Payment Gross: RM<?php echo $payment_gross; ?></h4>
        <h4>Payment Status: <?php echo $payment_status; ?></h4>
        
        <a href="http://localhost/food4u/cozastore/home.php"><h3>Back to mainpage</h3></a>
<?php
}else{
?>
	<h1>Your payment has failed.</h1>
<?php
}
?>