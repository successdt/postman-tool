##View  all customers with total pay##


**Url**
<code>GET</code>api.hottab.pw/admin/customers/payments?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzOTI0MDYwIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzODM3NjYwIiwibmJmIjoiMTQzMzgzNzY2MCIsImp0aSI6ImVjZjA4ZWYwY2JkYWZlMzUyN2UzNGU2OWU5MzJhMzFjIn0.OTQ2YzMxNmQyZTY5ZjU5YWJjZWUwYTlkM2VhZmNkMzE3Mzc1ZGJiMGYzZTkzZjY0OGIyOWY2M2Y1NDdkMWU5MA&hotel_id=8


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
            "payments": {
                "paid": 0,
                "hold": 213153015.31
            }
        },
        {
            "id": 3,
            "hotel_id": "8",
            "mobile": "84988888888",
            "phone": "84438262625",
            "fax": "84438262625",
            "email": "example@gmail.com3",
            "website": "http:\/\/hottab.net",
            "created_at": "2015-06-03 18:30:21",
            "updated_at": "2015-06-29 11:32:26",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 0,
            "credit": -19233268,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "Phuong",
            "address": "No 02, Ng\u00f4 Quy\u1ec1n",
            "title": "Ms",
            "payments": {
                "paid": 19233268.97,
                "hold": 0
            }
        },
        {
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
            "payments": {
                "paid": 0,
                "hold": 486000
            }
        },
        {
            "id": 16,
            "hotel_id": "8",
            "mobile": "",
            "phone": "1234577578",
            "fax": "",
            "email": "",
            "website": "",
            "created_at": "2015-06-17 10:34:05",
            "updated_at": "2015-07-01 11:18:35",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 10000000,
            "credit": 942032,
            "passport_number": "",
            "arrival_date": "0000-00-00",
            "departure_date": "0000-00-00",
            "note": null,
            "name": "Hi\u1ebfu Ph\u1ea1m",
            "address": "",
            "title": "Mr",
            "payments": {
                "paid": 1109042,
                "hold": 942032
            }
        },
        {
            "id": 17,
            "hotel_id": "8",
            "mobile": "",
            "phone": "",
            "fax": "",
            "email": "",
            "website": "",
            "created_at": "2015-06-17 10:38:46",
            "updated_at": "2015-06-17 10:38:46",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "Hi\u1ebfu Ph\u1ea1m",
            "address": "",
            "title": "Mr",
            "payments": {
                "paid": 0,
                "hold": 0
            }
        },
        {
            "id": 18,
            "hotel_id": "8",
            "mobile": "84988888888",
            "phone": "84438262625",
            "fax": "84438262625",
            "email": "example@gmail.com",
            "website": "http:\/\/hottab.net",
            "created_at": "2015-06-19 14:07:48",
            "updated_at": "2015-06-19 14:07:48",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "Phuong Hoang",
            "address": "No 02, Ng\u00f4 Quy\u1ec1n",
            "title": "Ms",
            "payments": {
                "paid": 0,
                "hold": 0
            }
        },
        {
            "id": 19,
            "hotel_id": "8",
            "mobile": "84988888888",
            "phone": "84438262625",
            "fax": "84438262625",
            "email": "example@gmail.com",
            "website": "http:\/\/hottab.net",
            "created_at": "2015-06-19 16:53:13",
            "updated_at": "2015-06-25 14:05:05",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 0,
            "credit": -300036,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "Phuong Hoang",
            "address": "No 02, Ng\u00f4 Quy\u1ec1n",
            "title": "Ms",
            "payments": {
                "paid": 300036,
                "hold": 0
            }
        },
        {
            "id": 23,
            "hotel_id": "8",
            "mobile": "",
            "phone": "0123456789",
            "fax": "",
            "email": "",
            "website": "",
            "created_at": "2015-06-27 10:51:12",
            "updated_at": "2015-06-27 10:51:12",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "Vi\u1ec7t Anh",
            "address": "",
            "title": "",
            "payments": {
                "paid": 0,
                "hold": 0
            }
        },
        {
            "id": 24,
            "hotel_id": "8",
            "mobile": "",
            "phone": "0123456789",
            "fax": "",
            "email": "",
            "website": "",
            "created_at": "2015-06-27 15:25:54",
            "updated_at": "2015-06-27 15:25:54",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "N\u00f4 T\u00e0i",
            "address": "",
            "title": "",
            "payments": {
                "paid": 0,
                "hold": 0
            }
        },
        {
            "id": 25,
            "hotel_id": "8",
            "mobile": "",
            "phone": "0123456789",
            "fax": "",
            "email": "",
            "website": "",
            "created_at": "2015-06-27 15:48:44",
            "updated_at": "2015-06-27 15:48:44",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "N\u00f4 T\u00e0i",
            "address": "",
            "title": "",
            "payments": {
                "paid": 0,
                "hold": 0
            }
        },
        {
            "id": 26,
            "hotel_id": "8",
            "mobile": "",
            "phone": "0123456789",
            "fax": "",
            "email": "",
            "website": "",
            "created_at": "2015-06-27 15:54:48",
            "updated_at": "2015-06-27 15:54:48",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "N\u00f4 T\u00e0i",
            "address": "",
            "title": "",
            "payments": {
                "paid": 0,
                "hold": 0
            }
        },
        {
            "id": 28,
            "hotel_id": "8",
            "mobile": "84988888888",
            "phone": "84438262625",
            "fax": "84438262625",
            "email": "example@gmail.com",
            "website": "http:\/\/hottab.net",
            "created_at": "2015-07-31 14:01:33",
            "updated_at": "2015-07-31 14:01:33",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 2000,
            "credit": 0,
            "passport_number": "082114597",
            "arrival_date": "2015-05-05",
            "departure_date": "2015-06-19",
            "note": null,
            "name": "Phuong Hoang",
            "address": "No 02, Ng\u00f4 Quy\u1ec1n",
            "title": "Ms",
            "payments": {
                "paid": 0,
                "hold": 0
            }
        }
    ]
}

```

##Create##


**Url**
<code>POST</code>api.hottab.pw/admin/customers?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM0NzgzODcxIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDM0Njk3NDcxIiwibmJmIjoiMTQzNDY5NzQ3MSIsImp0aSI6ImRjYzhlNDhhMjU2Yzg5OWI1NTFiNzI4Yzg0OTQ5ZTFiIn0.YWFlNTE2ZGE1NTE2Njk2N2VhMmQ0NDhkNWYyZTczMDIwOWQ4ODZmNTE4NmFmNTE2N2IzMTg4YzdkNGQzNjg4YQ&hotel_id=8


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
    "passport_number": "082114597",
    "arrival_date": "2015-05-05",
    "departure_date": "2015-06-19",
    "credit_limit": 2000
}


Response:

```
{
    "error": false,
    "data": {
        "id": 28,
        "hotel_id": "8",
        "mobile": "84988888888",
        "phone": "84438262625",
        "fax": "84438262625",
        "email": "example@gmail.com",
        "website": "http:\/\/hottab.net",
        "created_at": "2015-07-31 14:01:33",
        "updated_at": "2015-07-31 14:01:33",
        "deleted_at": null,
        "type": 2,
        "credit_limit": 2000,
        "credit": 0,
        "passport_number": "082114597",
        "arrival_date": "2015-05-05",
        "departure_date": "2015-06-19",
        "note": null,
        "name": "Phuong Hoang",
        "address": "No 02, Ng\u00f4 Quy\u1ec1n",
        "title": "Ms",
        "contacts": []
    }
}

```

##View##


**Url**
<code>GET</code>api.hottab.pw/admin/customers/7?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMyOTY5OTEyIiwiZXhwIjoiMTQzMzA1NjMxMiIsIm5iZiI6IjE0MzI5Njk5MTIiLCJqdGkiOiIyMWE0YTM5YTk4NzM3MWQxOGI3NzU3YmMwODE3ZjU1OSJ9.MTg3MGZiMThjNmJhZjc1ZWExMzVhZjA4YTEwNTQyYTk0ZTFlMzQ1NzA4ODhhMzU2ZTUzYjc1MGZlY2NhYmQ0Yw&hotel_id=8


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

##List##


**Url**
<code>GET</code>api.hottab.pw/admin/customers?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4MzMyMDUxIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODI0NTY1MSIsIm5iZiI6IjE0MzgyNDU2NTEiLCJqdGkiOiJlMDBmMmI0YWRjYzBjMWIzZDk4OTY4NjliYzQyZGE1ZSJ9.NTkyZjA4NzVjNzc1OWJkNDFkYzNkZDdiYzVhN2U3MDQ2YWNhOWVkNmNhMTVhMjdhZmM4ODlhYTRmZDJmNjQyMg&hotel_id=8


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
            "id": 2,
            "hotel_id": "8",
            "mobile": "84988888888",
            "phone": "84438262625",
            "fax": "84438262625",
            "email": "example@gmail.com",
            "website": "http:\/\/hottab.net",
            "created_at": "2015-06-03 18:25:08",
            "updated_at": "2015-06-22 15:26:18",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 12000000,
            "credit": 0,
            "passport_number": "",
            "arrival_date": "0000-00-00",
            "departure_date": "0000-00-00",
            "note": null,
            "name": "Phuong Hoang",
            "address": "No 02, Ng\u00f4 Quy\u1ec1n",
            "title": "Ms"
        },
        {
            "id": 3,
            "hotel_id": "8",
            "mobile": "84988888888",
            "phone": "84438262625",
            "fax": "84438262625",
            "email": "example@gmail.com3",
            "website": "http:\/\/hottab.net",
            "created_at": "2015-06-03 18:30:21",
            "updated_at": "2015-06-29 11:32:26",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 0,
            "credit": -19233268,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "Phuong",
            "address": "No 02, Ng\u00f4 Quy\u1ec1n",
            "title": "Ms"
        },
        {
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
            "title": "Ms"
        },
        {
            "id": 16,
            "hotel_id": "8",
            "mobile": "",
            "phone": "1234577578",
            "fax": "",
            "email": "",
            "website": "",
            "created_at": "2015-06-17 10:34:05",
            "updated_at": "2015-07-01 11:18:35",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 10000000,
            "credit": 942032,
            "passport_number": "",
            "arrival_date": "0000-00-00",
            "departure_date": "0000-00-00",
            "note": null,
            "name": "Hi\u1ebfu Ph\u1ea1m",
            "address": "",
            "title": "Mr"
        },
        {
            "id": 17,
            "hotel_id": "8",
            "mobile": "",
            "phone": "",
            "fax": "",
            "email": "",
            "website": "",
            "created_at": "2015-06-17 10:38:46",
            "updated_at": "2015-06-17 10:38:46",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "Hi\u1ebfu Ph\u1ea1m",
            "address": "",
            "title": "Mr"
        },
        {
            "id": 18,
            "hotel_id": "8",
            "mobile": "84988888888",
            "phone": "84438262625",
            "fax": "84438262625",
            "email": "example@gmail.com",
            "website": "http:\/\/hottab.net",
            "created_at": "2015-06-19 14:07:48",
            "updated_at": "2015-06-19 14:07:48",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "Phuong Hoang",
            "address": "No 02, Ng\u00f4 Quy\u1ec1n",
            "title": "Ms"
        },
        {
            "id": 19,
            "hotel_id": "8",
            "mobile": "84988888888",
            "phone": "84438262625",
            "fax": "84438262625",
            "email": "example@gmail.com",
            "website": "http:\/\/hottab.net",
            "created_at": "2015-06-19 16:53:13",
            "updated_at": "2015-06-25 14:05:05",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 0,
            "credit": -300036,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "Phuong Hoang",
            "address": "No 02, Ng\u00f4 Quy\u1ec1n",
            "title": "Ms"
        },
        {
            "id": 23,
            "hotel_id": "8",
            "mobile": "",
            "phone": "0123456789",
            "fax": "",
            "email": "",
            "website": "",
            "created_at": "2015-06-27 10:51:12",
            "updated_at": "2015-06-27 10:51:12",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "Vi\u1ec7t Anh",
            "address": "",
            "title": ""
        },
        {
            "id": 24,
            "hotel_id": "8",
            "mobile": "",
            "phone": "0123456789",
            "fax": "",
            "email": "",
            "website": "",
            "created_at": "2015-06-27 15:25:54",
            "updated_at": "2015-06-27 15:25:54",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "N\u00f4 T\u00e0i",
            "address": "",
            "title": ""
        },
        {
            "id": 25,
            "hotel_id": "8",
            "mobile": "",
            "phone": "0123456789",
            "fax": "",
            "email": "",
            "website": "",
            "created_at": "2015-06-27 15:48:44",
            "updated_at": "2015-06-27 15:48:44",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "N\u00f4 T\u00e0i",
            "address": "",
            "title": ""
        },
        {
            "id": 26,
            "hotel_id": "8",
            "mobile": "",
            "phone": "0123456789",
            "fax": "",
            "email": "",
            "website": "",
            "created_at": "2015-06-27 15:54:48",
            "updated_at": "2015-06-27 15:54:48",
            "deleted_at": null,
            "type": 2,
            "credit_limit": 0,
            "credit": 0,
            "passport_number": null,
            "arrival_date": null,
            "departure_date": null,
            "note": null,
            "name": "N\u00f4 T\u00e0i",
            "address": "",
            "title": ""
        }
    ]
}

```

##Update##


**Url**
<code>PUT</code>api.hottab.pw/admin/customers/2?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDEyNDc4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODMyNjA3OCIsIm5iZiI6IjE0MzgzMjYwNzgiLCJqdGkiOiIxZTcxOWM4YWU1MzkxZWQ1ZjdmMzNjMDc3ODU4NDMwOSJ9.NjUzOTM5ODk3ZTI5NGMwYTUwYWU5MjRjMmQyMTI4ZTIxMDJiYjA1MmFjZmNlNjU3NDBlNDFmMWE1NzNkNDQzNA&hotel_id=8


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
    "passport_number": "082114597",
    "arrival_date": "2015-05-05",
    "departure_date": "2015-06-19"
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
        "contacts": []
    }
}

```

##View customer's payments##


**Url**
<code>GET</code>api.hottab.pw/admin/customers/10/payments?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzOTI0MDYwIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzODM3NjYwIiwibmJmIjoiMTQzMzgzNzY2MCIsImp0aSI6ImVjZjA4ZWYwY2JkYWZlMzUyN2UzNGU2OWU5MzJhMzFjIn0.OTQ2YzMxNmQyZTY5ZjU5YWJjZWUwYTlkM2VhZmNkMzE3Mzc1ZGJiMGYzZTkzZjY0OGIyOWY2M2Y1NDdkMWU5MA&hotel_id=8


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
        "id": 26,
        "hotel_id": "8",
        "mobile": "",
        "phone": "0123456789",
        "fax": "",
        "email": "",
        "website": "",
        "created_at": "2015-06-27 15:54:48",
        "updated_at": "2015-06-27 15:54:48",
        "deleted_at": null,
        "type": 2,
        "credit_limit": 0,
        "credit": 0,
        "passport_number": null,
        "arrival_date": null,
        "departure_date": null,
        "note": null,
        "name": "N\u00f4 T\u00e0i",
        "address": "",
        "title": "",
        "contacts": [],
        "payments": []
    }
}

```

##Delete##


**Url**
<code>DELETE</code>api.hottab.pw/admin/customers/7?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMyOTY5OTEyIiwiZXhwIjoiMTQzMzA1NjMxMiIsIm5iZiI6IjE0MzI5Njk5MTIiLCJqdGkiOiIyMWE0YTM5YTk4NzM3MWQxOGI3NzU3YmMwODE3ZjU1OSJ9.MTg3MGZiMThjNmJhZjc1ZWExMzVhZjA4YTEwNTQyYTk0ZTFlMzQ1NzA4ODhhMzU2ZTUzYjc1MGZlY2NhYmQ0Yw&hotel_id=8


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

