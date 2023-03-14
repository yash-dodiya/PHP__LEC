<?php
date_default_timezone_set('Asia/Kolkata');
// error_reporting(E_ALL);
class model
{
    // $Connection = new mysqli("locahost","root","","masterdata");
    // public $Connection = new mysqli("locahost","root","","masterdata"); // New expressions are not supported in this context 
    public $Connection = "";
    public function __construct()
    {
        // echo "called";
        // $this->Connection =new mysqli("localhost","root","","masterdata");
        try {
            $this->Connection = new mysqli("localhost", "root", "", "yash");
            // echo "<pre>";
            // print_r($this->Connection);
        } catch (Exception $e) {
            if (!file_exists('log')) {
                mkdir("log");
            }
            $FlieName = "log/error_log_" . date('d_m_Y') . ".txt";
            $Errormsg = PHP_EOL . "Error Message  >> " . $e->getMessage() . PHP_EOL;
            echo $Errormsg;
            $Errormsg .= "Error DateTime >> " . date("d-M-Y H:i:s A") . PHP_EOL;
            $Errormsg .= ">> ======================================= <<" . PHP_EOL;
            file_put_contents($FlieName, $Errormsg, FILE_APPEND);
            die;
        }
    }
    public function login($uname,$pass)
    {
        $SQL = "SELECT * FROM test WHERE (username='$uname' OR email='$uname') AND password_='$pass'";
        try {
            $SQLEx = $this->Connection->query($SQL);
            if ($SQLEx->num_rows > 0) {
                while ($Data = $SQLEx->fetch_object()) {
                    $FetchData[] = $Data; 
                }
                $Response['Code'] = 1;
                $Response['Data'] = $FetchData;
                $Response['Msg'] = "Success";
            }else{

                $Response['Code'] = 0;
                $Response['Data'] = 0;
                $Response['Msg'] = "try again";
            }
            return $Response;
        } catch (Exception $e) {
            if (!file_exists('log')) {
                mkdir("log");
            }
            $FlieName = "log/error_log_" . date('d_m_Y') . ".txt";
            $Errormsg = PHP_EOL . "Error Message  >> " . $e->getMessage() . PHP_EOL;
            echo $Errormsg;
            $Errormsg .= "Error DateTime >> " . date("d-M-Y H:i:s A") . PHP_EOL;
            $Errormsg .= ">> ======================================= <<" . PHP_EOL;
            file_put_contents($FlieName, $Errormsg, FILE_APPEND);
            die;
        }
        // if ($SQLEx > 0) {
        //     echo "data inserted";
        // }else{
        //     echo "error while inserting";

        // }
       
    }
    public function select($tbl,$where="")
    {
        $SQL = "SELECT * FROM $tbl";
        
        if ($where != "") {
            # code...
            $SQL .= " WHERE ";
            foreach($where as $key=>$value){
                $SQL .= " $key= '$value' AND";
            }
            $SQL = trim($SQL,"AND");
        }
        
        // echo $SQL;
        // exit;
        try {
            $SQLEx = $this->Connection->query($SQL);
            // echo "<pre>";
            // print_r($SQLEx );
            if ($SQLEx->num_rows > 0) {
                // $FetchData = $SQLEx->fetch_all();  //responding multiple data in numeric array []
                // $FetchData = $SQLEx->fetch_array();  //responding data in numeric and associative array []
                // $FetchData = $SQLEx->fetch_assoc();  //responding data in  associative array []
                // $FetchData = $SQLEx->fetch_column(); 
                // $FetchData = $SQLEx->fetch_row();  //responding data in  numeric array []
                // $FetchData = $SQLEx->fetch_field(); // info abt db and table
                // $FetchData = $SQLEx->fetch_object(); //reponding in object access by ->
                // echo "<pre>";
                // print_r($FetchData);
                // // print_r($FetchData->username);
                // print_r($FetchData['username']);
                // exit;
                while ($Data = $SQLEx->fetch_object()) {
                    $FetchData[] = $Data; 
                }
                $Response['Code'] = 1;
                $Response['Data'] = $FetchData;
                $Response['Msg'] = "Success";
            }else{

                $Response['Code'] = 0;
                $Response['Data'] = 0;
                $Response['Msg'] = "try again";
            }
            return $Response;
        } catch (Exception $e) {
            if (!file_exists('log')) {
                mkdir("log");
            }
            $FlieName = "log/error_log_" . date('d_m_Y') . ".txt";
            $Errormsg = PHP_EOL . "Error Message  >> " . $e->getMessage() . PHP_EOL;
            echo $Errormsg;
            $Errormsg .= "Error DateTime >> " . date("d-M-Y H:i:s A") . PHP_EOL;
            $Errormsg .= ">> ======================================= <<" . PHP_EOL;
            file_put_contents($FlieName, $Errormsg, FILE_APPEND);
            die;
        }
        // if ($SQLEx > 0) {
        //     echo "data inserted";
        // }else{
        //     echo "error while inserting";

        // }
       
    }
    public function insert($tbl, $data)
    {
        // echo "<pre>";
        // print_r($data);
        $clms = implode(",", array_keys($data));
        $values = implode("','", $data);
        // print_r($clms);
        $SQL = "INSERT INTO $tbl ($clms) VALUES ('$values')";
        // $SQLEx = $this->Connection->query("INSERT INTO $tbl ($clms) VALUES ('$values')");
        $Response=$this->sqlexecute($SQL);
        return $Response; 
    } 

    public function update($tbl,$data,$where)
    {
        $SQL = "UPDATE $tbl SET";
        foreach ($data as $key => $value) {
            $SQL .= " $key = '$value' ,";
        }
        $SQL = rtrim($SQL,',');
        $SQL .= " WHERE";
        foreach ($where as $wkey => $wvalue) {
            $SQL .= " $wkey = '$wvalue' AND";
            # code...
        }
         $SQL = rtrim($SQL,'AND');
        //  exit;
        // $SQLEx = $this->Connection->query("INSERT INTO $tbl ($clms) VALUES ('$values')");
        $Response=$this->sqlexecute($SQL);
        return $Response;   
     }

     public function delate($tbl,$where){
        
            $SQL = "DELETE FROM $tbl WHERE";
            foreach ($where as $wkey => $wvalue) {
                $SQL .= " $wkey = '$wvalue' AND";
                # code...
            }
            $SQL = rtrim($SQL, 'AND');
            echo "<pre>";
            print_r($SQL);
            echo "</pre>";
        $Response=$this->sqlexecute($SQL);
        return $Response;
     }

     public function sqlexecute($SQL)
    {
        try {
            $SQLEx = $this->Connection->query($SQL);
        } catch (Exception $e) {
            if (!file_exists('log')) {
                mkdir("log");
            }
            $FlieName = "log/error_log_" . date('d_m_Y') . ".txt";
            $Errormsg = PHP_EOL . "Error Message  >> " . $e->getMessage() . PHP_EOL;
            echo $Errormsg;
            $Errormsg .= "Error DateTime >> " . date("d-M-Y H:i:s A") . PHP_EOL;
            $Errormsg .= ">> ======================================= <<" . PHP_EOL;
            file_put_contents($FlieName, $Errormsg, FILE_APPEND);
            die;
        }
        if ($SQLEx > 0) {
            $Response['Code'] = 1;
            $Response['Data'] = 1;
            $Response['Msg'] = "Success";
        } else {
            $Response['Code'] = 0;
            $Response['Data'] = 0;
            $Response['Msg'] = "try again";
        }
        return $Response;
    }

}

// $Model = new Model;
// $Model->select('users');
// $Model->select('city');
// $Model->select('state');
// $Model->insert('country',array("country_title"=>"test"));
// $Model->insert('state',array("state_title"=>"test","countryid"=>"1"));
// $Model->insert('users',array("username"=>"test","password"=>"1","gender"=>"Male","mobile"=>"9879879878","email"=>"email@mail.com"));

?> 