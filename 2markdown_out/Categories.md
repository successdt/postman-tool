##Update Categorie##


**Url**
**PUT** [api2.hottab.pw/admin/categories/4](http://api2.hottab.pw/admin/categories/4)


**Parameters**


**Request data**
{
    "name_de": "Getr\u00e4nke",
    "name_es": "Bebidas",
    "lang": "es"
}


###Update 2 Names###

Request data
```
{
    "name_de": "Getr\u00e4nke",
    "name_es": "Bebidas",
    "lang": "es"
}

```

Response:

```
{
    "error": false,
    "data": {
        "categoryId": 4,
        "icon": "",
        "parentId": 1,
        "defaultPrinterType": null,
        "showInCatalog": 1,
        "lft": 6,
        "rgt": 7,
        "depth": 1,
        "created_at": "2015-09-07 16:51:15",
        "updated_at": "2015-09-08 08:15:31",
        "name": "Bebidas",
        "description": "",
        "lang": "es",
        "locale_fallback_used": null,
        "locales": {
            "name_de": "Getr\u00e4nke",
            "description_de": "",
            "name_es": "Bebidas",
            "description_es": ""
        }
    }
}

```


###Move in Front of CategoryID###

Request data
```
{
    "move_to_left_of": 2
}

```

Response:

```
{
    "error": false,
    "data": {
        "categoryId": 4,
        "icon": "",
        "parentId": 1,
        "defaultPrinterType": null,
        "showInCatalog": 1,
        "lft": 2,
        "rgt": 3,
        "depth": 1,
        "created_at": "2015-09-09 15:21:55",
        "updated_at": "2015-09-09 17:01:36",
        "name": "Drinks",
        "description": "",
        "lang": "en",
        "locale_fallback_used": null
    }
}

```


###Move Behind CategoryID###

Request data
```
{
    "move_to_right_of": 2
}

```

Response:

```
{
    "error": false,
    "data": {
        "categoryId": 4,
        "icon": "",
        "parentId": 1,
        "defaultPrinterType": null,
        "showInCatalog": 1,
        "lft": 4,
        "rgt": 5,
        "depth": 1,
        "created_at": "2015-09-09 15:21:55",
        "updated_at": "2015-09-09 17:02:20",
        "name": "Drinks",
        "description": "",
        "lang": "en",
        "locale_fallback_used": null
    }
}

```




##Index Categories in German##


**Url**
**GET** [api2.hottab.pw/admin/categories/](http://api2.hottab.pw/admin/categories/)


**Parameters**
lang: de


**Request data**
[]




##Index Categories with default language##


**Url**
**GET** [api2.hottab.pw/admin/categories/](http://api2.hottab.pw/admin/categories/)


**Parameters**


**Request data**
[]




##Delete a Category by ID##
Delete {id}


**Url**
**DELETE** [api2.hottab.pw/admin/categories/](http://api2.hottab.pw/admin/categories/)


**Parameters**


**Request data**
[]




##Show Categorie by ID with related Items##


**Url**
**GET** [api2.hottab.pw/admin/categories/1/items](http://api2.hottab.pw/admin/categories/1/items)


**Parameters**


**Request data**
[]




##Show Categorie by ID default Language##


**Url**
**GET** [api2.hottab.pw/admin/categories/4](http://api2.hottab.pw/admin/categories/4)


**Parameters**


**Request data**
[]




##Show Categorie by ID with Locals##


**Url**
**GET** [api2.hottab.pw/admin/categories/4/locales](http://api2.hottab.pw/admin/categories/4/locales)


**Parameters**
lang: fr


**Request data**
[]




##Create Categorie##


**Url**
**POST** [api2.hottab.pw/admin/categories](http://api2.hottab.pw/admin/categories)


**Parameters**


**Request data**
{
    "name": "new Cat"
}


###Mimimun + Lang Category###

Request data
```
{
    "icon": "",
    "showInCatalog": 1,
    "name": "frenchtr\u00e4nkekjk",
    "description": "s",
    "lang": "fr"
}

```

Response:

```
{
    "error": false,
    "data": {
        "categoryId": 76,
        "icon": "",
        "parentId": 1,
        "defaultPrinterType": null,
        "showInCatalog": 1,
        "lft": 36,
        "rgt": 37,
        "depth": 1,
        "created_at": "2015-09-08 07:58:34",
        "updated_at": "2015-09-08 07:58:35",
        "name": "frenchtr\u00e4nkekjk",
        "description": "s",
        "lang": "fr",
        "locale_fallback_used": null
    }
}

```


###Save Multilingual by Name###

Request data
```
{
    "name_de": "Kekse",
    "name_es": "Galletas",
    "name": "Cookies",
    "lang": "en"
}

```

Response:

```
{
    "error": false,
    "data": {
        "categoryId": 77,
        "icon": "",
        "parentId": 1,
        "defaultPrinterType": null,
        "showInCatalog": 1,
        "lft": 38,
        "rgt": 39,
        "depth": 1,
        "created_at": "2015-09-08 08:18:07",
        "updated_at": "2015-09-08 08:18:07",
        "name": "Cookies",
        "description": "",
        "lang": "en",
        "locale_fallback_used": null,
        "locales": {
            "name_de": "Kekse",
            "description_de": "",
            "name_es": "Galletas",
            "description_es": "",
            "name_en": "Cookies",
            "description_en": ""
        }
    }
}

```


###Minimum Input###

Request data
```
{
    "name": "new Cat"
}

```

Response:

```
{
    "error": false,
    "data": {
        "categoryId": 75,
        "icon": "",
        "parentId": 1,
        "defaultPrinterType": null,
        "showInCatalog": 1,
        "lft": 34,
        "rgt": 35,
        "depth": 1,
        "created_at": "2015-09-08 07:57:54",
        "updated_at": "2015-09-08 07:57:54",
        "name": "frenchtr\u00e4nkekjk",
        "description": "s",
        "lang": "en",
        "locale_fallback_used": null
    }
}

```




