<?php
    if (isset($_GET["page"])) {
        $dir = "../src/";
        $srcs = scandir($dir);
        foreach ($srcs as $src) {
            $file = explode(".php", $src);
            if (!empty($file) && $file[0] == $_GET["page"])
            {
                header("Location:" . $dir . $_GET["page"] . ".php");
                exit();
            }
        }
        $dir = "../templates/";
        $srcs = scandir($dir);
        foreach ($srcs as $src) {
            $file = explode(".php", $src);
            if (!empty($file) && $file[0] == $_GET["page"])
            {
                header("Location:" . $dir . $_GET["page"] . ".php");
                exit();
            }
        }
        $dir = "../";
        $srcs = scandir($dir);
        foreach ($srcs as $src) {
            $file = explode(".php", $src);
            if (!empty($file) && $file[0] == $_GET["page"])
            {
                header("Location:" . $dir . $_GET["page"] . ".php");
                exit();
            }
        }
        $dir = "../legal/";
        $srcs = scandir($dir);
        foreach ($srcs as $src) {
            $file = explode(".php", $src);
            if (!empty($file) && $file[0] == $_GET["page"])
            {
                header("Location:" . $dir . $_GET["page"] . ".php");
                exit();
            }
        }
    }
?>
<style>
    <?php include_once "../css/default.css" ?> 
</style>
<?php include_once "transition.php" ?>