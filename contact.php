<?php
include "bloc/head-import.php";

?>

<body>
    <?php
    include "bloc/header.php";
    // include "bloc/header-big-menu.php";
    // include "bloc/header-mega-menu.php";
    ?>
    <main role="main">
        <div class="container-fluid marketing bg-light">
        <?php
            include "bloc/fil_arian.php";
        ?>
            <div class=" container">
                <!-- START : BLOC INFO VOUYAGEURS -->
                <?php
                include "bloc/form-contact.php";
                ?>
            </div>
        </div>
        <!-- /.container -->
        <?php
        include "bloc/footer.php";
        ?>
    </main>

    <?php
    include "bloc/import-js.php";
    ?>