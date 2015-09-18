##Items Index##


**Url**
**GET** [api2.hottab.pw/admin/items](http://api2.hottab.pw/admin/items)


**Parameters**


**Request data**
null




##Item by Id with Full Details##


**Url**
**GET** [api2.hottab.pw/admin/items/1/full](http://api2.hottab.pw/admin/items/1/full)


**Parameters**


**Request data**
[]




##Get Item by Id with Locales##


**Url**
**GET** [api2.hottab.pw/admin/items/1/locales](http://api2.hottab.pw/admin/items/1/locales)


**Parameters**


**Request data**
[]




##Attach Category to Item##


**Url**
**POST** [api2.hottab.pw/admin/items/1/categories/16](http://api2.hottab.pw/admin/items/1/categories/16)


**Parameters**


**Request data**
null


###With orderInCategory###

Request data
```
{
    "orderInCategory": 20
}

```

Response:

```
{
    "error": false,
    "data": {
        "itemId": 1,
        "itemUUID": "f606c476-8f78-4c24-aa71-15f9e62272e1",
        "item_type": "product",
        "parentId": null,
        "sku": "garlicbread",
        "barcode": null,
        "shortcode": null,
        "saleQuantity": "1.0000",
        "saleUnit": "piece",
        "purchaseQuantity": "1.0000",
        "purchaseUnit": "piece",
        "deductStockFromItem": null,
        "deductStockAmount": null,
        "defaultPrice": "50.0000",
        "defaultPriceIsTaxIncluded": 1,
        "defaultCategoryId": 1,
        "showInCatalog": true,
        "defaultPrinterType": null,
        "isAlwaysChild": false,
        "isNotForSale": false,
        "isStockItem": false,
        "isRentable": false,
        "image": "",
        "created_at": "2015-09-17 09:39:32",
        "updated_at": "2015-09-17 09:39:32",
        "deleted_at": null,
        "name": "Garlic Bread",
        "description": "Hot nice Garlic Bread",
        "lang": "en",
        "locale_fallback_used": null
    }
}

```




##Get Item by Id##


**Url**
**GET** [api2.hottab.pw/admin/items/1](http://api2.hottab.pw/admin/items/1)


**Parameters**


**Request data**
[]




##Delete Item##


**Url**
**DELETE** [api2.hottab.pw/admin/items/40/](http://api2.hottab.pw/admin/items/40/)


**Parameters**


**Request data**
null




##Detach Category from Item##


**Url**
**DELETE** [api2.hottab.pw/admin/items/1/categories/15](http://api2.hottab.pw/admin/items/1/categories/15)


**Parameters**


**Request data**
[]




##Update Item##


**Url**
**PUT** [api2.hottab.pw/admin/items/4/](http://api2.hottab.pw/admin/items/4/)


**Parameters**


**Request data**
null




##Create Item##


**Url**
**POST** [api2.hottab.pw/admin/items](http://api2.hottab.pw/admin/items)


**Parameters**


**Request data**
{
    "sku": "abcc",
    "item_type": "Product",
    "defaultCategoryId": 1,
    "name": "new Name"
}


###Minimal Entrys###

Request data
```
{
    "sku": "abcc",
    "item_type": "Product",
    "defaultCategoryId": 1,
    "name": "new Name"
}

```

Response:

```
{
    "error": [
        "The sku has already been taken."
    ],
    "data": []
}

```




##Get Item by Id with the Categories it belongs to##


**Url**
**GET** [api2.hottab.pw/admin/items/1/categories](http://api2.hottab.pw/admin/items/1/categories)


**Parameters**


**Request data**
[]




##Get Item by Id with OptionSets##


**Url**
**GET** [api2.hottab.pw/admin/items/1/option-sets](http://api2.hottab.pw/admin/items/1/option-sets)


**Parameters**


**Request data**
[]




