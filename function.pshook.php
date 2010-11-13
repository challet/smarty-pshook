<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty {pshook} function plugin
 *
 * Type:     function
 * Name:     pshook
 * Purpose:  call a Prestashop hook directly from a template file
 * @author Clément Hallet <clement@prestarocket.com>
 * @link http://prestarocket.com
 * @param array parameters
 * @param Smarty
 * @return string|null
 */
function smarty_function_pshook($params, &$smarty)
{
    return Module::hookExec($params['name'], $params['params']);
}

?>
