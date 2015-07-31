##Delete discount##
Delete Discount from database
* URL Params :
- hotel_id (required)
- lang (optional)

**Url**
<code>DELETE</code>api.hottab.pw/admin/discounts/4?token=99b643f55969d0596e6f5645342bd018&hotel_id=8&lang=en


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8
<code>lang<code> en


**Request data**
[]


Response:

```
{
    "error": false,
    "message": "Successfully deleted discount!"
}

```

##List discounts##
Get list discounts from Database
* URL Params :
- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/admin/discounts?token=99b643f55969d0596e6f5645342bd018&hotel_id=8&lang=en


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8
<code>lang<code> en


**Request data**
[]


Response:

```
{
    "error": false,
    "data": [
        {
            "id": 5,
            "hotel_id": 8,
            "rate": "50.00",
            "amount": null,
            "active": 1,
            "default": 1,
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-01-07 16:03:34",
            "updated_at": "2015-06-10 00:18:18",
            "type": 1,
            "name": "Friend Discount"
        },
        {
            "id": 10,
            "hotel_id": 8,
            "rate": "9.50",
            "amount": null,
            "active": 1,
            "default": 1,
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-01-08 13:17:22",
            "updated_at": "2015-01-19 23:55:07",
            "type": 1,
            "name": "Royal Discount"
        },
        {
            "id": 22,
            "hotel_id": 8,
            "rate": "12.00",
            "amount": null,
            "active": 1,
            "default": 1,
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-01-20 00:24:36",
            "updated_at": "2015-01-20 00:24:36",
            "type": 1,
            "name": "Hieu"
        },
        {
            "id": 23,
            "hotel_id": 8,
            "rate": null,
            "amount": "10.00",
            "active": 1,
            "default": 1,
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-01-22 11:42:43",
            "updated_at": "2015-01-22 11:42:43",
            "type": 1,
            "name": "10$ discount"
        },
        {
            "id": 24,
            "hotel_id": 8,
            "rate": null,
            "amount": "3.00",
            "active": 1,
            "default": 1,
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-01-22 11:42:51",
            "updated_at": "2015-01-22 11:42:51",
            "type": 1,
            "name": "3$ discount"
        },
        {
            "id": 25,
            "hotel_id": 8,
            "rate": "10.00",
            "amount": null,
            "active": 1,
            "default": 1,
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-01-23 17:53:47",
            "updated_at": "2015-01-23 17:53:47",
            "type": 1,
            "name": "Discount 1"
        },
        {
            "id": 26,
            "hotel_id": 8,
            "rate": null,
            "amount": "5.00",
            "active": 1,
            "default": 1,
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-01-25 18:35:38",
            "updated_at": "2015-01-25 18:38:26",
            "type": 1,
            "name": "Hang's Discount"
        },
        {
            "id": 27,
            "hotel_id": 8,
            "rate": "100.00",
            "amount": null,
            "active": 1,
            "default": 1,
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-06-18 12:09:24",
            "updated_at": "2015-06-18 12:09:24",
            "type": 1,
            "name": "Bo Tai"
        },
        {
            "id": 28,
            "hotel_id": 8,
            "rate": "20.00",
            "amount": null,
            "active": 1,
            "default": 1,
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-06-18 12:09:55",
            "updated_at": "2015-06-18 12:09:55",
            "type": 1,
            "name": "Dm Loi"
        },
        {
            "id": 29,
            "hotel_id": 8,
            "rate": "50.00",
            "amount": null,
            "active": 1,
            "default": 1,
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-06-18 20:58:08",
            "updated_at": "2015-06-18 20:58:08",
            "type": 1,
            "name": "test"
        }
    ]
}

```

##Update discount##
Store discount, POST params :
- name (required)
- amount (decimal(10,2))
- type (0: percent, 1: amount, 2: both)
- active (boolean)
- default (boolean)
- from_date (datetime)
- to_date (datetime)
* URL Params
- hotel_id (required)
- lang (optional)

**Url**
<code>POST</code>api.hottab.pw/admin/discounts/4?lang=en&hotel_id=8


**Parameters**
<code>api_hottab_pw/admin/discounts/4?lang<code> en
<code>hotel_id<code> 8


**Request data**
{
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDEyNDc4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODMyNjA3OCIsIm5iZiI6IjE0MzgzMjYwNzgiLCJqdGkiOiIxZTcxOWM4YWU1MzkxZWQ1ZjdmMzNjMDc3ODU4NDMwOSJ9.NjUzOTM5ODk3ZTI5NGMwYTUwYWU5MjRjMmQyMTI4ZTIxMDJiYjA1MmFjZmNlNjU3NDBlNDFmMWE1NzNkNDQzNA",
    "_method": "PUT",
    "name": "Discount 30 percent",
    "rate": "30",
    "amount": "",
    "active": "1",
    "default": "1",
    "from_date": "",
    "to_date": ""
}


Response:

```
{
    "error": false,
    "data": {
        "id": 27,
        "hotel_id": 8,
        "rate": "30.00",
        "amount": null,
        "active": 1,
        "default": 1,
        "from_date": "0000-00-00 00:00:00",
        "to_date": "0000-00-00 00:00:00",
        "deleted_at": null,
        "created_at": "2015-06-18 12:09:24",
        "updated_at": "2015-07-31 14:08:58",
        "type": 1,
        "name": "Discount 30 percent"
    }
}

```

##View single Discount##
Get single discount from Database
* URL Params :
- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/admin/discounts/4?token=99b643f55969d0596e6f5645342bd018&hotel_id=8&lang=vi


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8
<code>lang<code> vi


**Request data**
[]


Response:

```
{
    "error": false,
    "data": {
        "id": 5,
        "hotel_id": 8,
        "rate": "50.00",
        "amount": null,
        "active": 1,
        "default": 1,
        "from_date": "0000-00-00 00:00:00",
        "to_date": "0000-00-00 00:00:00",
        "deleted_at": null,
        "created_at": "2015-01-07 16:03:34",
        "updated_at": "2015-06-10 00:18:18",
        "type": 1,
        "name": "Gi\u1ea3m gi\u00e1 b\u1ea1n b\u00e8"
    }
}

```

##Store Discount##
Store Discount, POST params :
- name (required)
- amount (decimal(10,2))
- type (0: percent, 1: amount, 2: both)
- active (boolean)
- default (boolean)
- from_date (datetime)
- to_date (datetime)
* URL Params
- hotel_id (required)
- lang (optional)

**Url**
<code>POST</code>api.hottab.pw/admin/discounts?lang=en&hotel_id=8


**Parameters**
<code>api_hottab_pw/admin/discounts?lang<code> en
<code>hotel_id<code> 8


**Request data**
{
    "token": "99b643f55969d0596e6f5645342bd018",
    "name": "Discount 1",
    "rate": "10",
    "amount": "",
    "active": "1",
    "default": "1",
    "from_date": "",
    "to_date": ""
}


Response:

```
{
    "error": false,
    "data": {
        "id": 27,
        "hotel_id": 8,
        "rate": "10.00",
        "amount": null,
        "active": 1,
        "default": 1,
        "from_date": "0000-00-00 00:00:00",
        "to_date": "0000-00-00 00:00:00",
        "deleted_at": null,
        "created_at": "2015-02-25 17:58:48",
        "updated_at": "2015-02-25 17:58:48",
        "name": "Discount 1"
    }
}

```

