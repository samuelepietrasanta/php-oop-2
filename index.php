<?php 


//* CREO LA CLASSE
class Products{
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


//#SETTER

    protected function set_id($id){
        $this->id = $id;
    }

    protected function set_description($description){
        $this->description = $description;
    }
    protected function set_price($price){
        $this->price = $price;
    }
    protected function set_seller($seller){
        $this->seller = $seller;
    }
    protected function set_howmany($howmany){
        $this->howmany = $howmany;
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


    function isAvailable(){
        if($this->howmany > 0){
            return true;
        }
        return false;
    }







    
}?>