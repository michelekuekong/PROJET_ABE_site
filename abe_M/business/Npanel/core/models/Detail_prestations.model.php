<?php
class Detail_prestations{
    private $_id;
    private $_id_prestation;
    private $_detail;
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
    public function setId_prestation($id_prestation){
      $this->_id_prestation=$id_prestation;
    }
    public function setDetail($detail){
      $this->_detail=stripslashes($detail);
    }
    
    public function setOnline($online){
      $this->_online=$online;
    }

    
   


     public function getId(){
      
      return $this->_id;
    }
    public function getId_prestation(){
      
       return $this->_id_prestation;
    }
  
    public function getDetail(){
      
       return $this->_detail;
    }

    
  public function getOnline(){
      
    return $this->_online;
  }

  
    
}
