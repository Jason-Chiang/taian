<?php
namespace AppBundle\Entity;

class Customer
{
	protected $chineseName;
	protected $orderDate;

	public function getChineseName()
	{
		return $this->chineseName;
	}

	public function setChineseName($chineseName)
	{
		$this->chineseName = $chineseName;
	}

	public function getOrderDate()
	{
		return $this->orderDate;
	}

	public function setOrderDate($orderDate)
	{
		$this->orderDate = $orderDate;
	}
}

?>
