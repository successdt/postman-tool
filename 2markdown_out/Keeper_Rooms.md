##Get list rooms##
list of rooms in this hotel

**Url**
<code>GET</code>api.hottab.pw/housekeeper/rooms?token=6a737c6d932cf5b5c0342b0ed84df9c4


**Parameters**
<code>token</code> $token


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
            "id": "63",
            "hotel_id": "8",
            "name": "TABLE 002",
            "device_id": "6",
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00",
            "room_name": "TABLE 002",
            "guest_id": "3",
            "guest_name": "John"
        },
        {
            "id": "64",
            "hotel_id": "8",
            "name": "TABLE 003",
            "device_id": "7",
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "2015-01-01 17:07:54",
            "room_name": "TABLE 003",
            "guest_id": "4",
            "guest_name": "Dave"
        },
        {
            "id": "56",
            "hotel_id": "8",
            "name": "ONDA",
            "device_id": "4",
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "2014-12-20 14:18:17",
            "room_name": "ONDA",
            "guest_id": "10",
            "guest_name": "Ronaldo"
        },
        {
            "id": "72",
            "hotel_id": "8",
            "name": "VIP ROOM",
            "device_id": "8",
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00",
            "room_name": "VIP ROOM",
            "guest_id": "11",
            "guest_name": "Messi"
        },
        {
            "id": "73",
            "hotel_id": "8",
            "name": "HotTab Room",
            "device_id": "5",
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00",
            "room_name": "HotTab Room",
            "guest_id": "12",
            "guest_name": "Brian"
        }
    ]
}

```

