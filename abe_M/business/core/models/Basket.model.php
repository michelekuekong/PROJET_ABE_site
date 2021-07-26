<?php
class Basket{

    public function __construct(){
        if(!isset($_SESSION['id'])){
          $_SESSION['id']=array();
        }

        if(!isset($_SESSION['qt'])){
          $_SESSION['qt']=array();
        }
    }
    public function add($id,$qt){ 
      $n=sizeof($_SESSION['id']);
      $index=$this->is_exist($id);
      $resultat=0;
      if($index==-1){
        //cas ou produit pas dans panier
          $_SESSION['id'][$n]=(int)$id;
          $_SESSION['qt'][$n]=$qt;
        $resultat=1;
     
           
      }else{
        //cas produit es t dans panier
        $_SESSION['qt'][$index]+=$qt;
        $resultat=1;
      }
      return  $resultat;
    }

    public function is_exist($id){
     
        $index=-1;

        for($i=0;$i<count($_SESSION['id']);$i++){
          
            if($id==$_SESSION['id'][$i]){
              
              $index=$i; 
               break;
            }   
        }
        return $index;
    }
   

  public function allPanier(){
        $data_panier=[];

        $data_panier['id']=$_SESSION['id'];
        $data_panier['qt']=$_SESSION['q'];
        return  $data_panier;

    }
  public function update($id,$qt){

		$index=$this->is_exist($id);
    if(!empty($index)){
      $_SESSION['qt'][$index]=$qt;
      return 1;
    }else{
      return 0;
    }

	}


	public function getTaille(){
    if(!empty($_SESSION['id'])){
        return count($_SESSION['id']);
      }else{
        return 0;
      }
	
	}
    
    public function vider(){
	   unset($_SESSION['id']);
     unset($_SESSION['qt']);
     return 1;
	}
		
    public function del($n){
        $resultat=0;
        if($this->getTaille()>1){
            if($n< $this->getTaille()){
                unset($_SESSION['id'][$n]);
                // et pour réindexer :
                $_SESSION['id'] = array_values($_SESSION['id']);
                unset($_SESSION['qt'][$n]);
                $_SESSION['qt'] = array_values($_SESSION['qt']);
                $resultat=1;
            }
           
        }elseif($this->getTaille()==1){
           //si un seul élément
           if($n==0){
                unset($_SESSION['id'][$n]);
                unset($_SESSION['qt'][$n]);
                $resultat=1;
           }
           
        }
        
     return $resultat;
    }//End del
    
   
  
  }//Classe
