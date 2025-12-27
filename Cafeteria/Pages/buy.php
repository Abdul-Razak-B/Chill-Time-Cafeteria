<?php
//include('conn.php');
$conn = new mysqli('localhost', 'root', '', 'cafe');
if (isset($_POST['buy'])) {
    $p_id = $_POST['fid'];
    $p_qnt = $_POST['p_qnt'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    //$price = $_POST['price'];
    $total = $p_qnt * $_POST['price'];
    //$total_price = $_POST['total_price'];

    $query = "INSERT INTO `buy` (`date`,`p_id`, `name`, `email`, `p_qnt`, `total_price`)
            values(NOW(), '$p_id', '$name', '$email', '$p_qnt', '$total')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        ?>
        <script>
            alertify.set('notifier','position', 'top-center');
            alertify.error('Error');
        </script>
        <?php
    }
    else{
        header("Location: menu.php");
    }
}
?>