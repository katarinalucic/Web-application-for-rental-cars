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


function select_clanove ($table="korisnik", $rows = '*', $where = "vrsta_korisnika=2", $order = null)
{
$q = 'SELECT '.$rows.' FROM '.$table;  
        if($where != null)  
            $q .= ' WHERE '.$where;  
        if($order != null)  
            $q .= ' ORDER BY '.$order; 			
$this->ExecuteQuery($q);
}


function select_automobile ($table="auto", $rows = '*', $where = null, $order = null)
{
$q = 'SELECT '.$rows.' FROM '.$table;  
        if($where != null)  
            $q .= ' WHERE '.$where;  
        if($order != null)  
            $q .= ' ORDER BY '.$order; 			
$this->ExecuteQuery($q);
}

function select_autom ($table="auto", $rows = '*', $where = "izdat=1", $order = null)
{
$q = 'SELECT '.$rows.' FROM '.$table;  
        if($where != null)  
            $q .= ' WHERE '.$where;  
        if($order != null)  
            $q .= ' ORDER BY '.$order; 			
$this->ExecuteQuery($q);
}


	function insert_auto ($table="auto", $rows = "auto_naziv, datum_servisa, tip", $values)
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


	function insert_uplata ($table="uplata", $rows = "datum_od, datum_do, clanski_broj", $values)
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


function update_uplata ($table="uplata", $values)
{
$update = 'UPDATE '.$table." SET datum_od='". $values[1] ."', datum_do='". $values[2] ."',clanski_broj='". $values[3] ."' WHERE clanarina_id=". $values[0];		
if (($this->ExecuteQuery($update)) && ($this->affected >0))
return true;
else return false;
}


	function delete_zaduzenje ($table="zaduzenje", $values)
	{
	$delete = 'DELETE FROM '.$table.' WHERE auto_id='.$values[0];
	if ($this->ExecuteQuery($delete))
	return true;
	else return false;
	}


	function update_auto ($table="auto", $values)
	{
	$update = 'UPDATE '.$table." SET izdat='0' WHERE auto_id=". $values[0];		
	if (($this->ExecuteQuery($update)) && ($this->affected >0))
	return true;
	else return false;
	}


function delete_uplata ($table="uplata", $values)
{
$delete = 'DELETE FROM '.$table.' WHERE clanski_broj='.$values[0];
if ($this->ExecuteQuery($delete))
return true;
else return false;
}


	function delete_auto ($table="auto", $values)
	{
	$delete = 'DELETE FROM '.$table.' WHERE auto_id='.$values[0];
	if ($this->ExecuteQuery($delete))
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