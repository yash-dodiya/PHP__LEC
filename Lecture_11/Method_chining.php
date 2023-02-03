<?php

class MethodChain{
    public $Query = ""; 
    public function select($clm =""){
        if ($clm != "") {
            $this->Query .= "SELECT $clm";
        }else{
            $this->Query .= "SELECT *";
        }
        return $this;
    }
    public function from($tbl){
        
        $this->Query .= " FROM $tbl";
        return $this;
    }
    public function where($id)
    {
      $this->Query .= " WHERE userid = $id";
      return $this;
    }  
}
$MethodChain = new MethodChain;
// echo $MethodChain->select();
// echo $MethodChain->select("username");
// echo $MethodChain->select("username,password");
// echo $MethodChain->select("username,password")->from("users")->Query;
echo $Q = $MethodChain -> select("*")->from("users") ->where(45)-> Query;

?>