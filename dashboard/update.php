<?php

    require 'database/r.php';
            
    echo '
        <iframe name="hidden-frame" class="hidden-frame"></iframe>
        <section class="sect1">
            <form action="edit.php" method="GET" target="hidden-frame" class="form__add">
                <input type="text" placeholder="Product Name" class="input">
                <input type="submit" value="Search Product" class="btn__form1">
            </form>
        </section>
            <section class="sect2">
                <div class="group1">
                
                    <div class="s__group1">
                        <div class="table__a">Product Name</div>
                        <div class="table__a">Price</div>
                        <div class="table__a">Quantity</div>
                        <div class="table__a">Categories</div>
                    </div>
        ';

    if($products) {
        foreach($products as $product) {
            echo "
                <div class='s__group2'>
                    <div style='display:none;'>$product[id]</div>
                    <div class='table__n'>$product[name]</div>
                    <div class='table__n'>$product[price]</div>
                    <div class='table__n'>$product[qty]</div>
                    <div class='table__n'>Phones</div>

                    <a onclick='modifyProduct(this)'><img src='imgs/add.png' width='30' height='30' class='edit__add' title='add'></a>
                    <a onclick='modifyProduct(this)'><img src='imgs/remove.png' width='30' height='30' class='edit__remove' title='remove'></a>
                </div>
            ";
        }
    }

    echo '
            </div>
        </section>
        ';    

    // input alert.
    // echo '
    //     <div class="updateAlert">
    //         <h3></h3>
    //         <form action="edit.php" method="GET" target="hidden-frame" class="form__add">
    //             <input type="text" placeholder="Product Name" class="input">
    //             <input type="submit" value="Search Product" class="btn__form1">
    //         </form>
    //     </div>
    // ';
    
    $connect = null;

?>
