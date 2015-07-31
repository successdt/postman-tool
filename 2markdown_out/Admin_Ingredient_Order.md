##Update##


**Url**
<code>PUT</code>api.hottab.pw/admin/ingredient-orders/6?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM0MDk2ODI4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzNDAxMDQyOCIsIm5iZiI6IjE0MzQwMTA0MjgiLCJqdGkiOiJhODczZTFiY2MwYWJiODUxNmNhMzlmYTViNTQzODhjZSJ9.NjNlZGU4MjJiZjhjNGY1MzIxNzAyODdmZjg0MTk0N2E3YzkwMWRmMzljYzBkYmUwOTIwYjFhNzcwZGNkMzZiMw&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "warehouse_id": 1,
    "supplier_id": 3,
    "name": "Nh\u1eadp h\u00e0ng",
    "description": "Nh\u1eadp \u0111\u1ee3t n",
    "items": [
        {
            "id": 1,
            "quantity": 10,
            "price": 10000,
            "is_delivered": 1
        }
    ]
}


Response:

```
{
    "error": false,
    "data": {
        "id": 2,
        "hotel_id": 8,
        "warehouse_id": 1,
        "type": 1,
        "transaction_number": 8150731001,
        "total": 100000,
        "created_at": "2015-07-31 15:22:54",
        "updated_at": "2015-07-31 15:23:34",
        "name": "Nh\u1eadp h\u00e0ng",
        "supplier_id": 3,
        "status": 1,
        "suppliers": {
            "id": 3,
            "name": "Phuong",
            "address": "No 02, Ng\u00f4 Quy\u1ec1n",
            "title": "Ms"
        },
        "items": [
            {
                "id": 8,
                "price": 10000,
                "quantity": 10,
                "subtotal": 100000,
                "is_delivered": 1,
                "name": "Oil",
                "description": ""
            }
        ]
    }
}

```

##View##


**Url**
<code>GET</code>api.hottab.pw/admin/ingredient-orders/6?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM0MDk2ODI4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzNDAxMDQyOCIsIm5iZiI6IjE0MzQwMTA0MjgiLCJqdGkiOiJhODczZTFiY2MwYWJiODUxNmNhMzlmYTViNTQzODhjZSJ9.NjNlZGU4MjJiZjhjNGY1MzIxNzAyODdmZjg0MTk0N2E3YzkwMWRmMzljYzBkYmUwOTIwYjFhNzcwZGNkMzZiMw&hotel_id=8


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
        "id": 2,
        "hotel_id": 8,
        "warehouse_id": 1,
        "type": 1,
        "transaction_number": 8150731001,
        "total": 100000,
        "created_at": "2015-07-31 15:22:54",
        "updated_at": "2015-07-31 15:23:34",
        "name": "Nh\u1eadp h\u00e0ng",
        "supplier_id": 3,
        "status": 1,
        "suppliers": {
            "id": 3,
            "name": "Phuong",
            "address": "No 02, Ng\u00f4 Quy\u1ec1n",
            "title": "Ms"
        },
        "items": [
            {
                "id": 8,
                "price": 10000,
                "quantity": 10,
                "subtotal": 100000,
                "is_delivered": 1,
                "name": "Oil",
                "description": ""
            }
        ]
    }
}

```

##List##


**Url**
<code>GET</code>api.hottab.pw/admin/ingredient-orders?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM0MDk2ODI4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzNDAxMDQyOCIsIm5iZiI6IjE0MzQwMTA0MjgiLCJqdGkiOiJhODczZTFiY2MwYWJiODUxNmNhMzlmYTViNTQzODhjZSJ9.NjNlZGU4MjJiZjhjNGY1MzIxNzAyODdmZjg0MTk0N2E3YzkwMWRmMzljYzBkYmUwOTIwYjFhNzcwZGNkMzZiMw&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "password": "123456",
    "email": "waiter@hottab.net"
}


Response:

```
{
    "error": false,
    "data": [
        {
            "id": 2,
            "hotel_id": 8,
            "warehouse_id": 1,
            "type": 1,
            "transaction_number": 8150731001,
            "total": 50000,
            "created_at": "2015-07-31 15:22:54",
            "updated_at": "2015-07-31 15:22:54",
            "name": "Nh\u1eadp h\u00e0ng",
            "supplier_id": 3,
            "status": 1
        },
        {
            "id": 3,
            "hotel_id": 8,
            "warehouse_id": 1,
            "type": 1,
            "transaction_number": 8150731001,
            "total": 50000,
            "created_at": "2015-07-31 15:23:02",
            "updated_at": "2015-07-31 15:23:02",
            "name": "Nh\u1eadp h\u00e0ng",
            "supplier_id": 3,
            "status": 1
        }
    ]
}

```

##Create##


**Url**
<code>POST</code>api.hottab.pw/admin/ingredient-orders?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM0MDk2ODI4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzNDAxMDQyOCIsIm5iZiI6IjE0MzQwMTA0MjgiLCJqdGkiOiJhODczZTFiY2MwYWJiODUxNmNhMzlmYTViNTQzODhjZSJ9.NjNlZGU4MjJiZjhjNGY1MzIxNzAyODdmZjg0MTk0N2E3YzkwMWRmMzljYzBkYmUwOTIwYjFhNzcwZGNkMzZiMw&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "warehouse_id": 1,
    "supplier_id": 3,
    "name": "Nh\u1eadp h\u00e0ng",
    "description": "Nh\u1eadp \u0111\u1ee3t n",
    "items": [
        {
            "id": 1,
            "quantity": 5,
            "price": 10000
        }
    ]
}


Response:

```
{
    "error": false,
    "data": {
        "id": 2,
        "hotel_id": 8,
        "warehouse_id": 1,
        "type": 1,
        "transaction_number": 8150731001,
        "total": 50000,
        "created_at": "2015-07-31 15:22:54",
        "updated_at": "2015-07-31 15:22:54",
        "name": "Nh\u1eadp h\u00e0ng",
        "supplier_id": 3,
        "status": 1,
        "suppliers": {
            "id": 3,
            "name": "Phuong",
            "address": "No 02, Ng\u00f4 Quy\u1ec1n",
            "title": "Ms"
        },
        "items": [
            {
                "id": 8,
                "price": 10000,
                "quantity": 5,
                "subtotal": 50000,
                "is_delivered": 0,
                "name": "Oil",
                "description": ""
            }
        ]
    }
}

```

