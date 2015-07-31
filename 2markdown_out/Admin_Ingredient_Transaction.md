##Receive ingredients##


**Url**
<code>POST</code>api.hottab.pw/admin/ingredient-transactions/receive?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM0MDk2ODI4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzNDAxMDQyOCIsIm5iZiI6IjE0MzQwMTA0MjgiLCJqdGkiOiJhODczZTFiY2MwYWJiODUxNmNhMzlmYTViNTQzODhjZSJ9.NjNlZGU4MjJiZjhjNGY1MzIxNzAyODdmZjg0MTk0N2E3YzkwMWRmMzljYzBkYmUwOTIwYjFhNzcwZGNkMzZiMw&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "warehouse_id": 1,
    "name": "Nh\u1eadp h\u00e0ng",
    "description": "Nh\u1eadp \u0111\u1ee3t n",
    "type": 1,
    "items": [
        {
            "id": 1,
            "quantity": 5,
            "expiration_date": "2015-12-12",
            "supplier_id": 3,
            "price": 10000,
            "batch_number": "ANZ"
        }
    ]
}


Response:

```
{
    "error": false,
    "data": {
        "id": 1085,
        "hotel_id": 8,
        "warehouse_id": 1,
        "name": "Nh\u1eadp h\u00e0ng",
        "description": "Nh\u1eadp \u0111\u1ee3t n",
        "type": 1,
        "deleted_at": null,
        "created_at": "2015-07-31 15:24:51",
        "updated_at": "2015-07-31 15:24:51",
        "food_order_id": null,
        "transaction_number": 8150731001,
        "destination_warehouse_id": null,
        "warehouse": {
            "id": 1,
            "name": "Kho 1",
            "short_name": "",
            "address": ""
        },
        "suppliers": [
            {
                "id": 3,
                "name": "Phuong",
                "address": "No 02, Ng\u00f4 Quy\u1ec1n",
                "title": "Ms"
            }
        ],
        "items": [
            {
                "id": 8,
                "unit": "litre",
                "name": "Oil",
                "description": ""
            }
        ],
        "transaction_items": [
            {
                "id": 8,
                "ingredient_id": 8,
                "ingredient_transaction_id": 1085,
                "batch_number": "ANZ",
                "supplier_id": 3,
                "customer_id": 0,
                "quantity": 5,
                "price": 10000,
                "destination_warehouse_id": null
            }
        ]
    }
}

```

##Cancel a transaction##


**Url**
<code>DELETE</code>api.hottab.pw/admin/ingredient-transactions/119?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDM0MzU3MDI4IiwiZXhwIjoiMTQzNDQ0MzQyOCIsIm5iZiI6IjE0MzQzNTcwMjgiLCJqdGkiOiI0NWU5MTcyNjJmYjE5YzJlYjYxNzhmZDBkNzJhYzc5YiJ9.YWUwNjY1NWNhODBiMjBkNmU0ZTRiYzA5N2Y4NjQxMDc0NjM5YWRmYzRiZTBlNTQxYjRhYjAwYTEzOWY2NjJmMw&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
[]


Response:

```
{
    "error": false,
    "massage": "ingredients.transaction_cancelled"
}

```

##List of transactions##
Filter by:

* warehouse\_id
* supplier\_id
* customer\_id
* ingredient\_id


**Url**
<code>GET</code>api.hottab.pw/admin/ingredient-transactions?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzMzg4NTcyIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMzMwMjE3MiIsIm5iZiI6IjE0MzMzMDIxNzIiLCJqdGkiOiI0YTY1Yjk4MzFmMGVkMTk4NjkyYzI1N2EyZjUwNmE4OCJ9.OGNkMTlmMjI4NmVhZWY2YTM0MjQ3NThkN2U1NWNmZTBiZTJkNTk2NzYwNTE4Y2MzZDRmYmUwMDU2MzNhMDViMw&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzMzg4NTcyIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMzMwMjE3MiIsIm5iZiI6IjE0MzMzMDIxNzIiLCJqdGkiOiI0YTY1Yjk4MzFmMGVkMTk4NjkyYzI1N2EyZjUwNmE4OCJ9.OGNkMTlmMjI4NmVhZWY2YTM0MjQ3NThkN2U1NWNmZTBiZTJkNTk2NzYwNTE4Y2MzZDRmYmUwMDU2MzNhMDViMw",
    "file": ""
}


Response:

```
{
    "error": false,
    "pagination": {
        "total": 995,
        "per_page": 10,
        "current_page": 1,
        "last_page": 100,
        "from": 1,
        "to": 10
    },
    "data": [
        {
            "id": 1,
            "hotel_id": 8,
            "warehouse_id": 1,
            "name": "Create order #",
            "description": null,
            "type": 5,
            "deleted_at": null,
            "created_at": "2015-06-16 16:52:21",
            "updated_at": "2015-06-16 16:52:21",
            "food_order_id": 531,
            "transaction_number": "008150616001",
            "destination_warehouse_id": null
        },
        {
            "id": 4,
            "hotel_id": 8,
            "warehouse_id": 1,
            "name": "Create order #",
            "description": null,
            "type": 5,
            "deleted_at": null,
            "created_at": "2015-06-16 18:47:41",
            "updated_at": "2015-06-16 18:47:41",
            "food_order_id": 534,
            "transaction_number": "008150616001",
            "destination_warehouse_id": null
        },
        {
            "id": 6,
            "hotel_id": 8,
            "warehouse_id": 1,
            "name": "Create order #",
            "description": null,
            "type": 5,
            "deleted_at": null,
            "created_at": "2015-06-16 18:48:42",
            "updated_at": "2015-06-16 18:48:42",
            "food_order_id": 536,
            "transaction_number": "008150616001",
            "destination_warehouse_id": null
        },
        {
            "id": 7,
            "hotel_id": 8,
            "warehouse_id": 1,
            "name": "Create order #",
            "description": null,
            "type": 5,
            "deleted_at": null,
            "created_at": "2015-06-16 18:50:07",
            "updated_at": "2015-06-16 18:50:07",
            "food_order_id": 537,
            "transaction_number": "008150616001",
            "destination_warehouse_id": null
        },
        {
            "id": 9,
            "hotel_id": 8,
            "warehouse_id": 1,
            "name": "Update order #046",
            "description": null,
            "type": 6,
            "deleted_at": null,
            "created_at": "2015-06-16 18:52:45",
            "updated_at": "2015-06-16 18:52:45",
            "food_order_id": 536,
            "transaction_number": "008150616001",
            "destination_warehouse_id": null
        },
        {
            "id": 10,
            "hotel_id": 8,
            "warehouse_id": 1,
            "name": "Update order #046",
            "description": null,
            "type": 6,
            "deleted_at": null,
            "created_at": "2015-06-16 18:53:10",
            "updated_at": "2015-06-16 18:53:10",
            "food_order_id": 536,
            "transaction_number": "008150616001",
            "destination_warehouse_id": null
        },
        {
            "id": 11,
            "hotel_id": 8,
            "warehouse_id": 1,
            "name": "Update order #046",
            "description": null,
            "type": 6,
            "deleted_at": null,
            "created_at": "2015-06-16 18:54:59",
            "updated_at": "2015-06-16 18:54:59",
            "food_order_id": 536,
            "transaction_number": "008150616001",
            "destination_warehouse_id": null
        },
        {
            "id": 12,
            "hotel_id": 8,
            "warehouse_id": 1,
            "name": "Update order #046",
            "description": null,
            "type": 6,
            "deleted_at": null,
            "created_at": "2015-06-16 18:58:21",
            "updated_at": "2015-06-16 18:58:21",
            "food_order_id": 536,
            "transaction_number": "008150616001",
            "destination_warehouse_id": null
        },
        {
            "id": 17,
            "hotel_id": 8,
            "warehouse_id": 1,
            "name": "Create order #",
            "description": null,
            "type": 5,
            "deleted_at": null,
            "created_at": "2015-06-17 00:45:53",
            "updated_at": "2015-06-17 00:45:53",
            "food_order_id": 539,
            "transaction_number": "008150617001",
            "destination_warehouse_id": null
        },
        {
            "id": 18,
            "hotel_id": 8,
            "warehouse_id": 1,
            "name": "Create order #",
            "description": null,
            "type": 5,
            "deleted_at": null,
            "created_at": "2015-06-17 10:06:49",
            "updated_at": "2015-06-17 10:06:49",
            "food_order_id": 540,
            "transaction_number": "008150617001",
            "destination_warehouse_id": null
        }
    ]
}

```

##Put ingredients away##


**Url**
<code>POST</code>api.hottab.pw/admin/ingredient-transactions/put-away?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzMzkwNDI1IiwiZXhwIjoiMTQzMzQ3NjgyNSIsIm5iZiI6IjE0MzMzOTA0MjUiLCJqdGkiOiI5YTAwNTgyYmU5NmM3OWI4ZjhjMjhlNWJmNGE1N2VmYiJ9.ODkzMzM0MmY0MzA5ZTJmNGVjZWU2YjU4MjQ5N2IyY2M0NjczYzg4MGU0Njc3ZmYzOTBmNjE3Y2ZlODM4OGE0OA&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "warehouse_id": 1,
    "name": "Xu\u1ea5t h\u00e0ng",
    "description": "Xu\u1ea5t h\u00e0ng \u0111\u1ee3t n",
    "type": 1,
    "items": [
        {
            "id": 1,
            "quantity": 5,
            "customer_id": 3,
            "price": 10000
        }
    ]
}


Response:

```
{
    "error": false,
    "data": {
        "id": 1086,
        "hotel_id": 8,
        "warehouse_id": 1,
        "name": "Xu\u1ea5t h\u00e0ng",
        "description": "Xu\u1ea5t h\u00e0ng \u0111\u1ee3t n",
        "type": 1,
        "deleted_at": null,
        "created_at": "2015-07-31 15:25:05",
        "updated_at": "2015-07-31 15:25:05",
        "food_order_id": null,
        "transaction_number": 8150731001,
        "destination_warehouse_id": null,
        "warehouse": {
            "id": 1,
            "name": "Kho 1",
            "short_name": "",
            "address": ""
        },
        "suppliers": [],
        "items": [
            {
                "id": 8,
                "unit": "litre",
                "name": "Oil",
                "description": ""
            }
        ],
        "transaction_items": [
            {
                "id": 9,
                "ingredient_id": 8,
                "ingredient_transaction_id": 1086,
                "batch_number": "",
                "supplier_id": 0,
                "customer_id": 3,
                "quantity": 5,
                "price": 10000,
                "destination_warehouse_id": null
            }
        ]
    }
}

```

##View##


**Url**
<code>GET</code>api.hottab.pw/admin/ingredient-transactions/17?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzMzg4NTcyIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMzMwMjE3MiIsIm5iZiI6IjE0MzMzMDIxNzIiLCJqdGkiOiI0YTY1Yjk4MzFmMGVkMTk4NjkyYzI1N2EyZjUwNmE4OCJ9.OGNkMTlmMjI4NmVhZWY2YTM0MjQ3NThkN2U1NWNmZTBiZTJkNTk2NzYwNTE4Y2MzZDRmYmUwMDU2MzNhMDViMw&hotel_id=8


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
        "id": 17,
        "hotel_id": 8,
        "warehouse_id": 1,
        "name": "Create order #",
        "description": null,
        "type": 5,
        "deleted_at": null,
        "created_at": "2015-06-17 00:45:53",
        "updated_at": "2015-06-17 00:45:53",
        "food_order_id": 539,
        "transaction_number": 8150617001,
        "destination_warehouse_id": null,
        "warehouse": {
            "id": 1,
            "name": "Kho 1",
            "short_name": "",
            "address": ""
        },
        "suppliers": [],
        "items": [],
        "transaction_items": []
    }
}

```

##Move ingredients##


**Url**
<code>POST</code>api.hottab.pw/admin/ingredient-transactions/move?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzNDk2MDU2IiwiZXhwIjoiMTQzMzU4MjQ1NiIsIm5iZiI6IjE0MzM0OTYwNTYiLCJqdGkiOiI5NDRjZTVjYzk4MzYxNGIxZWI5NjNiZTU2ZjU5NDE2NSJ9.NzZlMTNiNjEyY2UwYWMzMDJmMDBiODM4ODM2MTRlNWRmZDEzMjJiNzkzMjZkY2NiYTNiY2M1MmI1ZmIwYTFmMA&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "warehouse_id": 1,
    "destination_warehouse_id": 3,
    "name": "Chuy\u1ec3n h\u00e0ng",
    "description": "Xu\u1ea5t h\u00e0ng \u0111\u1ee3t n",
    "items": [
        {
            "id": 1,
            "quantity": 5,
            "customer_id": 3,
            "price": 10000
        }
    ]
}


Response:

```
{
    "error": false,
    "data": {
        "id": 1087,
        "hotel_id": 8,
        "warehouse_id": 1,
        "name": "Chuy\u1ec3n h\u00e0ng",
        "description": "Xu\u1ea5t h\u00e0ng \u0111\u1ee3t n",
        "type": 3,
        "deleted_at": null,
        "created_at": "2015-07-31 15:25:17",
        "updated_at": "2015-07-31 15:25:17",
        "food_order_id": null,
        "transaction_number": 8150731001,
        "destination_warehouse_id": 3,
        "warehouse": {
            "id": 1,
            "name": "Kho 1",
            "short_name": "",
            "address": ""
        },
        "suppliers": [],
        "items": [],
        "transaction_items": [
            {
                "id": 10,
                "ingredient_id": 1,
                "ingredient_transaction_id": 1087,
                "batch_number": "",
                "supplier_id": 0,
                "customer_id": 3,
                "quantity": 5,
                "price": 10000,
                "destination_warehouse_id": null
            }
        ]
    }
}

```

