<?php
class Type_prestations{
    private $_id;
    private $_titre;
    private $_code;
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
  
    public function setTitre($titre){
      $this->_titre=(string)$titre;
    }

    public function setCode($code){
      $this->_code=(string)$code;
    }

    public function setOnline($online){
      $this->_online=$online;
    }



     public function getId(){
      
      return $this->_id;
    }
  
  
    public function getTitre(){
      
       return $this->_titre;
    }
    public function getCode(){
      
       return $this->_code;
    }

    public function getOnline(){
      
       return $this->_online;
    }

    
}
