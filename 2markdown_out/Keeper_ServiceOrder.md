##View Single Service Order##
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/housekeeper/service-orders/21?token=2771f06a6c644b36e7287a413c818a7c&lang=vi


**Parameters**
<code>token</code> $token
<code>lang<code> vi


**Request data**
{
    "_method": "PUT",
    "guest_id": "11",
    "room_id": "72",
    "hotel_id": "8",
    "order": "{\"status\":1,\"customer_note\":\"Hurry up!!!\",\"waiter_note\":\"\",\"discounts\":[{\"id\":26}],\"taxes\":[{\"id\":43}],\"items\":[{\"id\":199,\"quantity\":4,\"options\":[{\"id\":193,\"selected\":true}]},{\"id\":200,\"quantity\":2,\"options\":[{\"id\":194,\"selected\":false},{\"id\":195,\"selected\":true}]}]}"
}


Response:

```
{
    "error": false,
    "data": {
        "current_time": 1424883266,
        "order": {
            "id": "21",
            "user_id": "92",
            "customer_note": null,
            "waiter_note": null,
            "status": "3",
            "room_id": "73",
            "created_at": "2015-02-14 15:18:01",
            "updated_at": "2015-02-14 15:19:13",
            "service_order_parent_id": "5",
            "total": "10.00",
            "price_before_discount": "10.00",
            "price_after_discount": "10.00",
            "price_before_tax": "10.00",
            "price_after_tax": "13.21",
            "unix_created_at": 1423901881,
            "unix_updated_at": 1423901953,
            "room": {
                "id": "73",
                "name": "HotTab Room"
            },
            "parent_order": {
                "id": "5",
                "user_id": "0",
                "room_id": "73",
                "guest_id": "12",
                "status": "1",
                "paid_at": null,
                "created_at": "2015-02-13 11:19:30",
                "updated_at": "2015-02-24 17:54:27",
                "guest": {
                    "id": "12",
                    "name": "Brian"
                }
            },
            "taxes": [
                {
                    "id": "19",
                    "hotel_id": "8",
                    "rate": "12.05",
                    "amount": null,
                    "active": "1",
                    "deleted_at": null,
                    "created_at": "2015-01-07 15:09:05",
                    "updated_at": "2015-01-14 14:52:02",
                    "name": "Thu\u1ebf ph\u1ee5c v\u1ee5 \u0111\u00eam"
                },
                {
                    "id": "44",
                    "hotel_id": "8",
                    "rate": null,
                    "amount": "2.00",
                    "active": "1",
                    "deleted_at": null,
                    "created_at": "2015-01-22 11:43:09",
                    "updated_at": "2015-01-22 11:43:09",
                    "name": "Ti\u1ec1n g\u1eedi xe"
                }
            ],
            "discounts": [],
            "items": [
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
                    "quantity": "2",
                    "options": []
                },
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
                    "quantity": "5",
                    "options": [
                        {
                            "id": "193",
                            "status": "1",
                            "created_at": "2015-02-12 10:35:17",
                            "updated_at": "2015-02-12 10:35:17",
                            "deleted_at": null,
                            "price": "0.10",
                            "name": "Tooth brush",
                            "selected": false
                        },
                        {
                            "id": "194",
                            "status": "1",
                            "created_at": "2015-02-14 15:15:05",
                            "updated_at": "2015-02-14 15:15:05",
                            "deleted_at": null,
                            "price": "2.00",
                            "name": "Tooth paste",
                            "selected": true,
                            "quantity": "5"
                        }
                    ]
                }
            ]
        }
    }
}

```

##Create Service Order##
- Token có thể có hoặc ko
- room_id, hotel_id và guest_id (required)

**Url**
<code>POST</code>api.hottab.pw/housekeeper/service-orders


**Parameters**
<code>api_hottab_pw/housekeeper/service-orders<code> 


**Request data**
{
    "token": "2771f06a6c644b36e7287a413c818a7c",
    "guest_id": "11",
    "room_id": "72",
    "hotel_id": "8",
    "order": "{\"status\":1,\"customer_note\":\"Hurry up!!!\",\"waiter_note\":\"\",\"discounts\":[{\"id\":26}],\"taxes\":[{\"id\":43}],\"items\":[{\"id\":199,\"quantity\":4,\"options\":[{\"id\":193,\"selected\":true}]},{\"id\":200,\"quantity\":2,\"options\":[{\"id\":194,\"selected\":false},{\"id\":195,\"selected\":true}]}]}"
}


Response:

```
{
    "error": false,
    "data": {
        "current_time": 1424882912,
        "order": {
            "user_id": 92,
            "service_order_parent_id": 7,
            "customer_note": "Hurry up!!!",
            "waiter_note": "",
            "status": 1,
            "room_id": "72",
            "updated_at": "2015-02-25 23:48:32",
            "created_at": "2015-02-25 23:48:32",
            "id": 12,
            "total": 672.4,
            "price_before_discount": 672.4,
            "price_after_discount": 667.4,
            "price_before_tax": 667.4,
            "price_after_tax": 748.09,
            "taxes": [
                {
                    "id": 1,
                    "service_order_id": 12,
                    "tax_id": 43,
                    "rate": "12.00",
                    "amount": null,
                    "created_at": "2015-02-25 23:48:32",
                    "updated_at": "2015-02-25 23:48:32"
                }
            ],
            "discounts": [
                {
                    "id": 1,
                    "service_order_id": 12,
                    "discount_id": 26,
                    "rate": null,
                    "amount": "5.00",
                    "created_at": "2015-02-25 23:48:32",
                    "updated_at": "2015-02-25 23:48:32"
                }
            ],
            "items": [
                {
                    "id": 13,
                    "service_order_id": 12,
                    "service_id": 199,
                    "price": "0.00",
                    "quantity": 4,
                    "created_at": "2015-02-25 23:48:32",
                    "updated_at": "2015-02-25 23:48:32",
                    "subtotal": 0.4,
                    "options": [
                        {
                            "id": 9,
                            "service_order_item_id": 13,
                            "service_option_id": 193,
                            "price": "0.10",
                            "quantity": 4,
                            "created_at": "2015-02-25 23:48:32",
                            "updated_at": "2015-02-25 23:48:32"
                        }
                    ]
                },
                {
                    "id": 14,
                    "service_order_id": 12,
                    "service_id": 200,
                    "price": "168.00",
                    "quantity": 2,
                    "created_at": "2015-02-25 23:48:32",
                    "updated_at": "2015-02-25 23:48:32",
                    "subtotal": 672,
                    "options": [
                        {
                            "id": 10,
                            "service_order_item_id": 14,
                            "service_option_id": 195,
                            "price": "168.00",
                            "quantity": 2,
                            "created_at": "2015-02-25 23:48:32",
                            "updated_at": "2015-02-25 23:48:32"
                        }
                    ]
                }
            ]
        }
    }
}

```

##Update Service Order##
- Token có thể có hoặc ko
- room_id, hotel_id và guest_id (required)

**Url**
<code>POST</code>api.hottab.pw/housekeeper/service-orders/21


**Parameters**
<code>api_hottab_pw/housekeeper/service-orders/21<code> 


**Request data**
{
    "_method": "PUT",
    "token": "2771f06a6c644b36e7287a413c818a7c",
    "guest_id": "11",
    "room_id": "72",
    "hotel_id": "8",
    "order": "{\"status\":1,\"customer_note\":\"Hurry up!!!\",\"waiter_note\":\"\",\"discounts\":[{\"id\":26}],\"taxes\":[{\"id\":43}],\"items\":[{\"id\":199,\"quantity\":4,\"options\":[{\"id\":193,\"selected\":true}]},{\"id\":200,\"quantity\":2,\"options\":[{\"id\":194,\"selected\":false},{\"id\":195,\"selected\":true}]}]}"
}


Response:

```
{
    "error": false,
    "data": {
        "current_time": 1424882947,
        "order": {
            "id": 12,
            "user_id": 92,
            "customer_note": "Hurry up!!!",
            "waiter_note": "",
            "status": 1,
            "room_id": 72,
            "created_at": "2015-02-25 23:48:32",
            "updated_at": "2015-02-25 23:49:07",
            "service_order_parent_id": 7,
            "total": 672.4,
            "price_before_discount": 672.4,
            "price_after_discount": 667.4,
            "price_before_tax": 667.4,
            "price_after_tax": 748.09,
            "taxes": [
                {
                    "id": 2,
                    "service_order_id": 12,
                    "tax_id": 43,
                    "rate": "12.00",
                    "amount": null,
                    "created_at": "2015-02-25 23:49:07",
                    "updated_at": "2015-02-25 23:49:07"
                }
            ],
            "discounts": [
                {
                    "id": 2,
                    "service_order_id": 12,
                    "discount_id": 26,
                    "rate": null,
                    "amount": "5.00",
                    "created_at": "2015-02-25 23:49:07",
                    "updated_at": "2015-02-25 23:49:07"
                }
            ],
            "items": [
                {
                    "id": 15,
                    "service_order_id": 12,
                    "service_id": 199,
                    "price": "0.00",
                    "quantity": 4,
                    "created_at": "2015-02-25 23:49:07",
                    "updated_at": "2015-02-25 23:49:07",
                    "subtotal": 0.4,
                    "options": [
                        {
                            "id": 11,
                            "service_order_item_id": 15,
                            "service_option_id": 193,
                            "price": "0.10",
                            "quantity": 4,
                            "created_at": "2015-02-25 23:49:07",
                            "updated_at": "2015-02-25 23:49:07"
                        }
                    ]
                },
                {
                    "id": 16,
                    "service_order_id": 12,
                    "service_id": 200,
                    "price": "168.00",
                    "quantity": 2,
                    "created_at": "2015-02-25 23:49:07",
                    "updated_at": "2015-02-25 23:49:07",
                    "subtotal": 672,
                    "options": [
                        {
                            "id": 12,
                            "service_order_item_id": 16,
                            "service_option_id": 195,
                            "price": "168.00",
                            "quantity": 2,
                            "created_at": "2015-02-25 23:49:07",
                            "updated_at": "2015-02-25 23:49:07"
                        }
                    ]
                }
            ]
        }
    }
}

```

##List Customer Service Orders##
Housekeeper can view list all orders

- status (if not set) is show all

**Url**
<code>GET</code>api.hottab.pw/housekeeper/service-orders?token=2771f06a6c644b36e7287a413c818a7c&status=1


**Parameters**
<code>token</code> $token
<code>status<code> 1


**Request data**
{
    "_method": "PUT",
    "guest_id": "11",
    "room_id": "72",
    "hotel_id": "8",
    "order": "{\"status\":1,\"customer_note\":\"Hurry up!!!\",\"waiter_note\":\"\",\"discounts\":[{\"id\":26}],\"taxes\":[{\"id\":43}],\"items\":[{\"id\":199,\"quantity\":4,\"options\":[{\"id\":193,\"selected\":true}]},{\"id\":200,\"quantity\":2,\"options\":[{\"id\":194,\"selected\":false},{\"id\":195,\"selected\":true}]}]}"
}


Response:

```
{
    "error": false,
    "pagination": {
        "total": 18,
        "per_page": 10,
        "current_page": 1,
        "last_page": 2,
        "from": 1,
        "to": 10
    },
    "data": [
        {
            "current_time": 1424883338,
            "order": {
                "id": "29",
                "user_id": null,
                "customer_note": null,
                "waiter_note": "xin chao moi nguoi",
                "status": "1",
                "room_id": "73",
                "created_at": "2015-02-24 17:54:27",
                "updated_at": "2015-02-24 17:54:27",
                "service_order_parent_id": "5",
                "total": "0.00",
                "price_before_discount": "0.00",
                "price_after_discount": "0.00",
                "price_before_tax": "0.00",
                "price_after_tax": "0.00",
                "unix_created_at": 1424775267,
                "unix_updated_at": 1424775267,
                "room": {
                    "id": "73",
                    "name": "HotTab Room"
                },
                "parent_order": {
                    "id": "5",
                    "user_id": "0",
                    "room_id": "73",
                    "guest_id": "12",
                    "status": "1",
                    "paid_at": null,
                    "created_at": "2015-02-13 11:19:30",
                    "updated_at": "2015-02-24 17:54:27",
                    "guest": {
                        "id": "12",
                        "name": "Brian"
                    }
                },
                "taxes": [],
                "discounts": [],
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
                        "quantity": "1",
                        "options": [
                            {
                                "id": "193",
                                "status": "1",
                                "created_at": "2015-02-12 10:35:17",
                                "updated_at": "2015-02-12 10:35:17",
                                "deleted_at": null,
                                "price": "0.10",
                                "name": "Tooth brush",
                                "selected": false
                            },
                            {
                                "id": "194",
                                "status": "1",
                                "created_at": "2015-02-14 15:15:05",
                                "updated_at": "2015-02-14 15:15:05",
                                "deleted_at": null,
                                "price": "2.00",
                                "name": "Tooth paste",
                                "selected": false
                            }
                        ]
                    }
                ]
            }
        },
        {
            "current_time": 1424883338,
            "order": {
                "id": "28",
                "user_id": "92",
                "customer_note": "hurry up!!",
                "waiter_note": "xin chao",
                "status": "1",
                "room_id": "64",
                "created_at": "2015-02-24 16:47:50",
                "updated_at": "2015-02-24 16:47:50",
                "service_order_parent_id": "4",
                "total": "0.00",
                "price_before_discount": "0.00",
                "price_after_discount": "0.00",
                "price_before_tax": "0.00",
                "price_after_tax": "0.00",
                "unix_created_at": 1424771270,
                "unix_updated_at": 1424771270,
                "room": {
                    "id": "64",
                    "name": "TABLE 003"
                },
                "parent_order": {
                    "id": "4",
                    "user_id": "92",
                    "room_id": "64",
                    "guest_id": "4",
                    "status": "1",
                    "paid_at": null,
                    "created_at": "2015-02-13 11:02:37",
                    "updated_at": "2015-02-13 11:02:37",
                    "guest": {
                        "id": "4",
                        "name": "Dave"
                    }
                },
                "taxes": [],
                "discounts": [],
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
                        "quantity": "1",
                        "options": [
                            {
                                "id": "193",
                                "status": "1",
                                "created_at": "2015-02-12 10:35:17",
                                "updated_at": "2015-02-12 10:35:17",
                                "deleted_at": null,
                                "price": "0.10",
                                "name": "Tooth brush",
                                "selected": false
                            },
                            {
                                "id": "194",
                                "status": "1",
                                "created_at": "2015-02-14 15:15:05",
                                "updated_at": "2015-02-14 15:15:05",
                                "deleted_at": null,
                                "price": "2.00",
                                "name": "Tooth paste",
                                "selected": false
                            }
                        ]
                    }
                ]
            }
        },
        {
            "current_time": 1424883338,
            "order": {
                "id": "27",
                "user_id": "92",
                "customer_note": "hurry up!!",
                "waiter_note": null,
                "status": "1",
                "room_id": "73",
                "created_at": "2015-02-24 16:46:28",
                "updated_at": "2015-02-24 16:46:28",
                "service_order_parent_id": "5",
                "total": "0.00",
                "price_before_discount": "0.00",
                "price_after_discount": "0.00",
                "price_before_tax": "0.00",
                "price_after_tax": "0.00",
                "unix_created_at": 1424771188,
                "unix_updated_at": 1424771188,
                "room": {
                    "id": "73",
                    "name": "HotTab Room"
                },
                "parent_order": {
                    "id": "5",
                    "user_id": "0",
                    "room_id": "73",
                    "guest_id": "12",
                    "status": "1",
                    "paid_at": null,
                    "created_at": "2015-02-13 11:19:30",
                    "updated_at": "2015-02-24 17:54:27",
                    "guest": {
                        "id": "12",
                        "name": "Brian"
                    }
                },
                "taxes": [],
                "discounts": [],
                "items": [
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
                        "quantity": "1",
                        "options": []
                    }
                ]
            }
        },
        {
            "current_time": 1424883338,
            "order": {
                "id": "26",
                "user_id": "92",
                "customer_note": "hurry up!!",
                "waiter_note": null,
                "status": "1",
                "room_id": "64",
                "created_at": "2015-02-24 16:44:53",
                "updated_at": "2015-02-24 16:44:53",
                "service_order_parent_id": "4",
                "total": "0.00",
                "price_before_discount": "0.00",
                "price_after_discount": "0.00",
                "price_before_tax": "0.00",
                "price_after_tax": "0.00",
                "unix_created_at": 1424771093,
                "unix_updated_at": 1424771093,
                "room": {
                    "id": "64",
                    "name": "TABLE 003"
                },
                "parent_order": {
                    "id": "4",
                    "user_id": "92",
                    "room_id": "64",
                    "guest_id": "4",
                    "status": "1",
                    "paid_at": null,
                    "created_at": "2015-02-13 11:02:37",
                    "updated_at": "2015-02-13 11:02:37",
                    "guest": {
                        "id": "4",
                        "name": "Dave"
                    }
                },
                "taxes": [],
                "discounts": [],
                "items": [
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
                        "quantity": "1",
                        "options": []
                    }
                ]
            }
        },
        {
            "current_time": 1424883338,
            "order": {
                "id": "25",
                "user_id": null,
                "customer_note": null,
                "waiter_note": null,
                "status": "1",
                "room_id": "56",
                "created_at": "2015-02-24 15:21:07",
                "updated_at": "2015-02-24 15:21:07",
                "service_order_parent_id": "6",
                "total": "6.00",
                "price_before_discount": "6.00",
                "price_after_discount": "6.00",
                "price_before_tax": "6.00",
                "price_after_tax": "6.00",
                "unix_created_at": 1424766067,
                "unix_updated_at": 1424766067,
                "room": {
                    "id": "56",
                    "name": "ONDA"
                },
                "parent_order": {
                    "id": "6",
                    "user_id": "0",
                    "room_id": "56",
                    "guest_id": "10",
                    "status": "1",
                    "paid_at": null,
                    "created_at": "2015-02-13 11:40:49",
                    "updated_at": "2015-02-24 15:21:07",
                    "guest": {
                        "id": "10",
                        "name": "Ronaldo"
                    }
                },
                "taxes": [],
                "discounts": [],
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
                        "quantity": "3",
                        "options": [
                            {
                                "id": "193",
                                "status": "1",
                                "created_at": "2015-02-12 10:35:17",
                                "updated_at": "2015-02-12 10:35:17",
                                "deleted_at": null,
                                "price": "0.10",
                                "name": "Tooth brush",
                                "selected": false
                            },
                            {
                                "id": "194",
                                "status": "1",
                                "created_at": "2015-02-14 15:15:05",
                                "updated_at": "2015-02-14 15:15:05",
                                "deleted_at": null,
                                "price": "2.00",
                                "name": "Tooth paste",
                                "selected": true,
                                "quantity": "3"
                            }
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
                        "quantity": "2",
                        "options": []
                    }
                ]
            }
        },
        {
            "current_time": 1424883338,
            "order": {
                "id": "24",
                "user_id": null,
                "customer_note": null,
                "waiter_note": null,
                "status": "1",
                "room_id": "56",
                "created_at": "2015-02-24 15:13:24",
                "updated_at": "2015-02-24 15:13:24",
                "service_order_parent_id": "6",
                "total": "0.00",
                "price_before_discount": "0.00",
                "price_after_discount": "0.00",
                "price_before_tax": "0.00",
                "price_after_tax": "0.00",
                "unix_created_at": 1424765604,
                "unix_updated_at": 1424765604,
                "room": {
                    "id": "56",
                    "name": "ONDA"
                },
                "parent_order": {
                    "id": "6",
                    "user_id": "0",
                    "room_id": "56",
                    "guest_id": "10",
                    "status": "1",
                    "paid_at": null,
                    "created_at": "2015-02-13 11:40:49",
                    "updated_at": "2015-02-24 15:21:07",
                    "guest": {
                        "id": "10",
                        "name": "Ronaldo"
                    }
                },
                "taxes": [],
                "discounts": [],
                "items": [
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
                        "quantity": "4",
                        "options": []
                    }
                ]
            }
        },
        {
            "current_time": 1424883338,
            "order": {
                "id": "23",
                "user_id": null,
                "customer_note": null,
                "waiter_note": null,
                "status": "1",
                "room_id": "73",
                "created_at": "2015-02-24 13:39:19",
                "updated_at": "2015-02-24 13:39:19",
                "service_order_parent_id": "5",
                "total": "0.50",
                "price_before_discount": "0.50",
                "price_after_discount": "0.50",
                "price_before_tax": "0.50",
                "price_after_tax": "0.50",
                "unix_created_at": 1424759959,
                "unix_updated_at": 1424759959,
                "room": {
                    "id": "73",
                    "name": "HotTab Room"
                },
                "parent_order": {
                    "id": "5",
                    "user_id": "0",
                    "room_id": "73",
                    "guest_id": "12",
                    "status": "1",
                    "paid_at": null,
                    "created_at": "2015-02-13 11:19:30",
                    "updated_at": "2015-02-24 17:54:27",
                    "guest": {
                        "id": "12",
                        "name": "Brian"
                    }
                },
                "taxes": [],
                "discounts": [],
                "items": [
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
                        "quantity": "4",
                        "options": []
                    },
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
                        "quantity": "5",
                        "options": [
                            {
                                "id": "193",
                                "status": "1",
                                "created_at": "2015-02-12 10:35:17",
                                "updated_at": "2015-02-12 10:35:17",
                                "deleted_at": null,
                                "price": "0.10",
                                "name": "Tooth brush",
                                "selected": true,
                                "quantity": "5"
                            },
                            {
                                "id": "194",
                                "status": "1",
                                "created_at": "2015-02-14 15:15:05",
                                "updated_at": "2015-02-14 15:15:05",
                                "deleted_at": null,
                                "price": "2.00",
                                "name": "Tooth paste",
                                "selected": false
                            }
                        ]
                    }
                ]
            }
        },
        {
            "current_time": 1424883338,
            "order": {
                "id": "18",
                "user_id": "77",
                "customer_note": null,
                "waiter_note": null,
                "status": "1",
                "room_id": "63",
                "created_at": "2015-02-14 14:13:12",
                "updated_at": "2015-02-14 14:13:12",
                "service_order_parent_id": "8",
                "total": "0.00",
                "price_before_discount": "0.00",
                "price_after_discount": "0.00",
                "price_before_tax": "0.00",
                "price_after_tax": "0.00",
                "unix_created_at": 1423897992,
                "unix_updated_at": 1423897992,
                "room": {
                    "id": "63",
                    "name": "TABLE 002"
                },
                "parent_order": {
                    "id": "8",
                    "user_id": "92",
                    "room_id": "63",
                    "guest_id": "3",
                    "status": "1",
                    "paid_at": null,
                    "created_at": "2015-02-14 13:57:39",
                    "updated_at": "2015-02-14 16:01:30",
                    "guest": {
                        "id": "3",
                        "name": "John"
                    }
                },
                "taxes": [],
                "discounts": [],
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
                        "quantity": "6",
                        "options": [
                            {
                                "id": "193",
                                "status": "1",
                                "created_at": "2015-02-12 10:35:17",
                                "updated_at": "2015-02-12 10:35:17",
                                "deleted_at": null,
                                "price": "0.10",
                                "name": "Tooth brush",
                                "selected": false
                            },
                            {
                                "id": "194",
                                "status": "1",
                                "created_at": "2015-02-14 15:15:05",
                                "updated_at": "2015-02-14 15:15:05",
                                "deleted_at": null,
                                "price": "2.00",
                                "name": "Tooth paste",
                                "selected": false
                            }
                        ]
                    }
                ]
            }
        },
        {
            "current_time": 1424883338,
            "order": {
                "id": "17",
                "user_id": "77",
                "customer_note": null,
                "waiter_note": null,
                "status": "1",
                "room_id": "63",
                "created_at": "2015-02-14 14:12:23",
                "updated_at": "2015-02-14 14:12:23",
                "service_order_parent_id": "8",
                "total": "0.60",
                "price_before_discount": "0.60",
                "price_after_discount": "0.60",
                "price_before_tax": "0.60",
                "price_after_tax": "0.60",
                "unix_created_at": 1423897943,
                "unix_updated_at": 1423897943,
                "room": {
                    "id": "63",
                    "name": "TABLE 002"
                },
                "parent_order": {
                    "id": "8",
                    "user_id": "92",
                    "room_id": "63",
                    "guest_id": "3",
                    "status": "1",
                    "paid_at": null,
                    "created_at": "2015-02-14 13:57:39",
                    "updated_at": "2015-02-14 16:01:30",
                    "guest": {
                        "id": "3",
                        "name": "John"
                    }
                },
                "taxes": [],
                "discounts": [],
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
                        "quantity": "2",
                        "options": [
                            {
                                "id": "193",
                                "status": "1",
                                "created_at": "2015-02-12 10:35:17",
                                "updated_at": "2015-02-12 10:35:17",
                                "deleted_at": null,
                                "price": "0.10",
                                "name": "Tooth brush",
                                "selected": false
                            },
                            {
                                "id": "194",
                                "status": "1",
                                "created_at": "2015-02-14 15:15:05",
                                "updated_at": "2015-02-14 15:15:05",
                                "deleted_at": null,
                                "price": "2.00",
                                "name": "Tooth paste",
                                "selected": false
                            }
                        ]
                    },
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
                        "quantity": "6",
                        "options": [
                            {
                                "id": "193",
                                "status": "1",
                                "created_at": "2015-02-12 10:35:17",
                                "updated_at": "2015-02-12 10:35:17",
                                "deleted_at": null,
                                "price": "0.10",
                                "name": "Tooth brush",
                                "selected": true,
                                "quantity": "6"
                            },
                            {
                                "id": "194",
                                "status": "1",
                                "created_at": "2015-02-14 15:15:05",
                                "updated_at": "2015-02-14 15:15:05",
                                "deleted_at": null,
                                "price": "2.00",
                                "name": "Tooth paste",
                                "selected": false
                            }
                        ]
                    }
                ]
            }
        },
        {
            "current_time": 1424883338,
            "order": {
                "id": "16",
                "user_id": "77",
                "customer_note": null,
                "waiter_note": null,
                "status": "1",
                "room_id": "63",
                "created_at": "2015-02-14 13:59:04",
                "updated_at": "2015-02-14 13:59:04",
                "service_order_parent_id": "8",
                "total": "0.40",
                "price_before_discount": "0.40",
                "price_after_discount": "0.40",
                "price_before_tax": "0.40",
                "price_after_tax": "0.40",
                "unix_created_at": 1423897144,
                "unix_updated_at": 1423897144,
                "room": {
                    "id": "63",
                    "name": "TABLE 002"
                },
                "parent_order": {
                    "id": "8",
                    "user_id": "92",
                    "room_id": "63",
                    "guest_id": "3",
                    "status": "1",
                    "paid_at": null,
                    "created_at": "2015-02-14 13:57:39",
                    "updated_at": "2015-02-14 16:01:30",
                    "guest": {
                        "id": "3",
                        "name": "John"
                    }
                },
                "taxes": [],
                "discounts": [],
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
                        "quantity": "4",
                        "options": [
                            {
                                "id": "193",
                                "status": "1",
                                "created_at": "2015-02-12 10:35:17",
                                "updated_at": "2015-02-12 10:35:17",
                                "deleted_at": null,
                                "price": "0.10",
                                "name": "Tooth brush",
                                "selected": true,
                                "quantity": "4"
                            },
                            {
                                "id": "194",
                                "status": "1",
                                "created_at": "2015-02-14 15:15:05",
                                "updated_at": "2015-02-14 15:15:05",
                                "deleted_at": null,
                                "price": "2.00",
                                "name": "Tooth paste",
                                "selected": false
                            }
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
                        "quantity": "4",
                        "options": []
                    }
                ]
            }
        }
    ]
}

```

