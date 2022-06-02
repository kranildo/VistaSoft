
<?php 
class Navbar
{
    function __construct()
    {
    }
    public static function definePagina()
    {
        $pag_atual = "inicial";
        if (isset($_POST['paginas'])) {
            $_SESSION['pag_atual'] = $_POST['paginas'];
            $pag_atual = $_SESSION['pag_atual'];
        } else if (isset($_SESSION['pag_atual'])) {
            $pag_atual = $_SESSION['pag_atual'];
        }
        return   $pag_atual;
    }
}
