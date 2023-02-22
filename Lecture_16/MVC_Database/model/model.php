<?php

date_default_timezone_set("Asia/Kolkata");

function dd($a){
    echo "<pre>";
    print_r($a);
    echo "</pre>";
    exit;
}
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
    public function select($table,$where){
       $SQL="SELECT * FROM $table";
       $SQL .=" WHERE";
       foreach($where as $key=>$value){
        $SQL .=" $key = '$value'AND";
       }
       $SQL =trim($SQL,"AND");
    //    echo $SQL;
    //    exit;

       try{
        $query_Execute=$this->connection->query($SQL);
        // echo "<pre>";
        // print_r($query_Execute);
        if($query_Execute->num_rows > 0){ 
            
            while($data =$query_Execute->fetch_object()){
                $Fetchdata[]=$data;
            }
            $response['code']=1;
            $response['data']=$Fetchdata;
            $response['Msg']="success";
        }else{
            $response['code']=0;
            $response['data']=0;
            $response['Msg']="try again";
        }
      return $response;

        
        
    //     echo "<pre>";
    //  print_r($query_Execute);

        }catch(Exception $e){
        if(!file_exists('log')){
            mkdir("log");
        }
        $file_name="log/Error_log_".date("d_m_Y")."txt";
        $Error_message =PHP_EOL."Error_Message".$e->getMessage().PHP_EOL;
        echo $Error_message;
        $Error_message .=PHP_EOL."Error_date/time".date("d_m_Y H:I:S A").PHP_EOL;
        $Error_message .="<<=========================================================>>".PHP_EOL;
        file_put_contents($file_name,$Error_message,FILE_APPEND);
        exit;
       }
    }
    
        
    public function insert($table,$data){
    //    print_r($data);

        // echo "<pre>";
        // print_r($data);
        $clms=implode(",",array_keys($data));
        $values=implode("','",$data);
        print_r($clms);
    
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