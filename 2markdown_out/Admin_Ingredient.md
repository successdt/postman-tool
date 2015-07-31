##Close stock##


**Url**
<code>POST</code>api.hottab.pw/admin/ingredients/close-stock?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDM0MDk1MzM5IiwiZXhwIjoiMTQzNDE4MTczOSIsIm5iZiI6IjE0MzQwOTUzMzkiLCJqdGkiOiIxY2VmYzI3MjIyOGFkY2Q2Yjc4Mzk2ODE1ZGZjMjc4ZCJ9.MDI1MDYyMDdiZTQ5NGE2MzQ1MTRjYzhhMWRlMmY2NjMyOTQzODA0NTMwYjJjYTAzYTAxNzJhYmY2NDRmZGNkYg&hotel_id=8


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
            "price": 7000,
            "batch_number": "ANZ"
        }
    ]
}


Response:

```
{
    "error": false,
    "data": [
        {
            "hotel_id": 8,
            "ingredient_id": 8,
            "in_stock": 1000,
            "updated_at": "2015-07-31 15:45:19",
            "created_at": "2015-07-31 15:45:19",
            "id": 1,
            "ingredient": {
                "id": 8,
                "name": "Oil",
                "description": ""
            },
            "warehouse": null
        },
        {
            "hotel_id": 8,
            "ingredient_id": 9,
            "in_stock": 0,
            "updated_at": "2015-07-31 15:45:19",
            "created_at": "2015-07-31 15:45:19",
            "id": 2,
            "ingredient": {
                "id": 9,
                "name": "Pepper 2",
                "description": ""
            },
            "warehouse": null
        },
        {
            "hotel_id": 8,
            "ingredient_id": 10,
            "in_stock": 0,
            "updated_at": "2015-07-31 15:45:19",
            "created_at": "2015-07-31 15:45:19",
            "id": 3,
            "ingredient": {
                "id": 10,
                "name": "Fish sauce",
                "description": ""
            },
            "warehouse": null
        },
        {
            "hotel_id": 8,
            "ingredient_id": 11,
            "in_stock": 0,
            "updated_at": "2015-07-31 15:45:19",
            "created_at": "2015-07-31 15:45:19",
            "id": 4,
            "ingredient": {
                "id": 11,
                "name": "Wheat powder",
                "description": ""
            },
            "warehouse": null
        },
        {
            "hotel_id": 8,
            "ingredient_id": 13,
            "in_stock": 0,
            "updated_at": "2015-07-31 15:45:19",
            "created_at": "2015-07-31 15:45:19",
            "id": 5,
            "ingredient": {
                "id": 13,
                "name": "Hieu",
                "description": ""
            },
            "warehouse": null
        },
        {
            "hotel_id": 8,
            "ingredient_id": 14,
            "in_stock": 0,
            "updated_at": "2015-07-31 15:45:19",
            "created_at": "2015-07-31 15:45:19",
            "id": 6,
            "ingredient": {
                "id": 14,
                "name": "Salt2",
                "description": ""
            },
            "warehouse": null
        },
        {
            "hotel_id": 8,
            "ingredient_id": 15,
            "in_stock": 0,
            "updated_at": "2015-07-31 15:45:19",
            "created_at": "2015-07-31 15:45:19",
            "id": 7,
            "ingredient": {
                "id": 15,
                "name": "Good boy",
                "description": ""
            },
            "warehouse": null
        },
        {
            "hotel_id": 8,
            "ingredient_id": 18,
            "in_stock": 1000,
            "updated_at": "2015-07-31 15:45:19",
            "created_at": "2015-07-31 15:45:19",
            "id": 8,
            "ingredient": {
                "id": 18,
                "name": "flour",
                "description": "flour for cake"
            },
            "warehouse": null
        }
    ]
}

```

##View suppliers of ingredient##


**Url**
<code>GET</code>api.hottab.pw/admin/ingredients/1/suppliers?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzOTk2ODUzIiwiZXhwIjoiMTQzNDA4MzI1MyIsIm5iZiI6IjE0MzM5OTY4NTMiLCJqdGkiOiI5YTVmYjMwM2U4M2RkM2I4MTRhMzkwNGIzZWUzZThjZSJ9.MDBlNzJiZWQwM2Q5YWFiNGMxNTVjYmZhZDE1MGZiOTIxZjE1ZjI0OGU3MmM1ZmFlMTBlMWU5NGI1NzQwMTU5Yg&hotel_id=8


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
    "data": [
        {
            "id": 11,
            "price": 2000,
            "name": "HotTab 3",
            "address": "No 02, Ng\u00f4 Quy\u1ec1n",
            "title": "Ms"
        }
    ]
}

```

##Delete Food Ingredient##


**Url**
<code>DELETE</code>api.hottab.pw/admin/ingredients/4?token=fe4a8fc53550eecd63bcbb049a4df3a6&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
[]


Response:

```
{
    "error": false,
    "message": "successfully deleted"
}

```

##Import from csv##
params: 

* id of ingredient category

**Url**
<code>POST</code>api.hottab.pw/admin/food-ingredients/8/import?hotel_id=8


**Parameters**
<code>api_hottab_pw/admin/food-ingredients/8/import?hotel_id<code> 8


**Request data**
{
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzMzE1Mjc1IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzMjI4ODc1IiwibmJmIjoiMTQzMzIyODg3NSIsImp0aSI6IjFhNGY1OWEyOWJiMDM1ZTE1YWVhZGM0MGQ5NjgzZGExIn0.NWI0Yjk2MTc2NDZmZmQ5MTViYmYyM2E0ZTJlMDg3OGI5Yzg3ZTlmYmE1MWU4ODM1MjZkMmFhYTBkZDg2NWQyZA",
    "file": "inventory_report_2015_06_02.csv"
}


Response:

```


```

##Update Food Ingredient##


**Url**
<code>POST</code>api.hottab.pw/admin/ingredients/2


**Parameters**
<code>api_hottab_pw/admin/ingredients/2<code> 


**Request data**
{
    "token": "fe4a8fc53550eecd63bcbb049a4df3a6",
    "hotel_id": "8",
    "name": "B\u1ed9t m\u00ec",
    "description": "b\u1ed9t m\u00ec l\u00e0m b\u00e1nh",
    "unit": "kg",
    "in_stock": "1000",
    "lang": "vi",
    "_method": "PUT"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 8,
        "hotel_id": 8,
        "ingredient_category_id": 0,
        "sku": null,
        "unit": "kg",
        "in_stock": "1000",
        "status": 1,
        "min_order": 0,
        "max_order": 0,
        "min_alert": 0,
        "price": 12000,
        "deleted_at": null,
        "created_at": "2015-06-15 20:02:10",
        "updated_at": "2015-07-31 15:43:01",
        "min_price": 10000,
        "max_price": 0,
        "total_received": 5,
        "total_cost": 10000,
        "name": "B\u1ed9t m\u00ec",
        "description": "b\u1ed9t m\u00ec l\u00e0m b\u00e1nh"
    }
}

```

##Get all Food  Ingredients##


**Url**
<code>GET</code>api.hottab.pw/admin/ingredients?lang=vi&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM0Njg4MDg5IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDM0NjAxNjg5IiwibmJmIjoiMTQzNDYwMTY4OSIsImp0aSI6Ijc3MmY1NGNmNGFjMjdhMzhlMGRlYzM2NDAxYzlkZTdlIn0.ZmU5ODdhNDUzMGQ2ZmZhNGQ5ZTFjOTNjMWZlNDgzMThhZGNiNTIwMGM5NzA0NTI0MDg3OGE0MmQ3MGU4N2I1OQ&hotel_id=8&order_by=created_at&order_direction=ASC


**Parameters**
<code>api_hottab_pw/admin/ingredients?lang<code> vi
<code>token<code> eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM0Njg4MDg5IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDM0NjAxNjg5IiwibmJmIjoiMTQzNDYwMTY4OSIsImp0aSI6Ijc3MmY1NGNmNGFjMjdhMzhlMGRlYzM2NDAxYzlkZTdlIn0.ZmU5ODdhNDUzMGQ2ZmZhNGQ5ZTFjOTNjMWZlNDgzMThhZGNiNTIwMGM5NzA0NTI0MDg3OGE0MmQ3MGU4N2I1OQ
<code>hotel_id<code> 8
<code>order_by<code> created_at
<code>order_direction<code> ASC


**Request data**
{
    "password": "123456",
    "email": "thanhdd@hottab.net"
}


Response:

```
{
    "error": false,
    "data": [
        {
            "id": 8,
            "hotel_id": 8,
            "ingredient_category_id": 0,
            "sku": null,
            "unit": "litre",
            "in_stock": "0.00",
            "status": 1,
            "min_order": 0,
            "max_order": 0,
            "min_alert": 0,
            "price": 12000,
            "deleted_at": null,
            "created_at": "2015-06-15 20:02:10",
            "updated_at": "2015-06-15 20:02:10",
            "min_price": 0,
            "max_price": 0,
            "total_received": 0,
            "total_cost": 0,
            "name": "Oil",
            "description": ""
        },
        {
            "id": 9,
            "hotel_id": 8,
            "ingredient_category_id": 0,
            "sku": "PP2",
            "unit": "kg",
            "in_stock": "0.00",
            "status": 1,
            "min_order": 0,
            "max_order": 0,
            "min_alert": 0,
            "price": 1000,
            "deleted_at": null,
            "created_at": "2015-06-15 20:02:21",
            "updated_at": "2015-07-01 00:08:08",
            "min_price": 0,
            "max_price": 0,
            "total_received": 0,
            "total_cost": 0,
            "name": "Pepper 2",
            "description": ""
        },
        {
            "id": 10,
            "hotel_id": 8,
            "ingredient_category_id": 0,
            "sku": null,
            "unit": "kg",
            "in_stock": "0.00",
            "status": 1,
            "min_order": 0,
            "max_order": 0,
            "min_alert": 0,
            "price": 3000,
            "deleted_at": null,
            "created_at": "2015-06-15 20:02:31",
            "updated_at": "2015-06-15 20:02:31",
            "min_price": 0,
            "max_price": 0,
            "total_received": 0,
            "total_cost": 0,
            "name": "Fish sauce",
            "description": ""
        },
        {
            "id": 11,
            "hotel_id": 8,
            "ingredient_category_id": 0,
            "sku": null,
            "unit": "kg",
            "in_stock": "0.00",
            "status": 1,
            "min_order": 0,
            "max_order": 0,
            "min_alert": 0,
            "price": 4000,
            "deleted_at": null,
            "created_at": "2015-06-15 20:02:50",
            "updated_at": "2015-06-15 20:02:50",
            "min_price": 0,
            "max_price": 0,
            "total_received": 0,
            "total_cost": 0,
            "name": "Wheat powder",
            "description": ""
        },
        {
            "id": 13,
            "hotel_id": 8,
            "ingredient_category_id": 0,
            "sku": null,
            "unit": "kg",
            "in_stock": "0.00",
            "status": 1,
            "min_order": 0,
            "max_order": 0,
            "min_alert": 0,
            "price": 0,
            "deleted_at": null,
            "created_at": "2015-06-17 17:16:25",
            "updated_at": "2015-06-17 17:16:25",
            "min_price": 0,
            "max_price": 0,
            "total_received": 0,
            "total_cost": 0,
            "name": "Hieu",
            "description": ""
        },
        {
            "id": 14,
            "hotel_id": 8,
            "ingredient_category_id": 0,
            "sku": null,
            "unit": "kg",
            "in_stock": "0.00",
            "status": 1,
            "min_order": 0,
            "max_order": 0,
            "min_alert": 0,
            "price": 0,
            "deleted_at": null,
            "created_at": "2015-06-17 21:55:47",
            "updated_at": "2015-06-17 21:55:47",
            "min_price": 0,
            "max_price": 0,
            "total_received": 0,
            "total_cost": 0,
            "name": "Salt2",
            "description": ""
        },
        {
            "id": 15,
            "hotel_id": 8,
            "ingredient_category_id": 0,
            "sku": null,
            "unit": "litre",
            "in_stock": "0.00",
            "status": 1,
            "min_order": 0,
            "max_order": 0,
            "min_alert": 0,
            "price": 0,
            "deleted_at": null,
            "created_at": "2015-06-17 21:58:30",
            "updated_at": "2015-06-17 21:58:30",
            "min_price": 0,
            "max_price": 0,
            "total_received": 0,
            "total_cost": 0,
            "name": "Good boy",
            "description": ""
        }
    ]
}

```

##Create Food Ingredient##


**Url**
<code>POST</code>api.hottab.pw/admin/ingredients


**Parameters**
<code>api_hottab_pw/admin/ingredients<code> 


**Request data**
{
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzMzg4NTcyIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMzMwMjE3MiIsIm5iZiI6IjE0MzMzMDIxNzIiLCJqdGkiOiI0YTY1Yjk4MzFmMGVkMTk4NjkyYzI1N2EyZjUwNmE4OCJ9.OGNkMTlmMjI4NmVhZWY2YTM0MjQ3NThkN2U1NWNmZTBiZTJkNTk2NzYwNTE4Y2MzZDRmYmUwMDU2MzNhMDViMw",
    "hotel_id": "8",
    "name": "flour",
    "description": "flour for cake",
    "unit": "kg",
    "in_stock": "1000",
    "price": "13",
    "ingredient_category_id": "8"
}


Response:

```
{
    "error": false,
    "data": {
        "unit": "kg",
        "in_stock": "1000",
        "price": "13",
        "ingredient_category_id": "8",
        "hotel_id": 8,
        "updated_at": "2015-07-31 15:37:34",
        "created_at": "2015-07-31 15:37:34",
        "id": 18,
        "name": "flour",
        "description": "flour for cake"
    }
}

```

##View Single Food  Ingredient##


**Url**
<code>GET</code>api.hottab.pw/admin/ingredients/1?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS5ob3R0YWIucHdcL2FkbWluXC9sb2dpbiIsImlhdCI6IjE0MzMzOTQwOTQiLCJleHAiOiIxNDMzNDgwNDk0IiwibmJmIjoiMTQzMzM5NDA5NCIsImp0aSI6ImExOTFlNzJmNDFiYTA4OTg5MTI4NDhhMTA5MjQzY2ViIn0.ZGQ5Y2ZkMmJiMzcwNmIzZjU3OWNmZmQzODYwY2Y3MTdjNTEyNmM4ZjJmZjczZWEwZGFkMjk2NTM3MmY1ZWI2Zg&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "password": "123456",
    "email": "test@gmail.com"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 8,
        "hotel_id": 8,
        "ingredient_category_id": 0,
        "sku": null,
        "unit": "litre",
        "in_stock": "0.00",
        "status": 1,
        "min_order": 0,
        "max_order": 0,
        "min_alert": 0,
        "price": 12000,
        "deleted_at": null,
        "created_at": "2015-06-15 20:02:10",
        "updated_at": "2015-07-31 15:25:05",
        "min_price": 10000,
        "max_price": 0,
        "total_received": 5,
        "total_cost": 10000,
        "name": "Oil",
        "description": "",
        "transactions": [
            {
                "id": 1086,
                "warehouse_id": 1,
                "name": "Xu\u1ea5t h\u00e0ng",
                "description": "Xu\u1ea5t h\u00e0ng \u0111\u1ee3t n",
                "type": 1,
                "created_at": "2015-07-31 15:25:05",
                "food_order_id": null,
                "transaction_number": "008150731001",
                "items": [
                    {
                        "id": 9,
                        "ingredient_id": 8,
                        "ingredient_transaction_id": 1086,
                        "batch_number": "",
                        "supplier_id": 0,
                        "customer_id": 3,
                        "quantity": "5.00",
                        "price": 10000,
                        "destination_warehouse_id": null
                    }
                ]
            },
            {
                "id": 1085,
                "warehouse_id": 1,
                "name": "Nh\u1eadp h\u00e0ng",
                "description": "Nh\u1eadp \u0111\u1ee3t n",
                "type": 1,
                "created_at": "2015-07-31 15:24:51",
                "food_order_id": null,
                "transaction_number": "008150731001",
                "items": [
                    {
                        "id": 8,
                        "ingredient_id": 8,
                        "ingredient_transaction_id": 1085,
                        "batch_number": "ANZ",
                        "supplier_id": 3,
                        "customer_id": 0,
                        "quantity": "5.00",
                        "price": 10000,
                        "destination_warehouse_id": null
                    }
                ]
            }
        ],
        "items": [
            {
                "id": 2,
                "warehouse_id": 1,
                "ingredient_id": 8,
                "ingredient_transaction_item_id": 8,
                "supplier_id": 3,
                "in_stock": "0.00",
                "expiration_date": "2015-12-12",
                "batch_number": "ANZ",
                "price": 10000,
                "deleted_at": null,
                "created_at": "2015-07-31 15:24:51",
                "updated_at": "2015-07-31 15:25:05"
            }
        ]
    }
}

```

