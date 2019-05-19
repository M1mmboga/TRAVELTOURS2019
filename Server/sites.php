<?php 
include "DBConnection.php";
include "crudSites.php";

/**
* 
*/
class Sites implements CrudSites
{
	private $db;
	private $siteid;
	private $sitename;
	private $sitelocation;
	private $siteimage;

	function __construct($siteid,$sitename,$sitelocation,$siteimage)
	{
		# code...
	}

	public function addSites()
	{
		return null;
	}
	public function viewSites()
	{
		return null;
	}
	public function editSites()
	{
		return null;
	}
	public function deleteSites()
	{
		return null;
	}	
}

?>