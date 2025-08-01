// Tesdb.php
namespace App\Controllers;
use CodeIgniter\Controller;

class Tesdb extends Controller
{
    public function index()
    {
        $db = \Config\Database::connect();
        if ($db->connect()) {
            echo "BERHASIL TERHUBUNG KE DB";
        } else {
            echo "GAGAL TERHUBUNG DB";
        }
    }
}
