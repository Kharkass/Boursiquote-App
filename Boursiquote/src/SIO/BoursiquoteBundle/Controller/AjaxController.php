<?php
namespace SIO\BoursiquoteBundle\AjaxController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use models;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use DirkOlbrich\YahooFinanceQuery\YahooFinanceQuery;

class AjaxController extends Controller
{

    public function Getfav($symbole)
    {
        $symbol = explode(' ', $symbole);
        $params = array();
        $query = new YahooFinanceQuery();
        $data = $query->quote($symbol, $params)->get();
        return $data;
    }

}
?>