<?php
class Produit_prestations{
    private $_id;
    private $_id_prestation;
    private $_titre;
    private $_description;
    private $_resume;
    private $_mode;
    private $_certifiante;
    private $_prix;
    private $_rating;
    private $_timing;
    private $_vitrine;
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
        if($id>0)$this->_id=(int)$id;
    }
    public function setId_prestation($id_prestation){
      $this->_id_prestation=(int)$id_prestation;
    }
     public function setMode($mode){
      $this->_mode=(int)$mode;
    }

    public function setCertifiante($certifiante){
      $this->_certifiante=(int)$certifiante;
    }
    public function setTitre($titre){
      $this->_titre=(string)$titre;
    }

    public function setDescription($description){
      $this->_description=(string)$description;
    }

    public function setResume($resume){
      $this->_resume=(string)$resume;
    }

    
    public function setPrix($prix){
      $this->_prix=(int)$prix;
    }

    public function setRating($rating){
      $this->_rating=(int)$rating;
    }

     public function setTiming($timing){
      $this->_timing=(string)$timing;
    }

    public function setOnline($online){
      $this->_online=$online;
    }

    public function setVitrine($vitrine){
      $this->_vitrine=$vitrine;
    }


     public function getId(){
      
      return $this->_id;
    }
  
    public function getId_prestation(){
      
       return $this->_id_prestation;
    }

    public function getMode(){
      
       return $this->_mode;
    }
    public function getCertifiante(){
      
       return $this->_certifiante;
    }

    public function getTitre(){
      
       return $this->_titre;
    }

    public function getDescription(){
      
       return $this->_description;
    }

   
    public function getResume(){
      
       return $this->_resume;
    }

   
    public function getPrix(){
      
       return $this->_prix;
    }
    public function getRating(){
      
       return $this->_rating;
    }

     public function getTiming(){
      
       return $this->_timing;
    }
    public function getOnline(){
      
       return $this->_online;
    }

    public function getVitrine(){
      
       return $this->_vitrine;
    }
    
}
