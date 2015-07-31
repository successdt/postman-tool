##Get Room & Hotel Information by uuid##
This api is called when app startup.

- Return hotel\_id, room\_id, guest_d

**Url**
<code>GET</code>api.hottab.pw/devices/map?uuid=PC Lah


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "token",
        "value": "fe4a8fc53550eecd63bcbb049a4df3a6",
        "type": "text",
        "enabled": true
    },
    {
        "key": "hotel_id",
        "value": "8",
        "type": "text",
        "enabled": true
    },
    {
        "key": "room_name",
        "value": "HotTab Room",
        "type": "text",
        "enabled": true
    },
    {
        "key": "friendly_uuid",
        "value": "CUBE 9x",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":{"id":"5","uuid":"PC lah","friendly_uuid":"PC lah","hotel_id":"8","status":"1","balance":"1772.59","created_at":"-0001-11-30 00:00:00","updated_at":"2015-02-25 13:13:35","room_id":"73","room_name":"HotTab Room","guest_id":"12"}}

```

