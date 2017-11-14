<?php
class Database
{
private $hostname="localhost";
private $username="root";
private $password="";
private $dbname;
private $dblink; 
private $result; 
private $records;
private $affected; 
function __construct($dbname)
{
$this->dbname = $dbname;
                $this->Connect();
}

public function getResult()
{
return $this->result;
}
function Connect()
{
$this->dblink = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
if ($this->dblink ->connect_errno) {
    printf("Konekcija neuspešna: %s\n", $mysqli->connect_error);
    exit();
}
$this->dblink->set_charset("utf8");

}


function select ($table="korisnik, auto as a join zaduzenje as z on a.auto_id = z.auto_id", $rows = '*', $where = null, $order = null)
{
$q = 'SELECT '.$rows.' FROM '.$table;  
        if($where != null)  
            $q .= ' WHERE '.$where;  
        if($order != null)  
            $q .= ' ORDER BY '.$order; 			
$this->ExecuteQuery($q);
}


function select_auto ($table="auto", $rows = '*', $where = 'izdat=0', $order = null)
{
$q = 'SELECT '.$rows.' FROM '.$table;  
        if($where != null)  
            $q .= ' WHERE '.$where;  
        if($order != null)  
            $q .= ' ORDER BY '.$order; 			
$this->ExecuteQuery($q);
}


	function insert_zaduzenje ($table="zaduzenje", $rows = "datum_zaduzenja, clanski_broj, auto_id ", $values)
	{
	$insert = 'INSERT INTO '.$table;  
            if($rows != null)  
            {  
                $insert .= ' ('.$rows.')';   
            }  
			$insert .= ' VALUES(';
			$insert .="'".$values[0]."', '".$values[1]."', '".$values[2]."')";
	if ($this->ExecuteQuery($insert))
	return true;
	else return false;
	}


	function update_auto ($table="auto", $values)
	{
	$update = 'UPDATE '.$table." SET izdat='1' WHERE auto_id=". $values[0];		
	if (($this->ExecuteQuery($update)) && ($this->affected >0))
	return true;
	else return false;
	}


function ExecuteQuery($query)
{
if($this->result = $this->dblink->query($query)){

return true;
}
else
{
return false;
}
}

function CleanData()
{

}

}
?>