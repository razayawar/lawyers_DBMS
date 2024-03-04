<?php
include('config.php');
if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    $delete = "DELETE FROM `customers` WHERE `customer_id` = $user_id";
    $result = $conn->query($delete);

    if($result == TRUE){
        ?>
        <script>
            window.alert("Record Deleted Successfully!!");
            window.location.assign('../customer/customers.php');
        </script>
        <?php
    }else{
        ?>
        <script>
            window.alert("Failed to delete record!!");
            window.location.assign('../customer/customers.php');
        </script>
        <?php
    }
}
?>