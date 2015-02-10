<?php

    namespace Equilibrium\Controller;

    use Zend\Mvc\Controller\AbstractActionController;
    use Zend\View\Model\ViewModel;
    use Zend\Mvc\MvcEvent;

    class EquilibriumController extends AbstractActionController
    {
        
        private $aGivenEquil  = array();
        private $arrAdjusted  = array();
        
        public function indexAction()
        {

            $this->aGivenEquil = $this->getEvent()->getRouteMatch()->getParam('id');
            $filterResult = explode(',', $this->aGivenEquil);

            for($i=0;$i<=count($filterResult); $i++) {
                if(is_numeric($filterResult[$i])){
                    $this->arrAdjusted[$i] = $filterResult[$i];
                }
            }

            $EquilibPlugin = $this->EquilibPlugin();
            $equilibrium   = $EquilibPlugin->equilibriumsAction($this->arrAdjusted);
            
            $this->layout('layout/layout_equilibrium');
            return new ViewModel(array('equilibrium' => $equilibrium ));
        }
        
    }