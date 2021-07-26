<?php
class R_prestation_icones{
    private $_id;
    private $_id_icone;
    private $_id_prestation;
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
    public function setId_icone($id_icone){
        $id_icone= (int) $id_icone;
        if($id_icone>0)$this->_id_icone=$id_icone;
    }
     public function setId_prestation($id_prestation){
        $id_prestation= (int) $id_prestation;
        if($id_prestation>0)$this->_id_prestation=$id_prestation;
    }
	public function setOnline($online){
      $this->_online=$online;
    }
    



     public function getId(){
      
      return $this->_id;
    }
  
    public function getId_icone(){
      
       return $this->_id_icone;
    }

    public function getId_prestation(){
      
       return $this->_id_prestation;
    }
	public function getOnline(){
      
       return $this->_online;
    }

}
