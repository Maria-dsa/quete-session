<section class="cookies container-fluid">
    <div class="row">
        <?php
        if (isset($_SESSION['cart']))
            foreach ($catalog as $key => $cookie) :
                foreach ($_SESSION['cart'] as $cookieId) :
                    if ($key == $cookieId) {
                        ?><li><?= $cookie['name'] ?></li><?php
                    } else {
                        echo '';
                    }
                endforeach;
            endforeach;
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
