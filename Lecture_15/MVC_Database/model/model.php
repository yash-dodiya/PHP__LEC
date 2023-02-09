<?php

date_default_timezone_set("Asia/Kolkata");


class Model{

    public $connection="";
    public function __construct(){
        try{
            $this->connection=new mysqli("localhost","root","","yash");
            // echo "connection successfully<br><br>";
        }catch(Exception $e){
            if(!file_exists('log')){
                mkdir("log");
            }
            $file_name="log/Error_log_".date("d-m-Y").".txt";
            $Error_message=PHP_EOL."Error_message >>".$e->getMessage().PHP_EOL;
            echo $Error_message;
            $Error_message .=" Error_date/time >>".date("d-m-Y H:I:S A").PHP_EOL;
            $Error_message .="<<=====================================================================>>".PHP_EOL;
            file_put_contents($file_name,$Error_message,FILE_APPEND);
            exit;
        }
    }

    // // public function select($table){
    // //    $SQL="SELECT * FROM $table";
    // }
        
    public function insert($table,$data){
    //    print_r($data);

        // echo "<pre>";
        // print_r($data);
        $clms=implode(",",array_keys($data));
        $values=implode("','",$data);
        // print_r($clms);
    
        $SQL="INSERT INTO $table($clms) VALUES('$values')";
        try{
         
            $query_Execute=$this->connection->query($SQL);
         
        }catch(Exception $e){
            if(!file_exists('log')){
                mkdir("log");
            }
            $file_name="log/Error_log_".date("d-m-Y").".txt";
            $Error_message=PHP_EOL."Error_message >>".$e->getMessage().PHP_EOL;
            echo $Error_message;
            $Error_message .=" Error_date/time >>".date("d-m-Y H:I:S A").PHP_EOL;
            $Error_message .="<<=====================================================================>>".PHP_EOL;
            file_put_contents($file_name,$Error_message,FILE_APPEND);
            exit;
        }

    //   if($query_Execute>0){
    //      echo "Data Inserted";
    //   }
    //   else{
    //      echo "error While Inserted";
    //   }
      if($query_Execute>0){
        $response['code']=1;
        $response['data']=1;
        $response['Msg']="success";
     }
     else{
        $response['code']=0;
        $response['data']=0;
        $response['Msg']="try again";
     }
     return $response;
    }
    public function update(){}
    public function delate(){}
}

// $obj=new Model;
// $obj->select('user');
// $obj->select('city');
// $obj->select('state');
// $obj->insert("country",array("country_title"=>"test"));
// $obj->insert("state",array("state_title"=>"test","countryid"=>""));

// $obj->insert("testing",array("first_name"=>"yash","last_name"=>"dodiya"));



?>