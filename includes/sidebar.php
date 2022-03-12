
<div class="panel panel-default sidebar-menu"><!--"panel panel-default sidebar-menu begin-->
    <div class="panel-heading"><!--panel-heading begin-->
        <h3 class="panel-title">Products Categories</h3>
    </div><!--panel-heading end-->

    <div class="panel-body"><!--panel-body begin-->
        <ul class="nav nav-pills nav-stacked category-menu"><!--nav nav-pills nav-stacked category-menu begin-->

        <?php
            $stmt = $productCategory->read();

            while($p_cats = $stmt->fetch(PDO::FETCH_ASSOC)){
                extract($p_cats);
                ?>
                <li>
                    <a href="shop.php?p_cat=<?php echo $p_cat_id ?>"> <?php echo $p_cat_title ?> </a>
                </li>
                <?php
            }
        ?>
            <!--Static Product Categories-->
            <!--<li><a href="">Jackets</a></li>
            <li><a href="">Accessories</a></li>
            <li><a href="">Coats</a></li>
            <li><a href="">Shoes</a></li>
            <li><a href="">T-Shirts</a></li>-->

        </ul><!--nav nav-pills nav-stacked category-menu end-->
    </div><!--panel-body end-->


</div><!--"panel panel-default sidebar-menu end-->


<div class="panel panel-default sidebar-menu"><!--"panel panel-default sidebar-menu begin-->
    <div class="panel-heading"><!--panel-heading begin-->
        <h3 class="panel-title">Categories</h3>
    </div><!--panel-heading end-->

    <div class="panel-body"><!--panel-body begin-->
        <ul class="nav nav-pills nav-stacked category-menu"><!--nav nav-pills nav-stacked category-menu begin-->
            <?php
                $stmt = $category->read();
                while($cats = $stmt->fetch(PDO::FETCH_ASSOC)){
                    extract($cats);
                    ?>
                    <li>
                        <a href="shop.php?cat=<?php echo $cat_id; ?>"><?php echo $cat_title; ?></a>
                    </li>
                    <?php
                }
            ?>
            <!--Satatic Categories-->
            <!--<li><a href="">Men</a></li>
            <li><a href="">Women</a></li>
            <li><a href="">Kids</a></li>
            <li><a href="">Pets & Others</a></li>-->

        </ul><!--nav nav-pills nav-stacked category-menu end-->
    </div><!--panel-body end-->


</div><!--"panel panel-default sidebar-menu end-->