<?php 

    namespace Equilibrium\Controller\Plugin;
     
    use Zend\Mvc\Controller\Plugin\AbstractPlugin;
     
    class EquilPlug extends AbstractPlugin
    {
        public function equilibriumsAction($data){
    
            $right          = array_sum($data);
            $left           = 0;
            $equilibriums   = array();
            
            foreach($data as $key => $value){
                $right -= $value;
                if($left == $right){ 
                    $equilibriums[] = $key;
                }
                $left += $value;
            }
            
            return $equilibriums;

        }
    }