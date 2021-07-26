<?php
class Detail_produit_prestations{
    private $_id;
    private $_id_produit_prestation;
    private $_detail;
    private $_description;
    private $_online;
   

    public function __construct(array $data){
        $this->hydrate($data);
    }
  
    public function hydrate(array $data){
        
        foreach($data as $key => $value){

          $method="set".ucfirst($key);
          if(method_exists($this,$method)){
              $this->$method($value);
          }
  
        }
    }
   public function setId($id){
        $id= (int) $id;
        if($id>0)$this->_id=$id;
    }
    public function setId_produit_prestation($id_produit_prestation){
      $this->_id_produit_prestation=(int)$id_produit_prestation;
    }
    public function setDetail($detail){
      $this->_detail=(string)stripslashes($detail);
    }

    public function setDescription($description){
      $this->_description=(string)stripslashes($description);
    }
    
    public function setOnline($online){
      $this->_online=$online;
    }

    
   


     public function getId(){
      
      return $this->_id;
    }
    public function getId_produit_prestation(){
      
       return $this->_id_produit_prestation;
    }
  
    public function getDetail(){
      
       return $this->_detail;
    }

    public function getDescription(){
      
       return $this->_description;
    }

    
  public function getOnline(){
      
    return $this->_online;
  }

  
    
}
