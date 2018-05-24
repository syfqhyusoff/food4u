<?php
include 'conn.php';

//Set useful variables for paypal form
$paypal_link = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_username = 'syfqhyusoff-facilitator@gmail.com'; //Business Email

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>StudPreneurs: Checkout</title>
</head>
<body>
	<?php
		//fetch products from the database
		$results = $db->query("SELECT * FROM team");
		while($row = $results->fetch_assoc())
		{
	?>
    <h2>Team ID: <?php echo $row['teamID']; ?></h2>
    <h2>Team Name: <?php echo $row['teamName']; ?></h2>
    <h2>Registration Fee: RM<?php echo $row['totalMembers']*10; ?> </h2><!--RM10 per pax-->
    <form action="<?php echo $paypal_link; ?>" method="post">

        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypal_username; ?>">
        
        <!-- Specify a pay Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $row['teamName']; ?>">
        <input type="hidden" name="item_number" value="<?php echo $row['teamID']; ?>">
        <input type="hidden" name="amount" value="<?php echo $row['totalMembers']*10; ?>">
        <input type="hidden" name="currency_code" value="MYR">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/STP_Payments/paypal_cancel.php'>
        <input type='hidden' name='rm' value='2'><!--return to paypal page-->
        <!--<input type='hidden' name='return' value='http://10.206.2.206/STP_Payments/paypal_success.php'>-->
        <input type='hidden' name='notify_url' value='http://localhost/STP_Payments/ipn.php'>

        
        <!-- Display the payment button. -->
            <br/>
        <input type="image" name="submit" border="0" src="images/paynow.png">
        
    </form>
    <?php } ?>
</body>
</html>
