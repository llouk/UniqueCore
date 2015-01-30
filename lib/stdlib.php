 <?php
    function __autoload($class) {
        include "$class.php";
    }

    function initialise_site(csite $site) {
        $site->addHeader("core/header.php");
        $site->addFooter("core/footer.php");
    }
?> 