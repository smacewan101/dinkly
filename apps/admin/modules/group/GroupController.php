<?php
/**
 * GroupController
 *
 *
 * @package    Dinkly
 * @subpackage AppsAdminGroupController
 * @author     Christopher Lewis <lewsid@lewsid.com>
 */

class GroupController extends AdminController
{
	/**
	 * Constructor
	 *
	 * @return void
	 *
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Load default view
	 *
	 * @return bool: always returns true on successful construction of view
	 *
	 */
	public function loadDefault()
	{
		return true;
	}
}