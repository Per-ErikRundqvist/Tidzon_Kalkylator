<?php

// Detta klassen används för att skapa tidzon objekter med egna datum.
class Klass_Tidzon
{
	// Denna variabel lagra strängen för tidzonen.
	protected $_tidzon;
	// Denna variabel lagra heltalet för årtalet.
	protected $_artal;
	// Denna variabel lagra heltalet för månad.
	protected $_manad;
	// Denna variabel lagra heltalet för datum.
	protected $_dag;
	
	
	
	// Denna konstrukt metoden används för att skapa tidzon objekten med egna // datum. Den första parameter lagra tidzonen, andra lagra årtalet, 
	// trejde lagra månad och sista lagra datum. 
	public function __construct($tidzon, $artal = null, $manad, $dag)
	{
		if (!($artal % 4) && ($artal % 100 || !($artal % 400)) && $manad == 2)
		{
			$this->_dag = 29;
		}
		else if ($manad == 2)
		{
			$this->_dag = 28;
		}
		else if ($manad == 4 || $manad == 6 || $manad == 9 || $manad == 11)
		{
			$this->_dag = 30;
		}
		else
		{
			$this->_dag = $dag;
		}
		
		$this->_tidzon = $tidzon;
		$this->_artal = $artal;
		$this->_manad = $manad;
		
	}
	
	// Denna metoden hämta tidzonen från Tidzon klassen.
	public function getTidzon()
	{
		return $this->_tidzon;
	}
	
	// Denna metoden hämta årtalen från Tidzon klassen.
	public function getArtal()
	{
		return $this->_artal;
	}
	
	// Denna metoden hämta månad från Tidzon klassen.
	public function getManad()
	{
		return $this->_manad;
	}
	
	// Denna metoden hämta datum från Tidzon klassen.
	public function getDag()
	{
		return $this->_dag;
	}
	
	public function getDatum()
	{
		return '0, 0, 0, ' . $this->_manad . ', ' . $this->_dag . ', ' . $this->_artal;
	}
	
	public function display()
	{
		echo $this->_tidzon . ': ' .$this->_artal . '/' . $this->_manad . '/' . $this->_dag;
	}
}

?>