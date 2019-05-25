<?php
/*******************************************************************************
 *
 *   CrystalPHP Framework by Crystal Collective
 *   An open source application development framework for PHP
 *
 *   This file is part of CrystalPHP which is released under the MIT License (MIT)
 *
 *   Copyright (c) 2019 - 2019, Crystal Collective
 *
 *   For the full copyright and license information,
 *   please view the LICENSE file that was distributed with this source code.
 *
 ******************************************************************************/

/**
 * User: Pankaj Vaghela
 * Date: 19-05-2019
 * Time: 12:25
 */

namespace CrystalPHP;

use CrystalPHP\Lib\Logger\Logger as Logger;

/**
 * Class CrystalPHP
 * @package CrystalPHP
 *
 * @property Registry $registry
 * @property Logger $logger
 */
class App{
	static $app = null;
	
	/**
	 * CrystalPHP constructor.
	 * @param Registry $registry
	 */
	public function __construct($registry){
		$this->registry = $registry;
	}
	
	/**
	 * @param Registry|null $registry
	 * @return App|null
	 */
	public static function app($registry = null){
		if(self::$app === null){
			self::$app = ($registry instanceof Registry) ? new App($registry) : null;
		}
		return self::$app;
	}
	
	public function initialize(){
		Config::load();
		
		$this->logger = new Lib\Logger\Logger();
		
		$this->logger->warning("ok" . Config::get("mail.host", "error"));
		
		$this->logger->info("Crystal App initialized");
		
		var_dump($this->logger);
	}
	
	
}