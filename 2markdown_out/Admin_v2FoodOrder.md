##Order detail##


**Url**
<code>GET</code>api.hottab.pw/v2/admin/food-orders/186?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMwMjk3MzMwIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMwMjEwOTMwIiwibmJmIjoiMTQzMDIxMDkzMCIsImp0aSI6IjIwNDcwYjYzYzZmYWNmNTlkMDZiM2MzYzliMDU1MmQxIn0.OGZkYWMyZTE4YjVhODdhODJmNjU2ZGNlNzgyZmY0MTg4ZGRmOTM0M2ZhMDJhMGQyNmQ5YzMzNmVmZGZhYjgwZg&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "password": "123456",
    "email": "thanhdd@hottab.net"
}


Response:

```
{
    "error": false,
    "data": {
        "order": {
            "id": 186,
            "user_id": 89,
            "food_order_parent_id": 0,
            "customer_note": null,
            "waiter_note": "",
            "status": 4,
            "room_id": 164,
            "total": 79000,
            "created_at": "2015-04-16 15:22:59",
            "updated_at": "2015-04-16 15:28:21",
            "type": 0,
            "guest_id": 60,
            "customer_number": 1,
            "pre_total": 79000,
            "order_id": 17,
            "transaction_id": 4008150416017,
            "order_number": 0,
            "customer_id": null,
            "do_not_print": 0,
            "items": [
                {
                    "id": 764,
                    "quantity": 1,
                    "type": 0,
                    "split": "[1]",
                    "price": 79000,
                    "subtotal": 79000,
                    "is_delivered": 0,
                    "priority": 0,
                    "customer_note": null,
                    "is_take_away": 0,
                    "do_not_make": 0,
                    "is_wasted": 0,
                    "is_foc": 0,
                    "foc_remark": null,
                    "do_not_print": 0,
                    "discounts": [],
                    "options": [
                        {
                            "id": 1599,
                            "price": 0,
                            "quantity": 1
                        }
                    ]
                }
            ],
            "current_time": 1438334389,
            "staff": null,
            "taxes": [],
            "discounts": [],
            "room": {
                "id": 164,
                "name": "ch\u00e9m gi\u00f3"
            },
            "customer_classes": [],
            "customer": null
        },
        "foods": [
            {
                "id": 764,
                "food_category_id": 99,
                "intro_img": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Caprese_flatbread_dDUfUBSp.jpg",
                "price": 79000,
                "sale_price": null,
                "status": 0,
                "time_option": "{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}",
                "has_upsell": 0,
                "multi_options": 0,
                "intro_img_original": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Caprese_flatbread_dDUfUBSp.jpg",
                "priority": 0,
                "printer_id": 0,
                "name": "Caprese flatbread",
                "description": "A great start to any meal! Thin flatbread is topped with fresh plum tomatoes, fresh mozzarella cheese, fresh basil and Romano cheese then oven baked and finished with a balsamic drizzle.",
                "category": {
                    "id": 99,
                    "hotel_id": 8,
                    "icon": "",
                    "status": 1,
                    "created_at": "2015-01-09 17:05:15",
                    "updated_at": "2015-07-31 14:51:06",
                    "parent_id": 165,
                    "lft": 66,
                    "rgt": 97,
                    "depth": 1,
                    "type": 1,
                    "printer_id": 0,
                    "item_order": "925,926",
                    "name": "Starters",
                    "description": ""
                },
                "options": [
                    {
                        "id": 68,
                        "icon": "",
                        "is_required": 0,
                        "multi_options": 0,
                        "name": "Bonjour",
                        "options": [
                            {
                                "id": 2626,
                                "food_id": 764,
                                "status": 1,
                                "created_at": "2015-07-02 14:46:14",
                                "updated_at": "2015-07-02 14:46:14",
                                "price": 200000,
                                "deleted_at": null,
                                "option_category_id": 68,
                                "name": "Red Peach Sangria ES"
                            },
                            {
                                "id": 2627,
                                "food_id": 764,
                                "status": 1,
                                "created_at": "2015-07-02 14:46:14",
                                "updated_at": "2015-07-02 14:46:14",
                                "price": 5000,
                                "deleted_at": null,
                                "option_category_id": 68,
                                "name": "Margarita"
                            },
                            {
                                "id": 2628,
                                "food_id": 764,
                                "status": 1,
                                "created_at": "2015-07-02 14:46:14",
                                "updated_at": "2015-07-02 14:46:14",
                                "price": 4000,
                                "deleted_at": null,
                                "option_category_id": 68,
                                "name": "Bloody Mary"
                            },
                            {
                                "id": 2629,
                                "food_id": 764,
                                "status": 1,
                                "created_at": "2015-07-02 14:46:14",
                                "updated_at": "2015-07-02 14:46:14",
                                "price": 4000,
                                "deleted_at": null,
                                "option_category_id": 68,
                                "name": "Martini Bianco"
                            },
                            {
                                "id": 2630,
                                "food_id": 764,
                                "status": 1,
                                "created_at": "2015-07-02 14:46:14",
                                "updated_at": "2015-07-02 14:46:14",
                                "price": 30000,
                                "deleted_at": null,
                                "option_category_id": 68,
                                "name": "Strawberry Lemonade"
                            },
                            {
                                "id": 2631,
                                "food_id": 764,
                                "status": 1,
                                "created_at": "2015-07-02 14:46:14",
                                "updated_at": "2015-07-02 14:46:14",
                                "price": 39000,
                                "deleted_at": null,
                                "option_category_id": 68,
                                "name": "Raspberry Kiss"
                            }
                        ]
                    },
                    {
                        "id": 69,
                        "icon": "",
                        "is_required": 0,
                        "multi_options": 0,
                        "name": "Hello",
                        "options": [
                            {
                                "id": 2632,
                                "food_id": 764,
                                "status": 1,
                                "created_at": "2015-07-02 14:46:14",
                                "updated_at": "2015-07-02 14:46:14",
                                "price": 100000,
                                "deleted_at": null,
                                "option_category_id": 69,
                                "name": "Team"
                            },
                            {
                                "id": 2633,
                                "food_id": 764,
                                "status": 1,
                                "created_at": "2015-07-02 14:46:14",
                                "updated_at": "2015-07-02 14:46:14",
                                "price": 100000,
                                "deleted_at": null,
                                "option_category_id": 69,
                                "name": "Game Over"
                            }
                        ]
                    },
                    {
                        "id": 70,
                        "icon": "",
                        "is_required": 0,
                        "multi_options": 0,
                        "name": "Linh tinh",
                        "options": [
                            {
                                "id": 2634,
                                "food_id": 764,
                                "status": 1,
                                "created_at": "2015-07-02 14:46:14",
                                "updated_at": "2015-07-02 14:46:14",
                                "price": 4000,
                                "deleted_at": null,
                                "option_category_id": 70,
                                "name": "Mini chocolate souffle"
                            },
                            {
                                "id": 2635,
                                "food_id": 764,
                                "status": 1,
                                "created_at": "2015-07-02 14:46:14",
                                "updated_at": "2015-07-02 14:46:14",
                                "price": 3000,
                                "deleted_at": null,
                                "option_category_id": 70,
                                "name": "Strawberry chocolate truffle pie"
                            },
                            {
                                "id": 2636,
                                "food_id": 764,
                                "status": 1,
                                "created_at": "2015-07-02 14:46:14",
                                "updated_at": "2015-07-02 14:46:14",
                                "price": 3000,
                                "deleted_at": null,
                                "option_category_id": 70,
                                "name": "Brookie"
                            },
                            {
                                "id": 2637,
                                "food_id": 764,
                                "status": 1,
                                "created_at": "2015-07-02 14:46:14",
                                "updated_at": "2015-07-02 14:46:14",
                                "price": 5000,
                                "deleted_at": null,
                                "option_category_id": 70,
                                "name": "Mini creme souffle"
                            },
                            {
                                "id": 2638,
                                "food_id": 764,
                                "status": 1,
                                "created_at": "2015-07-02 14:46:14",
                                "updated_at": "2015-07-02 14:46:14",
                                "price": 5000,
                                "deleted_at": null,
                                "option_category_id": 70,
                                "name": "New York style cheesecake"
                            },
                            {
                                "id": 2639,
                                "food_id": 764,
                                "status": 1,
                                "created_at": "2015-07-02 14:46:14",
                                "updated_at": "2015-07-02 14:46:14",
                                "price": 10000,
                                "deleted_at": null,
                                "option_category_id": 70,
                                "name": "Salted caramel butterscotch pudding"
                            },
                            {
                                "id": 2640,
                                "food_id": 764,
                                "status": 1,
                                "created_at": "2015-07-02 14:46:14",
                                "updated_at": "2015-07-02 14:46:14",
                                "price": 10000,
                                "deleted_at": null,
                                "option_category_id": 70,
                                "name": "S'mores Brownie"
                            }
                        ]
                    }
                ]
            }
        ],
        "food_sets": [],
        "taxes": [],
        "discounts": []
    }
}

```

##List orders##


**Url**
<code>GET</code>api.hottab.pw/v2/admin/food-orders?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQyODk4NDQwNSIsImV4cCI6IjE0MjkwNzA4MDUiLCJuYmYiOiIxNDI4OTg0NDA1IiwianRpIjoiYjBmMWJlNzg1ZmI0N


**Parameters**
<code>token</code> $token


**Request data**
{
    "password": "123456",
    "email": "thanhdd@hottab.net"
}


Response:

```
{
    "error": false,
    "pagination": {
        "total": 791,
        "per_page": 10,
        "current_page": 1,
        "last_page": 80,
        "from": 1,
        "to": 10
    },
    "data": {
        "orders": [
            {
                "id": 1121,
                "user_id": 129,
                "food_order_parent_id": 0,
                "customer_note": null,
                "waiter_note": null,
                "status": 1,
                "room_id": 72,
                "total": 0,
                "created_at": "2015-07-29 16:26:07",
                "updated_at": "2015-07-29 16:26:07",
                "type": 0,
                "guest_id": 11,
                "customer_number": 1,
                "pre_total": 0,
                "order_id": 6,
                "transaction_id": 4008150729006,
                "order_number": null,
                "customer_id": null,
                "do_not_print": 1,
                "current_time": 1438334366,
                "total_tax": 0,
                "total_discount": 0,
                "staff": {
                    "id": 129,
                    "first_name": "loi",
                    "last_name": "hoang",
                    "email": "cashier@hottab.net"
                },
                "room": {
                    "id": 72,
                    "name": "VIP ROOM 3"
                }
            },
            {
                "id": 1120,
                "user_id": 129,
                "food_order_parent_id": 0,
                "customer_note": null,
                "waiter_note": null,
                "status": 1,
                "room_id": 72,
                "total": 0,
                "created_at": "2015-07-29 16:23:17",
                "updated_at": "2015-07-29 16:23:17",
                "type": 0,
                "guest_id": 11,
                "customer_number": 1,
                "pre_total": 0,
                "order_id": 5,
                "transaction_id": 4008150729005,
                "order_number": null,
                "customer_id": null,
                "do_not_print": 1,
                "current_time": 1438334366,
                "total_tax": 0,
                "total_discount": 0,
                "staff": {
                    "id": 129,
                    "first_name": "loi",
                    "last_name": "hoang",
                    "email": "cashier@hottab.net"
                },
                "room": {
                    "id": 72,
                    "name": "VIP ROOM 3"
                }
            },
            {
                "id": 1119,
                "user_id": 129,
                "food_order_parent_id": 0,
                "customer_note": null,
                "waiter_note": null,
                "status": 1,
                "room_id": 72,
                "total": 0,
                "created_at": "2015-07-29 16:22:33",
                "updated_at": "2015-07-29 16:22:33",
                "type": 0,
                "guest_id": 11,
                "customer_number": 1,
                "pre_total": 0,
                "order_id": 4,
                "transaction_id": 4008150729004,
                "order_number": null,
                "customer_id": null,
                "do_not_print": 1,
                "current_time": 1438334366,
                "total_tax": 0,
                "total_discount": 0,
                "staff": {
                    "id": 129,
                    "first_name": "loi",
                    "last_name": "hoang",
                    "email": "cashier@hottab.net"
                },
                "room": {
                    "id": 72,
                    "name": "VIP ROOM 3"
                }
            },
            {
                "id": 1118,
                "user_id": 129,
                "food_order_parent_id": 0,
                "customer_note": null,
                "waiter_note": null,
                "status": 1,
                "room_id": 72,
                "total": 0,
                "created_at": "2015-07-29 16:21:43",
                "updated_at": "2015-07-29 16:21:43",
                "type": 0,
                "guest_id": 11,
                "customer_number": 1,
                "pre_total": 0,
                "order_id": 3,
                "transaction_id": 4008150729003,
                "order_number": null,
                "customer_id": null,
                "do_not_print": 1,
                "current_time": 1438334366,
                "total_tax": 0,
                "total_discount": 0,
                "staff": {
                    "id": 129,
                    "first_name": "loi",
                    "last_name": "hoang",
                    "email": "cashier@hottab.net"
                },
                "room": {
                    "id": 72,
                    "name": "VIP ROOM 3"
                }
            },
            {
                "id": 1117,
                "user_id": 129,
                "food_order_parent_id": 0,
                "customer_note": null,
                "waiter_note": null,
                "status": 1,
                "room_id": 72,
                "total": 0,
                "created_at": "2015-07-29 16:16:02",
                "updated_at": "2015-07-29 16:16:02",
                "type": 0,
                "guest_id": 11,
                "customer_number": 1,
                "pre_total": 0,
                "order_id": 2,
                "transaction_id": 4008150729002,
                "order_number": null,
                "customer_id": null,
                "do_not_print": 1,
                "current_time": 1438334366,
                "total_tax": 0,
                "total_discount": 0,
                "staff": {
                    "id": 129,
                    "first_name": "loi",
                    "last_name": "hoang",
                    "email": "cashier@hottab.net"
                },
                "room": {
                    "id": 72,
                    "name": "VIP ROOM 3"
                }
            },
            {
                "id": 1116,
                "user_id": 129,
                "food_order_parent_id": 0,
                "customer_note": null,
                "waiter_note": null,
                "status": 1,
                "room_id": 72,
                "total": 0,
                "created_at": "2015-07-29 16:15:26",
                "updated_at": "2015-07-29 16:15:26",
                "type": 0,
                "guest_id": 11,
                "customer_number": 1,
                "pre_total": 0,
                "order_id": 1,
                "transaction_id": 4008150729001,
                "order_number": null,
                "customer_id": null,
                "do_not_print": 1,
                "current_time": 1438334366,
                "total_tax": 0,
                "total_discount": 0,
                "staff": {
                    "id": 129,
                    "first_name": "loi",
                    "last_name": "hoang",
                    "email": "cashier@hottab.net"
                },
                "room": {
                    "id": 72,
                    "name": "VIP ROOM 3"
                }
            },
            {
                "id": 1115,
                "user_id": 129,
                "food_order_parent_id": 0,
                "customer_note": null,
                "waiter_note": null,
                "status": 1,
                "room_id": 72,
                "total": 100000,
                "created_at": "2015-07-27 15:10:56",
                "updated_at": "2015-07-27 15:10:56",
                "type": 0,
                "guest_id": 11,
                "customer_number": 1,
                "pre_total": 100000,
                "order_id": 3,
                "transaction_id": 4008150727003,
                "order_number": 0,
                "customer_id": null,
                "do_not_print": 0,
                "current_time": 1438334366,
                "total_tax": 0,
                "total_discount": 0,
                "staff": {
                    "id": 129,
                    "first_name": "loi",
                    "last_name": "hoang",
                    "email": "cashier@hottab.net"
                },
                "room": {
                    "id": 72,
                    "name": "VIP ROOM 3"
                }
            },
            {
                "id": 1114,
                "user_id": 129,
                "food_order_parent_id": 0,
                "customer_note": null,
                "waiter_note": null,
                "status": 1,
                "room_id": 72,
                "total": 100000,
                "created_at": "2015-07-27 15:09:43",
                "updated_at": "2015-07-27 15:09:43",
                "type": 0,
                "guest_id": 11,
                "customer_number": 1,
                "pre_total": 100000,
                "order_id": 2,
                "transaction_id": 4008150727002,
                "order_number": 0,
                "customer_id": null,
                "do_not_print": 0,
                "current_time": 1438334366,
                "total_tax": 0,
                "total_discount": 0,
                "staff": {
                    "id": 129,
                    "first_name": "loi",
                    "last_name": "hoang",
                    "email": "cashier@hottab.net"
                },
                "room": {
                    "id": 72,
                    "name": "VIP ROOM 3"
                }
            },
            {
                "id": 1113,
                "user_id": 129,
                "food_order_parent_id": 0,
                "customer_note": null,
                "waiter_note": null,
                "status": 1,
                "room_id": 72,
                "total": 100000,
                "created_at": "2015-07-27 15:07:28",
                "updated_at": "2015-07-27 15:07:28",
                "type": 0,
                "guest_id": 11,
                "customer_number": 1,
                "pre_total": 100000,
                "order_id": 1,
                "transaction_id": 4008150727001,
                "order_number": 0,
                "customer_id": null,
                "do_not_print": 0,
                "current_time": 1438334366,
                "total_tax": 0,
                "total_discount": 0,
                "staff": {
                    "id": 129,
                    "first_name": "loi",
                    "last_name": "hoang",
                    "email": "cashier@hottab.net"
                },
                "room": {
                    "id": 72,
                    "name": "VIP ROOM 3"
                }
            },
            {
                "id": 1112,
                "user_id": 129,
                "food_order_parent_id": 0,
                "customer_note": null,
                "waiter_note": "",
                "status": 4,
                "room_id": 164,
                "total": 188012,
                "created_at": "2015-07-17 16:33:24",
                "updated_at": "2015-07-23 17:01:51",
                "type": 0,
                "guest_id": 26,
                "customer_number": 1,
                "pre_total": 188012,
                "order_id": 6,
                "transaction_id": 4008150717006,
                "order_number": 0,
                "customer_id": null,
                "do_not_print": 0,
                "current_time": 1438334366,
                "total_tax": 0,
                "total_discount": 0,
                "staff": {
                    "id": 129,
                    "first_name": "loi",
                    "last_name": "hoang",
                    "email": "cashier@hottab.net"
                },
                "room": {
                    "id": 164,
                    "name": "ch\u00e9m gi\u00f3"
                }
            }
        ],
        "total": 3331016019
    }
}

```

##Export list orders##


**Url**
<code>GET</code>api.hottab.pw/v2/admin/food-orders/export?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQyODk4NDQwNSIsImV4cCI6IjE0MjkwNzA4MDUiLCJuYmYiOiIxNDI4OTg0NDA1IiwianRpIjoiYjBmMWJlNz


**Parameters**
<code>token</code> $token


**Request data**
{
    "password": "123456",
    "email": "cashier@hottab.net"
}


Response:

```


```

