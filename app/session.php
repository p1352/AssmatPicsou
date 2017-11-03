<?php 

require_once "app.core.php";
require_once "sql.core.php";

class Session {
    public $nom;
    public $duree;
    public $code;
    public $id;
    public $formateur;
    public $lieu;
    public $ouvert;
    public $cpf;
    public $date1;
    public $date2;
    public $date3;
    public $date4;
    public $date5;

    public function __construct($nom, $formateur, $lieu, $date1, $date2, $date3, $date4, $date5) {
        $this -> nom = $nom;
        
        $data = App::openSql();
        $data = $data-> querySql('SELECT nom, duree, cpf, code FROM Liste_de_formations WHERE nom="' .htmlspecialchars($this->nom). '"');
        while ($formation = $data->fetch()) {
        $this-> duree = $formation->duree;
        $this-> cpf = $formation->cpf;
        $this-> code = $formation->code;
        }
        $data = App::openSql();
        $data = $data->querySql('SELECT COUNT(date1) AS nbsession FROM liste_sessions WHERE nom="'.htmlspecialchars($this->nom).'"');
        $data = $data->fetch();
        $this->id = $data->nbsession+1;
        $this->formateur = $formateur;
        $this->lieu = $lieu; 
        $this->date1 = $date1;
        $this->date2 = $date2;
        $this->date3 = $date3;
        $this->date4 = $date4;
        $this->date5 = $date5;
    }

    public function save() {
        
            if ($this -> nom != NULL and $this -> nom !=' ' and $this->formateur !=' ' and $this->formateur != NULL) {
                $this->ouvert = "oui";
                // var_dump ($this);
                $data = App::openSql();
                $data = $data -> insertSql('INSERT INTO liste_sessions (nom, duree, code, id, formateur, lieu, ouvert, cpf, date1, date2, date3, date4, date5) values (:nom, :duree, :code, :id, :formateur, :lieu, :ouvert, :cpf, :date1, :date2, :date3, :date4, :date5)',
                $params = array ('nom'=> htmlspecialchars($this->nom), 'duree'=> htmlspecialchars($this->duree), 'code'=>htmlspecialchars($this->code), 'id'=>($this->id), 'formateur'=>htmlspecialchars($this->formateur), 'lieu'=>htmlspecialchars($this->lieu), 'cpf'=>htmlspecialchars($this->cpf), 'ouvert'=>htmlspecialchars($this->ouvert) ,'date1'=>htmlspecialchars($this->date1), 'date2'=>htmlspecialchars($this->date2), 'date3'=>htmlspecialchars($this->date3), 'date4'=>htmlspecialchars($this->date4), 'date5'=>htmlspecialchars($this->date5) )) ;
                
            }
        }
    

    public static function listetableau ($form) {
        $data = App::openSql();
        $data = $data-> querySql('SELECT id, formateur, lieu, date1, duree FROM liste_sessions WHERE nom="' .htmlspecialchars($form). '"');
        while ($formation = $data->fetch()) {
            
            echo '<TR><td><a href="index.php?page=sessiondetails&session='.$formation->id.'">'.$formation->id. '</a></td><td>'. $formation->lieu.'</td><td>'.$formation->formateur.'</td><td>'.$formation->date1.'</td><td>'.$formation->duree.'</td></tr>'; 
        }
    }

    
public static function table () {
    $data= App::openSql();
    $data =$data->querySql('SELECT identifiant, nom, duree, code, id, cpf, lieu, formateur FROM liste_sessions ORDER BY nom');
    while ($formation = $data->fetch()) 
    {
        echo '<tr><td>'.$formation->nom.'</td><td>'.$formation->duree.'</td><td>'.$formation->code.'</td><td>'.$formation->code.$formation->id.'</td><td><a href="index.php?page=souhaitformation&formation='.$formation->nom.'" class="btn btn-primary" role = "button"> Voeux </a></td><td><form action="index.php?page=session" method="POST">
        <button type="submit" name="supprime" value="'.$formation->identifiant.'" class="btn btn-danger">Supprimer</button></form></td></tr>';
    }
}
public static function supprime($identifiant) {
    if ($identifiant !=NULL and $identifiant !=""){
        $data = App::openSql();
       $data = $data->deleteSql('DELETE FROM liste_sessions WHERE identifiant=:identifiant',
    $params = array ('identifiant' => $identifiant)); 
    }
    

}

}

