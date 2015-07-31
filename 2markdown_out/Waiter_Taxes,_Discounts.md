##List current active taxes##
Get list taxes (active) from Database

**Url**
<code>GET</code>api.hottab.pw/waiter/taxes?token=d0e1e1a9562872a02a72914808802128&lang=en


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "_method",
        "value": "PUT",
        "type": "text",
        "enabled": true
    },
    {
        "key": "token",
        "value": "8763e21c76c02c54d08f997a04f03a35",
        "type": "text",
        "enabled": true
    },
    {
        "key": "status",
        "value": "progess",
        "type": "text",
        "enabled": true
    },
    {
        "key": "foods[1][id]",
        "value": "1",
        "type": "text",
        "enabled": true
    },
    {
        "key": "foods[1][status]",
        "value": "0",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":[{"id":2,"hotel_id":8,"rate":"15.00","amount":null,"active":1,"deleted_at":null,"created_at":"2015-01-05 19:55:17","updated_at":"2015-06-09 14:03:31","name":"Tet"},{"id":19,"hotel_id":8,"rate":"12.05","amount":null,"active":1,"deleted_at":null,"created_at":"2015-01-07 15:09:05","updated_at":"2015-06-09 14:03:31","name":"Midnight tax"},{"id":43,"hotel_id":8,"rate":"12.00","amount":null,"active":1,"deleted_at":null,"created_at":"2015-01-20 00:23:15","updated_at":"2015-06-09 14:03:33","name":"Takeaway"},{"id":44,"hotel_id":8,"rate":null,"amount":"10000000.00","active":1,"deleted_at":null,"created_at":"2015-01-22 11:43:09","updated_at":"2015-06-09 14:03:34","name":"Parking tax"},{"id":46,"hotel_id":8,"rate":null,"amount":"50000.00","active":1,"deleted_at":null,"created_at":"2015-04-07 20:48:13","updated_at":"2015-06-09 14:03:34","name":"hello 2"},{"id":47,"hotel_id":8,"rate":"30.00","amount":null,"active":1,"deleted_at":null,"created_at":"2015-06-18 11:56:25","updated_at":"2015-06-18 11:56:25","name":"Tai Nguyen"},{"id":48,"hotel_id":8,"rate":null,"amount":"99999.00","active":1,"deleted_at":null,"created_at":"2015-06-18 12:04:12","updated_at":"2015-06-18 12:04:12","name":"Bo Tai"},{"id":49,"hotel_id":8,"rate":"20.00","amount":null,"active":1,"deleted_at":null,"created_at":"2015-06-18 12:08:51","updated_at":"2015-06-18 12:08:51","name":"Bo Tai Day"},{"id":50,"hotel_id":8,"rate":"50.00","amount":null,"active":1,"deleted_at":null,"created_at":"2015-06-18 20:50:29","updated_at":"2015-06-18 20:50:29","name":"test"},{"id":51,"hotel_id":8,"rate":"20.00","amount":null,"active":1,"deleted_at":null,"created_at":"2015-07-31 16:10:15","updated_at":"2015-07-31 16:10:15","name":"new tax new"}]}

```

##List current available discounts##
Get list discounts (available) from Database

**Url**
<code>GET</code>api.hottab.pw/waiter/discounts?token=258846bd4ea4a145f5ccf5ac2c08bd21&lang=en


**Parameters**

**Request params**
$$params

**Request data**
[]


Response:

```
{"error":false,"data":[{"id":5,"hotel_id":8,"rate":"50.00","amount":null,"active":1,"default":1,"from_date":"0000-00-00 00:00:00","to_date":"0000-00-00 00:00:00","deleted_at":null,"created_at":"2015-01-07 16:03:34","updated_at":"2015-06-10 00:18:18","type":1,"name":"Friend Discount"},{"id":10,"hotel_id":8,"rate":"9.50","amount":null,"active":1,"default":1,"from_date":"0000-00-00 00:00:00","to_date":"0000-00-00 00:00:00","deleted_at":null,"created_at":"2015-01-08 13:17:22","updated_at":"2015-01-19 23:55:07","type":1,"name":"Royal Discount"},{"id":23,"hotel_id":8,"rate":null,"amount":"10.00","active":1,"default":1,"from_date":"0000-00-00 00:00:00","to_date":"0000-00-00 00:00:00","deleted_at":null,"created_at":"2015-01-22 11:42:43","updated_at":"2015-01-22 11:42:43","type":1,"name":"10$ discount"},{"id":24,"hotel_id":8,"rate":null,"amount":"3.00","active":1,"default":1,"from_date":"0000-00-00 00:00:00","to_date":"0000-00-00 00:00:00","deleted_at":null,"created_at":"2015-01-22 11:42:51","updated_at":"2015-01-22 11:42:51","type":1,"name":"3$ discount"},{"id":25,"hotel_id":8,"rate":"10.00","amount":null,"active":1,"default":1,"from_date":"0000-00-00 00:00:00","to_date":"0000-00-00 00:00:00","deleted_at":null,"created_at":"2015-01-23 17:53:47","updated_at":"2015-01-23 17:53:47","type":1,"name":"Discount 1"},{"id":26,"hotel_id":8,"rate":null,"amount":"5.00","active":1,"default":1,"from_date":"0000-00-00 00:00:00","to_date":"0000-00-00 00:00:00","deleted_at":null,"created_at":"2015-01-25 18:35:38","updated_at":"2015-01-25 18:38:26","type":1,"name":"Hang's Discount"},{"id":27,"hotel_id":8,"rate":"30.00","amount":null,"active":1,"default":1,"from_date":"0000-00-00 00:00:00","to_date":"0000-00-00 00:00:00","deleted_at":null,"created_at":"2015-06-18 12:09:24","updated_at":"2015-07-31 14:08:58","type":1,"name":"Discount 30 percent"},{"id":28,"hotel_id":8,"rate":"20.00","amount":null,"active":1,"default":1,"from_date":"0000-00-00 00:00:00","to_date":"0000-00-00 00:00:00","deleted_at":null,"created_at":"2015-06-18 12:09:55","updated_at":"2015-06-18 12:09:55","type":1,"name":"Dm Loi"},{"id":29,"hotel_id":8,"rate":"50.00","amount":null,"active":1,"default":1,"from_date":"0000-00-00 00:00:00","to_date":"0000-00-00 00:00:00","deleted_at":null,"created_at":"2015-06-18 20:58:08","updated_at":"2015-06-18 20:58:08","type":1,"name":"test"}]}

```

