##Update tax##
Update tax, POST params :
- hotel_id (required)
- lang (optional)
- name
- amount (decimal(10,2))
- type (0: percent, 1: amount, 2: both)
- active (value = 0: not active, 1: active)

**Url**
<code>POST</code>api.hottab.pw/admin/taxes/8?lang=en&hotel_id=8


**Parameters**
<code>api_hottab_pw/admin/taxes/8?lang<code> en
<code>hotel_id<code> 8


**Request data**
{
    "token": "99b643f55969d0596e6f5645342bd018",
    "_method": "PUT",
    "name": "Test tax10 (updated)",
    "rate": "10",
    "amount": "",
    "active": "0"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 18,
        "hotel_id": 8,
        "rate": "10.00",
        "amount": null,
        "active": 0,
        "deleted_at": null,
        "created_at": "2015-01-07 15:06:55",
        "updated_at": "2015-07-31 16:10:30",
        "name": "Test tax10 (updated)"
    }
}

```

##View single Tax##
Get single tax (not trashed) from Database
- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/admin/taxes/50?token=6c40802f49db480f9c8222ff28fc579e&hotel_id=8&lang=en


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8
<code>lang<code> en


**Request data**
{
    "token": "6c40802f49db480f9c8222ff28fc579e",
    "name": "new tax new",
    "rate": "20",
    "amount": "",
    "active": "1",
    "food_categories[0][id]": "100"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 46,
        "hotel_id": 8,
        "rate": "10.00",
        "amount": null,
        "active": 0,
        "deleted_at": null,
        "created_at": "2015-02-25 17:57:26",
        "updated_at": "2015-02-25 17:57:44",
        "name": "Test tax10 (updated)"
    }
}

```

##List taxes##
Get list taxes (not trashed) from Database
- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/admin/taxes?token=6c40802f49db480f9c8222ff28fc579e&hotel_id=8&lang=en


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8
<code>lang<code> en


**Request data**
{
    "token": "6c40802f49db480f9c8222ff28fc579e",
    "name": "new tax new",
    "rate": "20",
    "amount": "",
    "active": "1",
    "food_categories[0][id]": "100"
}


Response:

```
{
    "error": false,
    "data": [
        {
            "id": 2,
            "hotel_id": 8,
            "rate": "15.00",
            "amount": null,
            "active": 1,
            "deleted_at": null,
            "created_at": "2015-01-05 19:55:17",
            "updated_at": "2015-06-09 14:03:31",
            "name": "Tet"
        },
        {
            "id": 18,
            "hotel_id": 8,
            "rate": "8.75",
            "amount": null,
            "active": 1,
            "deleted_at": null,
            "created_at": "2015-01-07 15:06:55",
            "updated_at": "2015-06-09 14:03:30",
            "name": "VAT"
        },
        {
            "id": 19,
            "hotel_id": 8,
            "rate": "12.05",
            "amount": null,
            "active": 1,
            "deleted_at": null,
            "created_at": "2015-01-07 15:09:05",
            "updated_at": "2015-06-09 14:03:31",
            "name": "Midnight tax"
        },
        {
            "id": 43,
            "hotel_id": 8,
            "rate": "12.00",
            "amount": null,
            "active": 1,
            "deleted_at": null,
            "created_at": "2015-01-20 00:23:15",
            "updated_at": "2015-06-09 14:03:33",
            "name": "Takeaway"
        },
        {
            "id": 44,
            "hotel_id": 8,
            "rate": null,
            "amount": "10000000.00",
            "active": 1,
            "deleted_at": null,
            "created_at": "2015-01-22 11:43:09",
            "updated_at": "2015-06-09 14:03:34",
            "name": "Parking tax"
        },
        {
            "id": 46,
            "hotel_id": 8,
            "rate": null,
            "amount": "50000.00",
            "active": 1,
            "deleted_at": null,
            "created_at": "2015-04-07 20:48:13",
            "updated_at": "2015-06-09 14:03:34",
            "name": "hello 2"
        },
        {
            "id": 47,
            "hotel_id": 8,
            "rate": "30.00",
            "amount": null,
            "active": 1,
            "deleted_at": null,
            "created_at": "2015-06-18 11:56:25",
            "updated_at": "2015-06-18 11:56:25",
            "name": "Tai Nguyen"
        },
        {
            "id": 48,
            "hotel_id": 8,
            "rate": null,
            "amount": "99999.00",
            "active": 1,
            "deleted_at": null,
            "created_at": "2015-06-18 12:04:12",
            "updated_at": "2015-06-18 12:04:12",
            "name": "Bo Tai"
        },
        {
            "id": 49,
            "hotel_id": 8,
            "rate": "20.00",
            "amount": null,
            "active": 1,
            "deleted_at": null,
            "created_at": "2015-06-18 12:08:51",
            "updated_at": "2015-06-18 12:08:51",
            "name": "Bo Tai Day"
        },
        {
            "id": 50,
            "hotel_id": 8,
            "rate": "50.00",
            "amount": null,
            "active": 1,
            "deleted_at": null,
            "created_at": "2015-06-18 20:50:29",
            "updated_at": "2015-06-18 20:50:29",
            "name": "test"
        }
    ]
}

```

##Delete tax##
Delete tax from database
- hotel_id (required)

**Url**
<code>DELETE</code>api.hottab.pw/admin/taxes/52?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDEyNDc4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODMyNjA3OCIsIm5iZiI6IjE0MzgzMjYwNzgiLCJqdGkiOiIxZTcxOWM4YWU1MzkxZWQ1ZjdmMzNjMDc3ODU4NDMwOSJ9.NjUzOTM5ODk3ZTI5NGMwYTUwYWU5MjRjMmQyMTI4ZTIxMDJiYjA1MmFjZmNlNjU3NDBlNDFmMWE1NzNkNDQzNA&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
[]


Response:

```
{
    "error": false,
    "message": "Successfully deleted tax!"
}

```

##Store tax##
Store tax, POST params :
- hotel_id (required)
- lang (optional)
- name
- amount (decimal(10,2))
- type (0: percent, 1: amount, 2: both)
- active (value = 0: not active, 1: active)

**Url**
<code>POST</code>api.hottab.pw/admin/taxes?lang=en&hotel_id=8


**Parameters**
<code>api_hottab_pw/admin/taxes?lang<code> en
<code>hotel_id<code> 8


**Request data**
{
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDEyNDc4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODMyNjA3OCIsIm5iZiI6IjE0MzgzMjYwNzgiLCJqdGkiOiIxZTcxOWM4YWU1MzkxZWQ1ZjdmMzNjMDc3ODU4NDMwOSJ9.NjUzOTM5ODk3ZTI5NGMwYTUwYWU5MjRjMmQyMTI4ZTIxMDJiYjA1MmFjZmNlNjU3NDBlNDFmMWE1NzNkNDQzNA",
    "name": "new tax new",
    "rate": "20",
    "amount": "",
    "active": "1",
    "food_categories[0][id]": "100"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 51,
        "hotel_id": 8,
        "rate": "20.00",
        "amount": null,
        "active": 1,
        "deleted_at": null,
        "created_at": "2015-07-31 16:10:15",
        "updated_at": "2015-07-31 16:10:15",
        "name": "new tax new"
    }
}

```

