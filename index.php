<?php 


//* CREO LA CLASSE
class Product {
    protected $id;
    protected $description;
    protected $price;
    protected $seller;
    protected $howmany;


//? CREO LA FUNZIONE CONSTRUCT
    protected function __construct($_id,$_description,$_price,$_seller,$_howmany){
        $this->id = $_id;
        $this->description = $_description;
        $this->price = $_price;
        $this->seller = $_seller;
        $this->howmany = $_howmany;

    }

//#GETTER

    protected function get_id(){
        return $this->id;
    }
    protected function get_description(){
        return $this->description;
    }
    protected function get_price(){
        return $this->price;
    }
    protected function get_seller(){
        return $this->seller;
    }
    protected function get_howmany(){
        return $this->howmany;
    }

    public function bau(){
        return 'bau' ;
    }

   /*  public function isAvailable(){
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
    } */

}

$libro1 = new Product ("1","Il miglior libro mai stato scritto","24", "Mondadori", "175");
echo $libro1->bau();

?>