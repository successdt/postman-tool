##Delete Service Category##
Delete Service Category by ID, URL Params:

- hotel_id (required)

**Url**
<code>DELETE</code>api.hottab.pw/admin/service-categories/6?token=ea87e751bbdb675546314efea076a50a&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
[]


Response:

```
{
    "error": false,
    "message": "Successfully deleted service category!"
}

```

##Update Service Category##


**Url**
<code>POST</code>api.hottab.pw/admin/service-categories/7?lang=vi


**Parameters**
<code>api_hottab_pw/admin/service-categories/7?lang<code> vi


**Request data**
{
    "token": "ea87e751bbdb675546314efea076a50a",
    "hotel_id": "8",
    "name": "Lo\u1ea1i 1",
    "description": "desc desc",
    "icon": "service icon",
    "_method": "PUT"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 7,
        "hotel_id": 8,
        "icon": "service icon",
        "status": 1,
        "created_at": "2015-02-25 17:01:22",
        "updated_at": "2015-02-25 17:01:22",
        "name": "Lo\u1ea1i 1",
        "description": "desc desc"
    }
}

```

##View Service by ID##
View single service by id, URL Params:

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/admin/services/200?token=fe4a8fc53550eecd63bcbb049a4df3a6&hotel_id=8&lang=vi


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8
<code>lang<code> vi


**Request data**
[]


Response:

```
{
    "error": false,
    "data": {
        "id": 204,
        "service_category_id": 6,
        "alias": "sammppooo-204",
        "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/roomimagedemo_x4HUgXHT.jpg",
        "gallery": "",
        "price": "17.50",
        "sale_price": "111.00",
        "time_option": "",
        "status": 1,
        "deleted_at": null,
        "created_at": "2015-02-13 22:39:34",
        "updated_at": "2015-02-14 14:18:53",
        "multi_options": 1,
        "has_upsell": 1,
        "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/44\/roomimagedemo_x4HUgXHT.jpg",
        "name": "D\u1ea7u g\u1ed9i",
        "intro": "the intro",
        "description": "the desc",
        "options": [
            {
                "id": 194,
                "status": 1,
                "created_at": "2015-02-13 22:39:34",
                "updated_at": "2015-02-13 22:39:34",
                "deleted_at": null,
                "price": "169.00",
                "name": "C\u1ee1 l\u1edbn"
            },
            {
                "id": 195,
                "status": 1,
                "created_at": "2015-02-13 22:39:34",
                "updated_at": "2015-02-13 22:39:34",
                "deleted_at": null,
                "price": "168.00",
                "name": "C\u1ee1 v\u1eeba"
            }
        ],
        "upsells": [
            198
        ]
    }
}

```

##List of Services group by Categories##
List of all services grouped by category, URL Params:

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/admin/services/?token=fe4a8fc53550eecd63bcbb049a4df3a6&hotel_id=8&lang=vi


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8
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
                "id": "6",
                "hotel_id": "8",
                "icon": null,
                "status": "1",
                "created_at": "2015-01-16 11:20:39",
                "updated_at": "2015-01-23 18:15:10",
                "name": "In room",
                "description": ""
            },
            "items": [
                {
                    "id": "199",
                    "service_category_id": "6",
                    "alias": "kh-n-m-t-199",
                    "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/roomimagedemo_x4HUgXHT.jpg",
                    "gallery": null,
                    "price": "0.00",
                    "sale_price": null,
                    "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                    "status": "1",
                    "deleted_at": null,
                    "created_at": "2015-02-07 16:05:18",
                    "updated_at": "2015-02-24 15:44:21",
                    "multi_options": "0",
                    "has_upsell": "1",
                    "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/roomimagedemo_x4HUgXHT.jpg",
                    "name": "Kh\u0103n m\u1eb7t",
                    "intro": "",
                    "description": "",
                    "options": [
                        {
                            "id": "193",
                            "status": "1",
                            "created_at": "2015-02-12 10:35:17",
                            "updated_at": "2015-02-12 10:35:17",
                            "deleted_at": null,
                            "price": "0.10",
                            "name": "Tooth brush"
                        },
                        {
                            "id": "194",
                            "status": "1",
                            "created_at": "2015-02-14 15:15:05",
                            "updated_at": "2015-02-14 15:15:05",
                            "deleted_at": null,
                            "price": "2.00",
                            "name": "Tooth paste"
                        }
                    ],
                    "upsells": [
                        "202",
                        "203"
                    ]
                },
                {
                    "id": "202",
                    "service_category_id": "6",
                    "alias": "pillow-202",
                    "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/pillow_oFljZVmv.jpg",
                    "gallery": null,
                    "price": "0.00",
                    "sale_price": null,
                    "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                    "status": "1",
                    "deleted_at": null,
                    "created_at": "2015-02-12 14:08:33",
                    "updated_at": "2015-02-14 15:06:15",
                    "multi_options": "0",
                    "has_upsell": "1",
                    "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/pillow_oFljZVmv.jpg",
                    "name": "Th\u00eam g\u1ed1i",
                    "intro": "",
                    "description": "",
                    "options": [],
                    "upsells": [
                        "203"
                    ]
                },
                {
                    "id": "203",
                    "service_category_id": "6",
                    "alias": "reading-light-203",
                    "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/readling_light_qFRhlKxb.jpg",
                    "gallery": null,
                    "price": "0.00",
                    "sale_price": null,
                    "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                    "status": "1",
                    "deleted_at": null,
                    "created_at": "2015-02-12 14:08:45",
                    "updated_at": "2015-02-14 15:06:24",
                    "multi_options": "0",
                    "has_upsell": "1",
                    "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/readling_light_qFRhlKxb.jpg",
                    "name": "\u0110\u00e8n \u0111\u1ecdc s\u00e1ch",
                    "intro": "",
                    "description": "",
                    "options": [],
                    "upsells": [
                        "202"
                    ]
                }
            ]
        }
    ]
}

```

##Create Service##
Create new Service, URL Params:

- lang (optional)

**Url**
<code>POST</code>api.hottab.pw/admin/services?lang=vi


**Parameters**
<code>api_hottab_pw/admin/services?lang<code> vi


**Request data**
{
    "token": "fe4a8fc53550eecd63bcbb049a4df3a6",
    "hotel_id": "8",
    "service_category_id": "7",
    "name": "D\u1ea7u g\u1ed9i",
    "intro": "the intro",
    "description": "the desc",
    "intro_img": "http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg",
    "gallery": "",
    "price": "168",
    "sale_price": "111",
    "time_option": "",
    "has_upsell": "1",
    "multi_options": "1",
    "options[1][name]": "C\u1ee1 l\u1edbn",
    "options[1][price]": "169",
    "options[2][name]": "C\u1ee1 v\u1eeba",
    "options[2][price]": "168",
    "upsells[1]": "198",
    "upsells[2]": "199"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 205,
        "service_category_id": 7,
        "alias": "d-u-g-i-205",
        "intro_img": "http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg",
        "gallery": "",
        "price": "168.00",
        "sale_price": "111.00",
        "time_option": "",
        "status": 1,
        "deleted_at": null,
        "created_at": "2015-02-25 17:02:09",
        "updated_at": "2015-02-25 17:02:09",
        "multi_options": 1,
        "has_upsell": 1,
        "intro_img_original": "http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg",
        "name": "D\u1ea7u g\u1ed9i",
        "intro": "the intro",
        "description": "the desc"
    }
}

```

##List of Services by Category ID##
List services in single category, URL Params:

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/admin/services/category/7?token=fe4a8fc53550eecd63bcbb049a4df3a6&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
[]


Response:

```
{
    "error": false,
    "data": {
        "category": {
            "id": "6",
            "hotel_id": "8",
            "icon": null,
            "status": "1",
            "created_at": "2015-01-16 11:20:39",
            "updated_at": "2015-01-23 18:15:10",
            "name": "In room",
            "description": ""
        },
        "items": [
            {
                "id": "199",
                "service_category_id": "6",
                "alias": "kh-n-m-t-199",
                "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/roomimagedemo_x4HUgXHT.jpg",
                "gallery": null,
                "price": "0.00",
                "sale_price": null,
                "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                "status": "1",
                "deleted_at": null,
                "created_at": "2015-02-07 16:05:18",
                "updated_at": "2015-02-24 15:44:21",
                "multi_options": "0",
                "has_upsell": "1",
                "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/roomimagedemo_x4HUgXHT.jpg",
                "name": "Towel",
                "intro": "",
                "description": "",
                "options": [
                    {
                        "id": "193",
                        "status": "1",
                        "created_at": "2015-02-12 10:35:17",
                        "updated_at": "2015-02-12 10:35:17",
                        "deleted_at": null,
                        "price": "0.10",
                        "name": "Tooth brush"
                    },
                    {
                        "id": "194",
                        "status": "1",
                        "created_at": "2015-02-14 15:15:05",
                        "updated_at": "2015-02-14 15:15:05",
                        "deleted_at": null,
                        "price": "2.00",
                        "name": "Tooth paste"
                    }
                ],
                "upsells": [
                    "202",
                    "203"
                ]
            },
            {
                "id": "202",
                "service_category_id": "6",
                "alias": "pillow-202",
                "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/pillow_oFljZVmv.jpg",
                "gallery": null,
                "price": "0.00",
                "sale_price": null,
                "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                "status": "1",
                "deleted_at": null,
                "created_at": "2015-02-12 14:08:33",
                "updated_at": "2015-02-14 15:06:15",
                "multi_options": "0",
                "has_upsell": "1",
                "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/pillow_oFljZVmv.jpg",
                "name": "Pillow",
                "intro": "",
                "description": "",
                "options": [],
                "upsells": [
                    "203"
                ]
            },
            {
                "id": "203",
                "service_category_id": "6",
                "alias": "reading-light-203",
                "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/readling_light_qFRhlKxb.jpg",
                "gallery": null,
                "price": "0.00",
                "sale_price": null,
                "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                "status": "1",
                "deleted_at": null,
                "created_at": "2015-02-12 14:08:45",
                "updated_at": "2015-02-14 15:06:24",
                "multi_options": "0",
                "has_upsell": "1",
                "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/readling_light_qFRhlKxb.jpg",
                "name": "Reading light",
                "intro": "",
                "description": "",
                "options": [],
                "upsells": [
                    "202"
                ]
            }
        ]
    }
}

```

##Create Service Category##


**Url**
<code>POST</code>api.hottab.pw/admin/service-categories


**Parameters**
<code>api_hottab_pw/admin/service-categories<code> 


**Request data**
{
    "token": "fe4a8fc53550eecd63bcbb049a4df3a6",
    "hotel_id": "8",
    "name": "Service Category 1",
    "description": "desc desc",
    "icon": "service icon"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 8,
        "hotel_id": 8,
        "icon": "service icon",
        "status": 1,
        "created_at": "2015-02-25 17:01:25",
        "updated_at": "2015-02-25 17:01:25",
        "name": "Service Category 1",
        "description": "desc desc"
    }
}

```

##List Service Categories##
List of all service categories, URL Params:

- hotel_id (required)

**Url**
<code>GET</code>api.hottab.pw/admin/service-categories?token=ea87e751bbdb675546314efea076a50a&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "token": "ea87e751bbdb675546314efea076a50a",
    "hotel_id": "8",
    "service_category_id": "7",
    "name": "D\u1ea7u g\u1ed9i",
    "intro": "the intro",
    "description": "the desc",
    "intro_img": "http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg",
    "gallery": "",
    "price": "168",
    "sale_price": "111",
    "time_option": "",
    "has_upsell": "1",
    "multi_options": "1",
    "options[1][name]": "C\u1ee1 l\u1edbn",
    "options[1][price]": "169",
    "options[2][name]": "C\u1ee1 v\u1eeba",
    "options[2][price]": "168",
    "upsells[1]": "198",
    "upsells[2]": "199"
}


Response:

```
{
    "error": false,
    "data": [
        {
            "id": "6",
            "hotel_id": "8",
            "icon": null,
            "status": "1",
            "created_at": "2015-01-16 11:20:39",
            "updated_at": "2015-01-23 18:15:10",
            "name": "In room",
            "description": ""
        }
    ]
}

```

##Delete Service##
Delete Service by ID, URL Params :

- hotel_id (required)

**Url**
<code>DELETE</code>api.hottab.pw/admin/services/205?token=fe4a8fc53550eecd63bcbb049a4df3a6&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
[]


Response:

```
{
    "error": false,
    "message": "services.deleted"
}

```

##Update Service##
Update Service by ID, URL Params :

- lang (optional)

**Url**
<code>POST</code>api.hottab.pw/admin/services/205


**Parameters**
<code>api_hottab_pw/admin/services/205<code> 


**Request data**
{
    "token": "fe4a8fc53550eecd63bcbb049a4df3a6",
    "hotel_id": "8",
    "service_category_id": "7",
    "name": "Sammppooo",
    "intro": "the intro",
    "description": "the desc",
    "intro_img": "http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg",
    "gallery": "",
    "price": "17.5",
    "time_option": "",
    "multi_options": "1",
    "has_upsell": "1",
    "_method": "PUT",
    "service_options[1][name]": "C\u1ee1 l\u1edbn",
    "service_options[1][price]": "15",
    "service_options[2][name]": "C\u1ee1 v\u1eeba",
    "service_options[2][price]": "13",
    "upsells[1]": "198"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 205,
        "service_category_id": 7,
        "alias": "sammppooo-205",
        "intro_img": "http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg",
        "gallery": "",
        "price": "17.50",
        "sale_price": "111.00",
        "time_option": "",
        "status": 1,
        "deleted_at": null,
        "created_at": "2015-02-25 17:02:09",
        "updated_at": "2015-02-25 17:02:34",
        "multi_options": 1,
        "has_upsell": 1,
        "intro_img_original": "http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg",
        "name": "Sammppooo",
        "intro": "the intro",
        "description": "the desc"
    }
}

```

