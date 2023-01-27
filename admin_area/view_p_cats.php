<?php

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";

    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>

                <i class="fa fa-dashboard"></i> Dashboard / Categorii produse

            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->

                    <i class="fa fa-tags fa-fw"></i> Categorii produse

                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->

            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->

                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> ID </th>
                                <th> Categorie produse </th>
                                <th> Descriere </th>
                                <th> Editare </th>
                                <th> Stergere </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->

                        <tbody><!-- tbody begin -->

                            <?php

                                $i=0;

                                $get_p_cats = "select * from product_categories";

                                $run_p_cats = mysqli_query($con,$get_p_cats);

                                while($row_p_cats=mysqli_fetch_array($run_p_cats)){

                                    $p_cat_id = $row_p_cats['p_cat_id'];

                                    $p_cat_title = $row_p_cats['p_cat_title'];

                                    $p_cat_desc = $row_p_cats['p_cat_desc'];

                                    $i++;

                            ?>

                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $p_cat_title; ?> </td>
                                <td width="300"> <?php echo $p_cat_desc; ?> </td>
                                <td>
                                    <a href="index.php?edit_p_cat= <?php echo $p_cat_id; ?> ">
                                        <i class="fa fa-pencil"></i> Editare
                                    </a>
                                </td>
                                <td>
                                    <a href="index.php?delete_p_cat= <?php echo $p_cat_id; ?> ">
                                        <i class="fa fa-trash"></i> Stergere
                                    </a>
                                </td>
                            </tr><!-- tr finish -->

                            <?php } ?>

                        </tbody><!-- tbody finish -->

                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->

        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php } ?>