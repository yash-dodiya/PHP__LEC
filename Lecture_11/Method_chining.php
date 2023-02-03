<?php

// $tichet=array(Array('0'=> Array(["booking_date"] => "2020-03-12",["total_spent"] => 15.00,["total_tickets"] => 1,["yrs"] => 2020,["Category"] => "Theatre"),
//                    '1'=> Array(["booking_date"] => "2022-03-30",["total_spent"] => 30.00,["total_tickets"] => 2,["yrs"] => 2022,["Category"] => "Theatre"),
//                    '2'=> Array(["booking_date"] => "2020-03-12",["total_spent"] => 15.00,["total_tickets"] => 1,["yrs"] => 2020,["Category"] => "Theatre"),
//                    '3'=> Array(["booking_date"] => "2022-03-30",["total_spent"] => 30.00,["total_tickets"] => 2,["yrs"] => 2022,["Category"] => "Theatre"),
//                    '4'=> Array(["booking_date"] => "2020-03-12",["total_spent"] => 15.00,["total_tickets"] => 1,["yrs"] => 2020,["Category"] =>" Theatre"),
//                    '5'=> Array(["booking_date"] => "2022-03-30",["total_spent"] => 30.00, ["total_tickets"] => 2, ["yrs"] => 2022, ["Category"] => "Theatre")))                
                   


$booking=[ 

    '0'=>[
          "booking_date" => 2020-03-12,
          "total_spent"=> 15.00,
          "total_tickets" => 1,
          "yrs" => 2020,
          "Category" => "Theatre"
    ],

    '1' =>[
        
        "booking_date" => 2020-03-12,
        "total_spent"=> 15.00,
        "total_tickets" => 1,
        "yrs" => 2020,
        "Category" => "Theatre"
        ],
    '3'=>[
        "booking_date" => 2020-03-12,
        "total_spent"=> 15.00,
        "total_tickets" => 1,
        "yrs" => 2020,
        "Category" => "Theatre"
  ],

  '4' =>[
      
      "booking_date" => 2020-03-12,
      "total_spent"=> 15.00,
      "total_tickets" => 1,
      "yrs" => 2020,
      "Category" => "Theatre"
  ],
  '5'=>[
    "booking_date" => 2020-03-12,
    "total_spent"=> 15.00,
    "total_tickets" => 1,
    "yrs" => 2020,
    "Category" => "Theatre"
],

'1' =>[
  
  "booking_date" => 2020-03-12,
  "total_spent"=> 15.00,
  "total_tickets" => 1,
  "yrs" => 2020,
  "Category" => "Theatre"]];

    
    echo "<pre>";
print_r($booking);
echo "</pre>";
       
for($i=0;$i<$booking;$i++){
    if("category"=="Theatre"){
        $sum="total_spent";
    }
        echo $i;
}

                   
                   
                   
                   
        