##Delete many rooms##


**Url**
<code>DELETE</code>api.hottab.pw/admin/rooms/multi?token=b28e0d3404612f099cb1063ea38e9f17&hotel_id=8&room_ids[0]=219&room_ids[1]=220


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8
<code>room_ids<code> Array


**Request data**
[]


Response:

```
{
    "error": false,
    "message": "rooms.rooms_deleted"
}

```

##Get Room Preferences##
Current room preferences.

- used to edit room preferences

**Url**
<code>GET</code>api.hottab.pw/admin/room-preferences/2?token=5560674da289db440e9a16f47b15d45c&hotel_id=2


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 2


**Request data**
{
    "token": "5560674da289db440e9a16f47b15d45c",
    "hotel_id": "3",
    "item[0][url]": "http:\/\/admin.hottab.pw\/uploads\/1\/gallery_t3KarSGe.jpg",
    "item[0][caption]": "Sample caption",
    "item[1][url]": "http:\/\/admin.hottab.pw\/uploads\/1\/gallery_t3KarSGe.jpg",
    "item[1][caption]": "Sample caption 2"
}


Response:

```


```

##Set default table##
there are 2 params:
id : id of room
is_default: 0 || 1

**Url**
<code>PUT</code>api.hottab.pw/admin/rooms/164/default/0?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDEyNDc4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODMyNjA3OCIsIm5iZiI6IjE0MzgzMjYwNzgiLCJqdGkiOiIxZTcxOWM4YWU1MzkxZWQ1ZjdmMzNjMDc3ODU4NDMwOSJ9.NjUzOTM5ODk3ZTI5NGMwYTUwYWU5MjRjMmQyMTI4ZTIxMDJiYjA1MmFjZmNlNjU3NDBlNDFmMWE1NzNkNDQzNA


**Parameters**
<code>token</code> $token


**Request data**
[]


Response:

```


```

##Update a room##


**Url**
<code>POST</code>api.hottab.pw/admin/rooms/222?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQyODM4MjgxMiIsImV4cCI6IjE0Mjg0NjkyMTIiLCJuYmYiOiIxNDI4MzgyODEyIiwianRpIjoiMzM1MmZkMjBmNDBjNTdlYz


**Parameters**
<code>token</code> $token


**Request data**
{
    "number_of_rooms": "3",
    "name": "ch\u00e9m gi\u00f3",
    "_method": "PUT",
    "tags[0][name]": "T\u1ea7ng 1",
    "is_default": "1"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 222,
        "hotel_id": 8,
        "name": "ch\u00e9m gi\u00f3",
        "device_id": null,
        "created_at": "2015-03-11 16:38:16",
        "updated_at": "2015-03-12 11:49:47",
        "tags": [
            {
                "id": 15,
                "name": "T\u1ea7ng 1"
            }
        ]
    }
}

```

##Create Rooms##


**Url**
<code>POST</code>api.hottab.pw/admin/rooms?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQyODY1NTcwOSIsImV4cCI6IjE0Mjg3NDIxMDkiLCJuYmYiOiIxNDI4NjU1NzA5IiwianRpIjoiODAxNGUyNTg1NTEyMTUyYzVjMz


**Parameters**
<code>token</code> $token


**Request data**
{
    "rooms[0][name]": "Ph\u00f2ng 1",
    "rooms[1][name]": "Ph\u00f2ng 2",
    "rooms[2][name]": "Ph\u00f2ng 3",
    "rooms[1][is_default]": "1"
}


Response:

```
{
    "error": false,
    "data": [
        {
            "name": "Room(table)010",
            "hotel_id": 8,
            "updated_at": "2015-03-11 16:39:43",
            "created_at": "2015-03-11 16:39:43",
            "id": 224
        },
        {
            "name": "Room(table)011",
            "hotel_id": 8,
            "updated_at": "2015-03-11 16:39:43",
            "created_at": "2015-03-11 16:39:43",
            "id": 225
        },
        {
            "name": "Room(table)012",
            "hotel_id": 8,
            "updated_at": "2015-03-11 16:39:43",
            "created_at": "2015-03-11 16:39:43",
            "id": 226
        }
    ]
}

```

##Delete a room##


**Url**
<code>DELETE</code>api.hottab.pw/admin/rooms/221?token=b28e0d3404612f099cb1063ea38e9f17&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
[]


Response:

```
{
    "error": false,
    "message": "rooms.deleted"
}

```

##List of rooms##
Emtyp tag name & id include rooms which not belog to any tag

**Url**
<code>GET</code>api.hottab.pw/admin/rooms?token=b28e0d3404612f099cb1063ea38e9f17&hotel_id=8


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
            "id": 164,
            "hotel_id": 8,
            "name": "P 103",
            "device_id": 7,
            "created_at": "2015-03-14 11:23:37",
            "updated_at": "2015-06-15 17:11:46",
            "is_default": 0,
            "room_name": "P 103",
            "number_orders": 32,
            "guest_id": 60,
            "guest_name": "Guest_1427170546",
            "tags": [
                {
                    "id": 9,
                    "name": "T\u1ea7ng 1"
                },
                {
                    "id": 18,
                    "name": "Private"
                }
            ]
        },
        {
            "id": 72,
            "hotel_id": 8,
            "name": "VIP ROOM 3",
            "device_id": 6,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "2015-06-15 17:11:46",
            "is_default": 0,
            "room_name": "VIP ROOM 3",
            "number_orders": 13,
            "guest_id": 57,
            "guest_name": "Guest_1427169524",
            "tags": [
                {
                    "id": 17,
                    "name": "VIP"
                }
            ]
        },
        {
            "id": 186,
            "hotel_id": 8,
            "name": 205,
            "device_id": null,
            "created_at": "2015-04-10 16:30:46",
            "updated_at": "2015-06-15 17:11:46",
            "is_default": 0,
            "room_name": 205,
            "number_orders": 1,
            "guest_id": 82,
            "guest_name": "Guest_1428658247",
            "tags": [
                {
                    "id": 10,
                    "name": "T\u1ea7ng 2"
                }
            ]
        },
        {
            "id": 187,
            "hotel_id": 8,
            "name": "asdf",
            "device_id": 26,
            "created_at": "2015-04-12 15:49:24",
            "updated_at": "2015-07-09 18:00:38",
            "is_default": 0,
            "room_name": "asdf",
            "number_orders": 1,
            "guest_id": 92,
            "guest_name": "Guest_1436439638",
            "tags": []
        },
        {
            "id": 163,
            "hotel_id": 8,
            "name": "P1",
            "device_id": 5,
            "created_at": "2015-03-13 16:40:51",
            "updated_at": "2015-07-03 22:42:54",
            "is_default": 0,
            "room_name": "P1",
            "number_orders": 0,
            "guest_id": 91,
            "guest_name": "Guest_1435938174",
            "tags": [
                {
                    "id": 17,
                    "name": "VIP"
                }
            ]
        },
        {
            "id": 188,
            "hotel_id": 8,
            "name": "Take Away",
            "device_id": null,
            "created_at": "2015-04-14 17:44:55",
            "updated_at": "2015-07-03 22:42:54",
            "is_default": 0,
            "room_name": "Take Away",
            "number_orders": 0,
            "guest_id": null,
            "guest_name": null,
            "tags": []
        }
    ]
}

```

##View a room##


**Url**
<code>GET</code>api.hottab.pw/admin/rooms/222?token=b28e0d3404612f099cb1063ea38e9f17&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


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
        "id": 164,
        "hotel_id": 8,
        "name": "ch\u00e9m gi\u00f3",
        "device_id": 7,
        "created_at": "2015-03-14 11:23:37",
        "updated_at": "2015-07-31 15:57:18",
        "is_default": 1,
        "tags": [
            {
                "id": 9,
                "name": "T\u1ea7ng 1"
            }
        ]
    }
}

```

##List of rooms grouped by Tags##


**Url**
<code>GET</code>api.hottab.pw/admin/rooms/tags?token=b28e0d3404612f099cb1063ea38e9f17&hotel_id=8


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
            "name": "T\u1ea7ng 1",
            "rooms": [
                {
                    "id": 164,
                    "hotel_id": 8,
                    "name": "ch\u00e9m gi\u00f3",
                    "device_id": 7,
                    "created_at": "2015-03-14 11:23:37",
                    "updated_at": "2015-07-31 15:57:18",
                    "is_default": 1,
                    "room_name": "ch\u00e9m gi\u00f3",
                    "guest_id": 26,
                    "guest_name": "Guest_1426307018",
                    "tags": [
                        {
                            "id": 9,
                            "name": "T\u1ea7ng 1"
                        }
                    ]
                }
            ]
        },
        {
            "id": 10,
            "name": "T\u1ea7ng 2",
            "rooms": [
                {
                    "id": 186,
                    "hotel_id": 8,
                    "name": 205,
                    "device_id": null,
                    "created_at": "2015-04-10 16:30:46",
                    "updated_at": "2015-07-31 15:57:18",
                    "is_default": 0,
                    "room_name": 205,
                    "guest_id": 82,
                    "guest_name": "Guest_1428658247",
                    "tags": [
                        {
                            "id": 10,
                            "name": "T\u1ea7ng 2"
                        }
                    ]
                }
            ]
        },
        {
            "id": 17,
            "name": "VIP",
            "rooms": [
                {
                    "id": 72,
                    "hotel_id": 8,
                    "name": "VIP ROOM 3",
                    "device_id": 6,
                    "created_at": "-0001-11-30 00:00:00",
                    "updated_at": "2015-07-31 15:57:18",
                    "is_default": 0,
                    "room_name": "VIP ROOM 3",
                    "guest_id": 11,
                    "guest_name": "Messi",
                    "tags": [
                        {
                            "id": 17,
                            "name": "VIP"
                        }
                    ]
                },
                {
                    "id": 163,
                    "hotel_id": 8,
                    "name": "P1",
                    "device_id": 5,
                    "created_at": "2015-03-13 16:40:51",
                    "updated_at": "2015-07-31 15:57:18",
                    "is_default": 0,
                    "room_name": "P1",
                    "guest_id": 25,
                    "guest_name": "Guest_1426239651",
                    "tags": [
                        {
                            "id": 17,
                            "name": "VIP"
                        }
                    ]
                }
            ]
        },
        {
            "id": null,
            "name": null,
            "rooms": [
                {
                    "id": 187,
                    "hotel_id": 8,
                    "name": "asdf",
                    "device_id": 26,
                    "created_at": "2015-04-12 15:49:24",
                    "updated_at": "2015-07-31 15:57:18",
                    "is_default": 0,
                    "room_name": "asdf",
                    "guest_id": 83,
                    "guest_name": "Guest_1428828565",
                    "tags": []
                },
                {
                    "id": 188,
                    "hotel_id": 8,
                    "name": "Take Away",
                    "device_id": null,
                    "created_at": "2015-04-14 17:44:55",
                    "updated_at": "2015-07-31 15:57:18",
                    "is_default": 0,
                    "room_name": "Take Away",
                    "guest_id": 84,
                    "guest_name": "Guest_1429008295",
                    "tags": []
                },
                {
                    "id": 193,
                    "hotel_id": 8,
                    "name": "Ph\u00f2ng 1",
                    "device_id": null,
                    "created_at": "2015-07-31 15:56:13",
                    "updated_at": "2015-07-31 15:57:18",
                    "is_default": 0,
                    "room_name": "Ph\u00f2ng 1",
                    "guest_id": 93,
                    "guest_name": "Guest_1438332973",
                    "tags": []
                },
                {
                    "id": 194,
                    "hotel_id": 8,
                    "name": "Ph\u00f2ng 2",
                    "device_id": null,
                    "created_at": "2015-07-31 15:56:13",
                    "updated_at": "2015-07-31 15:57:18",
                    "is_default": 0,
                    "room_name": "Ph\u00f2ng 2",
                    "guest_id": 94,
                    "guest_name": "Guest_1438332973",
                    "tags": []
                }
            ]
        }
    ]
}

```

##Delete a Room Preferences##
Delete a room preference field by id

**Url**
<code>DELETE</code>api.hottab.pw/admin/room-preferences/2?token=5560674da289db440e9a16f47b15d45c&hotel_id=2


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 2


**Request data**
[]


Response:

```


```

##List of room tags##


**Url**
<code>GET</code>api.hottab.pw/admin/tags?token=b28e0d3404612f099cb1063ea38e9f17&hotel_id=8&type=2


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8
<code>type<code> 2


**Request data**
[]


Response:

```
{
    "error": false,
    "data": [
        {
            "id": 9,
            "type": 2,
            "hotel_id": 8,
            "created_at": "2015-03-12 15:12:17",
            "updated_at": "2015-03-12 15:12:17",
            "name": "T\u1ea7ng 1"
        },
        {
            "id": 10,
            "type": 2,
            "hotel_id": 8,
            "created_at": "2015-03-13 13:55:12",
            "updated_at": "2015-03-13 13:55:12",
            "name": "T\u1ea7ng 2"
        },
        {
            "id": 16,
            "type": 2,
            "hotel_id": 8,
            "created_at": "2015-03-13 14:13:02",
            "updated_at": "2015-03-13 14:13:02",
            "name": "T\u1ea7ng 3"
        },
        {
            "id": 17,
            "type": 2,
            "hotel_id": 8,
            "created_at": "2015-03-13 14:13:06",
            "updated_at": "2015-03-13 14:13:06",
            "name": "VIP"
        },
        {
            "id": 18,
            "type": 2,
            "hotel_id": 8,
            "created_at": "2015-03-13 16:40:33",
            "updated_at": "2015-03-13 16:40:33",
            "name": "Private"
        }
    ]
}

```

##List of rooms by Tag ID##


**Url**
<code>GET</code>api.hottab.pw/admin/rooms/tags/15?token=b28e0d3404612f099cb1063ea38e9f17&hotel_id=8.


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8.


**Request data**
[]


Response:

```
{
    "error": false,
    "data": {
        "id": 9,
        "type": 2,
        "hotel_id": 8,
        "created_at": "2015-03-12 15:12:17",
        "updated_at": "2015-03-12 15:12:17",
        "name": "T\u1ea7ng 1",
        "rooms": [
            {
                "id": 164,
                "hotel_id": 8,
                "name": "ch\u00e9m gi\u00f3",
                "device_id": 7,
                "created_at": "2015-03-14 11:23:37",
                "updated_at": "2015-07-31 15:57:18",
                "is_default": 1,
                "room_name": "ch\u00e9m gi\u00f3",
                "guest_id": 26,
                "guest_name": "Guest_1426307018",
                "tags": [
                    {
                        "id": 9,
                        "name": "T\u1ea7ng 1"
                    }
                ]
            }
        ]
    }
}

```

##Get All Room Preferences##
List of rooms with preferences by hotel_id

**Url**
<code>GET</code>api.hottab.pw/admin/room-preferences?token=5560674da289db440e9a16f47b15d45c&hotel_id=2


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 2


**Request data**
{
    "token": "5560674da289db440e9a16f47b15d45c",
    "hotel_id": "3",
    "item[0][url]": "http:\/\/admin.hottab.pw\/uploads\/1\/gallery_t3KarSGe.jpg",
    "item[0][caption]": "Sample caption",
    "item[1][url]": "http:\/\/admin.hottab.pw\/uploads\/1\/gallery_t3KarSGe.jpg",
    "item[1][caption]": "Sample caption 2"
}


Response:

```


```

##Create & Update Hotel Preferences##
Create of update room preference field

- if has id field : update

- if doesn't have id field : create new



**Url**
<code>POST</code>api.hottab.pw/admin/room-preferences/


**Parameters**
<code>api_hottab_pw/admin/room-preferences/<code> 


**Request data**
{
    "token": "5560674da289db440e9a16f47b15d45c",
    "hotel_id": "2",
    "preferences[0][id]": "1",
    "preferences[0][label]": "Field two",
    "preferences[0][type]": "select",
    "preferences[0][sort_order]": "1",
    "preferences[0][required]": "1",
    "preferences[0][values][0]": "0",
    "preferences[0][values][1]": "1",
    "preferences[0][default_value]": "0",
    "preferences[0][field_options][desc]": "This is test field"
}


Response:

```


```

