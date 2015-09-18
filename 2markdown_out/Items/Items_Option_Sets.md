##Items Option Sets Get OptionSet with Locales##


**Url**
**GET** [api2.hottab.pw/admin/option-sets/1/locales](http://api2.hottab.pw/admin/option-sets/1/locales)


**Parameters**


**Request data**
[]




##Items Option Sets Get OptionSet##


**Url**
**GET** [api2.hottab.pw/admin/option-sets/1](http://api2.hottab.pw/admin/option-sets/1)


**Parameters**


**Request data**
[]




##Items Option Sets Delete Optionset##


**Url**
**DELETE** [api2.hottab.pw/admin/option-sets/71](http://api2.hottab.pw/admin/option-sets/71)


**Parameters**


**Request data**
null




##Items Option Sets Update OptionSet##


**Url**
**PUT** [api2.hottab.pw/admin/option-sets/1](http://api2.hottab.pw/admin/option-sets/1)


**Parameters**


**Request data**
null


###Update All###

Request data
```
{
    "name": "updated name",
    "minChoice": 1,
    "maxChoice": 2
}

```

Response:

```
{
    "error": "Item Not Found",
    "data": []
}

```


###Update existing values and add new ones###

Request data
```
{
    "name": "updated name",
    "minChoice": 1,
    "maxChoice": 2,
    "values": [
        {
            "optionValueId": 760,
            "name_de": "Option Value 2 updated"
        },
        {
            "optionValueId": 759,
            "name": "Option Value 1 updated"
        },
        {
            "name": "newValue"
        }
    ]
}

```

Response:

```
{
    "error": false,
    "data": {
        "optionSetId": 370,
        "minChoice": 1,
        "maxChoice": 2,
        "created_at": "2015-09-12 12:14:26",
        "updated_at": "2015-09-12 12:15:57",
        "name": "updated name",
        "description": "",
        "lang": "en",
        "locale_fallback_used": null,
        "values": [
            {
                "optionValueId": 760,
                "option_item_id": null,
                "optionPrice": null,
                "created_at": "2015-09-12 12:14:26",
                "updated_at": "2015-09-12 12:14:26",
                "name": "Option Value 2 updated",
                "description": "",
                "lang": "en",
                "locale_fallback_used": "de",
                "item": null,
                "pivot": {
                    "option_set_id": 370,
                    "option_value_id": 760,
                    "orderInSet": 10,
                    "overwriteType": null,
                    "priceInSet": null,
                    "option_item_id": null
                }
            },
            {
                "optionValueId": 759,
                "option_item_id": null,
                "optionPrice": null,
                "created_at": "2015-09-12 12:14:26",
                "updated_at": "2015-09-12 12:14:26",
                "name": "Option Value 1 updated",
                "description": "",
                "lang": "en",
                "locale_fallback_used": null,
                "item": null,
                "pivot": {
                    "option_set_id": 370,
                    "option_value_id": 759,
                    "orderInSet": 20,
                    "overwriteType": null,
                    "priceInSet": null,
                    "option_item_id": null
                }
            },
            {
                "optionValueId": 761,
                "option_item_id": null,
                "optionPrice": null,
                "created_at": "2015-09-12 12:21:04",
                "updated_at": "2015-09-12 12:21:04",
                "name": "newValue",
                "description": "",
                "lang": "en",
                "locale_fallback_used": null,
                "item": null,
                "pivot": {
                    "option_set_id": 370,
                    "option_value_id": 761,
                    "orderInSet": 30,
                    "overwriteType": null,
                    "priceInSet": null,
                    "option_item_id": null
                }
            }
        ]
    }
}

```




##Items Option Sets Get OptionSet in German##


**Url**
**GET** [api2.hottab.pw/admin/option-sets/1](http://api2.hottab.pw/admin/option-sets/1)


**Parameters**
lang: de


**Request data**
[]




##Items Option Sets Get OptionSets##


**Url**
**GET** [api2.hottab.pw/admin/option-sets](http://api2.hottab.pw/admin/option-sets)


**Parameters**


**Request data**
[]




##Items Option Sets Get OptionSet with Values##


**Url**
**GET** [api2.hottab.pw/admin/option-sets/1/values](http://api2.hottab.pw/admin/option-sets/1/values)


**Parameters**


**Request data**
[]




##Items Option Sets Create Optionset##


**Url**
**POST** [api2.hottab.pw/admin/option-sets](http://api2.hottab.pw/admin/option-sets)


**Parameters**


**Request data**
{}


###Create just name###

Request data
```
{
    "name": "new set"
}

```

Response:

```
{
    "error": false,
    "data": {
        "updated_at": "2015-09-10 11:00:10",
        "created_at": "2015-09-10 11:00:10",
        "optionSetId": 195,
        "name": "new set",
        "description": "",
        "lang": "en",
        "locale_fallback_used": null
    }
}

```


###Post with Values###

Request data
```
{
    "name": "Set with Values",
    "values": [
        {
            "name": "Option Value 1"
        },
        {
            "name_de": "Option Value 2"
        }
    ]
}

```

Response:

```
{
    "error": false,
    "data": {
        "updated_at": "2015-09-10 12:40:06",
        "created_at": "2015-09-10 12:40:06",
        "optionSetId": 48,
        "name": "Set with Values",
        "description": "",
        "lang": "en",
        "locale_fallback_used": null,
        "values": [
            {
                "optionValueId": 106,
                "option_item_id": null,
                "optionPrice": null,
                "created_at": "2015-09-10 12:40:06",
                "updated_at": "2015-09-10 12:40:06",
                "name": "Option Value 1",
                "description": "",
                "lang": "en",
                "locale_fallback_used": null,
                "item": null,
                "pivot": {
                    "option_set_id": 48,
                    "option_value_id": 106,
                    "orderInSet": 10,
                    "overwriteType": null,
                    "priceInSet": null,
                    "option_item_id": null
                }
            },
            {
                "optionValueId": 107,
                "option_item_id": null,
                "optionPrice": null,
                "created_at": "2015-09-10 12:40:06",
                "updated_at": "2015-09-10 12:40:06",
                "name": "Option Value 2",
                "description": "",
                "lang": "en",
                "locale_fallback_used": "de",
                "item": null,
                "pivot": {
                    "option_set_id": 48,
                    "option_value_id": 107,
                    "orderInSet": 20,
                    "overwriteType": null,
                    "priceInSet": null,
                    "option_item_id": null
                }
            }
        ]
    }
}

```




