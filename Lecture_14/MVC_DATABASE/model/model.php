<?php

date_default_timezone_set("Asia/Kolkata");
class model{
      public $connection="";
    public function __construct(){
        try{
            $this->connection=new mysqli("localhost","root","","yashs");
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
        }
        echo "<pre>";
        print_r($this->connection);


    }
    public function select($table){
        $SQL="SELECT * FROM $table";
         
    }
    public function insert(){}
    public function update(){}
    public function delate(){}
}
$obj=new model;
$obj->select('user');
$obj->select('city');
$obj->select('state');



?>