<?php
    class hotelSelection{
        // Hotel Properties
        private $hotelName;       
        private $description;
        private $address;
        private $Image;
        private $rating;
        private $costPernight;
        private $fullyBooked;

        // Constructor Method:

        public function __construct($hotelName,$description,$address,$Image,$rating,$costPernight)
        {
            $this->$hotelName =$hotelName;
            $this->$description =$description;
            $this->$address =$address;
            $this->$Image =$Image;
            $this->$rating =$rating;
            $this->$costPernight =$costPernight;
        }


    }
?>