<?php 
ABSTRACT class GeneralManager extends db { 
    

    Public function AddData($table,$param){
  		$this->getBbd();
		return $this->Addn($table,$param);

	} 
    public function getAllData($table,$obj){
        $this->getBbd(); // connexion à la base de donnees 
        return $this->getAllinSysteme($table,$obj);
    }

  


	Public function getAllDataByParam($table,$param,$obj){
		$this->getBbd();
		return $this->GetAlln($table,$param,$obj);
	}

	Public function getColDataById($table,$cols,$col,$val){
		$this->getBbd();
		return $this->getOneColbyOneCol($table,$cols,$col,$val);
	}

	
	Public function getOneColbyOneCol($table,$cols,$col,$val){
		$this->getBbd();
		return $this->getOneColbyCol($table,$cols,$col,$val);
	}
	
    Public function getAllDataByParamDif ( $table, $param, $paramDif, $obj ) {
        $this->getBbd();
        return $this->GetAllnAndDif ( $table, $param, $paramDif, $obj );
    }


 

}