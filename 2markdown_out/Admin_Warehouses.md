##View a warehouses##


**Url**
<code>GET</code>api.hottab.pw/admin/warehouses/1?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMTU4NjM4MiIsImV4cCI6IjE0MzE2NzI3ODIiLCJuYmYiOiIxNDMxNTg2MzgyIiwianRpIjoiMGMwMWJmNTlmZjVhZjI0YzQzMmU3MjE2ZWI1OTg2YTYifQ.NjZhOGRmZjljNTg1NzNlNWIyMTMwMmZhOWJjZTU1NzRjOWExOGE3MjNiZjI2NDRlYThmMmY1MTU2N2ExMTJjNw&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "name": "Kho 1",
    "short_name": "K2",
    "address": "s\u1ed1 02 Ng\u00f4 Quy\u1ec1nh"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 1,
        "hotel_id": 8,
        "created_at": "2015-06-16 16:49:22",
        "updated_at": "2015-07-23 14:25:46",
        "deleted_at": null,
        "is_default": 0,
        "name": "Kho 1",
        "short_name": "",
        "address": "",
        "tag": [],
        "ingredients": [
            {
                "id": 8,
                "in_stock": 0,
                "expiration_date": "2015-12-12",
                "batch_number": "ANZ",
                "price": 10000,
                "name": "Oil",
                "description": ""
            }
        ]
    }
}

```

##List warehouses##


**Url**
<code>GET</code>api.hottab.pw/admin/warehouses?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMTU4NjM4MiIsImV4cCI6IjE0MzE2NzI3ODIiLCJuYmYiOiIxNDMxNTg2MzgyIiwianRpIjoiMGMwMWJmNTlmZjVhZjI0YzQzMmU3MjE2ZWI1OTg2YTYifQ.NjZhOGRmZjljNTg1NzNlNWIyMTMwMmZhOWJjZTU1NzRjOWExOGE3MjNiZjI2NDRlYThmMmY1MTU2N2ExMTJjNw&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "name": "Kho 1",
    "short_name": "K2",
    "address": "s\u1ed1 02 Ng\u00f4 Quy\u1ec1nh"
}


Response:

```
{
    "error": false,
    "data": {
        "items": [
            {
                "id": 3,
                "hotel_id": 8,
                "created_at": "2015-05-14 16:47:22",
                "updated_at": "2015-05-14 16:47:22",
                "deleted_at": null,
                "name": "Kho 1",
                "short_name": "K1",
                "address": "S\u1ed1 02 Ng\u00f4 Quy\u1ec1n",
                "tags": [
                    {
                        "id": 61,
                        "name": "Kho b\u00e9"
                    }
                ]
            }
        ]
    }
}

```

##Update warehouse##


**Url**
<code>PUT</code>api.hottab.pw/admin/warehouses/1?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMTU4NjM4MiIsImV4cCI6IjE0MzE2NzI3ODIiLCJuYmYiOiIxNDMxNTg2MzgyIiwianRpIjoiMGMwMWJmNTlmZjVhZjI0YzQzMmU3MjE2ZWI1OTg2YTYifQ.NjZhOGRmZjljNTg1NzNlNWIyMTMwMmZhOWJjZTU1NzRjOWExOGE3MjNiZjI2NDRlYThmMmY1MTU2N2ExMTJjNw&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "name": "Kho 1",
    "short_name": "K1",
    "address": "S\u1ed1 02 Ng\u00f4 Quy\u1ec1n",
    "tags": [
        {
            "name": "Kho b\u00e9"
        }
    ]
}


Response:

```
{
    "error": false,
    "data": {
        "id": 1,
        "hotel_id": 8,
        "created_at": "2015-06-16 16:49:22",
        "updated_at": "2015-07-23 14:25:46",
        "deleted_at": null,
        "is_default": 0,
        "name": "Kho 1",
        "short_name": "K1",
        "address": "S\u1ed1 02 Ng\u00f4 Quy\u1ec1n",
        "tags": [
            {
                "id": 75,
                "name": "Kho b\u00e9"
            }
        ]
    }
}

```

##Delete a warehouses##


**Url**
<code>DELETE</code>api.hottab.pw/admin/warehouses/2?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMTU4NjM4MiIsImV4cCI6IjE0MzE2NzI3ODIiLCJuYmYiOiIxNDMxNTg2MzgyIiwianRpIjoiMGMwMWJmNTlmZjVhZjI0YzQzMmU3MjE2ZWI1OTg2YTYifQ.NjZhOGRmZjljNTg1NzNlNWIyMTMwMmZhOWJjZTU1NzRjOWExOGE3MjNiZjI2NDRlYThmMmY1MTU2N2ExMTJjNw&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "name": "Kho 1",
    "short_name": "K2",
    "address": "s\u1ed1 02 Ng\u00f4 Quy\u1ec1nh"
}


Response:

```
{
    "error": false,
    "message": "successfully deleted"
}

```

##Create warehouse##


**Url**
<code>POST</code>api.hottab.pw/admin/warehouses?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMTU4NjM4MiIsImV4cCI6IjE0MzE2NzI3ODIiLCJuYmYiOiIxNDMxNTg2MzgyIiwianRpIjoiMGMwMWJmNTlmZjVhZjI0YzQzMmU3MjE2ZWI1OTg2YTYifQ.NjZhOGRmZjljNTg1NzNlNWIyMTMwMmZhOWJjZTU1NzRjOWExOGE3MjNiZjI2NDRlYThmMmY1MTU2N2ExMTJjNw&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "name": "Kho 1",
    "short_name": "K1",
    "address": "S\u1ed1 02 Ng\u00f4 Quy\u1ec1n",
    "tags": [
        {
            "name": "Kho l\u1edbn"
        }
    ]
}


Response:

```
{
    "error": false,
    "data": {
        "hotel_id": 8,
        "updated_at": "2015-07-31 16:18:16",
        "created_at": "2015-07-31 16:18:16",
        "id": 7,
        "name": "Kho 1",
        "short_name": "K1",
        "address": "S\u1ed1 02 Ng\u00f4 Quy\u1ec1n",
        "tags": [
            {
                "id": 74,
                "name": "Kho l\u1edbn"
            }
        ]
    }
}

```

