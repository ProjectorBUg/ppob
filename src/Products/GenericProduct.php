<?php

namespace ProjectorBUg\PPOB\Products;

use ProjectorBUg\PPOB\Contracts\Product;

class GenericProduct implements Product
{
	protected $subscriberId;

	protected $phone;
	
	protected $code;

	public function __construct($subscriberId, $phone, $code = null)
	{
		$this->subscriberId = $subscriberId;
		$this->phone = $phone;
		$this->code = $code;
	}

	public function subscriberId()
	{
		return $this->subscriberId;
	}

	public function phone()
	{
		return $this->phone;
	}

	public function code()
	{
		return $this->code;
	}
}
