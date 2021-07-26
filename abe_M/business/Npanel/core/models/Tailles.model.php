<?php
class Tailles{
    private $_id;
    private $_numero;
    private $_type;
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
    public function setNumero($numero){
        $numero= (int) $numero;
        if($numero>0)$this->_numero=$numero;
    }
     public function setType($type){
        $this->_type=$type;
    }
	public function setOnline($online){
      $this->_online=$online;
    }
    



     public function getId(){
      
      return $this->_id;
    }
  
    public function getNumero(){
      
       return $this->_numero;
    }

    public function getType(){
      
       return $this->_type;
    }
	public function getOnline(){
      
       return $this->_online;
    }

}
