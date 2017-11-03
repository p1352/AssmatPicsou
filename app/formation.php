<?php 

require_once "app.core.php";
require_once "sql.core.php";

class Formation {
    public $formation;
    public $dureeformation;
    public $cpf;
    public $code;

public function __construct($formation, $dureeformation, $cpf, $code) {
    $this -> formation = $formation;
    $this -> duree = $dureeformation; 
    $this -> cpf = $cpf;
    $this-> code = $code;
}

public function save() {

    if ($this -> formation != NULL and $this -> formation !=' ') {
        $data = App::openSql();
        $data = $data -> insertSql('INSERT INTO Liste_de_formations (nom, duree, cpf, code) values (:nom, :duree, :cpf, :code)',
        $params = array ('nom'=> htmlspecialchars($this -> formation ), 'duree'=> htmlspecialchars($this -> duree), 'cpf'=>htmlspecialchars($this->cpf), 'code'=>htmlspecialchars($this->code))) ;
        header ('Location : index.php?page=admin');
    }
}

public static function liste ($balise) {
    $data = App::openSql();
    $data = $data-> querySql('SELECT nom, duree FROM Liste_de_formations ORDER BY nom');
    while ($formation = $data->fetch()) {
		
        echo '<'.$balise.'><a href="index.php?page=souhaitformation&formation='.$formation->nom.'">'.$formation->nom . ' ->'. $formation->duree. ' heures </a></'.$balise.'>'; 
    }
}

public static function table () {
    $data= App::openSql();
    $data =$data->querySql('SELECT nom, duree, id, cpf, code FROM Liste_de_formations ORDER BY nom');
    while ($formation = $data->fetch()) 
    {
        echo '<tr><td>'.$formation->nom.'</td><td>'.$formation->duree.'</td><td>'.$formation->code.'</td><td>'.$formation->cpf.'</td><td><a href="index.php?page=souhaitformation&formation='.$formation->nom.'" class="btn btn-primary" role = "button"> Voeux </a></td><td><form action="index.php?page=admin" method="POST">
        <input type="hidden" name="id" value="'.$formation->id.'"><button type="submit" class="btn btn-danger">Supprimer</button></form></td></tr>';
    }
}

public static function select ($cpf) {
	$data = App::openSql();
	$data = $data-> querySql('SELECT nom, duree FROM Liste_de_formations WHERE cpf ="'.$cpf.'" ORDER BY nom');
	while ($formation = $data->fetch()) {
		echo '<option value="'.$formation->nom.'">'.$formation->nom . ' -> '.$formation->duree.'heures </option>';
	}
}	

public static function selectsession (){
    $data = App::openSql();
    $data= $data-> querySql('SELECT nom, duree, code FROM Liste_de_formations ORDER BY nom');
    while ($formation = $data->fetch()) {
        echo '<option value="'.$formation->nom.'">'.$formation->code. ' -> '.$formation->nom.'</option>';
    }
}
	
public static function niveaux ($balise){
    $i = 0;
    while ($i !=11){
        echo '<'.$balise.'>'.$i.'</'.$balise.'>';
        $i = $i+1;
    }
}
}
?> 