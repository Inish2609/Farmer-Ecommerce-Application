
<?php
session_start();
$total = $_SESSION['grandtotal'];
$product_title = $_SESSION['product_title'];
?>
<?php
require_once 'vendor\autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51N10hiBRN1Fjmqlaipnr37ykOLB2sbx6lniMPYvI2ngyUaKf4iKNKSnrwcK9ZqSi2ZrWWuyLQvxDBIefHCgT4wEC00If0SR6F8');
    $charge = \Stripe\Charge::create([
        'source' => $_POST['stripeToken'],
        'description' => $product_title,
        'amount' => $total ,
        'currency' => 'usd',
      ]);
      if ($charge->status == 'succeeded') {
        echo "<script>window.open('success.php','_self')</script>";    }
         else {
        echo "Charge failed.";
    }
?>