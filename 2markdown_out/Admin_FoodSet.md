##Update Food Set##
Update food set

- params like create food set's param
- options and upsells is same with get food data. 
- if you don't want to change options and upsels, remove options and upsells param from request

**Url**
<code>PUT</code>api.hottab.pw/admin/food-sets/25?lang=en


**Parameters**
<code>api_hottab_pw/admin/food-sets/25?lang<code> en


**Request data**
{
    "hotel_id": 8,
    "food_set_category_id": 1,
    "name": "Set Ti\u1ebft ki\u1ec7m",
    "description": "\u0102n tr\u01b0a ti\u1ebft ki\u1ec7m",
    "intro_img": "",
    "gallery": "",
    "time_option": "",
    "has_upsell": 1,
    "status": 1,
    "price": 10,
    "items": [
        {
            "id": 750,
            "quantity": 2,
            "options": []
        },
        {
            "id": 822,
            "quantity": 3,
            "options": []
        },
        {
            "id": 755,
            "options": []
        }
    ],
    "upsells": [
        3,
        4
    ],
    "tags": [
        {
            "name": "abc"
        },
        {
            "name": "xyz"
        }
    ]
}


Response:

```
{
    "error": false,
    "data": {
        "id": 14,
        "food_set_category_id": 2,
        "original_price": "62.00",
        "price": "10.00",
        "intro_img": "",
        "gallery": "",
        "time_option": "",
        "has_upsell": 1,
        "status": 1,
        "deleted_at": null,
        "created_at": "2015-02-26 18:32:29",
        "updated_at": "2015-02-26 18:33:49",
        "intro_img_original": null,
        "name": "Set Ti\u1ebft ki\u1ec7m",
        "description": "\u0102n tr\u01b0a ti\u1ebft ki\u1ec7m"
    }
}

```

##List Food Set Categories##
list all food set categories of hotel, URL Params :

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/admin/food-set-categories?hotel_id=8&lang=vi&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDEyNDc4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODMyNjA3OCIsIm5iZiI6IjE0MzgzMjYwNzgiLCJqdGkiOiIxZTcxOWM4YWU1MzkxZWQ1ZjdmMzNjMDc3ODU4NDMwOSJ9.NjUzOTM5ODk3ZTI5NGMwYTUwYWU5MjRjMmQyMTI4ZTIxMDJiYjA1MmFjZmNlNjU3NDBlNDFmMWE1NzNkNDQzNA


**Parameters**
<code>api_hottab_pw/admin/food-set-categories?hotel_id<code> 8
<code>lang<code> vi
<code>token<code> eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDEyNDc4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODMyNjA3OCIsIm5iZiI6IjE0MzgzMjYwNzgiLCJqdGkiOiIxZTcxOWM4YWU1MzkxZWQ1ZjdmMzNjMDc3ODU4NDMwOSJ9.NjUzOTM5ODk3ZTI5NGMwYTUwYWU5MjRjMmQyMTI4ZTIxMDJiYjA1MmFjZmNlNjU3NDBlNDFmMWE1NzNkNDQzNA


**Request data**
{
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDEyNDc4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODMyNjA3OCIsIm5iZiI6IjE0MzgzMjYwNzgiLCJqdGkiOiIxZTcxOWM4YWU1MzkxZWQ1ZjdmMzNjMDc3ODU4NDMwOSJ9.NjUzOTM5ODk3ZTI5NGMwYTUwYWU5MjRjMmQyMTI4ZTIxMDJiYjA1MmFjZmNlNjU3NDBlNDFmMWE1NzNkNDQzNA",
    "_method": "PUT",
    "hotel_id": "8",
    "icon": "",
    "parent_id": "165",
    "item_order": "925,926",
    "printer_id": "null"
}


Response:

```
{
    "error": false,
    "data": [
        {
            "id": 2,
            "hotel_id": 8,
            "status": 1,
            "created_at": "2015-02-11 18:16:45",
            "updated_at": "2015-02-11 18:16:45",
            "parent_id": 0,
            "name": "Happy Valentine's day",
            "description": "C\u00e1c set combo ch\u00fac m\u1eebng n\u0103m m\u1edbi"
        },
        {
            "id": 3,
            "hotel_id": 8,
            "status": 1,
            "created_at": "2015-02-25 16:55:01",
            "updated_at": "2015-02-25 16:55:01",
            "parent_id": 0,
            "name": "Combo n\u0103m m\u1edbi",
            "description": "C\u00e1c set combo ch\u00fac m\u1eebng n\u0103m m\u1edbi"
        }
    ]
}

```

##View Food Set by ID##
View food set detail by food_set_id

**Url**
<code>GET</code>api.hottab.pw/admin/food-sets/6?hotel_id=8&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDEyNDc4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODMyNjA3OCIsIm5iZiI6IjE0MzgzMjYwNzgiLCJqdGkiOiIxZTcxOWM4YWU1MzkxZWQ1ZjdmMzNjMDc3ODU4NDMwOSJ9.NjUzOTM5ODk3ZTI5NGMwYTUwYWU5MjRjMmQyMTI4ZTIxMDJiYjA1MmFjZmNlNjU3NDBlNDFmMWE1NzNkNDQzNA


**Parameters**
<code>api_hottab_pw/admin/food-sets/6?hotel_id<code> 8
<code>token<code> eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDEyNDc4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODMyNjA3OCIsIm5iZiI6IjE0MzgzMjYwNzgiLCJqdGkiOiIxZTcxOWM4YWU1MzkxZWQ1ZjdmMzNjMDc3ODU4NDMwOSJ9.NjUzOTM5ODk3ZTI5NGMwYTUwYWU5MjRjMmQyMTI4ZTIxMDJiYjA1MmFjZmNlNjU3NDBlNDFmMWE1NzNkNDQzNA


**Request data**
{
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDEyNDc4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODMyNjA3OCIsIm5iZiI6IjE0MzgzMjYwNzgiLCJqdGkiOiIxZTcxOWM4YWU1MzkxZWQ1ZjdmMzNjMDc3ODU4NDMwOSJ9.NjUzOTM5ODk3ZTI5NGMwYTUwYWU5MjRjMmQyMTI4ZTIxMDJiYjA1MmFjZmNlNjU3NDBlNDFmMWE1NzNkNDQzNA",
    "_method": "PUT",
    "hotel_id": "8",
    "icon": "",
    "parent_id": "165",
    "item_order": "925,926",
    "printer_id": "null"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 6,
        "food_set_category_id": 2,
        "original_price": "17.49",
        "price": "12.00",
        "intro_img": "",
        "gallery": "",
        "time_option": "",
        "has_upsell": 0,
        "status": 1,
        "deleted_at": null,
        "created_at": "2015-02-12 19:08:11",
        "updated_at": "2015-02-12 19:21:47",
        "intro_img_original": "",
        "name": "Hieu",
        "description": "",
        "items": [],
        "upsells": []
    }
}

```

##Create Food Set Category##
Create new category, params :

- hotel_id (required)
- lang (optional)


**Url**
<code>POST</code>api.hottab.pw/admin/food-set-categories?lang=vi


**Parameters**
<code>api_hottab_pw/admin/food-set-categories?lang<code> vi


**Request data**
{
    "hotel_id": 8,
    "name": "Combo n\u0103m m\u1edbi",
    "description": "C\u00e1c set combo ch\u00fac m\u1eebng n\u0103m m\u1edbi"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 3,
        "hotel_id": 8,
        "status": 1,
        "created_at": "2015-02-25 16:53:22",
        "updated_at": "2015-02-25 16:53:22",
        "name": "Combo n\u0103m m\u1edbi",
        "description": "C\u00e1c set combo ch\u00fac m\u1eebng n\u0103m m\u1edbi"
    }
}

```

##List of Food Sets group by Categories##
list all food sets of the hotel, grouped by category, URL params :

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/admin/food-sets/?hotel_id=8&lang=vi


**Parameters**
<code>api_hottab_pw/admin/food-sets/?hotel_id<code> 8
<code>lang<code> vi


**Request data**
[]


Response:

```
{
    "error": false,
    "data": [
        {
            "category": {
                "id": 2,
                "hotel_id": 8,
                "status": 1,
                "created_at": "2015-02-11 18:16:45",
                "updated_at": "2015-02-11 18:16:45",
                "parent_id": 0,
                "name": "Happy Valentine's day",
                "description": "C\u00e1c set combo ch\u00fac m\u1eebng n\u0103m m\u1edbi"
            },
            "food_sets": [
                {
                    "id": 3,
                    "food_set_category_id": 2,
                    "original_price": "39.49",
                    "price": "20.00",
                    "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Bloody_mary_I9Cesq5B.jpg",
                    "gallery": "",
                    "time_option": "",
                    "has_upsell": 0,
                    "status": 1,
                    "deleted_at": null,
                    "created_at": "2015-02-12 11:00:43",
                    "updated_at": "2015-02-14 15:10:36",
                    "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Bloody_mary_I9Cesq5B.jpg",
                    "name": "Set Ti\u1ebft ki\u1ec7m",
                    "description": "\u0102n tr\u01b0a ti\u1ebft ki\u1ec7m",
                    "items": [
                        {
                            "id": 755,
                            "food_category_id": 99,
                            "alias": "chicken-wings-755",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/chicken_wings_oG6GJ7of.jpg",
                            "gallery": null,
                            "price": "8.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:44:12",
                            "updated_at": "2015-02-14 14:54:30",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/chicken_wings_oG6GJ7of.jpg",
                            "name": "C\u00e1nh g\u00e0 n\u01b0\u1edbng",
                            "description": "6 mi\u1ebfng c\u00e1nh g\u00e0.",
                            "quantity": 1,
                            "options": [
                                {
                                    "id": 1575,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": 4,
                                    "deleted_at": null,
                                    "name": "Th\u00eam 4 mi\u1ebfng",
                                    "selected": true,
                                    "quantity": 1
                                },
                                {
                                    "id": 1576,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": 10,
                                    "deleted_at": null,
                                    "name": "Th\u00eam 10 mi\u1ebfng",
                                    "selected": true,
                                    "quantity": 1
                                }
                            ]
                        },
                        {
                            "id": 764,
                            "food_category_id": 99,
                            "alias": "b-nh-m-caprese-764",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Caprese_flatbread_dDUfUBSp.jpg",
                            "gallery": null,
                            "price": "7.49",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 0,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-10 11:59:46",
                            "updated_at": "2015-02-11 19:01:13",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Caprese_flatbread_dDUfUBSp.jpg",
                            "name": "B\u00e1nh m\u00ec Caprese",
                            "description": "C\u00e1ch kh\u1edfi \u0111\u1ea7u b\u1eefa \u0103n ho\u00e0n h\u1ea3o. B\u00e1nh m\u00ec d\u00e1t m\u1ecfng k\u00e8m c\u00e0 chua, ph\u00f4 mai mozzarella, h\u00fang, v\u00e0 ph\u00f4 mai Romano.",
                            "quantity": 1,
                            "options": [
                                {
                                    "id": 1534,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": 5,
                                    "deleted_at": null,
                                    "name": "B\u00e1nh l\u1edbn",
                                    "selected": true,
                                    "quantity": 1
                                }
                            ]
                        },
                        {
                            "id": 758,
                            "food_category_id": 99,
                            "alias": "ravioli-chi-n-758",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Fried_Ravioli_UiQ4Jycl.jpg",
                            "gallery": null,
                            "price": "9.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 0,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:47:02",
                            "updated_at": "2015-02-11 19:00:21",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Fried_Ravioli_UiQ4Jycl.jpg",
                            "name": "Ravioli chi\u00ean",
                            "description": "G\u1ed3m 6 mi\u1ebfng",
                            "quantity": 1,
                            "options": [
                                {
                                    "id": 1574,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-07 11:02:03",
                                    "price": 5,
                                    "deleted_at": null,
                                    "name": "Th\u00eam 6 mi\u1ebfng",
                                    "selected": true,
                                    "quantity": 1
                                }
                            ]
                        },
                        {
                            "id": 754,
                            "food_category_id": 99,
                            "alias": "b-nh-m-b-t-i-754",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Garlic_bread_YdkorSMs.jpg",
                            "gallery": null,
                            "price": "6.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:42:15",
                            "updated_at": "2015-02-11 18:59:52",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Garlic_bread_YdkorSMs.jpg",
                            "name": "B\u00e1nh m\u00ec b\u01a1 t\u1ecfi",
                            "description": "",
                            "quantity": 1,
                            "options": []
                        },
                        {
                            "id": 750,
                            "food_category_id": 99,
                            "alias": "mozzarella-cheese-sticks-750",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mozzarella_chees_sticks_xsEodMzk.jpg",
                            "gallery": null,
                            "price": "9.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}]],\"admin\":[{\"start\":1422324000000,\"end\":1422370800000,\"days\":[{\"id\":0},{\"id\":1},{\"id\":2},{\"id\":3},{\"id\":4},{\"id\":5},{\"id\":6}]}]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 0,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:38:45",
                            "updated_at": "2015-02-12 10:36:06",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mozzarella_chees_sticks_xsEodMzk.jpg",
                            "name": "Ph\u00f4 mai que",
                            "description": "",
                            "quantity": 1,
                            "options": [
                                {
                                    "id": 1579,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-07 11:54:49",
                                    "price": "2.00",
                                    "deleted_at": null,
                                    "name": "T\u01b0\u01a1ng \u1edbt",
                                    "selected": false
                                },
                                {
                                    "id": 1582,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-12 10:36:06",
                                    "updated_at": "2015-02-12 10:36:06",
                                    "price": "0.00",
                                    "deleted_at": null,
                                    "name": "extra sugar",
                                    "selected": false
                                }
                            ]
                        }
                    ],
                    "upsells": []
                },
                {
                    "id": 4,
                    "food_set_category_id": 2,
                    "original_price": "37.00",
                    "price": "12.00",
                    "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Screenshot_2015-02-12_18_58_19_W7WEMFJ3.png",
                    "gallery": "",
                    "time_option": "",
                    "has_upsell": 0,
                    "status": 1,
                    "deleted_at": null,
                    "created_at": "2015-02-12 11:10:28",
                    "updated_at": "2015-02-12 19:28:11",
                    "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Screenshot_2015-02-12_18_58_19_W7WEMFJ3.png",
                    "name": "Set Ti\u1ebft ki\u1ec7m",
                    "description": "\u0102n tr\u01b0a ti\u1ebft ki\u1ec7m",
                    "items": [
                        {
                            "id": 750,
                            "food_category_id": 99,
                            "alias": "mozzarella-cheese-sticks-750",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mozzarella_chees_sticks_xsEodMzk.jpg",
                            "gallery": null,
                            "price": "9.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}]],\"admin\":[{\"start\":1422324000000,\"end\":1422370800000,\"days\":[{\"id\":0},{\"id\":1},{\"id\":2},{\"id\":3},{\"id\":4},{\"id\":5},{\"id\":6}]}]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 0,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:38:45",
                            "updated_at": "2015-02-12 10:36:06",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mozzarella_chees_sticks_xsEodMzk.jpg",
                            "name": "Ph\u00f4 mai que",
                            "description": "",
                            "quantity": 1,
                            "options": [
                                {
                                    "id": 1579,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-07 11:54:49",
                                    "price": 2,
                                    "deleted_at": null,
                                    "name": "T\u01b0\u01a1ng \u1edbt",
                                    "selected": true,
                                    "quantity": 1
                                },
                                {
                                    "id": 1582,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-12 10:36:06",
                                    "updated_at": "2015-02-12 10:36:06",
                                    "price": 0,
                                    "deleted_at": null,
                                    "name": "extra sugar",
                                    "selected": true,
                                    "quantity": 1
                                }
                            ]
                        },
                        {
                            "id": 754,
                            "food_category_id": 99,
                            "alias": "b-nh-m-b-t-i-754",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Garlic_bread_YdkorSMs.jpg",
                            "gallery": null,
                            "price": "6.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:42:15",
                            "updated_at": "2015-02-11 18:59:52",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Garlic_bread_YdkorSMs.jpg",
                            "name": "B\u00e1nh m\u00ec b\u01a1 t\u1ecfi",
                            "description": "",
                            "quantity": 2,
                            "options": []
                        },
                        {
                            "id": 755,
                            "food_category_id": 99,
                            "alias": "chicken-wings-755",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/chicken_wings_oG6GJ7of.jpg",
                            "gallery": null,
                            "price": "8.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:44:12",
                            "updated_at": "2015-02-14 14:54:30",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/chicken_wings_oG6GJ7of.jpg",
                            "name": "C\u00e1nh g\u00e0 n\u01b0\u1edbng",
                            "description": "6 mi\u1ebfng c\u00e1nh g\u00e0.",
                            "quantity": 2,
                            "options": [
                                {
                                    "id": 1575,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": 4,
                                    "deleted_at": null,
                                    "name": "Th\u00eam 4 mi\u1ebfng",
                                    "selected": true,
                                    "quantity": 1
                                },
                                {
                                    "id": 1576,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": 10,
                                    "deleted_at": null,
                                    "name": "Th\u00eam 10 mi\u1ebfng",
                                    "selected": true,
                                    "quantity": 1
                                }
                            ]
                        }
                    ],
                    "upsells": []
                },
                {
                    "id": 5,
                    "food_set_category_id": 2,
                    "original_price": "17.59",
                    "price": "10.00",
                    "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/sahul_hotel_lobby__11_zTWjj86N.jpg",
                    "gallery": "",
                    "time_option": "",
                    "has_upsell": 0,
                    "status": 1,
                    "deleted_at": null,
                    "created_at": "2015-02-12 18:45:24",
                    "updated_at": "2015-02-12 19:20:44",
                    "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/sahul_hotel_lobby__11_zTWjj86N.jpg",
                    "name": "Happy Valentine's Day",
                    "description": "",
                    "items": [],
                    "upsells": []
                },
                {
                    "id": 6,
                    "food_set_category_id": 2,
                    "original_price": "17.49",
                    "price": "12.00",
                    "intro_img": "",
                    "gallery": "",
                    "time_option": "",
                    "has_upsell": 0,
                    "status": 1,
                    "deleted_at": null,
                    "created_at": "2015-02-12 19:08:11",
                    "updated_at": "2015-02-12 19:21:47",
                    "intro_img_original": "",
                    "name": "Hieu",
                    "description": "",
                    "items": [],
                    "upsells": []
                },
                {
                    "id": 7,
                    "food_set_category_id": 2,
                    "original_price": "22.58",
                    "price": "12.00",
                    "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Caesar_Salad_OqwIMGdx.jpg",
                    "gallery": "",
                    "time_option": "",
                    "has_upsell": 0,
                    "status": 1,
                    "deleted_at": null,
                    "created_at": "2015-02-12 19:28:42",
                    "updated_at": "2015-02-12 19:30:43",
                    "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Caesar_Salad_OqwIMGdx.jpg",
                    "name": "T\u00f4i kh\u00f4ng bi\u1ebft",
                    "description": "",
                    "items": [],
                    "upsells": []
                },
                {
                    "id": 8,
                    "food_set_category_id": 2,
                    "original_price": "23.00",
                    "price": "12.00",
                    "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Screenshot_2015-02-12_16_11_43_OYOCEjia.png",
                    "gallery": "",
                    "time_option": "",
                    "has_upsell": 0,
                    "status": 1,
                    "deleted_at": null,
                    "created_at": "2015-02-12 19:31:14",
                    "updated_at": "2015-02-12 19:31:20",
                    "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Screenshot_2015-02-12_16_11_43_OYOCEjia.png",
                    "name": "Happy Dinner",
                    "description": "",
                    "items": [
                        {
                            "id": 755,
                            "food_category_id": 99,
                            "alias": "chicken-wings-755",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/chicken_wings_oG6GJ7of.jpg",
                            "gallery": null,
                            "price": "8.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:44:12",
                            "updated_at": "2015-02-14 14:54:30",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/chicken_wings_oG6GJ7of.jpg",
                            "name": "C\u00e1nh g\u00e0 n\u01b0\u1edbng",
                            "description": "6 mi\u1ebfng c\u00e1nh g\u00e0.",
                            "quantity": 1,
                            "options": [
                                {
                                    "id": 1575,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": 4,
                                    "deleted_at": null,
                                    "name": "Th\u00eam 4 mi\u1ebfng",
                                    "selected": true,
                                    "quantity": 1
                                },
                                {
                                    "id": 1576,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": 10,
                                    "deleted_at": null,
                                    "name": "Th\u00eam 10 mi\u1ebfng",
                                    "selected": true,
                                    "quantity": 1
                                }
                            ]
                        },
                        {
                            "id": 754,
                            "food_category_id": 99,
                            "alias": "b-nh-m-b-t-i-754",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Garlic_bread_YdkorSMs.jpg",
                            "gallery": null,
                            "price": "6.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:42:15",
                            "updated_at": "2015-02-11 18:59:52",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Garlic_bread_YdkorSMs.jpg",
                            "name": "B\u00e1nh m\u00ec b\u01a1 t\u1ecfi",
                            "description": "",
                            "quantity": 1,
                            "options": []
                        },
                        {
                            "id": 750,
                            "food_category_id": 99,
                            "alias": "mozzarella-cheese-sticks-750",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mozzarella_chees_sticks_xsEodMzk.jpg",
                            "gallery": null,
                            "price": "9.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}]],\"admin\":[{\"start\":1422324000000,\"end\":1422370800000,\"days\":[{\"id\":0},{\"id\":1},{\"id\":2},{\"id\":3},{\"id\":4},{\"id\":5},{\"id\":6}]}]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 0,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:38:45",
                            "updated_at": "2015-02-12 10:36:06",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mozzarella_chees_sticks_xsEodMzk.jpg",
                            "name": "Ph\u00f4 mai que",
                            "description": "",
                            "quantity": 1,
                            "options": [
                                {
                                    "id": 1579,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-07 11:54:49",
                                    "price": 2,
                                    "deleted_at": null,
                                    "name": "T\u01b0\u01a1ng \u1edbt",
                                    "selected": true,
                                    "quantity": 1
                                },
                                {
                                    "id": 1582,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-12 10:36:06",
                                    "updated_at": "2015-02-12 10:36:06",
                                    "price": 0,
                                    "deleted_at": null,
                                    "name": "extra sugar",
                                    "selected": true,
                                    "quantity": 1
                                }
                            ]
                        }
                    ],
                    "upsells": []
                },
                {
                    "id": 9,
                    "food_set_category_id": 2,
                    "original_price": "53.50",
                    "price": "28.00",
                    "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Creamy_Rice_yKc8eg77.jpg",
                    "gallery": "",
                    "time_option": "",
                    "has_upsell": 0,
                    "status": 1,
                    "deleted_at": null,
                    "created_at": "2015-02-12 19:56:17",
                    "updated_at": "2015-02-12 19:56:17",
                    "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Creamy_Rice_yKc8eg77.jpg",
                    "name": "Thap cam",
                    "description": "combo danh cho thap cam",
                    "items": [
                        {
                            "id": 755,
                            "food_category_id": 99,
                            "alias": "chicken-wings-755",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/chicken_wings_oG6GJ7of.jpg",
                            "gallery": null,
                            "price": "8.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:44:12",
                            "updated_at": "2015-02-14 14:54:30",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/chicken_wings_oG6GJ7of.jpg",
                            "name": "C\u00e1nh g\u00e0 n\u01b0\u1edbng",
                            "description": "6 mi\u1ebfng c\u00e1nh g\u00e0.",
                            "quantity": 1,
                            "options": [
                                {
                                    "id": 1575,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": "4.00",
                                    "deleted_at": null,
                                    "name": "Th\u00eam 4 mi\u1ebfng",
                                    "selected": false
                                },
                                {
                                    "id": 1576,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": "10.00",
                                    "deleted_at": null,
                                    "name": "Th\u00eam 10 mi\u1ebfng",
                                    "selected": false
                                }
                            ]
                        },
                        {
                            "id": 754,
                            "food_category_id": 99,
                            "alias": "b-nh-m-b-t-i-754",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Garlic_bread_YdkorSMs.jpg",
                            "gallery": null,
                            "price": "6.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:42:15",
                            "updated_at": "2015-02-11 18:59:52",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Garlic_bread_YdkorSMs.jpg",
                            "name": "B\u00e1nh m\u00ec b\u01a1 t\u1ecfi",
                            "description": "",
                            "quantity": 1,
                            "options": []
                        },
                        {
                            "id": 738,
                            "food_category_id": 100,
                            "alias": "salmon-steak-738",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/steak_salmon_n36795YS.jpg",
                            "gallery": null,
                            "price": "14.50",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 0,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:24:13",
                            "updated_at": "2015-02-11 19:03:31",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/steak_salmon_n36795YS.jpg",
                            "name": "B\u00edt t\u1ebft c\u00e1 h\u1ed3i",
                            "description": "C\u00e1 h\u1ed3i v\u1edbi l\u1edbp da gi\u00f2n v\u00e0ng, rau m\u00f9i t\u00e2y, b\u01a1 th\u1ef1c v\u1eadt, k\u00e8m th\u00eam ch\u00fat n\u01b0\u1edbc s\u1ed1t khoai t\u00e2y.",
                            "quantity": 1,
                            "options": [
                                {
                                    "id": 1539,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": "0.00",
                                    "deleted_at": null,
                                    "name": "Kh\u00f4ng rau",
                                    "selected": false
                                },
                                {
                                    "id": 1540,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": "5.00",
                                    "deleted_at": null,
                                    "name": "Mi\u1ebfng c\u00e1 l\u1edbn",
                                    "selected": false
                                }
                            ]
                        },
                        {
                            "id": 760,
                            "food_category_id": 100,
                            "alias": "shrimp-marinara-760",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/shrimp_marinara_zs73lg1Q.jpg",
                            "gallery": null,
                            "price": "25.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 0,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:54:21",
                            "updated_at": "2015-02-11 19:04:11",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/shrimp_marinara_zs73lg1Q.jpg",
                            "name": "T\u00f4m marinara",
                            "description": "T\u00f4i k\u00e8m t\u1ecfi, n\u01b0\u1edbc s\u1ed1t r\u01b0\u1ee3u chanh tr\u1eafng. \u0102n k\u00e8m m\u00ec linguine.",
                            "quantity": 1,
                            "options": [
                                {
                                    "id": 1545,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": "3.00",
                                    "deleted_at": null,
                                    "name": "\u0110\u1ed5i sang cua",
                                    "selected": false
                                },
                                {
                                    "id": 1546,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": "2.00",
                                    "deleted_at": null,
                                    "name": "\u0110\u1ed5i sang c\u00e1 h\u1ed3i",
                                    "selected": false
                                },
                                {
                                    "id": 1547,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": "4.00",
                                    "deleted_at": null,
                                    "name": "\u0110\u1ed5i sang s\u00f2",
                                    "selected": false
                                }
                            ]
                        }
                    ],
                    "upsells": []
                },
                {
                    "id": 10,
                    "food_set_category_id": 2,
                    "original_price": "41.99",
                    "price": "20.00",
                    "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/broken-heart-heart_GgMxMK9V.jpg",
                    "gallery": "",
                    "time_option": "",
                    "has_upsell": 0,
                    "status": 1,
                    "deleted_at": null,
                    "created_at": "2015-02-13 10:50:12",
                    "updated_at": "2015-02-13 11:47:05",
                    "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/broken-heart-heart_GgMxMK9V.jpg",
                    "name": "Broken heart",
                    "description": "For me and my broken heart.",
                    "items": [
                        {
                            "id": 774,
                            "food_category_id": 100,
                            "alias": "crab-linguine-774",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Crab_Linguine_yLJncLOm.jpg",
                            "gallery": null,
                            "price": "19.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-10 14:39:46",
                            "updated_at": "2015-02-11 19:05:45",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Crab_Linguine_yLJncLOm.jpg",
                            "name": "M\u00ec cua h\u1ea3i s\u1ea3n",
                            "quantity": 1,
                            "options": []
                        },
                        {
                            "id": 771,
                            "food_category_id": 100,
                            "alias": "new-england-fried-shrimp-771",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/New_England_fried_Shrimp_7dhTvAEs.jpg",
                            "gallery": null,
                            "price": "14.99",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-10 12:16:01",
                            "updated_at": "2015-02-11 19:05:32",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/New_England_fried_Shrimp_7dhTvAEs.jpg",
                            "name": "T\u00f4m r\u00e1n New England",
                            "quantity": 1,
                            "options": [
                                {
                                    "id": 1553,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": 0,
                                    "deleted_at": null,
                                    "name": "Thay t\u00f4m s\u00fa",
                                    "selected": true,
                                    "quantity": 1
                                },
                                {
                                    "id": 1554,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": 2,
                                    "deleted_at": null,
                                    "name": "Th\u00eam n\u01b0\u1edbc s\u1ed1t",
                                    "selected": true,
                                    "quantity": 1
                                }
                            ]
                        },
                        {
                            "id": 755,
                            "food_category_id": 99,
                            "alias": "chicken-wings-755",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/chicken_wings_oG6GJ7of.jpg",
                            "gallery": null,
                            "price": "8.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:44:12",
                            "updated_at": "2015-02-14 14:54:30",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/chicken_wings_oG6GJ7of.jpg",
                            "name": "C\u00e1nh g\u00e0 n\u01b0\u1edbng",
                            "description": "6 mi\u1ebfng c\u00e1nh g\u00e0.",
                            "quantity": 1,
                            "options": [
                                {
                                    "id": 1575,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": "4.00",
                                    "deleted_at": null,
                                    "name": "Th\u00eam 4 mi\u1ebfng",
                                    "selected": false
                                },
                                {
                                    "id": 1576,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": "10.00",
                                    "deleted_at": null,
                                    "name": "Th\u00eam 10 mi\u1ebfng",
                                    "selected": false
                                }
                            ]
                        }
                    ],
                    "upsells": []
                },
                {
                    "id": 13,
                    "food_set_category_id": 2,
                    "original_price": "44.00",
                    "price": "200.00",
                    "intro_img": "",
                    "gallery": "",
                    "time_option": "",
                    "has_upsell": 0,
                    "status": 1,
                    "deleted_at": null,
                    "created_at": "2015-02-26 18:32:12",
                    "updated_at": "2015-02-26 18:32:12",
                    "intro_img_original": null,
                    "name": "Set Ti\u1ebft ki\u1ec7m",
                    "description": "\u0102n tr\u01b0a ti\u1ebft ki\u1ec7m",
                    "items": [
                        {
                            "id": 750,
                            "food_category_id": 99,
                            "alias": "mozzarella-cheese-sticks-750",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mozzarella_chees_sticks_xsEodMzk.jpg",
                            "gallery": null,
                            "price": "9.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}]],\"admin\":[{\"start\":1422324000000,\"end\":1422370800000,\"days\":[{\"id\":0},{\"id\":1},{\"id\":2},{\"id\":3},{\"id\":4},{\"id\":5},{\"id\":6}]}]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 0,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:38:45",
                            "updated_at": "2015-02-12 10:36:06",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mozzarella_chees_sticks_xsEodMzk.jpg",
                            "name": "Ph\u00f4 mai que",
                            "description": "",
                            "quantity": 2,
                            "options": [
                                {
                                    "id": 1579,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-07 11:54:49",
                                    "price": "2.00",
                                    "deleted_at": null,
                                    "name": "T\u01b0\u01a1ng \u1edbt",
                                    "selected": false
                                },
                                {
                                    "id": 1582,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-12 10:36:06",
                                    "updated_at": "2015-02-12 10:36:06",
                                    "price": "0.00",
                                    "deleted_at": null,
                                    "name": "extra sugar",
                                    "selected": false
                                }
                            ]
                        },
                        {
                            "id": 754,
                            "food_category_id": 99,
                            "alias": "b-nh-m-b-t-i-754",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Garlic_bread_YdkorSMs.jpg",
                            "gallery": null,
                            "price": "6.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:42:15",
                            "updated_at": "2015-02-11 18:59:52",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Garlic_bread_YdkorSMs.jpg",
                            "name": "B\u00e1nh m\u00ec b\u01a1 t\u1ecfi",
                            "description": "",
                            "quantity": 3,
                            "options": []
                        },
                        {
                            "id": 755,
                            "food_category_id": 99,
                            "alias": "chicken-wings-755",
                            "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/chicken_wings_oG6GJ7of.jpg",
                            "gallery": null,
                            "price": "8.00",
                            "sale_price": null,
                            "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                            "has_upsell": 1,
                            "status": 1,
                            "type": "food",
                            "multi_options": 1,
                            "deleted_at": null,
                            "created_at": "2015-01-09 17:44:12",
                            "updated_at": "2015-02-14 14:54:30",
                            "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/chicken_wings_oG6GJ7of.jpg",
                            "name": "C\u00e1nh g\u00e0 n\u01b0\u1edbng",
                            "description": "6 mi\u1ebfng c\u00e1nh g\u00e0.",
                            "quantity": 1,
                            "options": [
                                {
                                    "id": 1575,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": "4.00",
                                    "deleted_at": null,
                                    "name": "Th\u00eam 4 mi\u1ebfng",
                                    "selected": false
                                },
                                {
                                    "id": 1576,
                                    "food_id": 0,
                                    "food_option_id": 0,
                                    "status": 1,
                                    "created_at": "2015-02-05 16:56:35",
                                    "updated_at": "2015-02-05 16:56:35",
                                    "price": "10.00",
                                    "deleted_at": null,
                                    "name": "Th\u00eam 10 mi\u1ebfng",
                                    "selected": false
                                }
                            ]
                        }
                    ],
                    "upsells": []
                }
            ]
        },
        {
            "category": {
                "id": 3,
                "hotel_id": 8,
                "status": 1,
                "created_at": "2015-02-25 16:55:01",
                "updated_at": "2015-02-25 16:55:01",
                "parent_id": 0,
                "name": "Combo n\u0103m m\u1edbi",
                "description": "C\u00e1c set combo ch\u00fac m\u1eebng n\u0103m m\u1edbi"
            },
            "food_sets": []
        }
    ]
}

```

##Delete Food Set Category##
delete food set category, URL Param :

- hotel_id (required)

**Url**
<code>DELETE</code>api.hottab.pw/admin/food-set-categories/4?hotel_id=8


**Parameters**
<code>api_hottab_pw/admin/food-set-categories/4?hotel_id<code> 8


**Request data**
[]


Response:

```
{
    "error": false,
    "message": "Successfully deleted food set category!"
}

```

##List of Food Sets by Category ID##
List all food sets by category_id, URL params :

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/admin/food-sets/category/1?hotel_id=8&lang=vi&tag_id=24


**Parameters**
<code>api_hottab_pw/admin/food-sets/category/1?hotel_id<code> 8
<code>lang<code> vi
<code>tag_id<code> 24


**Request data**
{
    "token": "b28e0d3404612f099cb1063ea38e9f17",
    "hotel_id": "8",
    "food_category_id": "100",
    "name": "B\u00fan ch\u1ea3",
    "intro": "the intro",
    "description": "the desc",
    "intro_img": "http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg",
    "gallery": "",
    "price": "17.5",
    "sale_price": "11",
    "time_option": "",
    "has_upsell": "1",
    "upsells[1]": "37",
    "upsells[2]": "38",
    "food_options[1][name]": "C\u1ee1 l\u1edbn",
    "food_options[1][price]": "15",
    "food_options[2][name]": "C\u1ee1 v\u1eeba",
    "food_options[2][price]": "13",
    "tags[0][name]": "b\u00fan",
    "tags[1][name]": "\u0111\u1eadu",
    "priority": "1"
}


Response:

```
{
    "error": false,
    "data": {
        "category": {
            "id": 2,
            "hotel_id": 8,
            "status": 1,
            "created_at": "2015-02-11 18:16:45",
            "updated_at": "2015-02-11 18:16:45",
            "parent_id": 0,
            "name": "Happy Valentine's day",
            "description": "C\u00e1c set combo ch\u00fac m\u1eebng n\u0103m m\u1edbi"
        },
        "food_sets": [
            {
                "id": 3,
                "food_set_category_id": 2,
                "original_price": "39.49",
                "price": "20.00",
                "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Bloody_mary_I9Cesq5B.jpg",
                "gallery": "",
                "time_option": "",
                "has_upsell": 0,
                "status": 1,
                "deleted_at": null,
                "created_at": "2015-02-12 11:00:43",
                "updated_at": "2015-02-14 15:10:36",
                "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Bloody_mary_I9Cesq5B.jpg",
                "name": "Set Ti\u1ebft ki\u1ec7m",
                "description": "\u0102n tr\u01b0a ti\u1ebft ki\u1ec7m",
                "items": [
                    {
                        "id": 755,
                        "food_category_id": 99,
                        "alias": "chicken-wings-755",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/chicken_wings_oG6GJ7of.jpg",
                        "gallery": null,
                        "price": "8.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:44:12",
                        "updated_at": "2015-02-14 14:54:30",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/chicken_wings_oG6GJ7of.jpg",
                        "name": "C\u00e1nh g\u00e0 n\u01b0\u1edbng",
                        "description": "6 mi\u1ebfng c\u00e1nh g\u00e0.",
                        "quantity": 1,
                        "options": [
                            {
                                "id": 1575,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": 4,
                                "deleted_at": null,
                                "name": "Th\u00eam 4 mi\u1ebfng",
                                "selected": true,
                                "quantity": 1
                            },
                            {
                                "id": 1576,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": 10,
                                "deleted_at": null,
                                "name": "Th\u00eam 10 mi\u1ebfng",
                                "selected": true,
                                "quantity": 1
                            }
                        ]
                    },
                    {
                        "id": 764,
                        "food_category_id": 99,
                        "alias": "b-nh-m-caprese-764",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Caprese_flatbread_dDUfUBSp.jpg",
                        "gallery": null,
                        "price": "7.49",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 0,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-10 11:59:46",
                        "updated_at": "2015-02-11 19:01:13",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Caprese_flatbread_dDUfUBSp.jpg",
                        "name": "B\u00e1nh m\u00ec Caprese",
                        "description": "C\u00e1ch kh\u1edfi \u0111\u1ea7u b\u1eefa \u0103n ho\u00e0n h\u1ea3o. B\u00e1nh m\u00ec d\u00e1t m\u1ecfng k\u00e8m c\u00e0 chua, ph\u00f4 mai mozzarella, h\u00fang, v\u00e0 ph\u00f4 mai Romano.",
                        "quantity": 1,
                        "options": [
                            {
                                "id": 1534,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": 5,
                                "deleted_at": null,
                                "name": "B\u00e1nh l\u1edbn",
                                "selected": true,
                                "quantity": 1
                            }
                        ]
                    },
                    {
                        "id": 758,
                        "food_category_id": 99,
                        "alias": "ravioli-chi-n-758",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Fried_Ravioli_UiQ4Jycl.jpg",
                        "gallery": null,
                        "price": "9.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 0,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:47:02",
                        "updated_at": "2015-02-11 19:00:21",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Fried_Ravioli_UiQ4Jycl.jpg",
                        "name": "Ravioli chi\u00ean",
                        "description": "G\u1ed3m 6 mi\u1ebfng",
                        "quantity": 1,
                        "options": [
                            {
                                "id": 1574,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-07 11:02:03",
                                "price": 5,
                                "deleted_at": null,
                                "name": "Th\u00eam 6 mi\u1ebfng",
                                "selected": true,
                                "quantity": 1
                            }
                        ]
                    },
                    {
                        "id": 754,
                        "food_category_id": 99,
                        "alias": "b-nh-m-b-t-i-754",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Garlic_bread_YdkorSMs.jpg",
                        "gallery": null,
                        "price": "6.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:42:15",
                        "updated_at": "2015-02-11 18:59:52",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Garlic_bread_YdkorSMs.jpg",
                        "name": "B\u00e1nh m\u00ec b\u01a1 t\u1ecfi",
                        "description": "",
                        "quantity": 1,
                        "options": []
                    },
                    {
                        "id": 750,
                        "food_category_id": 99,
                        "alias": "mozzarella-cheese-sticks-750",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mozzarella_chees_sticks_xsEodMzk.jpg",
                        "gallery": null,
                        "price": "9.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}]],\"admin\":[{\"start\":1422324000000,\"end\":1422370800000,\"days\":[{\"id\":0},{\"id\":1},{\"id\":2},{\"id\":3},{\"id\":4},{\"id\":5},{\"id\":6}]}]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 0,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:38:45",
                        "updated_at": "2015-02-12 10:36:06",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mozzarella_chees_sticks_xsEodMzk.jpg",
                        "name": "Ph\u00f4 mai que",
                        "description": "",
                        "quantity": 1,
                        "options": [
                            {
                                "id": 1579,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-07 11:54:49",
                                "price": "2.00",
                                "deleted_at": null,
                                "name": "T\u01b0\u01a1ng \u1edbt",
                                "selected": false
                            },
                            {
                                "id": 1582,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-12 10:36:06",
                                "updated_at": "2015-02-12 10:36:06",
                                "price": "0.00",
                                "deleted_at": null,
                                "name": "extra sugar",
                                "selected": false
                            }
                        ]
                    }
                ],
                "upsells": []
            },
            {
                "id": 4,
                "food_set_category_id": 2,
                "original_price": "37.00",
                "price": "12.00",
                "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Screenshot_2015-02-12_18_58_19_W7WEMFJ3.png",
                "gallery": "",
                "time_option": "",
                "has_upsell": 0,
                "status": 1,
                "deleted_at": null,
                "created_at": "2015-02-12 11:10:28",
                "updated_at": "2015-02-12 19:28:11",
                "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Screenshot_2015-02-12_18_58_19_W7WEMFJ3.png",
                "name": "Set Ti\u1ebft ki\u1ec7m",
                "description": "\u0102n tr\u01b0a ti\u1ebft ki\u1ec7m",
                "items": [
                    {
                        "id": 750,
                        "food_category_id": 99,
                        "alias": "mozzarella-cheese-sticks-750",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mozzarella_chees_sticks_xsEodMzk.jpg",
                        "gallery": null,
                        "price": "9.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}]],\"admin\":[{\"start\":1422324000000,\"end\":1422370800000,\"days\":[{\"id\":0},{\"id\":1},{\"id\":2},{\"id\":3},{\"id\":4},{\"id\":5},{\"id\":6}]}]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 0,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:38:45",
                        "updated_at": "2015-02-12 10:36:06",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mozzarella_chees_sticks_xsEodMzk.jpg",
                        "name": "Ph\u00f4 mai que",
                        "description": "",
                        "quantity": 1,
                        "options": [
                            {
                                "id": 1579,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-07 11:54:49",
                                "price": 2,
                                "deleted_at": null,
                                "name": "T\u01b0\u01a1ng \u1edbt",
                                "selected": true,
                                "quantity": 1
                            },
                            {
                                "id": 1582,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-12 10:36:06",
                                "updated_at": "2015-02-12 10:36:06",
                                "price": 0,
                                "deleted_at": null,
                                "name": "extra sugar",
                                "selected": true,
                                "quantity": 1
                            }
                        ]
                    },
                    {
                        "id": 754,
                        "food_category_id": 99,
                        "alias": "b-nh-m-b-t-i-754",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Garlic_bread_YdkorSMs.jpg",
                        "gallery": null,
                        "price": "6.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:42:15",
                        "updated_at": "2015-02-11 18:59:52",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Garlic_bread_YdkorSMs.jpg",
                        "name": "B\u00e1nh m\u00ec b\u01a1 t\u1ecfi",
                        "description": "",
                        "quantity": 2,
                        "options": []
                    },
                    {
                        "id": 755,
                        "food_category_id": 99,
                        "alias": "chicken-wings-755",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/chicken_wings_oG6GJ7of.jpg",
                        "gallery": null,
                        "price": "8.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:44:12",
                        "updated_at": "2015-02-14 14:54:30",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/chicken_wings_oG6GJ7of.jpg",
                        "name": "C\u00e1nh g\u00e0 n\u01b0\u1edbng",
                        "description": "6 mi\u1ebfng c\u00e1nh g\u00e0.",
                        "quantity": 2,
                        "options": [
                            {
                                "id": 1575,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": 4,
                                "deleted_at": null,
                                "name": "Th\u00eam 4 mi\u1ebfng",
                                "selected": true,
                                "quantity": 1
                            },
                            {
                                "id": 1576,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": 10,
                                "deleted_at": null,
                                "name": "Th\u00eam 10 mi\u1ebfng",
                                "selected": true,
                                "quantity": 1
                            }
                        ]
                    }
                ],
                "upsells": []
            },
            {
                "id": 5,
                "food_set_category_id": 2,
                "original_price": "17.59",
                "price": "10.00",
                "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/sahul_hotel_lobby__11_zTWjj86N.jpg",
                "gallery": "",
                "time_option": "",
                "has_upsell": 0,
                "status": 1,
                "deleted_at": null,
                "created_at": "2015-02-12 18:45:24",
                "updated_at": "2015-02-12 19:20:44",
                "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/sahul_hotel_lobby__11_zTWjj86N.jpg",
                "name": "Happy Valentine's Day",
                "description": "",
                "items": [],
                "upsells": []
            },
            {
                "id": 6,
                "food_set_category_id": 2,
                "original_price": "17.49",
                "price": "12.00",
                "intro_img": "",
                "gallery": "",
                "time_option": "",
                "has_upsell": 0,
                "status": 1,
                "deleted_at": null,
                "created_at": "2015-02-12 19:08:11",
                "updated_at": "2015-02-12 19:21:47",
                "intro_img_original": "",
                "name": "Hieu",
                "description": "",
                "items": [],
                "upsells": []
            },
            {
                "id": 7,
                "food_set_category_id": 2,
                "original_price": "22.58",
                "price": "12.00",
                "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Caesar_Salad_OqwIMGdx.jpg",
                "gallery": "",
                "time_option": "",
                "has_upsell": 0,
                "status": 1,
                "deleted_at": null,
                "created_at": "2015-02-12 19:28:42",
                "updated_at": "2015-02-12 19:30:43",
                "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Caesar_Salad_OqwIMGdx.jpg",
                "name": "T\u00f4i kh\u00f4ng bi\u1ebft",
                "description": "",
                "items": [],
                "upsells": []
            },
            {
                "id": 8,
                "food_set_category_id": 2,
                "original_price": "23.00",
                "price": "12.00",
                "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Screenshot_2015-02-12_16_11_43_OYOCEjia.png",
                "gallery": "",
                "time_option": "",
                "has_upsell": 0,
                "status": 1,
                "deleted_at": null,
                "created_at": "2015-02-12 19:31:14",
                "updated_at": "2015-02-12 19:31:20",
                "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Screenshot_2015-02-12_16_11_43_OYOCEjia.png",
                "name": "Happy Dinner",
                "description": "",
                "items": [
                    {
                        "id": 755,
                        "food_category_id": 99,
                        "alias": "chicken-wings-755",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/chicken_wings_oG6GJ7of.jpg",
                        "gallery": null,
                        "price": "8.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:44:12",
                        "updated_at": "2015-02-14 14:54:30",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/chicken_wings_oG6GJ7of.jpg",
                        "name": "C\u00e1nh g\u00e0 n\u01b0\u1edbng",
                        "description": "6 mi\u1ebfng c\u00e1nh g\u00e0.",
                        "quantity": 1,
                        "options": [
                            {
                                "id": 1575,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": 4,
                                "deleted_at": null,
                                "name": "Th\u00eam 4 mi\u1ebfng",
                                "selected": true,
                                "quantity": 1
                            },
                            {
                                "id": 1576,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": 10,
                                "deleted_at": null,
                                "name": "Th\u00eam 10 mi\u1ebfng",
                                "selected": true,
                                "quantity": 1
                            }
                        ]
                    },
                    {
                        "id": 754,
                        "food_category_id": 99,
                        "alias": "b-nh-m-b-t-i-754",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Garlic_bread_YdkorSMs.jpg",
                        "gallery": null,
                        "price": "6.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:42:15",
                        "updated_at": "2015-02-11 18:59:52",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Garlic_bread_YdkorSMs.jpg",
                        "name": "B\u00e1nh m\u00ec b\u01a1 t\u1ecfi",
                        "description": "",
                        "quantity": 1,
                        "options": []
                    },
                    {
                        "id": 750,
                        "food_category_id": 99,
                        "alias": "mozzarella-cheese-sticks-750",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mozzarella_chees_sticks_xsEodMzk.jpg",
                        "gallery": null,
                        "price": "9.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}]],\"admin\":[{\"start\":1422324000000,\"end\":1422370800000,\"days\":[{\"id\":0},{\"id\":1},{\"id\":2},{\"id\":3},{\"id\":4},{\"id\":5},{\"id\":6}]}]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 0,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:38:45",
                        "updated_at": "2015-02-12 10:36:06",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mozzarella_chees_sticks_xsEodMzk.jpg",
                        "name": "Ph\u00f4 mai que",
                        "description": "",
                        "quantity": 1,
                        "options": [
                            {
                                "id": 1579,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-07 11:54:49",
                                "price": 2,
                                "deleted_at": null,
                                "name": "T\u01b0\u01a1ng \u1edbt",
                                "selected": true,
                                "quantity": 1
                            },
                            {
                                "id": 1582,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-12 10:36:06",
                                "updated_at": "2015-02-12 10:36:06",
                                "price": 0,
                                "deleted_at": null,
                                "name": "extra sugar",
                                "selected": true,
                                "quantity": 1
                            }
                        ]
                    }
                ],
                "upsells": []
            },
            {
                "id": 9,
                "food_set_category_id": 2,
                "original_price": "53.50",
                "price": "28.00",
                "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Creamy_Rice_yKc8eg77.jpg",
                "gallery": "",
                "time_option": "",
                "has_upsell": 0,
                "status": 1,
                "deleted_at": null,
                "created_at": "2015-02-12 19:56:17",
                "updated_at": "2015-02-12 19:56:17",
                "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Creamy_Rice_yKc8eg77.jpg",
                "name": "Thap cam",
                "description": "combo danh cho thap cam",
                "items": [
                    {
                        "id": 755,
                        "food_category_id": 99,
                        "alias": "chicken-wings-755",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/chicken_wings_oG6GJ7of.jpg",
                        "gallery": null,
                        "price": "8.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:44:12",
                        "updated_at": "2015-02-14 14:54:30",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/chicken_wings_oG6GJ7of.jpg",
                        "name": "C\u00e1nh g\u00e0 n\u01b0\u1edbng",
                        "description": "6 mi\u1ebfng c\u00e1nh g\u00e0.",
                        "quantity": 1,
                        "options": [
                            {
                                "id": 1575,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": "4.00",
                                "deleted_at": null,
                                "name": "Th\u00eam 4 mi\u1ebfng",
                                "selected": false
                            },
                            {
                                "id": 1576,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": "10.00",
                                "deleted_at": null,
                                "name": "Th\u00eam 10 mi\u1ebfng",
                                "selected": false
                            }
                        ]
                    },
                    {
                        "id": 754,
                        "food_category_id": 99,
                        "alias": "b-nh-m-b-t-i-754",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Garlic_bread_YdkorSMs.jpg",
                        "gallery": null,
                        "price": "6.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:42:15",
                        "updated_at": "2015-02-11 18:59:52",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Garlic_bread_YdkorSMs.jpg",
                        "name": "B\u00e1nh m\u00ec b\u01a1 t\u1ecfi",
                        "description": "",
                        "quantity": 1,
                        "options": []
                    },
                    {
                        "id": 738,
                        "food_category_id": 100,
                        "alias": "salmon-steak-738",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/steak_salmon_n36795YS.jpg",
                        "gallery": null,
                        "price": "14.50",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 0,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:24:13",
                        "updated_at": "2015-02-11 19:03:31",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/steak_salmon_n36795YS.jpg",
                        "name": "B\u00edt t\u1ebft c\u00e1 h\u1ed3i",
                        "description": "C\u00e1 h\u1ed3i v\u1edbi l\u1edbp da gi\u00f2n v\u00e0ng, rau m\u00f9i t\u00e2y, b\u01a1 th\u1ef1c v\u1eadt, k\u00e8m th\u00eam ch\u00fat n\u01b0\u1edbc s\u1ed1t khoai t\u00e2y.",
                        "quantity": 1,
                        "options": [
                            {
                                "id": 1539,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": "0.00",
                                "deleted_at": null,
                                "name": "Kh\u00f4ng rau",
                                "selected": false
                            },
                            {
                                "id": 1540,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": "5.00",
                                "deleted_at": null,
                                "name": "Mi\u1ebfng c\u00e1 l\u1edbn",
                                "selected": false
                            }
                        ]
                    },
                    {
                        "id": 760,
                        "food_category_id": 100,
                        "alias": "shrimp-marinara-760",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/shrimp_marinara_zs73lg1Q.jpg",
                        "gallery": null,
                        "price": "25.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 0,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:54:21",
                        "updated_at": "2015-02-11 19:04:11",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/shrimp_marinara_zs73lg1Q.jpg",
                        "name": "T\u00f4m marinara",
                        "description": "T\u00f4i k\u00e8m t\u1ecfi, n\u01b0\u1edbc s\u1ed1t r\u01b0\u1ee3u chanh tr\u1eafng. \u0102n k\u00e8m m\u00ec linguine.",
                        "quantity": 1,
                        "options": [
                            {
                                "id": 1545,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": "3.00",
                                "deleted_at": null,
                                "name": "\u0110\u1ed5i sang cua",
                                "selected": false
                            },
                            {
                                "id": 1546,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": "2.00",
                                "deleted_at": null,
                                "name": "\u0110\u1ed5i sang c\u00e1 h\u1ed3i",
                                "selected": false
                            },
                            {
                                "id": 1547,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": "4.00",
                                "deleted_at": null,
                                "name": "\u0110\u1ed5i sang s\u00f2",
                                "selected": false
                            }
                        ]
                    }
                ],
                "upsells": []
            },
            {
                "id": 10,
                "food_set_category_id": 2,
                "original_price": "41.99",
                "price": "20.00",
                "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/broken-heart-heart_GgMxMK9V.jpg",
                "gallery": "",
                "time_option": "",
                "has_upsell": 0,
                "status": 1,
                "deleted_at": null,
                "created_at": "2015-02-13 10:50:12",
                "updated_at": "2015-02-13 11:47:05",
                "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/broken-heart-heart_GgMxMK9V.jpg",
                "name": "Broken heart",
                "description": "For me and my broken heart.",
                "items": [
                    {
                        "id": 774,
                        "food_category_id": 100,
                        "alias": "crab-linguine-774",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Crab_Linguine_yLJncLOm.jpg",
                        "gallery": null,
                        "price": "19.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-10 14:39:46",
                        "updated_at": "2015-02-11 19:05:45",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Crab_Linguine_yLJncLOm.jpg",
                        "name": "M\u00ec cua h\u1ea3i s\u1ea3n",
                        "quantity": 1,
                        "options": []
                    },
                    {
                        "id": 771,
                        "food_category_id": 100,
                        "alias": "new-england-fried-shrimp-771",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/New_England_fried_Shrimp_7dhTvAEs.jpg",
                        "gallery": null,
                        "price": "14.99",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-10 12:16:01",
                        "updated_at": "2015-02-11 19:05:32",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/New_England_fried_Shrimp_7dhTvAEs.jpg",
                        "name": "T\u00f4m r\u00e1n New England",
                        "quantity": 1,
                        "options": [
                            {
                                "id": 1553,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": 0,
                                "deleted_at": null,
                                "name": "Thay t\u00f4m s\u00fa",
                                "selected": true,
                                "quantity": 1
                            },
                            {
                                "id": 1554,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": 2,
                                "deleted_at": null,
                                "name": "Th\u00eam n\u01b0\u1edbc s\u1ed1t",
                                "selected": true,
                                "quantity": 1
                            }
                        ]
                    },
                    {
                        "id": 755,
                        "food_category_id": 99,
                        "alias": "chicken-wings-755",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/chicken_wings_oG6GJ7of.jpg",
                        "gallery": null,
                        "price": "8.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:44:12",
                        "updated_at": "2015-02-14 14:54:30",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/chicken_wings_oG6GJ7of.jpg",
                        "name": "C\u00e1nh g\u00e0 n\u01b0\u1edbng",
                        "description": "6 mi\u1ebfng c\u00e1nh g\u00e0.",
                        "quantity": 1,
                        "options": [
                            {
                                "id": 1575,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": "4.00",
                                "deleted_at": null,
                                "name": "Th\u00eam 4 mi\u1ebfng",
                                "selected": false
                            },
                            {
                                "id": 1576,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": "10.00",
                                "deleted_at": null,
                                "name": "Th\u00eam 10 mi\u1ebfng",
                                "selected": false
                            }
                        ]
                    }
                ],
                "upsells": []
            },
            {
                "id": 13,
                "food_set_category_id": 2,
                "original_price": "44.00",
                "price": "200.00",
                "intro_img": "",
                "gallery": "",
                "time_option": "",
                "has_upsell": 0,
                "status": 1,
                "deleted_at": null,
                "created_at": "2015-02-26 18:32:12",
                "updated_at": "2015-02-26 18:32:12",
                "intro_img_original": null,
                "name": "Set Ti\u1ebft ki\u1ec7m",
                "description": "\u0102n tr\u01b0a ti\u1ebft ki\u1ec7m",
                "items": [
                    {
                        "id": 750,
                        "food_category_id": 99,
                        "alias": "mozzarella-cheese-sticks-750",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mozzarella_chees_sticks_xsEodMzk.jpg",
                        "gallery": null,
                        "price": "9.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}]],\"admin\":[{\"start\":1422324000000,\"end\":1422370800000,\"days\":[{\"id\":0},{\"id\":1},{\"id\":2},{\"id\":3},{\"id\":4},{\"id\":5},{\"id\":6}]}]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 0,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:38:45",
                        "updated_at": "2015-02-12 10:36:06",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mozzarella_chees_sticks_xsEodMzk.jpg",
                        "name": "Ph\u00f4 mai que",
                        "description": "",
                        "quantity": 2,
                        "options": [
                            {
                                "id": 1579,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-07 11:54:49",
                                "price": "2.00",
                                "deleted_at": null,
                                "name": "T\u01b0\u01a1ng \u1edbt",
                                "selected": false
                            },
                            {
                                "id": 1582,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-12 10:36:06",
                                "updated_at": "2015-02-12 10:36:06",
                                "price": "0.00",
                                "deleted_at": null,
                                "name": "extra sugar",
                                "selected": false
                            }
                        ]
                    },
                    {
                        "id": 754,
                        "food_category_id": 99,
                        "alias": "b-nh-m-b-t-i-754",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Garlic_bread_YdkorSMs.jpg",
                        "gallery": null,
                        "price": "6.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:42:15",
                        "updated_at": "2015-02-11 18:59:52",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Garlic_bread_YdkorSMs.jpg",
                        "name": "B\u00e1nh m\u00ec b\u01a1 t\u1ecfi",
                        "description": "",
                        "quantity": 3,
                        "options": []
                    },
                    {
                        "id": 755,
                        "food_category_id": 99,
                        "alias": "chicken-wings-755",
                        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/chicken_wings_oG6GJ7of.jpg",
                        "gallery": null,
                        "price": "8.00",
                        "sale_price": null,
                        "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                        "has_upsell": 1,
                        "status": 1,
                        "type": "food",
                        "multi_options": 1,
                        "deleted_at": null,
                        "created_at": "2015-01-09 17:44:12",
                        "updated_at": "2015-02-14 14:54:30",
                        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/chicken_wings_oG6GJ7of.jpg",
                        "name": "C\u00e1nh g\u00e0 n\u01b0\u1edbng",
                        "description": "6 mi\u1ebfng c\u00e1nh g\u00e0.",
                        "quantity": 1,
                        "options": [
                            {
                                "id": 1575,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": "4.00",
                                "deleted_at": null,
                                "name": "Th\u00eam 4 mi\u1ebfng",
                                "selected": false
                            },
                            {
                                "id": 1576,
                                "food_id": 0,
                                "food_option_id": 0,
                                "status": 1,
                                "created_at": "2015-02-05 16:56:35",
                                "updated_at": "2015-02-05 16:56:35",
                                "price": "10.00",
                                "deleted_at": null,
                                "name": "Th\u00eam 10 mi\u1ebfng",
                                "selected": false
                            }
                        ]
                    }
                ],
                "upsells": []
            }
        ]
    }
}

```

##Create Food Set##
Create new food set

- hotel_id (required)
- lang (optional)
- intro_img is recommended to be thumnail url
- upsells is a array of up selling food set id
- each items have options

**Url**
<code>POST</code>api.hottab.pw/admin/food-sets?lang=vi


**Parameters**
<code>api_hottab_pw/admin/food-sets?lang<code> vi


**Request data**
{
    "hotel_id": 8,
    "food_set_category_id": 1,
    "name": "Set v\u00f4 \u0111\u1ed1i",
    "description": "\u0102n tr\u01b0a ti\u1ebft ki\u1ec7m",
    "intro_img": "",
    "gallery": "",
    "time_option": "",
    "has_upsell": 0,
    "status": 1,
    "price": 20,
    "items": [
        {
            "id": 750,
            "options": []
        },
        {
            "id": 755,
            "options": []
        }
    ],
    "upsells": [],
    "tags": [
        {
            "name": "abc"
        },
        {
            "name": "xyz"
        }
    ]
}


Response:

```
{
    "error": false,
    "data": {
        "id": 14,
        "food_set_category_id": 2,
        "original_price": "44.00",
        "price": "20.00",
        "intro_img": "",
        "gallery": "",
        "time_option": "",
        "has_upsell": 0,
        "status": 1,
        "deleted_at": null,
        "created_at": "2015-02-26 18:32:29",
        "updated_at": "2015-02-26 18:32:29",
        "intro_img_original": null,
        "name": "Set Ti\u1ebft ki\u1ec7m",
        "description": "\u0102n tr\u01b0a ti\u1ebft ki\u1ec7m"
    }
}

```

##Update Food Set Category##
update existing category, URL Params :

- lang (optional)

**Url**
<code>PUT</code>api.hottab.pw/admin/food-set-categories/2?lang=vi&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDM2NzYwMjg0IiwiZXhwIjoiMTQzNjg0NjY4NCIsIm5iZiI6IjE0MzY3NjAyODQiLCJqdGkiOiI1OGRkNDAwM2E5ZjNiODE5YzEyZmM0N2Y4YjdhNmY4MyJ9.ZWIwYjQxMjAzMzc5NGExY2JiOWZhZTIzNjZmM2VkMzM2ZTU1NzExYjE1MDY2NDc5OWNjODlmNGIyMDdhNzg5NQ


**Parameters**
<code>api_hottab_pw/admin/food-set-categories/2?lang<code> vi
<code>token<code> eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDM2NzYwMjg0IiwiZXhwIjoiMTQzNjg0NjY4NCIsIm5iZiI6IjE0MzY3NjAyODQiLCJqdGkiOiI1OGRkNDAwM2E5ZjNiODE5YzEyZmM0N2Y4YjdhNmY4MyJ9.ZWIwYjQxMjAzMzc5NGExY2JiOWZhZTIzNjZmM2VkMzM2ZTU1NzExYjE1MDY2NDc5OWNjODlmNGIyMDdhNzg5NQ


**Request data**
{
    "hotel_id": 8,
    "name": "Combo (updated)",
    "description": "C\u00e1c set combo ch\u00fac m\u1eebng n\u0103m m\u1edbi",
    "item_order": "43,44,45"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 3,
        "hotel_id": 8,
        "status": 1,
        "created_at": "2015-02-25 16:53:22",
        "updated_at": "2015-02-25 16:53:22",
        "name": "Combo (updated)",
        "description": "C\u00e1c set combo ch\u00fac m\u1eebng n\u0103m m\u1edbi"
    }
}

```

##Delete Food Set##
delete a food set by id, URL params :

- hotel_id (required)

**Url**
<code>DELETE</code>api.hottab.pw/admin/food-sets/14?hotel_id=8


**Parameters**
<code>api_hottab_pw/admin/food-sets/14?hotel_id<code> 8


**Request data**
[]


Response:

```
{
    "error": false,
    "message": "food_set deleted"
}

```

