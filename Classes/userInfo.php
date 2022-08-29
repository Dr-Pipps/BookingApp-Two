<?php
    require_once"./hotel.templates.php";
    class userInfo extends hotelSelection{
       private $custNameSur;
       private $hotelLocation;

       public  function setCustName($cusName){
           $this->custNameSur=$cusName;
       }
       public function sethotelLocation($location){
           $this->hotelLocation=$location;
       }
       
    }

?>