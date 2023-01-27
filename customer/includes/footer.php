<div id="footer"><!-- #footer Begin -->
    <div class="container"><!-- container Begin -->
        <div class="row"><!-- row Begin -->
            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->

               <h4>Pagini</h4>

                <ul><!-- ul Begin -->
                    <li><a href="../cart.php">Cos cumparaturi</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                    <li><a href="../shop.php">Magazin</a></li>
                    <li><a href="my_account.php">Contul meu</a></li>
                </ul><!-- ul Finish -->

                <hr>

                <h4>Sectiune user</h4>

                <ul><!-- ul Begin -->

                           <?php

                           if(!isset($_SESSION['customer_email'])){

                               echo"<a href='../checkout.php'>Login</a>";

                           }else{

                              echo"<a href='my_account.php?my_orders'>My Account</a>";

                           }

                           ?>

                    <li>

                            <?php

                           if(!isset($_SESSION['customer_email'])){

                               echo"<a href='../checkout.php'>Login</a>";

                           }else{

                              echo"<a href='my_account.php?edit_account'>Edit Account</a>";

                           }

                           ?>

                    </li>
                </ul><!-- ul Finish -->

                <hr class="hidden-md hidden-lg hidden-sm">

            </div><!-- col-sm-6 col-md-3 Finish -->

            <div class="com-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->

                <h4>Top categorii produse</h4>

                <ul><!-- ul Begin -->

                    <?php

                        $get_p_cats = "select * from product_categories";

                        $run_p_cats = mysqli_query($con,$get_p_cats);

                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                            $p_cat_id = $row_p_cats['p_cat_id'];

                            $p_cat_title = $row_p_cats['p_cat_title'];

                            echo "

                                <li>

                                    <a href='../shop.php?p_cat=$p_cat_id'>

                                        $p_cat_title

                                    </a>

                                </li>

                            ";

                        }

                    ?>

                </ul><!-- ul Finish -->

                <hr class="hidden-md hidden-lg">

            </div><!-- col-sm-6 col-md-3 Finish -->

            <div class="col-sm-6 col-md-3"><!-- col-sm-6 col-md-3 Begin -->

                <h4>Contact</h4>

                <p><!-- p Start -->

                    <strong>E-store.</strong>
                    <br/>Sibiu
                    <br/>Romania
                    <br/>0743370919
                    <br/>comenzi@e-syore.com
                    <br/><strong>Laurentiu Cerghedean</strong>


                </p><!-- p Finish -->

                <a href="../contact.php">Pagina contact</a>

                <hr class="hidden-md hidden-lg">

            </div><!-- col-sm-6 col-md-3 Finish -->

            <div class="col-sm-6 col-md-3">

                <h4>Noutati</h4>

                <p class="text-muted">
                    Nu ratati cele mai noi produse.
                </p>

                <form action="https://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('https://feedburner.google.com/fb/a/mailverify?uri=M-devMedia', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" method="post"><!-- form begin -->
                    <div class="input-group"><!-- input-group begin -->

                        <input type="text" class="form-control" name="email">

                        <input type="hidden" value="M-devMedia" name="uri"/><input type="hidden" name="loc" value="en_US"/>

                        <span class="input-group-btn"><!-- input-group-btn begin -->

                            <input type="submit" value="subscribe" class="btn btn-default">

                        </span><!-- input-group-btn Finish -->

                    </div><!-- input-group Finish -->
                </form><!-- form Finish -->

                <hr>

                <h4>Urmariti-ne</h4>

                <p class="social">
                    <a href="../#" class="fa fa-facebook"></a>
                    <a href="../#" class="fa fa-twitter"></a>
                    <a href="../#" class="fa fa-instagram"></a>
                    <a href="../#" class="fa fa-google-plus"></a>
                    <a href="../#" class="fa fa-envelope"></a>
                </p>

            </div>
        </div><!-- row Finish -->
    </div><!-- container Finish -->
</div><!-- #footer Finish -->


<div id="copyright"><!-- #copyright Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-6"><!-- col-md-6 Begin -->

            <p class="pull-left">&copy; 2023 E-Store All Rights Reserve</p>

        </div><!-- col-md-6 Finish -->
        <div class="col-md-6"><!-- col-md-6 Begin -->

            <p class="pull-right">Theme by: <a href="#">Laurentiu Cerghedean</a></p>

        </div><!-- col-md-6 Finish -->
    </div><!-- container Finish -->
</div><!-- #copyright Finish -->
