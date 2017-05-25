***Snippet_ConfigurationFile***

_Issue:_ You need to create custom config file under etc folder.

Test url: `http://{host.name}/config/config/index`

To enable this module execute:
- php bin/magento --clear-static-content module:enable Snippet_ConfigurationFile
- php bin/magento setup:upgrade
