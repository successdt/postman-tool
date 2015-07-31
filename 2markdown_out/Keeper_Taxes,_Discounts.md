##List current active taxes##
Get list taxes (active) from Database

**Url**
<code>GET</code>api.hottab.pw/housekeeper/taxes?token=6a737c6d932cf5b5c0342b0ed84df9c4&lang=en


**Parameters**
<code>token</code> $token
<code>lang<code> en


**Request data**
{
    "password": "123456",
    "email": "keeper@hottab.net"
}


Response:

```
{
    "error": false,
    "data": [
        {
            "id": "18",
            "hotel_id": "8",
            "rate": "8.75",
            "amount": null,
            "active": "1",
            "deleted_at": null,
            "created_at": "2015-01-07 15:06:55",
            "updated_at": "2015-01-17 16:07:25",
            "name": "VAT"
        },
        {
            "id": "19",
            "hotel_id": "8",
            "rate": "12.05",
            "amount": null,
            "active": "1",
            "deleted_at": null,
            "created_at": "2015-01-07 15:09:05",
            "updated_at": "2015-01-14 14:52:02",
            "name": "Midnight tax"
        },
        {
            "id": "43",
            "hotel_id": "8",
            "rate": "12.00",
            "amount": null,
            "active": "1",
            "deleted_at": null,
            "created_at": "2015-01-20 00:23:15",
            "updated_at": "2015-01-20 00:23:15",
            "name": "Takeaway"
        },
        {
            "id": "44",
            "hotel_id": "8",
            "rate": null,
            "amount": "2.00",
            "active": "1",
            "deleted_at": null,
            "created_at": "2015-01-22 11:43:09",
            "updated_at": "2015-01-22 11:43:09",
            "name": "Parking tax"
        }
    ]
}

```

##List current available discounts##
Get list discounts (available) from Database

**Url**
<code>GET</code>api.hottab.pw/housekeeper/discounts?token=6a737c6d932cf5b5c0342b0ed84df9c4&lang=en


**Parameters**
<code>token</code> $token
<code>lang<code> en


**Request data**
{
    "password": "123456",
    "email": "keeper@hottab.net"
}


Response:

```
{
    "error": false,
    "data": [
        {
            "id": "5",
            "hotel_id": "8",
            "rate": "3.00",
            "amount": null,
            "active": "1",
            "default": "1",
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-01-07 16:03:34",
            "updated_at": "2015-02-12 11:09:39",
            "name": "Friend Discount"
        },
        {
            "id": "10",
            "hotel_id": "8",
            "rate": "9.50",
            "amount": null,
            "active": "1",
            "default": "1",
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-01-08 13:17:22",
            "updated_at": "2015-01-19 23:55:07",
            "name": "Royal Discount"
        },
        {
            "id": "22",
            "hotel_id": "8",
            "rate": "12.00",
            "amount": null,
            "active": "1",
            "default": "1",
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-01-20 00:24:36",
            "updated_at": "2015-01-20 00:24:36",
            "name": "Hieu"
        },
        {
            "id": "23",
            "hotel_id": "8",
            "rate": null,
            "amount": "10.00",
            "active": "1",
            "default": "1",
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-01-22 11:42:43",
            "updated_at": "2015-01-22 11:42:43",
            "name": "10$ discount"
        },
        {
            "id": "24",
            "hotel_id": "8",
            "rate": null,
            "amount": "3.00",
            "active": "1",
            "default": "1",
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-01-22 11:42:51",
            "updated_at": "2015-01-22 11:42:51",
            "name": "3$ discount"
        },
        {
            "id": "25",
            "hotel_id": "8",
            "rate": "10.00",
            "amount": null,
            "active": "1",
            "default": "1",
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-01-23 17:53:47",
            "updated_at": "2015-01-23 17:53:47",
            "name": "Discount 1"
        },
        {
            "id": "26",
            "hotel_id": "8",
            "rate": null,
            "amount": "5.00",
            "active": "1",
            "default": "1",
            "from_date": "0000-00-00 00:00:00",
            "to_date": "0000-00-00 00:00:00",
            "deleted_at": null,
            "created_at": "2015-01-25 18:35:38",
            "updated_at": "2015-01-25 18:38:26",
            "name": "Hang's Discount"
        }
    ]
}

```

