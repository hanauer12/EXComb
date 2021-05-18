<?php

class Calc {
    private $km;
    private $lt;

    public function __construct (){

	}

    public function getkm()
	{
		echo $this->km;
	}

	public function setkm($km)
	{
	$this->km = $km;
		
	}

	public function getlt()
	{
		echo $this->lt;
		
	}

	public function setlt($lt)
	{
		$this->lt = $lt;
    }
    
    public function media(){
		$media = $this->km / $this->lt;
        if ($media){
            header('Location: conta.php?media=' . $media);
        }
    }
}