<?php
/**
 * Classe d'accès aux données.

 * Utilise les services de la classe PDO
 * pour l'application lafleur
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO
 * $monPdoGsb qui contiendra l'unique instance de la classe
 *
 * @package default
 * @author Patrice Grand
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */
namespace models;
class PDOLabourse
{
    private static $serveur='mysql:host=localhost';
    private static $bdd='dbname=bourse';
    private static $user='root' ;
    private static $mdp='' ;
    private static $monPdo;
    private static $monPDOLabourse = null;
/**
* Constructeur privé, crée l'instance de PDO qui sera sollicitée
* pour toutes les méthodes de la classe
*/
    private function __construct()
    {
    PDOLabourse::$monPdo = new \PDO(PDOLabourse::$serveur.';'.PDOLabourse::$bdd, PDOLabourse::$user, PDOLabourse::$mdp);
    PDOLabourse::$monPdo->query("SET CHARACTER SET utf8");
    }
    public function _destruct(){
    PDOLabourse::$monPdo = null;
    }

    public  static function getPDOLabourse()
    {
        if(PDOLabourse::$monPDOLabourse == null)
        {
            PDOLabourse::$monPDOLabourse= new PDOLabourse();
        }
        return PDOLabourse::$monPDOLabourse;
    }
    public function connecter($mail,$mdp)
        {
            $req = "SELECT count(*) as nb FROM membre where mail='$mail' and mdp='$mdp'";

           
            $res = PDOLabourse::$monPdo->query($req);
            $laLigne = $res->fetch();
          //  $_SESSION["mail"] = $laLigne["id"];

            $nb = $laLigne['nb'] ;
            if($nb == 0){
                return false;

            }else{
                return true;
            }
        }
    public function ajoutclient($nom, $prenom, $mail, $telephone, $mdp)
    {

        $req ="INSERT INTO membre (nom, prenom, mail, mdp,telephone) VALUES ('$nom','$prenom','$mail','$mdp','$telephone')";
        $res = PDOLabourse::$monPdo->query($req);
    }
    public function addfavmembre($mail, $symbol, $nom)
    {
        $req = "Insert into favoris (MailMembre, SymbolAction, NomAction) VALUES ('$mail', '$symbol', '$nom')";
        $res = PDOLabourse::$monPdo->query($req);

    }

    public function selectFav($mail)
    {
        $req ="select SymbolAction, NomAction from favoris where MailMembre='$mail'  ";
        $res = PDOLabourse::$monPdo->query($req);
        $lesLignes = $res->fetchAll();
        return $lesLignes;
    }
    public function SupFav($mail, $symbol){
        $req = "delete from favoris where MailMembre='$mail' and SymbolAction='$symbol'";
        $res = PDOLabourse::$monPdo->query($req);
    }
    public function Tableaudebord()
    {

    }
    public function Voirvaleur()
    {

    }
    public function Personnaliserdonnee()
    {

    }
    public function Voirmarche()
    {

    }
    public function VoirWatlist()
    {

    }
    public function AjoutWatlist()
    {

    }
    public function EpinglerValeur()
    {

    }
    public function RechercherValeur()
    {

    }
}
