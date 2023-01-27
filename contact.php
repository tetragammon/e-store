<?php

    $active='Contact';
    include("includes/header.php");

?>

   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->

               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Acasa</a>
                   </li>
                   <li>
                       Contact
                   </li>
               </ul><!-- breadcrumb Finish -->

           </div><!-- col-md-12 Finish -->

           <div class="col-md-3"><!-- col-md-3 Begin -->

   <?php

    include("includes/sidebar.php");

    ?>

           </div><!-- col-md-3 Finish -->

           <div class="col-md-9"><!-- col-md-9 Begin -->

               <div class="box"><!-- box Begin -->

                   <div class="box-header"><!-- box-header Begin -->

                       <center><!-- center Begin -->

                           <h2> Contactati-ne!</h2>

                           <p class="text-muted"><!-- text-muted Begin -->

                               Nu ezitati sa ne contactati. Customer Service <strong>24/7</strong>

                           </p><!-- text-muted Finish -->

                       </center><!-- center Finish -->

                       <form action="contact.php" method="post"><!-- form Begin -->

                           <div class="form-group"><!-- form-group Begin -->

                               <label>Nume</label>

                               <input type="text" class="form-control" name="name" required>

                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->

                               <label>Email</label>

                               <input type="text" class="form-control" name="email" required>

                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->

                               <label>Subiect</label>

                               <input type="text" class="form-control" name="subject" required>

                           </div><!-- form-group Finish -->

                           <div class="form-group"><!-- form-group Begin -->

                               <label>Mesaj</label>

                               <textarea name="message" class="form-control"></textarea>

                           </div><!-- form-group Finish -->

                           <div class="text-center"><!-- text-center Begin -->

                               <button type="submit" name="submit" class="btn btn-primary">

                               <i class="fa fa-user-md"></i> Trimitere mesaj

                               </button>

                           </div><!-- text-center Finish -->

                       </form><!-- form Finish -->

                       <?php

                       if(isset($_POST['submit'])){



                           $sender_name = $_POST['name'];

                           $sender_email = $_POST['email'];

                           $sender_subject = $_POST['subject'];

                           $sender_message = $_POST['message'];

                           $receiver_email = "comenzi@e-store.com";

                           mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);



                           $email = $_POST['email'];

                           $subject = "Bine ati venit";

                           $msg = "Va vom raspunde cat mai repede la mesaj!";

                           $from = "comenzi@e-store.com";

                           mail($email,$subject,$msg,$from);

                           echo "<h2 align='center'> Mesajul a fost trimis cu succes </h2>";

                       }

                       ?>

                   </div><!-- box-header Finish -->

               </div><!-- box Finish -->

           </div><!-- col-md-9 Finish -->

       </div><!-- container Finish -->
   </div><!-- #content Finish -->

   <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>
