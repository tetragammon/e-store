<center><!-- center Begin -->

    <h1> Esti sigur ca vrei sa iti stergi contul ? </h1>

    <form action="" method="post"><!-- form Begin -->

       <input type="submit" name="Yes" value="Da, doresc stergerea contului" class="btn btn-danger">

       <input type="submit" name="No" value="Nu, nu doresc stergerea contului" class="btn btn-primary">

    </form><!-- form Finish -->

</center><!-- center Finish -->


<?php

$c_email = $_SESSION['customer_email'];

if(isset($_POST['Yes'])){

    $delete_customer = "delete from customers where customer_email='$c_email'";

    $run_delete_customer = mysqli_query($con,$delete_customer);

    if($run_delete_customer){

        session_destroy();

        echo "<script>alert('Contul a fost sters cu succes.')</script>";

        echo "<script>window.open('../index.php','_self')</script>";

    }

}

if(isset($_POST['No'])){

    echo "<script>window.open('my_account.php?my_orders','_self')</script>";

}

?>
