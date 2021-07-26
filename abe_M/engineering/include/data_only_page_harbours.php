<?php
//liste agence
 $param = [];
 $param[0]['col'] = 'online' ;
 $param[0]['val'] = 1 ;
 $data_agence = $this->getAllByParam('agence',$param);

