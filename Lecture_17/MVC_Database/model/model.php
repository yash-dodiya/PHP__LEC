<?php

date_default_timezone_set("Asia/Kolkata");
class model{
      public $connection="";
    public function __construct(){
        try{
            $this->connection=new mysqli("localhost","root","","yash");
        }
        catch(Exception $e){
            // echo "<pre>";
            // print_r($e);
            // print_r($e->getmessage());
            if(!file_exists('log')){
                mkdir("log");
            }
            $filename="log/error_log_".date('D-M-Y').".txt";
            $errormsg=PHP_EOL."Error_massage>> ".$e->getmessage().PHP_EOL;
            $errormsg.="Error_date/time>>".date("d-m-y h:i:s A").PHP_EOL;
            
            file_put_contents($filename,$errormsg,FILE_APPEND);
            exit;
        }
    }
    

    public function login($uname,$pass){
        $SQL="SELECT * FROM test WHERE (username='$uname' OR email='$uname')
         AND password_='$pass'";
        try{
        $query_Execute=$this->connection->query($SQL);

        if($query_Execute->num_rows>0){
            while($data=$query_Execute->fetch_object()){
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

    public function select($table,$where){
        $SQL="SELECT * FROM $table";
        $SQL .=" WHERE";
        foreach($where as $key=>$value){
         $SQL .=" $key = '$value'AND";
        }
        $SQL =trim($SQL,"AND");

    try{
        $query_Execute=$this->connection->query($SQL);

        if($query_Execute->num_rows>0){
            while($data=$query_Execute->fetch_object()){
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

        if($query_Execute >0){
            $response['code']=1;
            $response['data']=1;
            $response['Msg']="success";
        }
        else{
            $response['code']=0;
            $response['data']=0;
            $response['Msg']="Try again";
        }
        return $response;
    }
   
    public function update(){}
    public function delate(){}
}
// $obj=new model;
// $obj->select('user');
// $obj->select('city');
// $obj->select('state');



?>