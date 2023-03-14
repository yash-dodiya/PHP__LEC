<?php
    
    date_default_timezone_set("Asia/Kolkata");

    function dd($a){
        echo "<pre>";
        print_r($a);
        echo "<pre>";    
    }

    class model {

        // $connection = new mysqli("localhost","root","","record");
        // public $connection = new mysqli("localhost","root","","record"); new xpression are not supported in this  contex
        public $connection="";
        
        public function __construct(){
            // $this->connection = new mysqli("localhost","root","","rcord");
            try {

                $this->connection = new mysqli("localhost","root","","z_drivin");
                // echo "connection successfully <br><br>";

            }catch(Exception $e) {
                // dd($e->getMessage());

                if(!file_exists("log")){
                    mkdir("log");
                }
                $file_name = "log/error_log_".date('d_m_Y').".txt";
                $errormess = PHP_EOL."error message >> ".$e->getMessage().PHP_EOL;
                echo $errormess;
                $errormess .= "error datetime >> ".date("d-M-Y H:i:s A").PHP_EOL;
                $errormess .= ">> =============================================== <<".PHP_EOL;
                file_put_contents($file_name,$errormess ,FILE_APPEND);
                die;
            }
            // dd($this->connection);
        }

        public function insert($tbl,$data){
            $column = implode(",",array_keys($data));
            // dd($column);
            // exit;
            $values = implode("','",$data);
            // dd($tbl);
            // dd($column);
            // dd($data);
            $sql = "INSERT INTO $tbl ($column) values ('$values')";
            // $queryex=$this->connection->query("INSERT INTO $tbl ($column) values ('$values')");  //right
            try{
                $query_execute = $this->connection->query($sql);
            }catch(Exception $e){
                if(!file_exists("log")){
                    mkdir("log");
                }
                $file_name = "log/error_log_".date("d_m_Y").".txt";
                $errormess = PHP_EOL."error_message >> ".$e->getMessage().PHP_EOL;
                echo $errormess;
                $errormess .= "error_datetime >> ".date("d-M-Y H:i:s A").PHP_EOL;
                $errormess .= ">>===============================================<<".PHP_EOL;
                file_put_contents($file_name,$errormess,FILE_APPEND);
                exit;
            }

            // if($query_execute > 0){
            //     echo "deta inserted";
            // }else{
            //     echo "error while inserting";
            // }

            if($query_execute > 0){
                $Response['Code'] = 1;
                $Response['Data'] = 1;
                $Response['Msg'] = "Success";
            }else{
                $Response['Code'] = 0;
                $Response['Data'] = 0;
                $Response['Msg'] = "try agin";
            }
            return $Response;
        }

        public function login($user_name,$password){
             
            $sql = "SELECT * FROM register WHERE ( user_name = '$user_name' OR  email = '$user_name'  OR  contact_number = '$user_name') 
            AND Password = '$password' ";

            // echo $sql;
            
            try{
                $query_execute = $this->connection->query($sql);
                if($query_execute->num_rows > 0){
                    
                    while($data = $query_execute->fetch_object()){
                        $fetchdata[] = $data; 
                    }
            
                    $Response['Code'] = 1;
                    $Response['Data'] = $fetchdata;
                    $Response['Msg'] = "Success";
                }else{
                    $Response['Code'] = 0;
                    $Response['Data'] = 0;
                    $Response['Msg'] = "try agin";
                }
                return $Response;

            }catch(Exception $e){
                if(!file_exists("log")){
                    mkdir("log");
                }
                $file_name = "log/error_log_".date("d_m_Y").".txt";
                $errormess = PHP_EOL."error_message >> ".$e->getMessage().PHP_EOL;
                echo $errormess;
                $errormess .= "error_datetime >> ".date("d-M-Y H:i:s A").PHP_EOL;
                $errormess .= ">>===============================================<<".PHP_EOL;
                file_put_contents($file_name,$errormess,FILE_APPEND);
                exit;
            }

            // if($query_execute > 0){
            //     echo "deta inserted";
            // }else{
            //     echo "error while inserting";
            // }
        }


        public function select($tbl,$where=""){
             
            $sql = "SELECT * FROM $tbl ";
            
            if($where != ""){
                $sql .= "WHERE";
                foreach ($where as $key => $value) {
                    $sql .= " $key = '$value' AND" ;
                }
                $sql = trim($sql,"AND");
                // echo "$sql";
            }

            try{
                $query_execute = $this->connection->query($sql);
                
                if($query_execute->num_rows > 0){

                    while($data = $query_execute->fetch_object()){
                        $fetchdata[] = $data; 
                    }
            
                    $Response['Code'] = 1;
                    $Response['Data'] = $fetchdata;
                    $Response['Msg'] = "Success";
                }else{
                    $Response['Code'] = 0;
                    $Response['Data'] = 0;
                    $Response['Msg'] = "try agin";
                }
                return $Response;

            }catch(Exception $e){
                if(!file_exists("log")){
                    mkdir("log");
                }
                $file_name = "log/error_log_".date("d_m_Y").".txt";
                $errormess = PHP_EOL."error_message >> ".$e->getMessage().PHP_EOL;
                echo $errormess;
                $errormess .= "error_datetime >> ".date("d-M-Y H:i:s A").PHP_EOL;
                $errormess .= ">>===============================================<<".PHP_EOL;
                file_put_contents($file_name,$errormess,FILE_APPEND);
                exit;
            }

        }

        // public function update($tbl,$data,$where){
            
        //     $sql = "UPDATE $tbl SET ";
        //     foreach($data as $key => $value){
        //         $sql .= " $key = '$value' ," ;
        //     }
        //     $sql = trim($sql,",");
        //     $sql .= "WHERE ";
           
        //     foreach($where  as $keyw => $valuew){
        //             $sql .= " $keyw = '$valuew' AND" ;
        //     }
         
        //     $sql = trim($sql,"AND");
        
        //     try{
        //         $query_execute = $this->connection->query($sql);

        //     }catch(Exception $e){
        //         if(!file_exists("log")){
        //             mkdir("log");
        //         }
        //         $file_name = "log/error_log_".date("d_m_Y").".txt";
        //         $errormess = PHP_EOL."error_message >> ".$e->getMessage().PHP_EOL;
        //         echo $errormess;
        //         $errormess .= "error_datetime >> ".date("d-M-Y H:i:s A").PHP_EOL;
        //         $errormess .= ">>===============================================<<".PHP_EOL;
        //         file_put_contents($file_name,$errormess,FILE_APPEND);
        //         exit;
        //     }

        //     if($query_execute > 0){
        //             $Response['Code'] = 1;
        //             $Response['Data'] = 1;
        //             $Response['Msg'] = "Success";
        //         }else{
        //             $Response['Code'] = 0;
        //             $Response['Data'] = 0;
        //             $Response['Msg'] = "try agin";
        //         }
        //         return $Response;

        // }
        public function update($tbl,$data,$where){
            
            $sql = "UPDATE $tbl SET ";
            foreach($data as $key => $value){
                $sql .= " $key = '$value' ," ;
            }
            $sql = trim($sql,",");
            $sql .= " WHERE ";

            foreach($where  as $keyw => $valuew){
                    $sql .= " $keyw = '$valuew' AND" ;
            }
            $sql = trim($sql,"AND");
            
            try{
                $query_execute = $this->connection->query($sql);

            }catch(Exception $e){
                if(!file_exists("log")){
                    mkdir("log");
                }
                $file_name = "log/error_log_".date("d_m_Y").".txt";
                $errormess = PHP_EOL."error_message >> ".$e->getMessage().PHP_EOL;
                echo $errormess;
                $errormess .= "error_datetime >> ".date("d-M-Y H:i:s A").PHP_EOL;
                $errormess .= ">>===============================================<<".PHP_EOL;
                file_put_contents($file_name,$errormess,FILE_APPEND);
                exit;
            }

            if($query_execute > 0){
                    $Response['Code'] = 1;
                    $Response['Data'] = 1;
                    $Response['Msg'] = "Success";
                }else{
                    $Response['Code'] = 0;
                    $Response['Data'] = 0;
                    $Response['Msg'] = "try agin";
                }
                return $Response;

        }

        public function delete($tbl,$where){
            
            $sql = " DELETE FROM $tbl ";
            $sql .= "WHERE";

            foreach ($where as $key => $value) {
                $sql .= " $key = '$value' AND" ;
            }
            $sql = trim($sql,"AND");

            try{
                $query_execute = $this->connection->query($sql);

            }catch(Exception $e){
                if(!file_exists("log")){
                    mkdir("log");
                }
                $file_name = "log/error_log_".date("d_m_Y").".txt";
                $errormess = PHP_EOL."error_message >> ".$e->getMessage().PHP_EOL;
                echo $errormess;
                $errormess .= "error_datetime >> ".date("d-M-Y H:i:s A").PHP_EOL;
                $errormess .= ">>===============================================<<".PHP_EOL;
                file_put_contents($file_name,$errormess,FILE_APPEND);
                exit;
            }

            if($query_execute > 0){
                    $Response['Code'] = 1;
                    $Response['Data'] = 1;
                    $Response['Msg'] = "Success";
                }else{
                    $Response['Code'] = 0;
                    $Response['Data'] = 0;
                    $Response['Msg'] = "try agin";
                }
                return $Response;
        }

        
        public function search($tbl,$where=""){
             
            $sql = "SELECT * FROM $tbl ";
            
            if($where != ""){
                $sql .= "WHERE";
                foreach ($where as $key => $value) {
                    $sql .= " $key  LIKE '$value%' OR " ;
                }

                $sql = trim($sql,"OR ");
                
            }

            try{
                $query_execute = $this->connection->query($sql);
                
                if($query_execute->num_rows > 0){

                    while($data = $query_execute->fetch_object()){
                        $fetchdata[] = $data; 
                    }
            
                    $Response['Code'] = 1;
                    $Response['Data'] = $fetchdata;
                    $Response['Msg'] = "Success";
                }else{
                    $Response['Code'] = 0;
                    $Response['Data'] = 0;
                    $Response['Msg'] = "try agin";
                }
                return $Response;

            }catch(Exception $e){
                if(!file_exists("log")){
                    mkdir("log");
                }
                $file_name = "log/error_log_".date("d_m_Y").".txt";
                $errormess = PHP_EOL."error_message >> ".$e->getMessage().PHP_EOL;
                echo $errormess;
                $errormess .= "error_datetime >> ".date("d-M-Y H:i:s A").PHP_EOL;
                $errormess .= ">>===============================================<<".PHP_EOL;
                file_put_contents($file_name,$errormess,FILE_APPEND);
                exit;
            }

        }
    }  
        
?>