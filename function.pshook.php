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
 * @link https://github.com/challet/smarty-pshook
 * @param array parameters
 * @param Smarty
 * @return string|null
 */
function smarty_function_pshook($params, &$smarty)
{
    
    $name = $params['name'];
    unset($params['name']);

    return Module::hookExec($name, $params);
    
}


?>
