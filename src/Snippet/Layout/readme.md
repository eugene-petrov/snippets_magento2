***Snippet_Layout***

_Issue:_ how to work with default layout?
How to add an arguments/argument node to the block and change value on another page?
How to render your own page using layout? 
How to add/remove a block from a particular page?

_Prerequisites:_
- create a product (e.g. 'Test Product') and make it in stock and visible
- create a category (e.g. 'Test Category') and make it visible on frontend
- assign this product to this category

_Test Urls:_ 
- `http://{host.name}/snippet_layout/layout/index`
- `http://{host.name}/{test-category}.html`
- `http://{host.name}/{test-product}.html`

[You can get more info here](http://devdocs.magento.com/guides/v2.1/frontend-dev-guide/layouts/xml-instructions.html)

_To enable this module execute:_
- `php bin/magento --clear-static-content module:enable Snippet_Layout`
- `php bin/magento setup:upgrade`
