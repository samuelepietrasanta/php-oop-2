<?php 


//* CREO LA CLASSE

class Product {
    protected $id;
    protected $description;
    protected $price;
    protected $seller;
    protected $howmany;


//? CREO LA FUNZIONE CONSTRUCT

    public function __construct($_description,$_price,$_seller,$_howmany){
        $this->description = $_description;
        $this->price = $_price;
        $this->seller = $_seller;
        $this->howmany = $_howmany;

    }

//#GETTER

    public function get_id(){
        return $this->id;
    }
    public function get_description(){
        return $this->description;
    }
    public function get_price(){
        return $this->price;
    }
    public function get_seller(){
        return $this->seller;
    }
    public function get_howmany(){
        return $this->howmany;
    }

//! METODI

    public function prova(){
        return 'prova' ;
    }

    public function isAvailable(){
        if($this->howmany > 0){
            return true;
        }
        return false;
    }

    public function isCheap(){
        if($this->price < 10){
            return true;
        }
        return false;
    }

}


class User{
    protected $id;
    protected $name;
    protected $surname;
    protected $birth_year;
    protected $credit_card;
    protected $percentuale_sconto;
 

    /**
     * indica un utente
     */
    public function __construct($_name,$_surname,$_birth_year,$_credit_card,$_percentuale_sconto = 0){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->birth_year = $_birth_year;
        $this->credit_card = $_credit_card;
        $this->percentuale_sconto = $_percentuale_sconto;



    }

    public function old_scount(){
        if($this->birth_year < 1960){
            $this->percentuale_sconto += 10;
        }
    }

};

class PremiumUser extends User{
    protected $anno_abbonamento;
    protected $indirizzo;


    public function __construct($_name,$_surname,$_birth_year,$_credit_card,$_indirizzo,$_anno_abbonamento){
        parent::__construct($_name,$_surname,$_birth_year,$_credit_card,15);
        $this->anno_abbonamento =$_anno_abbonamento;
        $this->indirizzo = $_indirizzo;
    }
};

$libro = new Product ("Il miglior libro mai stato scritto",24, "Mondadori", 175);
$computer = new Product ("un semplice portatile", 369,"Acer", 14);
$gino = new User("Gino","Ginetti",1971,123456789);
$mario = new PremiumUser("Mario","Marietti",1958,123456798,"cosa a caso",2019)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>
<body>
    <h1>  <?= $libro->prova() ?>   </h1>
</body>
</html>
