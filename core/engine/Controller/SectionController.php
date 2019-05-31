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
 * Date: 31-05-2019
 * Time: 20:44
 */

namespace CrystalPHP\Controller;

define("RT_BASE_SECTION", "section");

class SectionController extends Controller{
	
	public function init(){
		parent::init();
	}
	
	public function setupPage(){
//		$this->view->setView(DIR_VIEW . "template/page/template_section.php");
	}
	
	/**
	 * @throws ControllerException
	 */
	public function pageRender(){
		$this->render();
	}
	
	public function render(){
		parent::render(); // TODO: Change the autogenerated stub
	}
	
	
	public function dispatch(){
		return parent::dispatch(); // TODO: Change the autogenerated stub
	}
}