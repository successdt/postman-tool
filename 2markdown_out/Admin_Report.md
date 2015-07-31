##Gross margin report##


**Url**
<code>GET</code>api.hottab.pw/admin/reports/gross-margin?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzNTc1MTc5IiwiZXhwIjoiMTQzMzY2MTU3OSIsIm5iZiI6IjE0MzM1NzUxNzkiLCJqdGkiOiJiZmViMjEzZjU4YjUxZjZiYWUyZDM3NTQwNTU5MGFhMCJ9.ZjMwYjY2ZWU2N2Q3YjZmOGJmODlkMDkxZmMwYzJlN2FmZTA3ZDc2MWRmZDk4ZTQ5N2QxMzgwYjFlZWJjYTMwZA&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "password": "123456",
    "email": "cashier@hottab.net"
}


Response:

```


```

##Sale report##
Get sale report of food and food set

**Url**
<code>GET</code>api.hottab.pw/admin/reports/sale-report?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMwMjk3MzMwIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMwMjEwOTMwIiwibmJmIjoiMTQzMDIxMDkzMCIsImp0aSI6IjIwNDcwYjYzYzZmYWNmNTlkMDZiM2MzYzliMDU1MmQxIn0.OGZkYWMyZTE4YjVhODdhODJmNjU2ZGNlNzgyZmY0MTg4ZGRmOTM0M2ZhMDJhMGQyNmQ5YzMzNmVmZGZhYjgwZg&hotel_id=8


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
        "foods": [
            {
                "id": 750,
                "quantity": 93,
                "amount": 3152,
                "name": "B\u00fan ch\u1ea3 ch\u1ea5m 22",
                "food_category_id": 100
            },
            {
                "id": 755,
                "quantity": 86,
                "amount": 687.04,
                "name": "Chicken wings 2",
                "food_category_id": 100
            },
            {
                "id": 852,
                "quantity": 4,
                "amount": 70,
                "name": "B\u00fan ch\u1ea3",
                "food_category_id": 100
            }
        ],
        "food_sets": []
    }
}

```

##Cash summary report##


**Url**
<code>GET</code>api.hottab.pw/admin/reports/cash?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzOTI0MDYwIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzODM3NjYwIiwibmJmIjoiMTQzMzgzNzY2MCIsImp0aSI6ImVjZjA4ZWYwY2JkYWZlMzUyN2UzNGU2OWU5MzJhMzFjIn0.OTQ2YzMxNmQyZTY5ZjU5YWJjZWUwYTlkM2VhZmNkMzE3Mzc1ZGJiMGYzZTkzZjY0OGIyOWY2M2Y1NDdkMWU5MA&hotel_id=8


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
        "error": false,
        "pagination": {
            "total": 520,
            "per_page": 10,
            "current_page": 1,
            "last_page": 52,
            "from": 1,
            "to": 10
        },
        "data": [
            {
                "id": 814,
                "device_id": 28,
                "payment_method_id": 2,
                "balance": 382012,
                "deposit": 194000,
                "withdraw": 0,
                "transaction_id": "55B0BBC2A2EF0",
                "user_id": 129,
                "bill_parent_id": 0,
                "created_at": "2015-07-23 17:02:42",
                "updated_at": "2015-07-23 17:02:42",
                "food_order_id": 1111,
                "status": 1,
                "description": "",
                "device": {
                    "id": 28,
                    "friendly_uuid": "Thanh's laptop",
                    "uuid": "00-AC-3E-E6-6D-15"
                },
                "user": {
                    "id": 129,
                    "email": "cashier@hottab.net",
                    "first_name": "loi",
                    "last_name": "hoang"
                },
                "order": {
                    "order_id": 5,
                    "transaction_id": 4008150717005
                }
            },
            {
                "id": 813,
                "device_id": 28,
                "payment_method_id": 2,
                "balance": 188012,
                "deposit": 188012,
                "withdraw": 0,
                "transaction_id": "55B0BB8F1E723",
                "user_id": 129,
                "bill_parent_id": 0,
                "created_at": "2015-07-23 17:01:51",
                "updated_at": "2015-07-23 17:01:51",
                "food_order_id": 1112,
                "status": 1,
                "description": "",
                "device": {
                    "id": 28,
                    "friendly_uuid": "Thanh's laptop",
                    "uuid": "00-AC-3E-E6-6D-15"
                },
                "user": {
                    "id": 129,
                    "email": "cashier@hottab.net",
                    "first_name": "loi",
                    "last_name": "hoang"
                },
                "order": {
                    "order_id": 6,
                    "transaction_id": 4008150717006
                }
            },
            {
                "id": 812,
                "device_id": 27,
                "payment_method_id": 4,
                "balance": 1306180,
                "deposit": 80000,
                "withdraw": 0,
                "transaction_id": "559F689F95E81",
                "user_id": 129,
                "bill_parent_id": 0,
                "created_at": "2015-07-10 13:39:27",
                "updated_at": "2015-07-10 13:39:27",
                "food_order_id": 0,
                "status": 1,
                "description": "change",
                "device": {
                    "id": 27,
                    "friendly_uuid": "pos's Hottab",
                    "uuid": "00-24-EE-04-F3-F8"
                },
                "user": {
                    "id": 129,
                    "email": "cashier@hottab.net",
                    "first_name": "loi",
                    "last_name": "hoang"
                },
                "order": null
            },
            {
                "id": 811,
                "device_id": 27,
                "payment_method_id": 4,
                "balance": 1226180,
                "deposit": 0,
                "withdraw": 500000,
                "transaction_id": "559F68696E9A7",
                "user_id": 129,
                "bill_parent_id": 0,
                "created_at": "2015-07-10 13:38:33",
                "updated_at": "2015-07-10 13:38:33",
                "food_order_id": 0,
                "status": 1,
                "description": "payment to coke",
                "device": {
                    "id": 27,
                    "friendly_uuid": "pos's Hottab",
                    "uuid": "00-24-EE-04-F3-F8"
                },
                "user": {
                    "id": 129,
                    "email": "cashier@hottab.net",
                    "first_name": "loi",
                    "last_name": "hoang"
                },
                "order": null
            },
            {
                "id": 810,
                "device_id": 27,
                "payment_method_id": 2,
                "balance": 1726180,
                "deposit": 2000000,
                "withdraw": 381862,
                "transaction_id": "559F682E19B09",
                "user_id": 129,
                "bill_parent_id": 0,
                "created_at": "2015-07-10 13:37:35",
                "updated_at": "2015-07-10 13:37:35",
                "food_order_id": 1067,
                "status": 1,
                "description": "",
                "device": {
                    "id": 27,
                    "friendly_uuid": "pos's Hottab",
                    "uuid": "00-24-EE-04-F3-F8"
                },
                "user": {
                    "id": 129,
                    "email": "cashier@hottab.net",
                    "first_name": "loi",
                    "last_name": "hoang"
                },
                "order": {
                    "order_id": 2,
                    "transaction_id": 4008150710002
                }
            },
            {
                "id": 809,
                "device_id": 27,
                "payment_method_id": 2,
                "balance": 108042,
                "deposit": 200000,
                "withdraw": 91958,
                "transaction_id": "559F66E45845D",
                "user_id": 129,
                "bill_parent_id": 0,
                "created_at": "2015-07-10 13:32:04",
                "updated_at": "2015-07-10 13:32:04",
                "food_order_id": 1079,
                "status": 1,
                "description": "",
                "device": {
                    "id": 27,
                    "friendly_uuid": "pos's Hottab",
                    "uuid": "00-24-EE-04-F3-F8"
                },
                "user": {
                    "id": 129,
                    "email": "cashier@hottab.net",
                    "first_name": "loi",
                    "last_name": "hoang"
                },
                "order": {
                    "order_id": 14,
                    "transaction_id": 4008150710014
                }
            },
            {
                "id": 808,
                "device_id": 16,
                "payment_method_id": 4,
                "balance": 0,
                "deposit": 0,
                "withdraw": 53690621.61,
                "transaction_id": "559E1CEC7D359",
                "user_id": 129,
                "bill_parent_id": 0,
                "created_at": "2015-07-09 14:04:12",
                "updated_at": "2015-07-09 14:04:12",
                "food_order_id": 0,
                "status": 0,
                "description": "",
                "device": {
                    "id": 16,
                    "friendly_uuid": "POSlah",
                    "uuid": "POSlah"
                },
                "user": {
                    "id": 129,
                    "email": "cashier@hottab.net",
                    "first_name": "loi",
                    "last_name": "hoang"
                },
                "order": null
            },
            {
                "id": 807,
                "device_id": 16,
                "payment_method_id": 2,
                "balance": 53690621.61,
                "deposit": 900000,
                "withdraw": 783000,
                "transaction_id": "559E1C07043B9",
                "user_id": 129,
                "bill_parent_id": 0,
                "created_at": "2015-07-09 14:00:23",
                "updated_at": "2015-07-09 14:04:12",
                "food_order_id": 907,
                "status": 0,
                "description": "",
                "device": {
                    "id": 16,
                    "friendly_uuid": "POSlah",
                    "uuid": "POSlah"
                },
                "user": {
                    "id": 129,
                    "email": "cashier@hottab.net",
                    "first_name": "loi",
                    "last_name": "hoang"
                },
                "order": {
                    "order_id": 25,
                    "transaction_id": 4008150705025
                }
            },
            {
                "id": 806,
                "device_id": 16,
                "payment_method_id": 2,
                "balance": 53573621.61,
                "deposit": 9000000,
                "withdraw": 8999992,
                "transaction_id": "559E1BF948F74",
                "user_id": 129,
                "bill_parent_id": 0,
                "created_at": "2015-07-09 14:00:09",
                "updated_at": "2015-07-09 14:04:12",
                "food_order_id": 915,
                "status": 0,
                "description": "",
                "device": {
                    "id": 16,
                    "friendly_uuid": "POSlah",
                    "uuid": "POSlah"
                },
                "user": {
                    "id": 129,
                    "email": "cashier@hottab.net",
                    "first_name": "loi",
                    "last_name": "hoang"
                },
                "order": {
                    "order_id": 33,
                    "transaction_id": 4008150705033
                }
            },
            {
                "id": 805,
                "device_id": 16,
                "payment_method_id": 2,
                "balance": 53573613.61,
                "deposit": 900000,
                "withdraw": 717000,
                "transaction_id": "559E1BEC456EC",
                "user_id": 129,
                "bill_parent_id": 0,
                "created_at": "2015-07-09 13:59:56",
                "updated_at": "2015-07-09 14:04:12",
                "food_order_id": 908,
                "status": 0,
                "description": "",
                "device": {
                    "id": 16,
                    "friendly_uuid": "POSlah",
                    "uuid": "POSlah"
                },
                "user": {
                    "id": 129,
                    "email": "cashier@hottab.net",
                    "first_name": "loi",
                    "last_name": "hoang"
                },
                "order": {
                    "order_id": 26,
                    "transaction_id": 4008150705026
                }
            }
        ]
    }
}

```

