  <?php

    $active='Cos';
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
                       Cos Cumparaturi
                   </li>
               </ul><!-- breadcrumb Finish -->

           </div><!-- col-md-12 Finish -->

           <div id="cart" class="col-md-9"><!-- col-md-9 Begin -->

               <div class="box"><!-- box Begin -->

                   <form action="cart.php" method="post" enctype="multipart/form-data"><!-- form Begin -->

                       <h1>Cos Cumparaturi</h1>
                       <p class="text-muted">Aveti 3 produs(e) in cos</p>

                       <div class="table-responsive"><!-- table-responsive Begin -->

                           <table class="table"><!-- table Begin -->

                               <thead><!-- thead Begin -->

                                   <tr><!-- tr Begin -->

                                       <th colspan="2">Produs</th>
                                       <th>Cantitate</th>
                                       <th>Pret unitar</th>
                                       <th>Aroma</th>
                                       <th colspan="1">Stergere</th>
                                       <th colspan="2">Sub-Total</th>

                                   </tr><!-- tr Finish -->

                               </thead><!-- thead Finish -->

                               <tbody><!-- tbody Begin -->

                                   <tr><!-- tr Begin -->

                                       <td>

                                           <img class="img-responsive" src="admin_area/product_images/produs1.JPG" alt="Produs 1">

                                       </td>

                                       <td>

                                           <a href="#">Proteine IWHEY 2000g</a>

                                       </td>

                                       <td>

                                           1

                                       </td>

                                       <td>

                                           289 lei

                                       </td>

                                       <td>

                                           Ciocolata

                                       </td>

                                       <td>

                                           <input type="checkbox" name="remove[]">

                                       </td>

                                       <td>

                                           289 lei

                                       </td>

                                   </tr><!-- tr Finish -->

                               </tbody><!-- tbody Finish -->

                               <tbody><!-- tbody Begin -->

                                   <tr><!-- tr Begin -->

                                       <td>

                                           <img class="img-responsive" src="admin_area/product_images/produs2.JPG" alt="Produs 2">

                                       </td>

                                       <td>

                                           <a href="#">Omega-3T </a>

                                       </td>

                                       <td>

                                           2

                                       </td>

                                       <td>

                                           87 lei

                                       </td>

                                       <td>

                                           Fara Aroma

                                       </td>

                                       <td>

                                           <input type="checkbox" name="remove[]">

                                       </td>

                                       <td>

                                           174 lei

                                       </td>

                                   </tr><!-- tr Finish -->

                               </tbody><!-- tbody Finish -->

                               <tbody><!-- tbody Begin -->

                                   <tr><!-- tr Begin -->

                                       <td>

                                           <img class="img-responsive" src="admin_area/product_images/produs3.JPG" alt="Produs 3">

                                       </td>

                                       <td>

                                           <a href="#">Creapure 300g </a>

                                       </td>

                                       <td>

                                           2

                                       </td>

                                       <td>

                                           129 lei

                                       </td>

                                       <td>

                                           Banana

                                       </td>

                                       <td>

                                           <input type="checkbox" name="remove[]">

                                       </td>

                                       <td>

                                           258 lei

                                       </td>

                                   </tr><!-- tr Finish -->

                               </tbody><!-- tbody Finish -->

                               <tfoot><!-- tfoot Begin -->

                                   <tr><!-- tr Begin -->

                                       <th colspan="5">Total</th>
                                       <th colspan="2">721 lei</th>

                                   </tr><!-- tr Finish -->

                               </tfoot><!-- tfoot Finish -->

                           </table><!-- table Finish -->

                       </div><!-- table-responsive Finish -->

                       <div class="box-footer"><!-- box-footer Begin -->

                           <div class="pull-left"><!-- pull-left Begin -->

                               <a href="index.php" class="btn btn-default"><!-- btn btn-default Begin -->

                                   <i class="fa fa-chevron-left"></i> Continuati cumparaturile

                               </a><!-- btn btn-default Finish -->

                           </div><!-- pull-left Finish -->

                           <div class="pull-right"><!-- pull-right Begin -->

                               <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!-- btn btn-default Begin -->

                                   <i class="fa fa-refresh"></i> Update Cos cumparaturi

                               </button><!-- btn btn-default Finish -->

                               <a href="checkout.php" class="btn btn-primary">

                                   Checkout <i class="fa fa-chevron-right"></i>

                               </a>

                           </div><!-- pull-right Finish -->

                       </div><!-- box-footer Finish -->

                   </form><!-- form Finish -->

               </div><!-- box Finish -->

               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box same-height headline"><!-- box same-height headline Begin -->
                           <h3 class="text-center">Produse care ti-ar placea</h3>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->

                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/produs1.JPG" alt="Produs 1">
                            </a>

                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">Proteine IWHEY 2000g</a></h3>

                                <p class="price">289 lei</p>

                            </div><!-- text Finish -->

                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->

                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/produs4.JPG" alt="Produs 4">
                            </a>

                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">iGlutamine 450g</a></h3>

                                <p class="price">129 lei</p>

                            </div><!-- text Finish -->

                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->

                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="admin_area/product_images/produs3.JPG" alt="Produs 3">
                            </a>

                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">Creapure 300g</a></h3>

                                <p class="price">129 lei</p>

                            </div><!-- text Finish -->

                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->

               </div><!-- #row same-heigh-row Finish -->

           </div><!-- col-md-9 Finish -->

           <div class="col-md-3"><!-- col-md-3 Begin -->

               <div id="order-summary" class="box"><!-- box Begin -->

                   <div class="box-header"><!-- box-header Begin -->

                       <h3>Sumar comanda</h3>

                   </div><!-- box-header Finish -->

                   <p class="text-muted"><!-- text-muted Begin -->

                       Costurile de expeditie si alte costuri suplimentare sunt calculate in functie de valorile introduse.

                   </p><!-- text-muted Finish -->

                   <div class="table-responsive"><!-- table-responsive Begin -->

                       <table class="table"><!-- table Begin -->

                           <tbody><!-- tbody Begin -->

                               <tr><!-- tr Begin -->

                                   <td> Sub-Total Comanda </td>
                                   <th> 721 lei </th>

                               </tr><!-- tr Finish -->

                               <tr><!-- tr Begin -->

                                   <td> Expediere si manipulare </td>
                                   <td> 0 lei </td>

                               </tr><!-- tr Finish -->

                               <tr><!-- tr Begin -->

                                   <td> Taxe </td>
                                   <th> 0 lei</th>

                               </tr><!-- tr Finish -->

                               <tr class="total"><!-- tr Begin -->

                                   <td> Total </td>
                                   <th> 721 lei </th>

                               </tr><!-- tr Finish -->

                           </tbody><!-- tbody Finish -->

                       </table><!-- table Finish -->

                   </div><!-- table-responsive Finish -->

               </div><!-- box Finish -->

           </div><!-- col-md-3 Finish -->

       </div><!-- container Finish -->
   </div><!-- #content Finish -->

   <?php

    include("includes/footer.php");

    ?>

    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>


</body>
</html>
