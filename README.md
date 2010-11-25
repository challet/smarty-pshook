Smarty Prestashop Hook
======================


With this [Smarty](http://www.smarty.net/) plugin used in a [Prestashop](http://www.prestashop.com) online shop, you will be able, as a module developer or a theme designer, to call Prestahsop hooks directly from your templates files.


## Install

Just put the *function.pshook.php* file into the *tools/smarty/plugins* directory


## How to use

### In any template file (.tpl) 

You can call any Prestahsop hook :

    {pshook name='myHook' data=$useful_data var=$a_var_from_the_template}

With :

* **myHook** the name of the hook you want to call here
* **$useful_data** and **$a_var_from_the_template** variables to be passed to the modules using the hook

### In a module file

The hook callback function will be called with one parameter.
This parameter is an array containing the parameter named as the one the template

    function hookMyHook(Array $params) {
        
        // do something with $params['data'] and $params['var']

    }



 