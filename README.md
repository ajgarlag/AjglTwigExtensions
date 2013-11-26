AjglTwigExtensions
==================

The AjglTwigExtensions component provides some useful Twig extensions


Usage
-----

To enable the extensions you must register them within the Twig environment
```php
$twig = new Twig_Environment($loader);
$twig->addExtension(new Ajgl_Twig_Extension_BreakpointExtension());
```


Symfony Bundle
--------------

If you need to integrate these library into your Symfony Framework app, you
can install the [AjglTwigExtensionsBundle](https://github.com/ajgarlag/AjglTwigExtensionsBundle)


License
-------

This component is under the MIT license. See the complete license in the LICENSE file.


About
-----

AjglTwigExtensions is an [ajgarlag](http://aj.garcialagar.es) initiative.


Reporting an issue or a feature request
---------------------------------------

Issues and feature requests are tracked in the [Github issue tracker](https://github.com/ajgarlag/AjglTwigExtensions/issues).
