##Delete Guest##


**Url**
<code>DELETE</code>api.hottab.pw/admin/guests/14?token=fe4a8fc53550eecd63bcbb049a4df3a6&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
[]


Response:

```
{
    "error": false,
    "message": "guest.deleted"
}

```

##Get list guests##


**Url**
<code>GET</code>api.hottab.pw/admin/guests?token=fe4a8fc53550eecd63bcbb049a4df3a6&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "password": "123456",
    "email": "successdt@gmail.com"
}


Response:

```
{
    "error": false,
    "data": [
        {
            "id": 1,
            "name": "Hottab User",
            "room_id": 5,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00",
            "status": 1
        },
        {
            "id": 2,
            "name": "Hottab Guest",
            "room_id": 2,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00",
            "status": 1
        },
        {
            "id": 3,
            "name": "John",
            "room_id": 63,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00",
            "status": 1
        },
        {
            "id": 4,
            "name": "Dave",
            "room_id": 64,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "2015-03-06 14:06:40",
            "status": 2
        },
        {
            "id": 5,
            "name": "David",
            "room_id": 65,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00",
            "status": 1
        },
        {
            "id": 6,
            "name": "Dove",
            "room_id": 66,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00",
            "status": 1
        },
        {
            "id": 7,
            "name": "Jessica",
            "room_id": 67,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00",
            "status": 1
        },
        {
            "id": 8,
            "name": "Brave",
            "room_id": 68,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00",
            "status": 1
        },
        {
            "id": 9,
            "name": "Lara",
            "room_id": 69,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00",
            "status": 1
        },
        {
            "id": 10,
            "name": "Ronaldo",
            "room_id": 56,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "-0001-11-30 00:00:00",
            "status": 1
        },
        {
            "id": 11,
            "name": "Messi",
            "room_id": 72,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "2015-03-23 11:26:07",
            "status": 2
        },
        {
            "id": 12,
            "name": "Brian",
            "room_id": 73,
            "created_at": "-0001-11-30 00:00:00",
            "updated_at": "2015-03-23 11:26:52",
            "status": 2
        },
        {
            "id": 15,
            "name": "Guest_1425625713",
            "room_id": 64,
            "created_at": "2015-03-06 14:08:33",
            "updated_at": "2015-03-06 14:08:50",
            "status": 2
        },
        {
            "id": 16,
            "name": "Guest_1425625730",
            "room_id": 155,
            "created_at": "2015-03-06 14:08:50",
            "updated_at": "2015-03-06 14:09:55",
            "status": 2
        },
        {
            "id": 17,
            "name": "Guest_1425625795",
            "room_id": 64,
            "created_at": "2015-03-06 14:09:55",
            "updated_at": "2015-03-06 14:09:55",
            "status": 1
        },
        {
            "id": 18,
            "name": "Guest_1426237668",
            "room_id": 156,
            "created_at": "2015-03-13 16:07:48",
            "updated_at": "2015-03-23 15:23:59",
            "status": 2
        },
        {
            "id": 19,
            "name": "Guest_1426238638",
            "room_id": 157,
            "created_at": "2015-03-13 16:23:58",
            "updated_at": "2015-03-13 16:23:58",
            "status": 1
        },
        {
            "id": 20,
            "name": "Guest_1426238740",
            "room_id": 158,
            "created_at": "2015-03-13 16:25:40",
            "updated_at": "2015-03-13 16:25:40",
            "status": 1
        },
        {
            "id": 21,
            "name": "Guest_1426238803",
            "room_id": 159,
            "created_at": "2015-03-13 16:26:43",
            "updated_at": "2015-03-23 13:56:50",
            "status": 2
        },
        {
            "id": 22,
            "name": "Guest_1426239486",
            "room_id": 160,
            "created_at": "2015-03-13 16:38:06",
            "updated_at": "2015-03-23 15:45:48",
            "status": 2
        },
        {
            "id": 23,
            "name": "Guest_1426239492",
            "room_id": 161,
            "created_at": "2015-03-13 16:38:12",
            "updated_at": "2015-03-23 15:40:17",
            "status": 2
        },
        {
            "id": 24,
            "name": "Guest_1426239501",
            "room_id": 162,
            "created_at": "2015-03-13 16:38:21",
            "updated_at": "2015-03-13 16:38:21",
            "status": 1
        },
        {
            "id": 25,
            "name": "Guest_1426239651",
            "room_id": 163,
            "created_at": "2015-03-13 16:40:51",
            "updated_at": "2015-03-23 15:50:11",
            "status": 2
        },
        {
            "id": 26,
            "name": "Guest_1426307018",
            "room_id": 164,
            "created_at": "2015-03-14 11:23:38",
            "updated_at": "2015-03-23 14:34:12",
            "status": 2
        },
        {
            "id": 27,
            "name": "Guest_1426324836",
            "room_id": 165,
            "created_at": "2015-03-14 16:20:36",
            "updated_at": "2015-03-23 11:47:42",
            "status": 2
        },
        {
            "id": 28,
            "name": "Guest_1427084767",
            "room_id": 166,
            "created_at": "2015-03-23 11:26:07",
            "updated_at": "2015-03-23 11:26:07",
            "status": 1
        },
        {
            "id": 29,
            "name": "Guest_1427084812",
            "room_id": 167,
            "created_at": "2015-03-23 11:26:52",
            "updated_at": "2015-03-23 11:26:52",
            "status": 1
        },
        {
            "id": 30,
            "name": "Guest_1427086062",
            "room_id": 168,
            "created_at": "2015-03-23 11:47:42",
            "updated_at": "2015-03-23 11:47:42",
            "status": 1
        },
        {
            "id": 31,
            "name": "Guest_1427091029",
            "room_id": 73,
            "created_at": "2015-03-23 13:10:29",
            "updated_at": "2015-03-23 13:10:29",
            "status": 1
        },
        {
            "id": 32,
            "name": "Guest_1427091112",
            "room_id": 159,
            "created_at": "2015-03-23 13:11:52",
            "updated_at": "2015-03-23 13:56:50",
            "status": 2
        },
        {
            "id": 33,
            "name": "Guest_1427091137",
            "room_id": 162,
            "created_at": "2015-03-23 13:12:17",
            "updated_at": "2015-03-23 13:12:17",
            "status": 1
        },
        {
            "id": 34,
            "name": "Guest_1427093810",
            "room_id": 169,
            "created_at": "2015-03-23 13:56:50",
            "updated_at": "2015-03-23 13:56:50",
            "status": 1
        },
        {
            "id": 35,
            "name": "Guest_1427094008",
            "room_id": 170,
            "created_at": "2015-03-23 14:00:08",
            "updated_at": "2015-03-23 14:00:08",
            "status": 1
        },
        {
            "id": 36,
            "name": "Guest_1427095932",
            "room_id": 156,
            "created_at": "2015-03-23 14:32:12",
            "updated_at": "2015-03-23 15:23:59",
            "status": 2
        },
        {
            "id": 37,
            "name": "Guest_1427096042",
            "room_id": 164,
            "created_at": "2015-03-23 14:34:02",
            "updated_at": "2015-03-23 14:34:12",
            "status": 2
        },
        {
            "id": 38,
            "name": "Guest_1427096052",
            "room_id": 164,
            "created_at": "2015-03-23 14:34:12",
            "updated_at": "2015-03-23 14:36:39",
            "status": 2
        },
        {
            "id": 39,
            "name": "Guest_1427096199",
            "room_id": 163,
            "created_at": "2015-03-23 14:36:39",
            "updated_at": "2015-03-23 15:50:11",
            "status": 2
        },
        {
            "id": 40,
            "name": "Guest_1427099039",
            "room_id": 161,
            "created_at": "2015-03-23 15:23:59",
            "updated_at": "2015-03-23 15:40:17",
            "status": 2
        },
        {
            "id": 41,
            "name": "Guest_1427100017",
            "room_id": 156,
            "created_at": "2015-03-23 15:40:17",
            "updated_at": "2015-03-23 15:40:34",
            "status": 2
        },
        {
            "id": 42,
            "name": "Guest_1427100034",
            "room_id": 160,
            "created_at": "2015-03-23 15:40:34",
            "updated_at": "2015-03-23 15:45:48",
            "status": 2
        },
        {
            "id": 43,
            "name": "Guest_1427100348",
            "room_id": 165,
            "created_at": "2015-03-23 15:45:48",
            "updated_at": "2015-03-23 16:37:15",
            "status": 2
        },
        {
            "id": 44,
            "name": "Guest_1427100611",
            "room_id": 163,
            "created_at": "2015-03-23 15:50:11",
            "updated_at": "2015-03-23 16:37:29",
            "status": 2
        },
        {
            "id": 45,
            "name": "Guest_1427103435",
            "room_id": 156,
            "created_at": "2015-03-23 16:37:15",
            "updated_at": "2015-03-23 18:38:06",
            "status": 2
        },
        {
            "id": 46,
            "name": "Guest_1427103449",
            "room_id": 72,
            "created_at": "2015-03-23 16:37:29",
            "updated_at": "2015-03-23 18:37:41",
            "status": 2
        },
        {
            "id": 47,
            "name": "Guest_1427103470",
            "room_id": 161,
            "created_at": "2015-03-23 16:37:50",
            "updated_at": "2015-03-23 18:34:57",
            "status": 2
        },
        {
            "id": 48,
            "name": "Guest_1427103505",
            "room_id": 164,
            "created_at": "2015-03-23 16:38:25",
            "updated_at": "2015-03-23 16:38:35",
            "status": 2
        },
        {
            "id": 49,
            "name": "Guest_1427103515",
            "room_id": 165,
            "created_at": "2015-03-23 16:38:35",
            "updated_at": "2015-03-23 22:52:26",
            "status": 2
        },
        {
            "id": 50,
            "name": "Guest_1427103569",
            "room_id": 160,
            "created_at": "2015-03-23 16:39:29",
            "updated_at": "2015-03-24 11:01:44",
            "status": 2
        },
        {
            "id": 51,
            "name": "Guest_1427110497",
            "room_id": 161,
            "created_at": "2015-03-23 18:34:57",
            "updated_at": "2015-03-24 10:58:29",
            "status": 2
        },
        {
            "id": 52,
            "name": "Guest_1427110693",
            "room_id": 156,
            "created_at": "2015-03-23 18:38:13",
            "updated_at": "2015-03-24 11:01:56",
            "status": 2
        },
        {
            "id": 53,
            "name": "Guest_1427110696",
            "room_id": 163,
            "created_at": "2015-03-23 18:38:16",
            "updated_at": "2015-07-03 22:42:44",
            "status": 2
        },
        {
            "id": 54,
            "name": "Guest_1427125956",
            "room_id": 164,
            "created_at": "2015-03-23 22:52:36",
            "updated_at": "2015-03-23 22:52:47",
            "status": 2
        },
        {
            "id": 55,
            "name": "Guest_1427125967",
            "room_id": 165,
            "created_at": "2015-03-23 22:52:47",
            "updated_at": "2015-03-23 22:52:47",
            "status": 1
        },
        {
            "id": 56,
            "name": "Guest_1427169509",
            "room_id": 161,
            "created_at": "2015-03-24 10:58:29",
            "updated_at": "2015-03-24 10:58:44",
            "status": 2
        },
        {
            "id": 57,
            "name": "Guest_1427169524",
            "room_id": 72,
            "created_at": "2015-03-24 10:58:44",
            "updated_at": "2015-03-24 10:58:44",
            "status": 1
        },
        {
            "id": 58,
            "name": "Guest_1427169704",
            "room_id": 161,
            "created_at": "2015-03-24 11:01:44",
            "updated_at": "2015-04-01 13:36:13",
            "status": 2
        },
        {
            "id": 59,
            "name": "Guest_1427169716",
            "room_id": 160,
            "created_at": "2015-03-24 11:01:56",
            "updated_at": "2015-03-24 11:15:46",
            "status": 2
        },
        {
            "id": 60,
            "name": "Guest_1427170546",
            "room_id": 164,
            "created_at": "2015-03-24 11:15:46",
            "updated_at": "2015-03-24 11:15:46",
            "status": 1
        },
        {
            "id": 61,
            "name": "Guest_1427870173",
            "room_id": 161,
            "created_at": "2015-04-01 13:36:13",
            "updated_at": "2015-04-01 13:36:13",
            "status": 1
        },
        {
            "id": 62,
            "name": "Guest_1428468771",
            "room_id": 166,
            "created_at": "2015-04-08 11:52:51",
            "updated_at": "2015-04-08 11:52:51",
            "status": 1
        },
        {
            "id": 63,
            "name": "Guest_1428656545",
            "room_id": 167,
            "created_at": "2015-04-10 16:02:25",
            "updated_at": "2015-04-10 16:02:25",
            "status": 1
        },
        {
            "id": 64,
            "name": "Guest_1428656717",
            "room_id": 168,
            "created_at": "2015-04-10 16:05:17",
            "updated_at": "2015-04-10 16:05:17",
            "status": 1
        },
        {
            "id": 65,
            "name": "Guest_1428656751",
            "room_id": 169,
            "created_at": "2015-04-10 16:05:51",
            "updated_at": "2015-04-10 16:05:51",
            "status": 1
        },
        {
            "id": 66,
            "name": "Guest_1428656901",
            "room_id": 170,
            "created_at": "2015-04-10 16:08:21",
            "updated_at": "2015-04-10 16:08:21",
            "status": 1
        },
        {
            "id": 67,
            "name": "Guest_1428656948",
            "room_id": 171,
            "created_at": "2015-04-10 16:09:08",
            "updated_at": "2015-04-10 16:09:08",
            "status": 1
        },
        {
            "id": 68,
            "name": "Guest_1428657009",
            "room_id": 172,
            "created_at": "2015-04-10 16:10:09",
            "updated_at": "2015-04-10 16:10:09",
            "status": 1
        },
        {
            "id": 69,
            "name": "Guest_1428657051",
            "room_id": 173,
            "created_at": "2015-04-10 16:10:51",
            "updated_at": "2015-04-10 16:10:51",
            "status": 1
        },
        {
            "id": 70,
            "name": "Guest_1428657061",
            "room_id": 174,
            "created_at": "2015-04-10 16:11:01",
            "updated_at": "2015-04-10 16:11:01",
            "status": 1
        },
        {
            "id": 71,
            "name": "Guest_1428657198",
            "room_id": 175,
            "created_at": "2015-04-10 16:13:18",
            "updated_at": "2015-04-10 16:13:18",
            "status": 1
        },
        {
            "id": 72,
            "name": "Guest_1428657224",
            "room_id": 176,
            "created_at": "2015-04-10 16:13:44",
            "updated_at": "2015-04-10 16:13:44",
            "status": 1
        },
        {
            "id": 73,
            "name": "Guest_1428657268",
            "room_id": 177,
            "created_at": "2015-04-10 16:14:28",
            "updated_at": "2015-04-10 16:14:28",
            "status": 1
        },
        {
            "id": 74,
            "name": "Guest_1428657349",
            "room_id": 178,
            "created_at": "2015-04-10 16:15:49",
            "updated_at": "2015-04-10 16:15:49",
            "status": 1
        },
        {
            "id": 75,
            "name": "Guest_1428657390",
            "room_id": 179,
            "created_at": "2015-04-10 16:16:30",
            "updated_at": "2015-04-10 16:16:30",
            "status": 1
        },
        {
            "id": 76,
            "name": "Guest_1428657399",
            "room_id": 180,
            "created_at": "2015-04-10 16:16:39",
            "updated_at": "2015-04-10 16:16:39",
            "status": 1
        },
        {
            "id": 77,
            "name": "Guest_1428657815",
            "room_id": 181,
            "created_at": "2015-04-10 16:23:35",
            "updated_at": "2015-04-10 16:23:35",
            "status": 1
        },
        {
            "id": 78,
            "name": "Guest_1428657846",
            "room_id": 182,
            "created_at": "2015-04-10 16:24:06",
            "updated_at": "2015-04-10 16:24:06",
            "status": 1
        },
        {
            "id": 79,
            "name": "Guest_1428657885",
            "room_id": 183,
            "created_at": "2015-04-10 16:24:45",
            "updated_at": "2015-04-10 16:24:45",
            "status": 1
        },
        {
            "id": 80,
            "name": "Guest_1428658003",
            "room_id": 184,
            "created_at": "2015-04-10 16:26:43",
            "updated_at": "2015-04-10 16:26:43",
            "status": 1
        },
        {
            "id": 81,
            "name": "Guest_1428658175",
            "room_id": 185,
            "created_at": "2015-04-10 16:29:35",
            "updated_at": "2015-04-10 16:29:35",
            "status": 1
        },
        {
            "id": 82,
            "name": "Guest_1428658247",
            "room_id": 186,
            "created_at": "2015-04-10 16:30:47",
            "updated_at": "2015-04-10 16:30:47",
            "status": 1
        },
        {
            "id": 83,
            "name": "Guest_1428828565",
            "room_id": 187,
            "created_at": "2015-04-12 15:49:25",
            "updated_at": "2015-06-03 15:40:22",
            "status": 2
        },
        {
            "id": 84,
            "name": "Guest_1429008295",
            "room_id": 188,
            "created_at": "2015-04-14 17:44:55",
            "updated_at": "2015-07-03 22:42:54",
            "status": 2
        },
        {
            "id": 85,
            "name": "Guest_1432890399",
            "room_id": 190,
            "created_at": "2015-05-29 16:06:39",
            "updated_at": "2015-05-29 16:06:39",
            "status": 1
        },
        {
            "id": 86,
            "name": "Guest_1432890399",
            "room_id": 191,
            "created_at": "2015-05-29 16:06:39",
            "updated_at": "2015-05-29 16:06:39",
            "status": 1
        },
        {
            "id": 87,
            "name": "Guest_1432890399",
            "room_id": 192,
            "created_at": "2015-05-29 16:06:39",
            "updated_at": "2015-05-29 16:06:39",
            "status": 1
        },
        {
            "id": 88,
            "name": "Guest_1433316960",
            "room_id": 164,
            "created_at": "2015-06-03 14:36:00",
            "updated_at": "2015-06-03 14:36:00",
            "status": 1
        },
        {
            "id": 89,
            "name": "Guest_1433316986",
            "room_id": 187,
            "created_at": "2015-06-03 14:36:26",
            "updated_at": "2015-06-03 15:40:22",
            "status": 2
        },
        {
            "id": 90,
            "name": "Guest_1435938160",
            "room_id": 188,
            "created_at": "2015-07-03 22:42:40",
            "updated_at": "2015-07-03 22:42:54",
            "status": 2
        },
        {
            "id": 91,
            "name": "Guest_1435938174",
            "room_id": 163,
            "created_at": "2015-07-03 22:42:54",
            "updated_at": "2015-07-03 22:42:54",
            "status": 1
        },
        {
            "id": 92,
            "name": "Guest_1436439638",
            "room_id": 187,
            "created_at": "2015-07-09 18:00:38",
            "updated_at": "2015-07-09 18:00:38",
            "status": 1
        }
    ]
}

```

##View Guests by room_id##


**Url**
<code>GET</code>api.hottab.pw/admin/rooms/63/guests?token=fe4a8fc53550eecd63bcbb049a4df3a6&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "password": "123456",
    "email": "successdt@gmail.com"
}


Response:

```
[
    {
        "id": "3",
        "name": "John",
        "room_id": "63",
        "created_at": "-0001-11-30 00:00:00",
        "updated_at": "-0001-11-30 00:00:00",
        "status": "1"
    }
]

```

##Create guest##


**Url**
<code>POST</code>api.hottab.pw/admin/guests?token=fe4a8fc53550eecd63bcbb049a4df3a6&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "name": "Bravo",
    "room_id": "63"
}


Response:

```
{
    "error": false,
    "data": {
        "name": "Bravo",
        "room_id": "63",
        "updated_at": "2015-02-25 16:12:59",
        "created_at": "2015-02-25 16:12:59",
        "id": 13
    }
}

```

##Update guest##


**Url**
<code>POST</code>api.hottab.pw/admin/guests/13?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDEyNDc4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODMyNjA3OCIsIm5iZiI6IjE0MzgzMjYwNzgiLCJqdGkiOiIxZTcxOWM4YWU1MzkxZWQ1ZjdmMzNjMDc3ODU4NDMwOSJ9.NjUzOTM5ODk3ZTI5NGMwYTUwYWU5MjRjMmQyMTI4ZTIxMDJiYjA1MmFjZmNlNjU3NDBlNDFmMWE1NzNkNDQzNA&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "name": "Claudio Bravo",
    "room_id": "63",
    "_method": "PUT"
}


Response:

```
{
    "error": true,
    "message": "No query results for model [Room]."
}

```

