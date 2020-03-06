<?php

class cPoliceStation
{
	private $id = -1;
	private $name = "";
	private $username = "";
	private $password = "";
	private $access = -1;
	private $location = -1;
	private $state = -1;

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setUserName($username)
	{
		$this->username = $username;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function setAccess($access)
	{
		$this->access = $access;
	}

	public function setLocation($location)
	{
		$this->location = $location;
	}

	public function setState($state)
	{
		$this->state = $state;
	}

	public function getId(){ return $this->id; }

	public function getName(){ return $this->name; }

	public function getUserName(){ return $this->username; }

	public function getPassword(){ return $this->password; }

	public function getAccess(){ return $this->access; }

	public function getLocation(){ return $this->location; }

	public function getState(){ return $this->state; }
}

class cUser
{
	private $id = -1;
	private $name = "";
	private $username = "";
	private $password = "";
	private $phonenumber = -1;
	private $state = -1;
	private $who = -1;

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setUserName($username)
	{
		$this->username = $username;
	}

	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function setPhoneNumber($phonenumber)
	{
		$this->phonenumber = $phonenumber;
	}

	public function setState($state)
	{
		$this->state = $state;
	}

	public function setWho($who)
	{
		$this->who = $who;
	}

	public function getId(){ return $this->id; }

	public function getName(){ return $this->name; }

	public function getUserName(){ return $this->username; }

	public function getPassword(){ return $this->password; }

	public function getPhoneNumber(){ return $this->phonenumber; }

	public function getState(){ return $this->state; }

	public function getWho(){ return $this->who; }
}

class cWanted
{
	private $id = -1;
	private $name = "";
	private $img = "";
	private $national_number = -1;
	private $report_id = -1;
	private $date = -1;
	private $ps_id = -1;
	private $state = -1;

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setImg($img)
	{
		$this->img = $img;
	}

	public function setNationalNumber($national_number)
	{
		$this->national_number = $national_number;
	}

	public function setReportId($report_id)
	{
		$this->report_id = $report_id;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function setWho($ps_id)
	{
		$this->ps_id = $ps_id;
	}

	public function setState($state)
	{
		$this->state = $state;
	}

	public function getId(){ return $this->id; }

	public function getName(){ return $this->name; }

	public function getImg(){ return $this->img; }

	public function getNationalNumber(){ return $this->national_number; }

	public function getReportId(){ return $this->report_id; }

	public function getDate(){ return $this->date; }

	public function getWho(){ return $this->ps_id; }

	public function getState(){ return $this->state; }
}

class cReport
{
	private $id = -1;
	private $name_you = "";
	private $name_him = "";
	private $phonenumber = -1;
	private $image = "";
	private $date = -1;
	private $ps_id = -1;
	private $state = -1;

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setNameYou($name_you)
	{
		$this->name_you = $name_you;
	}

	public function setNameHim($name_him)
	{
		$this->name_him = $name_him;
	}

	public function setPhoneNumber($phonenumber)
	{
		$this->phonenumber = $phonenumber;
	}

	public function setImg($image)
	{
		$this->image = $image;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function setWho($ps_id)
	{
		$this->ps_id = $ps_id;
	}

	public function setState($state)
	{
		$this->state = $state;
	}

	public function getId(){ return $this->id; }

	public function getNameYou(){ return $this->name_you; }

	public function getNameHim(){ return $this->name_him; }

	public function getPhoneNumber(){ return $this->phonenumber; }

	public function getImg(){ return $this->image; }

	public function getDate(){ return $this->date; }

	public function getWho(){ return $this->ps_id; }

	public function getState(){ return $this->state; }
}

class cCause
{
	private $id = -1;
	private $report_id = -1;
	private $national_number = -1;
	private $date = -1;
	private $state = -1;

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setReportId($report_id)
	{
		$this->report_id = $report_id;
	}

	public function setNationalNumber($national_number)
	{
		$this->national_number = $national_number;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function setState($state)
	{
		$this->state = $state;
	}

	public function getId(){ return $this->id; }

	public function getReportId(){ return $this->report_id; }

	public function getNationalNumber(){ return $this->national_number; }

	public function getDate(){ return $this->date; }

	public function getState(){ return $this->state; }
}

class cCarStolen
{
	private $id = -1;
	private $structure_number = -1;
	private $plate_number = -1;
	private $vehicle_type = "";
	private $model = -1;
	private $color = "";
	private $description = "";
	private $phonenumber = -1;
	private $date = -1;
	private $ps_id = -1;
	private $state = -1;

	public function setId($id)
	{
		$this->id = $id;
	}

	public function setStructureNumber($structure_number)
	{
		$this->structure_number = $structure_number;
	}

	public function setPlateNumber($plate_number)
	{
		$this->plate_number = $plate_number;
	}

	public function setVehicleType($vehicle_type)
	{
		$this->vehicle_type = $vehicle_type;
	}

	public function setModel($model)
	{
		$this->model = $model;
	}

	public function setColor($color)
	{
		$this->colr = $color;
	}

	public function setDescription($description)
	{
		$this->description = $description;
	}

	public function setPhoneNumber($phonenumber)
	{
		$this->phonenumber = $phonenumber;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

	public function setWho($ps_id)
	{
		$this->ps_id = $ps_id;
	}

	public function setState($state)
	{
		$this->state = $state;
	}

	public function getId(){ return $this->id; }

	public function getStructureNumber(){ return $this->structure_number; }

	public function getPlateNumber(){ return $this->plate_number; }

	public function getVehicleType(){ return $this->vehicle_type; }

	public function getModel(){ return $this->model; }

	public function getColor(){ return $this->color; }

	public function getDescription(){ return $this->description; }

	public function getPhoneNumber(){ return $this->phonenumber; }

	public function getDate(){ return $this->date; }

	public function getWho(){ return $this->ps_id; }

	public function getState(){ return $this->state; }

}

class cLogg
{
	private $id = -1;
	private $process = "";
	private $name = "";
	private $add_date = "";
	private $who = -1;


	public function setId($id)
	{
		$this->id = $id;
	}

	public function setProcess($process)
	{
		$this->process = $process;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setAddDate($add_date)
	{
		$this->add_date = $add_date;
	}

	public function setWho($who)
	{
		$this->who = $who;
	}


	public function getId(){ return $this->id; }

	public function getProcess(){ return $this->process; }

	public function getName(){ return $this->name; }

	public function getAddDate(){ return $this->add_date; }
	
	public function getWho(){ return $this->who; }

}

 ?>
