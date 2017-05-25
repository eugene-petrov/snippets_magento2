***Snippet_Plugin***

Problem: you need to change any (almost any) public method.

[Here](http://devdocs.magento.com/guides/v2.1/extension-dev-guide/plugins.html) you can find more about plugins.

To enable this module execute:
- `php bin/magento --clear-static-content module:enable Snippet_Plugin`
- `php bin/magento setup:upgrade`

***Snippet/Plugin/Plugin/Magento/Theme/Block/Html/Header.php***
file is an example of around and after plugins.
'Around' does nothing.
While 'after' wraps into parentheses welcome message like this:

`(Default welcome msg!)`


***Snippet/Plugin/Plugin/Magento/Theme/Block/Html/Breadcrumbs.php***
file is an example of 'before' option. E.g. on detail product page breadcrumbs will look like this:

`(Home) > (Test Product)`
