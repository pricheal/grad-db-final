<?php

require_once '../../global.php';
require_once '../../db.php';

$customer_id = htmlspecialchars($_GET['id']);

$sql = "SELECT * FROM customer_view WHERE customer_id = ".$customer_id." AND source = 'Local'";

$result = mysqli_query($conn, $sql);
$customer = mysqli_fetch_assoc($result);

echo $twig->render('edit_customer.html', array('customer' => $customer));

?>
