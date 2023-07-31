<?php
session_start();
$total = $_SESSION['grandtotal'];
$product_title = $_SESSION['product_title'];
$total = $total*100;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe</title>

</head>
<body>

<form action="action.php" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js"
    class="stripe-button"
    data-key="pk_test_51N10hiBRN1FjmqlaxD7wR3qndz01KdTUQnReq78W69gwx1so6KW5pBNn630Ou9qHdoxc8NeXdyxBIVkmM9Xuo2F400k8HDZ0xs"
    data-name="Pay for "
    data-description=<?php echo $product_title; ?>
    data-amount=<?php echo $total; ?>;
    data-billing-address="true"
    data-currency="usd">
  </script>
</form>
</body>
</html>