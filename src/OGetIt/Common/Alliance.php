<?php
/*
 * OGetIt, a open source PHP library for handling the new OGame API as of version 6.
 * Copyright (C) 2015  Klaas Van Parys
 * 
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 */
namespace OGetIt\Common;

class Alliance implements \JsonSerializable {
	
	/**
	 * @var integer
	 */
	private $tag;
	
	/**
	 * @var string
	 */
	private $name;
	
	/**
	 * @param string $tag
	 * @param string $name
	 */
	public function __construct($tag, $name) {
		
		$this->tag = $tag;
		$this->name = $name;
		
	}
	
	/**
	 * @return string
	 */
	public function getTag() {
		
		return $this->tag;
		
	}
	
	/**
	 * @return string
	 */
	public function getName() {
		
		return $this->name;
		
	}
	
	/* (non-PHPdoc)
	 * @see JsonSerializable::jsonSerialize()
	 */
	public function jsonSerialize() {
		return array(
			'tag' => $this->tag,
			'name' => $this->name
		);
	}
	
}