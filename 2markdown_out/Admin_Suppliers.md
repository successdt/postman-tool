##Update##


**Url**
<code>PUT</code>api.hottab.pw/admin/suppliers/2?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzNzA0NTUyOSIsImV4cCI6IjE0MzcxMzE5MjkiLCJuYmYiOiIxNDM3MDQ1NTI5IiwianRpIjoiYjhmMDllODkzNjdiM2YzNTY4ZmM1MjkyYzRjMmEzMTYifQ.ODEyYmU0MDY1ZTJkNmVhZTQ0ZDdiZWJjMDg4MDVhMWU3NWU2MzQ4YmRkODlhMzM0MTI2NTJlMzM5NjE2ZjY3ZQ&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "email": "example@gmail.com",
    "phone": "84438262625",
    "mobile": "84988888888",
    "name": "Phuong Hoang",
    "job_position": "Genera director",
    "address": "No 02, Ng\u00f4 Quy\u1ec1n",
    "fax": "84438262625",
    "website": "http:\/\/hottab.net",
    "title": "Ms",
    "contacts": [
        {
            "id": 2,
            "email": "example@gmail.com",
            "phone": "84438262625",
            "mobile": "84988888888",
            "name": "Ms Phuong",
            "job_position": "Genera director"
        }
    ]
}


Response:

```
{
    "error": false,
    "data": {
        "id": 2,
        "hotel_id": "8",
        "mobile": "84988888888",
        "phone": "84438262625",
        "fax": "84438262625",
        "email": "example@gmail.com",
        "website": "http:\/\/hottab.net",
        "created_at": "2015-06-03 18:25:08",
        "updated_at": "2015-07-31 14:01:54",
        "deleted_at": null,
        "type": 2,
        "credit_limit": 12000000,
        "credit": 0,
        "passport_number": "082114597",
        "arrival_date": "2015-05-05",
        "departure_date": "2015-06-19",
        "note": null,
        "name": "Phuong Hoang",
        "address": "No 02, Ng\u00f4 Quy\u1ec1n",
        "title": "Ms",
        "contacts": [
            {
                "id": 7,
                "hotel_id": "8",
                "supplier_id": "2",
                "email": "example@gmail.com",
                "phone": "84438262625",
                "mobile": "84988888888",
                "created_at": "2015-07-31 16:07:08",
                "updated_at": "2015-07-31 16:07:08",
                "name": "Ms Phuong",
                "job_position": "Genera director"
            }
        ]
    }
}

```

##Create##


**Url**
<code>POST</code>api.hottab.pw/admin/suppliers?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzOTM0MTg2IiwiZXhwIjoiMTQzNDAyMDU4NiIsIm5iZiI6IjE0MzM5MzQxODYiLCJqdGkiOiI1NWYwZTQ5Y2E1ZjViZWZmNDI3MWUyYzAyMzVlMzM5MSJ9.M2Q3OTBkNzJlOTE5YTY5N2QyNzgzZTU3YjJlOWRmODQxYWY4YTg4NGQ3ZmQzZWE0OGE3MDY2ZDFiMDcyNTIzMg&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "email": "example@gmail.com",
    "phone": "84438262625",
    "mobile": "84988888888",
    "name": "Phuong",
    "job_position": "Genera director",
    "address": "No 02, Ng\u00f4 Quy\u1ec1n",
    "fax": "84438262625",
    "website": "http:\/\/hottab.net",
    "title": "Ms",
    "ingredients": [
        {
            "id": 1,
            "price": 5000
        }
    ],
    "contacts": [
        {
            "email": "example@gmail.com",
            "phone": "84438262625",
            "mobile": "84988888888",
            "name": "Ms Phuong",
            "job_position": "Genera director"
        }
    ]
}


Response:

```
{
    "error": false,
    "data": {
        "id": 31,
        "hotel_id": "8",
        "mobile": "84988888888",
        "phone": "84438262625",
        "fax": "84438262625",
        "email": "example@gmail.com",
        "website": "http:\/\/hottab.net",
        "created_at": "2015-07-31 16:06:46",
        "updated_at": "2015-07-31 16:06:46",
        "deleted_at": null,
        "type": 1,
        "credit_limit": 0,
        "credit": 0,
        "passport_number": null,
        "arrival_date": null,
        "departure_date": null,
        "note": null,
        "name": "Phuong",
        "address": "No 02, Ng\u00f4 Quy\u1ec1n",
        "title": "Ms",
        "contacts": [
            {
                "id": 6,
                "hotel_id": "8",
                "supplier_id": "31",
                "email": "example@gmail.com",
                "phone": "84438262625",
                "mobile": "84988888888",
                "created_at": "2015-07-31 16:06:46",
                "updated_at": "2015-07-31 16:06:46",
                "name": "Ms Phuong",
                "job_position": "Genera director"
            }
        ],
        "ingredients": [
            {
                "id": 8,
                "hotel_id": 8,
                "ingredient_category_id": 0,
                "sku": null,
                "unit": "kg",
                "in_stock": "1000.00",
                "status": 1,
                "min_order": 0,
                "max_order": 0,
                "min_alert": 0,
                "price": 5000,
                "deleted_at": null,
                "created_at": "2015-06-15 20:02:10",
                "updated_at": "2015-07-31 15:43:01",
                "min_price": 10000,
                "max_price": 0,
                "total_received": 5,
                "total_cost": 10000,
                "name": "Oil",
                "description": ""
            }
        ]
    }
}

```

##List##


**Url**
<code>GET</code>api.hottab.pw/admin/suppliers?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMyOTY5OTEyIiwiZXhwIjoiMTQzMzA1NjMxMiIsIm5iZiI6IjE0MzI5Njk5MTIiLCJqdGkiOiIyMWE0YTM5YTk4NzM3MWQxOGI3NzU3YmMwODE3ZjU1OSJ9.MTg3MGZiMThjNmJhZjc1ZWExMzVhZjA4YTEwNTQyYTk0ZTFlMzQ1NzA4ODhhMzU2ZTUzYjc1MGZlY2NhYmQ0Yw&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
[]


Response:

```
{
    "error": false,
    "data": [
        {
            "id": 9,
            "hotel_id": "8",
            "mobile": "84988888888",
            "phone": "84438262625",
            "fax": "84438262625",
            "email": "example@gmail.com",
            "website": "http:\/\/hottab.net",
            "created_at": "2015-06-11 16:24:11",
            "updated_at": "2015-06-11 16:24:11",
            "deleted_at": null,
            "type": 1,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "HotTab",
            "address": "No 02, Ng\u00f4 Quy\u1ec1n",
            "title": "Ms"
        },
        {
            "id": 11,
            "hotel_id": "8",
            "mobile": "84988888888",
            "phone": "84438262625",
            "fax": "84438262625",
            "email": "example@gmail.com",
            "website": "http:\/\/hottab.net",
            "created_at": "2015-06-11 16:24:16",
            "updated_at": "2015-06-11 16:24:16",
            "deleted_at": null,
            "type": 1,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "HotTab 3",
            "address": "No 02, Ng\u00f4 Quy\u1ec1n",
            "title": "Ms"
        },
        {
            "id": 14,
            "hotel_id": "8",
            "mobile": "0944 1234567",
            "phone": "04 1234567",
            "fax": "04 1234567",
            "email": "dfsf@ddf.com",
            "website": "http:\/\/haha.com",
            "created_at": "2015-06-14 14:52:04",
            "updated_at": "2015-06-15 13:34:40",
            "deleted_at": null,
            "type": 1,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "C\u00f4ng ty TNHH T\u00e2n Hi\u1ec7p Ph\u00e1t",
            "address": "2 Ng\u00f4 Quy\u1ec1n",
            "title": ""
        },
        {
            "id": 15,
            "hotel_id": "8",
            "mobile": "0433 45345",
            "phone": "021234234",
            "fax": "034234234",
            "email": "haha@sdsf.com",
            "website": "http:\/\/dfsdf.com",
            "created_at": "2015-06-14 14:52:23",
            "updated_at": "2015-06-14 17:55:09",
            "deleted_at": null,
            "type": 1,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "Vua Ph\u01b0\u01a1ng B\u1eafc",
            "address": "2 Ngo Quy\u1ec1n",
            "title": ""
        },
        {
            "id": 20,
            "hotel_id": "8",
            "mobile": "",
            "phone": "",
            "fax": "",
            "email": "",
            "website": "",
            "created_at": "2015-06-19 19:35:03",
            "updated_at": "2015-06-19 19:35:03",
            "deleted_at": null,
            "type": 1,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "sdfsdf",
            "address": "",
            "title": ""
        },
        {
            "id": 21,
            "hotel_id": "8",
            "mobile": "",
            "phone": "",
            "fax": "",
            "email": "",
            "website": "",
            "created_at": "2015-06-19 19:35:33",
            "updated_at": "2015-06-19 19:35:33",
            "deleted_at": null,
            "type": 1,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "Hieu",
            "address": "",
            "title": ""
        }
    ]
}

```

##View##


**Url**
<code>GET</code>api.hottab.pw/admin/suppliers/7?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMyOTY5OTEyIiwiZXhwIjoiMTQzMzA1NjMxMiIsIm5iZiI6IjE0MzI5Njk5MTIiLCJqdGkiOiIyMWE0YTM5YTk4NzM3MWQxOGI3NzU3YmMwODE3ZjU1OSJ9.MTg3MGZiMThjNmJhZjc1ZWExMzVhZjA4YTEwNTQyYTk0ZTFlMzQ1NzA4ODhhMzU2ZTUzYjc1MGZlY2NhYmQ0Yw&hotel_id=8


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
        "id": 7,
        "hotel_id": "8",
        "mobile": "84988888888",
        "phone": "84438262625",
        "fax": "84438262625",
        "email": "example@gmail.com",
        "website": "http:\/\/hottab.net",
        "created_at": "2015-06-03 18:36:21",
        "updated_at": "2015-06-03 18:36:21",
        "deleted_at": null,
        "type": 2,
        "credit_limit": 0,
        "credit": 0,
        "passport_number": null,
        "arrival_date": null,
        "departure_date": null,
        "note": null,
        "name": "Hieu Pham 02",
        "address": "No 02, Ng\u00f4 Quy\u1ec1n",
        "title": "Ms",
        "contacts": []
    }
}

```

##Delete##


**Url**
<code>DELETE</code>api.hottab.pw/admin/suppliers/7?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMyOTY5OTEyIiwiZXhwIjoiMTQzMzA1NjMxMiIsIm5iZiI6IjE0MzI5Njk5MTIiLCJqdGkiOiIyMWE0YTM5YTk4NzM3MWQxOGI3NzU3YmMwODE3ZjU1OSJ9.MTg3MGZiMThjNmJhZjc1ZWExMzVhZjA4YTEwNTQyYTk0ZTFlMzQ1NzA4ODhhMzU2ZTUzYjc1MGZlY2NhYmQ0Yw&hotel_id=8


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

