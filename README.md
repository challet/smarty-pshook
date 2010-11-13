Smarty Prestashop Hook
======================


With this [Smarty](http://www.smarty.net/) plugin used in a [Prestashop](http://www.prestashop.com) online shop, you will be able, as a module developer or a theme designer, to call Prestahsop hooks directly into your templates files.



## Install

Just put the *function.pshook.php* file into the *tools/smarty/plugins* directory


## How to use

In any template file (.tpl) you can call any Prestahsop hook :

	{pshook name='myHook' params=$useful_data}
	
With :

* **myHook** the name of the hook you want to call here
* **$useful_data** a variable to be passed to the modules using the hook



 