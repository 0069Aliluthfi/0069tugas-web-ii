<?php 
require_once "config/database.php";
require_once "app/controllers/ProdukController.php";

$menu = $_GET['menu'] ?? 'home';

switch ($menu) {
    case 'barang':
        $produkController = new ProdukController();
        $produkController->index();
        break;
    case 'pelanggan':
        require_once "app/controllers/PelangganController.php";
        $controller = new PelangganController();
        $controller->index();
        break;
        case 'transaksi':
            require_once "app/controllers/TransaksiController.php";
            $controller = new TransaksiController();
            $action = $_GET['action'] ?? 'index';
            if ($action === 'detail' && isset($_GET['id'])) {
                $controller->detail($_GET['id']);
            } else {
                $controller->index();
            }
            break;
                
    default:
        include "app/views/home.php";
        break;
}
?>
