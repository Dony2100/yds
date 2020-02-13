<!DOCTYPE html>
<html lang="en">

    <?php
    //** Head **//
    $head = isset($_head) ? "layouts/header" . $_head : "layouts/header";
    $this->load->view($head);
    ?>

    <!-- <body class="bg-dark">	-->
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">

        <?php
        //** Content Class**//
        if (isset($_head)) {

            switch ($_head) {
                case "_login":
                    $class_out = "container";
                    $class_in = "card card-login mx-auto mt-5";
                    break;
                case "_register":
                    $class_out = "container";
                    $class_in = "card card-register mx-auto mt-5";
                    break;
                default:
                    $this->load->view('layouts/navbar');
                    $class_out = "content-wrapper";
                    $class_in = "container-fluid";
            }
        } else {
            $this->load->view('layouts/navbar');
            $class_out = "content-wrapper";
            $class_in = "container-fluid";
        }
        ?>

        <!-- Page Content -->
        <div class="<?= $class_out ?>">
            <div class="<?= $class_in ?>">
                <?php include("flash_message.php");?>
                <?php echo $this->load->view($_view);?>

            </div> <!-- /.class inside -->
        </div> <!-- /class outside -->

        <?php if (!isset($_head)) $this->load->view('layouts/footer'); ?>

        <?php
        //** Loading javascript **//
        if (is_javas_exist($this->view_dir) && !isset($this->noscript)) {
            $this->load->view($this->view_dir.'javascript');
        }
        ?>
        
    </body>
</html>

<?php
function is_javas_exist($param) {
    $vdir = $param !== NULL ? $param : "";
    $cdir = getcwd() . "/application/views/" . $vdir;
    if ($vdir) {
        if (file_exists($cdir . 'javascript.php')) return TRUE;
    }
    return FALSE;
}
?>