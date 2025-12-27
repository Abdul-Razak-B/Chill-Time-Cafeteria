<?php
//include('conn.php');
$conn = new mysqli('localhost', 'root', '', 'cafe');
if (isset($_POST['buy'])) {
    $p_id = $_POST['p_id'];
    $p_qnt = $_POST['p_qnt'];
    $total_price = $_POST['total_price'];

    $products = "INSERT INTO `buy` (`p_id`, `p_qnt`, `total_price`)
            values('$p_id', '$p_qnt', '$total_price')";
    $result = mysqli_query($conn, $products);
    if (!$result) {
        ?>
        <script>
            alertify.set('notifier','position', 'top-center');
            alertify.error('Error');
        </script>
        <?php
    }
    else{
        //$success_msg = '<div class="alert alert-warning alert-dismissible fade show""><i class="fa fa-utensils"></i>&nbsp;&nbsp;Item Stored!</div>';
        ?>
        <script>
            //alertify.confirm('Confirm Title', 'Confirm Message', function(){ alertify.success('Item Successfully Added') }
            //, function(){ alertify.error('Cancel')});
            alertify.set('notifier','position', 'top-center');
            alertify.warning('Dish Successfully Added');
        </script><?php
    }
}
?>