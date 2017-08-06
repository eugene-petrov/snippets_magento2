***Snippet_Table***

_Issue:_ how to create/update a table and data;
example of crud operations.

_Test Url:_
`http://{host.name}/snippet_table/index/create`
`http://{host.name}/snippet_table/index/delete`
`http://{host.name}/snippet_table/index/read`
`http://{host.name}/snippet_table/index/update?id=5&description=test`

To enable this module execute:
`- php bin/magento --clear-static-content module:enable Snippet_Table`
`- php bin/magento setup:upgrade`
