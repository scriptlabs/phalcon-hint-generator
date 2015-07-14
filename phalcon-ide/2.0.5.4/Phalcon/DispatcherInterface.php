<?php

namespace Phalcon;

interface DispatcherInterface
{

	/**
	 * Sets the default action suffix
	 * 
	 * @param string $actionSuffix
	 *
	 * @return void
	 */
	public function setActionSuffix($actionSuffix);

	/**
	 * Sets the default namespace
	 * 
	 * @param string $defaultNamespace
	 *
	 * @return void
	 */
	public function setDefaultNamespace($defaultNamespace);

	/**
	 * Sets the default action name
	 * 
	 * @param string $actionName
	 *
	 * @return void
	 */
	public function setDefaultAction($actionName);

	/**
	 * Sets the namespace which the controller belongs to
	 * 
	 * @param string $namespaceName
	 *
	 * @return void
	 */
	public function setNamespaceName($namespaceName);

	/**
	 * Sets the module name which the application belongs to
	 * 
	 * @param string $moduleName
	 *
	 * @return void
	 */
	public function setModuleName($moduleName);

	/**
	 * Sets the action name to be dispatched
	 * 
	 * @param string $actionName
	 *
	 * @return void
	 */
	public function setActionName($actionName);

	/**
	 * Gets last dispatched action name
	 *
	 * @return string
	 */
	public function getActionName();

	/**
	 * Sets action params to be dispatched
	 * 
	 * @param array $params
	 *
	 *
	 * @return void
	 */
	public function setParams($params);

	/**
	 * Gets action params
	 *
	 * @return array
	 */
	public function getParams();

	/**
	 * Set a param by its name or numeric index
	 * 
	 * @param mixed $param
	 * @param mixed $value
	 *
	 *
	 * @return void
	 */
	public function setParam($param, $value);

	/**
	 * Gets a param by its name or numeric index
	 *
	 * @param mixed $param
	 * @param string|array $filters
	 * 
	 * @return void
	 */
	public function getParam($param, $filters=null);

	/**
	 * Checks if the dispatch loop is finished or has more pendent controllers/tasks to dispatch
	 *
	 * @return boolean
	 */
	public function isFinished();

	/**
	 * Returns value returned by the lastest dispatched action
	 *
	 * @return void
	 */
	public function getReturnedValue();

	/**
	 * Dispatches a handle action taking into account the routing parameters
	 *
	 * @return void
	 */
	public function dispatch();

	/**
	 * Forwards the execution flow to another controller/action
	 * 
	 * @param array $forward
	 *
	 *
	 * @return void
	 */
	public function forward($forward);

}