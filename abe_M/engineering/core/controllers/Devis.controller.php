<?php
//session_start();
class Devis extends General{ 
    public $titre_service;
    public $company_email;
    public $personal_email;
    public $hote_email;

    public function  __construct($action){

        if(isset($action)){
           $Devis = new DevisManager;
          
        


           if(!empty($_POST) ){
            //demande devis 
            extract($_POST);
           // var_dump($_POST); exit;
          
     
               
                
                // Ajouter dans devis
                $param=[];
                $param=$this->getParamDemande();
                if($this->Add('devis',$param)){
                  
                    //Si devis ajouté  formater le message 
                    #Email de destination
                    $this->setHote_email();
                    $email=$this->getHote_email();
                    #$name d'envoie
                    $name='Npanel';
                    #Sujet
                    $subject='NEW REQUEST FROM WEBSITE';
                    #MESSAGE
                    $message='You have a new quote request from your website. Please connect to the Npanel in order to process it' ;              
                    if($this->send_mail($email, $name, $subject, $message)){
                     // si bien ajouter envoyer un mail à l'admin de dsc et au demande
                        header("Location:index.php?num_msg=".$id_titre_service);
                        exit;
                    }
                    exit;
                }
               
                


           
           }else{
            header("Location:index.php");
           }
           
         

          

             
                    
            
        }
    }
  //acesseur
    public function setTitre_service($id_titre_service){
      
       return $this->getColsByCol('prestation','titre','id',$id_titre_service);
    }
    public function setCompany_email($company_email){
        $this->company_email=trim($company_email);
        
    }
    public function setPersonal_email($personal_name){
         $this->personal_email=trim($personal_name);
    }
    public function setHote_email(){
         //lire l'adresse email dans entreprise
         $hote_email=$this->getColsByCol('entreprise','email','site_web','www.dscmarine-services.com');
         $this->hote_email= (!empty($hote_email)) ? trim($hote_email) :'nobiguy@gmail.com' ;
        
        return $this->hote_email;
    }

    //getter
    public function getTitre_service(){
       return $this->titre_service; 
    }
    public function getCompany_email(){
       return $this->company_email;
    }
    public function getPersonal_email(){
       return $this->personal_email;
    }
    public function getHote_email(){
       return $this->hote_email;
    }

    public function getParamDemande(){
        extract($_POST);
        $param=[];
        //about prospect contact
        $param[0]['col']='nom_prospect' ;
        $param[0]['val']=$personal_name;

        $param[1]['col']='tel_prospect' ;
        $param[1]['val']=$personal_tel;

        $param[2]['col']='email_prospect' ;
        $param[2]['val']=$personal_email;

        $param[3]['col']='fonction_prospect' ;
        $param[3]['val']=$personal_function;

        //About company
        $param[4]['col']='nom_entreprise' ;
        $param[4]['val']=$name_c;

        $param[5]['col']='adresse_entreprise'; 
        $param[5]['val']=$company_address;

        $param[6]['col']='email_entreprise' ;
        $param[6]['val']=$company_tel;;

        $param[7]['col']='tel_entreprise' ;
        $param[7]['val']=$company_tel;

        $param[8]['col']='site_web_entreprise' ;
        $param[8]['val']=$company_site_web;
        
        $param[9]['col']='fax_entreprise'; 
        $param[9]['val']=null;
         if(!empty($company_fax))$param[9]['val']=$company_fax;
       

        //About besoin
        $param[10]['col']='description' ;
        $param[10]['val']=$this->getBesoin();

        //about 
        $param[11]['col']='objet' ;
        $param[11]['val']=str_replace("_", " ", strtoupper($submit));

       

       


       return $param;
    }


    public function getBesoin(){
        extract($_POST);
        $besoin=null;
     
        
        $besoin= nl2br("<u>Site projet</u>\n  Pays: ".$pays. "\n Ville: ".$ville. "\n Adresse: " .$adresse_site_projet. "\n A propos du projet\n Date de démarrage: " .$date_demarrage. "\n Service cible: " .$this->getTitre_service(). "\n Description du projet: " .$description);
      
        return $besoin;
    }

}
