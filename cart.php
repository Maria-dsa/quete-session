<?php require 'inc/head.php';
require 'inc/data/products.php';

?>
<?php session_start(); ?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        $cart = array_count_values($_SESSION['cart']);
        foreach ($cart as $key => $value) {
            echo $value . ' of ' . $catalog[$key]['name'] . '<br>';
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
