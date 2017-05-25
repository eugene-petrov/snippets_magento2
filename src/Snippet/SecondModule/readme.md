***Snippet_SecondModule***

_Issue:_ how to .

Bare module structure.

This module requires Snippet_FirstModule.

To enable this module execute:
- php bin/magento --clear-static-content module:enable Snippet_SecondModule
- php bin/magento setup:upgrade

Steps to get an error:

1) Disable Snippet_FirstModule:
`php bin/magento module:disable Snippet_FirstModule`
2) Remove cache:
`rm -rf var/cache/*`
3) Update page and you will see the error

That how 'sequence' functionality works.