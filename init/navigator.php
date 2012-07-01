<?php
class Navigator
{
	function __construct($all,$pnumber,$query='')
	{
		$this->all=$all;
		$this->pnumber=$pnumber;
		$this->query=$query;
		$this->page=isset($_GET['page']) ? (int)$_GET['page'] : 1;
	}

	function start()
	{
		$this->num_pages=ceil($this->all/$this->pnumber);
		
		if (isset($_GET['last']))
		$this->page=$this->num_pages;
		
		$this->start=$this->page*$this->pnumber-$this->pnumber;

		if ($this->page > $this->num_pages || $this->page < 1)
		{
			$this->page=1;
			$this->start=0;
		}

		return $this->start;
	}

	function navi()
	{
		
		if ($this->num_pages<2)
		return '';		
		
		$buff='<div class="navigator">';
		
    for($pr = '', $i =1; $i <= $this->num_pages; $i++)
    {
        $buff.= 
        $pr=(($i == 1 || $i == $this->num_pages || abs($i-$this->page) < 2) ? ($i == $this->page ? " [$i] " : ' <a href="'.$_SERVER['SCRIPT_NAME'].'?page='.$i.'&amp;'.$this->query.'">'.$i.'</a> ') : (($pr == ' ... ' || $pr == '')? '' : ' ... '));
    }
		return $buff.'</div>';
	}

}

?>