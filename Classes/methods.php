<?php

require_once"./Classes/userInfo.php";
class calculateClass extends userInfo {
    
    // calculate total cost:
    public function calcTotal($numNights,$numCanditaes){
        $totalCost = $this->costPernight*$numNights*$numCanditaes;

        return $totalCost;
    }
    // filter out locations
    public function filterselection()
    {

    }
    // fullybooked function:
    public function fullyBooked()
    {
        
    }
}
?>