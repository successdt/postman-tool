##List of Services by Category ID##
List Services by single category_id, URL Params:

- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/housekeeper/services/category/6?token=6a737c6d932cf5b5c0342b0ed84df9c4


**Parameters**
<code>token</code> $token


**Request data**
{
    "password": "123456",
    "email": "keeper@hottab.net"
}


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

##List Service Categories##
List of all service categories, URL Params:

- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/housekeeper/service-categories?token=6a737c6d932cf5b5c0342b0ed84df9c4&lang=vi


**Parameters**
<code>token</code> $token
<code>lang<code> vi


**Request data**
{
    "password": "123456",
    "email": "keeper@hottab.net"
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

##View Service by ID##
View single service by id, URL Params: 

- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/housekeeper/services/199?token=6a737c6d932cf5b5c0342b0ed84df9c4


**Parameters**
<code>token</code> $token


**Request data**
{
    "password": "123456",
    "email": "keeper@hottab.net"
}


Response:

```
{
    "error": false,
    "data": {
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
    }
}

```

##List of Services group by Categories##
List of all services grouped by category, URL Params:

- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/housekeeper/services/?token=6a737c6d932cf5b5c0342b0ed84df9c4


**Parameters**
<code>token</code> $token


**Request data**
{
    "password": "123456",
    "email": "keeper@hottab.net"
}


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
    ]
}

```

