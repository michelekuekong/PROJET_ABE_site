<?php
class Deviss{
    private $_id;
    public  $_nom_prospect;
    private $_tel_prospect;
    private $_email_prospect;
    private $_fonction_prospect;
    private $_nom_entreprise;
    private $_email_entreprise;
    private $_fax_entreprise;
    private $_tel_entreprise;
    private $_adresse_entreprise;
    private $_site_web_entreprise;
    private $_description;
    private $_objet;
    private $_date_demarrage;
    private $_date_creation;
    private $_statut;
    private $_closing;
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
    
  public function setNom_prospect($nom_prospect){
      $this->_nom_prospect=stripslashes($nom_prospect);
  }

  public function setTel_prospect($tel_prospect){
      $this->_tel_prospect=$tel_prospect;
  }

  public function setEmail_prospect($email_prospect){
      $this->_email_prospect=$email_prospect;
  }

  public function setFonction_prospect($fonction_prospect){
      $this->_fonction_prospect=stripslashes($fonction_prospect);
  }

  public function setNom_entreprise($nom_entreprise){
      $this->_nom_entreprise=stripslashes($nom_entreprise);
  }

  public function setTel_entreprise($tel_entreprise){
      $this->_tel_entreprise=$tel_entreprise;
  }

  public function setFax_entreprise($fax_entreprise){
      $this->_fax_entreprise=$fax_entreprise;
  }

  public function setEmail_entreprise($email_entreprise){
      $this->_email_entreprise=$email_entreprise;
  }

  public function setAdresse_entreprise($adresse_entreprise){
      $this->_adresse_entreprise=stripslashes($adresse_entreprise);
  }

   public function setSite_web_entreprise($site_web_entreprise){
      $this->_site_web_entreprise=stripslashes($site_web_entreprise);
  }
  
  public function setDate_creation($date_creation){
      $this->_date_creation=$date_creation;
  }

  public function setDate_demarrage($date_demarrage){
      $this->_date_demarrage=$date_demarrage;
  }
   

  public function setDescription($description){
      $description= (string) $description;
      $this->_description=stripslashes($description);
  }

   public function setObjet($objet){
      $this->_objet=stripslashes($objet);
  }


  public function setClosing($closing){
      $this->_closing=$closing;
  }
    
  public function setStatut($statut){
      $this->_statut=$statut;
  }
  public function setOnline($online){
      $this->_online=$online;
  }



  public function getId(){
      
      return $this->_id;
  }

   public function getNom_prospect(){
      return $this->_nom_prospect;
  }

  public function getTel_prospect(){
      return $this->_tel_prospect;
  }

  public function getEmail_prospect(){
      return $this->_email_prospect;
  }

  public function getFonction_prospect(){
      return $this->_fonction_prospect;
  }

  public function getNom_entreprise(){
     return $this->_nom_entreprise;
  }

  public function getTel_entreprise(){
      return $this->_tel_entreprise;
  }

  public function getFax_entreprise(){
     return $this->_fax_entreprise;
  }

  public function getEmail_entreprise(){
     return $this->_email_entreprise;
  }

  public function getAdresse_entreprise(){
     return $this->_adresse_entreprise;
  }

   public function getSite_web_entreprise(){
     return $this->_site_web_entreprise;
  }
    
 


  public function getDate_creation(){
      
     return $this->_date_creation;
  }

  public function getDate_demarrage(){
      
       return $this->_date_demarrage;
  }

 public function getObjet(){
      
    return $this->_objet;
  }

  public function getDescription(){
      
    return $this->_description;
  }

  public function getClosing(){
      
    return $this->_closing;
  }

  public function getStatut(){
      
      return $this->_statut;
  }

  public function getOnline(){
      
    return $this->_online;
  }


    
}
