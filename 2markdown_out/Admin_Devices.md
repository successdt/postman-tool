##Get List of Devices##
list of all devices are used in this hotel. Used to allocate a device to a room

**Url**
<code>GET</code>api.hottab.pw/admin/devices/list?token=fe4a8fc53550eecd63bcbb049a4df3a6&hotel_id=8


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
            "room_id": "56",
            "room_name": "ONDA",
            "hotel_id": "8",
            "id": "4",
            "uuid": "2a414df7a810e64",
            "friendly_uuid": "ONDA",
            "status": "1",
            "balance": "0.00",
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "2014-12-20 14:18:17"
        },
        {
            "room_id": "63",
            "room_name": "TABLE 002",
            "hotel_id": "8",
            "id": "6",
            "uuid": "5a43957fd320ddb0",
            "friendly_uuid": "CUBE i6",
            "status": "1",
            "balance": "526.37",
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "2015-02-14 11:02:33"
        },
        {
            "room_id": "64",
            "room_name": "TABLE 003",
            "hotel_id": "8",
            "id": "7",
            "uuid": "3950e323145ffee2",
            "friendly_uuid": "GalaxyNote10",
            "status": "1",
            "balance": "5000.00",
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "2015-02-24 17:49:22"
        },
        {
            "room_id": "72",
            "room_name": "VIP ROOM",
            "hotel_id": "8",
            "id": "8",
            "uuid": "3d400592c27b04b6",
            "friendly_uuid": "CUBE 9x",
            "status": "1",
            "balance": "0.00",
            "created_at": "2015-01-15 11:47:41",
            "updated_at": "2015-01-23 17:05:37"
        },
        {
            "room_id": "73",
            "room_name": "HotTab Room",
            "hotel_id": "8",
            "id": "5",
            "uuid": "PC lah",
            "friendly_uuid": "PC lah",
            "status": "1",
            "balance": "1772.59",
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "2015-02-25 13:13:35"
        }
    ]
}

```

##Allocate Device to Room##
Assign a device uuid to a room

**Url**
<code>POST</code>api.hottab.pw/admin/devices/allocate


**Parameters**
<code>api_hottab_pw/admin/devices/allocate<code> 


**Request data**
{
    "token": "b28e0d3404612f099cb1063ea38e9f17",
    "hotel_id": "8",
    "room_id": "72",
    "friendly_uuid": "CUBE 9x"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 8,
        "uuid": "3d400592c27b04b6",
        "friendly_uuid": "CUBE 9x",
        "hotel_id": 8,
        "room_id": 73,
        "room_name": "HotTab Room",
        "status": 1
    }
}

```

