<?php 
class Planning_formationManager extends GeneralManager {
  //fonction qui calcule le  max or min m mois for planning
	public function GetPeriodeTrainningPlanning(){
		$this->getBbd();
		$debut_periode=$this->GetMaxOrMinDate('planning_formation','Min');
		$fin_periode=$this->GetMaxOrMinDate('planning_formation','Max');
		return array('debut'=>$debut_periode,'fin'=>$fin_periode);
	}

	public function GetPlanningByPeriode($debut,$fin){
		$this->getBbd();
		return $this->getPlannigBetweenTwoDate('planning_formation','Planning_formations',$debut,$fin);
	}


  
}
