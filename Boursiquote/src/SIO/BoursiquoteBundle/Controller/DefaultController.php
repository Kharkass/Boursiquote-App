<?php

namespace SIO\BoursiquoteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use models;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use DirkOlbrich\YahooFinanceQuery\YahooFinanceQuery;



class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SIOBoursiquoteBundle:Default:index.html.twig', array('name' => $name));
    }

    public function accueilAction(Request $request)
    {

        if($request->request->has('submit')) {
            $mail = $request->get('mail');
            $mdp = $request->get('mdp');
            $pdo = models\PDOLabourse::getPDOLabourse();
            $result = $pdo->connecter($mail, $mdp);
            if ($result){
                $session=new Session();
                $session->set('estlog', $mail);
                $this->get('session')->getFlashBag()->add('notice', 'Connecte ! ');
               $url = $this->get('router')->generate('sio_boursiquote_tableau');
            }else{
                $this->get('session')->getFlashBag()->add('notice', 'Connexion refusée, Mail ou Mot de Passe incorrect ');
                $url = $this->get('router')->generate('sio_boursiquote_accueil');
            }

            return new RedirectResponse($url);
        }

        else{
            if ($request->request->has('inscrire')){
                $url = $this->get('router')->generate('sio_boursiquote_inscription');
                return new RedirectResponse($url);
            }
            else
            return $this->render('SIOBoursiquoteBundle:Default:accueil.html.twig');
        }
    }

    public function inscriptionAction(Request $request)
    {
        if ($request->request->has('submit')){
            $nom = $request->get('nom');
            $prenom = $request->get('prenom');
            $mail = $request->get('mail');
            $telephone = $request->get('telephone');
            $mdp = $request->get('mdp');

            $pdo = models\PDOLabourse::getPDOLabourse();
            $pdo->ajoutclient($nom,$prenom,$mail,$telephone,$mdp);
            $this->get('session')->getFlashbag()->add('notice','Votre compte a été créé, un mail de confirmation vous a été envoyé. Merci.');

        }
        return $this->render('SIOBoursiquoteBundle:Default:inscription.html.twig');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function tableauAction(Request $request)
    {
        $session=new Session();

        if($session->get('estlog'))
        {
            if($request->request->has('rechercheS'))
            {
                $symbol = explode(' ', $request->get('symbol_cacher'));
                //$param = explode(' ', ' ');
                $params = array();
                $query = new YahooFinanceQuery();
                $data = $query->quote($symbol, $params)->get();
                dump($data);
                $actuelle = date("Y-m-d");
                dump($actuelle);

                $choix = $request->get('graphique');
                dump($choix);

                $categories = array();


                if($choix == '7jours')
                {
                    $precedent = date("Y-m-d",strtotime ("$actuelle -7 day"));
                }

                if($choix == '30jours')
                {
                    $precedent= date("Y-m-d",strtotime("$actuelle -1 month  "));
                }

                if($choix == '3mois')
                {
                    $precedent= date("Y-m-d",strtotime("$actuelle -3 month"));
                }

                if($choix == '6mois')
                {
                    $precedent= date("Y-m-d",strtotime("$actuelle -6 month"));
                }

                if($choix == '1an')
                {
                    $precedent= date("Y-m-d",strtotime("$actuelle -1 year"));
                }

                $type = 'd';
                $query2 = new YahooFinanceQuery();
                $graph = $query2->historicalQuote($request->get('symbol_cacher'), $precedent, $actuelle, $type)->get();
                dump($graph);
                $valeurs= array();

                if (sizeof($graph) < 1 )
                {

                    $this->get('session')->getFlashBag()->add('notice', "Graphique d'action indisponible");
                    $url = $this->get('router')->generate('sio_boursiquote_tableau');
                    return new RedirectResponse($url);

                }
                else {


                    foreach ($graph as $value) {
                        $valeurs[] = $value['High'];
                    }


                    foreach ($graph as $value) {
                        $valeursOuv[] = $value['Open'];
                    }

                    foreach ($graph as $value) {
                        $valeursLow[] = $value['Low'];
                    }

                    foreach ($graph as $value) {
                        $valeursClose[] = $value['Close'];
                    }


                    dump($categories);
                    dump($valeurs);

                    return $this->render('SIOBoursiquoteBundle:Default:detail.html.twig', array('data' => $data, 'graph' => $graph, 'valeurs' => $valeurs, 'valeursOuv' => $valeursOuv, 'valeursLow' => $valeursLow, 'valeursClose' => $valeursClose, 'fin' => $actuelle, 'debut' => $precedent));
                }
            }
            else
            {
                if($request->request->has('addFav'))
                {
                    $symbol = $request->get('symbol_cacher');
                    $mail = $session->get('estlog');
                    $nom = $request->get('nom_cache');
                    $pdo = models\PDOLabourse::getPDOLabourse();
                    $pdo->addfavmembre($mail, $symbol, $nom);
                    $this->get('session')->getFlashBag()->add('notice', 'Ajoute ! ');
                }
                if($request->request->has('SupFav'))
                {
                    $symbol = $request->get('symbol_cacher');
                    $mail = $session->get('estlog');
                    $pdo = models\PDOLabourse::getPDOLabourse();
                    $pdo->SupFav($mail, $symbol);
                }
                if($request->request->has('fav')) {
                    $mail = $session->get('estlog');
                    $pdo = models\PDOLabourse::getPDOLabourse();
                    $lesSymboles=$pdo->selectfav($mail);
                    return $this->render('SIOBoursiquoteBundle:Default:favoris.html.twig',array('lesSymboles'=>$lesSymboles));
                }
                if ($request->request->has('recherche')) {
                    $nom = $request->get('nom');
                    $query = new YahooFinanceQuery();
                    $data = $query->symbolSuggest($nom)->get();
                } else {
                    $query = new YahooFinanceQuery();
                    $data = $query->symbolSuggest('CAC 40')->get();
                    dump($data);
                }
                return $this->render('SIOBoursiquoteBundle:Default:tableau.html.twig', array('data' => $data));
            }

        }else
        {
            return $this->render('SIOBoursiquoteBundle:Default:accueil.html.twig');
        }

    }

    public function afficherAction()
    {
        $query = new YahooFinanceQuery();
        $data = $query->symbolSuggest('CAC 40')->get();
        return $this->render('SIOBoursiquoteBundle:Default:tableau.html.twig',array ('data' => $data));
    }
}



