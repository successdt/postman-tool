##List Food Categories##
list all food categories of hotel, URL Params :

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/admin/food-categories?hotel_id=8&lang=vi&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDEyNDc4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODMyNjA3OCIsIm5iZiI6IjE0MzgzMjYwNzgiLCJqdGkiOiIxZTcxOWM4YWU1MzkxZWQ1ZjdmMzNjMDc3ODU4NDMwOSJ9.NjUzOTM5ODk3ZTI5NGMwYTUwYWU5MjRjMmQyMTI4ZTIxMDJiYjA1MmFjZmNlNjU3NDBlNDFmMWE1NzNkNDQzNA


**Parameters**
<code>api_hottab_pw/admin/food-categories?hotel_id<code> 8
<code>lang<code> vi
<code>token<code> eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDEyNDc4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODMyNjA3OCIsIm5iZiI6IjE0MzgzMjYwNzgiLCJqdGkiOiIxZTcxOWM4YWU1MzkxZWQ1ZjdmMzNjMDc3ODU4NDMwOSJ9.NjUzOTM5ODk3ZTI5NGMwYTUwYWU5MjRjMmQyMTI4ZTIxMDJiYjA1MmFjZmNlNjU3NDBlNDFmMWE1NzNkNDQzNA


**Request data**
[]


Response:

```
{
    "error": false,
    "data": [
        {
            "id": 101,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-01-09 17:06:00",
            "updated_at": "2015-07-13 17:27:06",
            "parent_id": 165,
            "lft": 46,
            "rgt": 47,
            "depth": 1,
            "type": 1,
            "printer_id": 8,
            "item_order": null,
            "name": "Tr\u00e1ng mi\u1ec7ng",
            "description": null,
            "children": [],
            "printer": null
        },
        {
            "id": 102,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-01-10 11:52:29",
            "updated_at": "2015-07-13 17:27:06",
            "parent_id": 165,
            "lft": 48,
            "rgt": 49,
            "depth": 1,
            "type": 1,
            "printer_id": 13,
            "item_order": null,
            "name": "S\u00fap v\u00e0 Sal\u00e1t",
            "description": null,
            "children": [],
            "printer": null
        },
        {
            "id": 103,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-01-12 13:25:06",
            "updated_at": "2015-07-13 17:27:06",
            "parent_id": 165,
            "lft": 50,
            "rgt": 53,
            "depth": 1,
            "type": 1,
            "printer_id": 14,
            "item_order": null,
            "name": "Th\u1ee9c u\u1ed1ng",
            "description": null,
            "children": [
                {
                    "id": 176,
                    "hotel_id": 8,
                    "icon": "",
                    "status": 1,
                    "created_at": "2015-05-22 16:01:35",
                    "updated_at": "2015-07-13 17:27:06",
                    "parent_id": 103,
                    "lft": 51,
                    "rgt": 52,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 14,
                    "item_order": null,
                    "name": "Tr\u00e0 2222",
                    "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0",
                    "children": [],
                    "printer": null
                }
            ],
            "printer": null
        },
        {
            "id": 272,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-07-11 16:41:46",
            "updated_at": "2015-07-21 14:00:34",
            "parent_id": 165,
            "lft": 56,
            "rgt": 57,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": null,
            "name": "Untitled3",
            "description": "",
            "children": [],
            "printer": null
        },
        {
            "id": 273,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-07-11 16:41:47",
            "updated_at": "2015-07-21 14:01:16",
            "parent_id": 165,
            "lft": 58,
            "rgt": 59,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": null,
            "name": "Untitled4",
            "description": "",
            "children": [],
            "printer": null
        },
        {
            "id": 274,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-07-11 16:41:49",
            "updated_at": "2015-07-21 13:49:54",
            "parent_id": 165,
            "lft": 60,
            "rgt": 61,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": null,
            "name": "Untitled",
            "description": "",
            "children": [],
            "printer": null
        },
        {
            "id": 275,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-07-11 16:41:50",
            "updated_at": "2015-07-21 13:49:54",
            "parent_id": 165,
            "lft": 62,
            "rgt": 63,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": null,
            "name": "Untitled",
            "description": "",
            "children": [],
            "printer": null
        },
        {
            "id": 276,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-07-11 16:41:52",
            "updated_at": "2015-07-21 13:49:54",
            "parent_id": 165,
            "lft": 64,
            "rgt": 65,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": null,
            "name": "Untitled",
            "description": "",
            "children": [],
            "printer": null
        },
        {
            "id": 277,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-07-11 16:44:43",
            "updated_at": "2015-07-21 13:49:54",
            "parent_id": 165,
            "lft": 66,
            "rgt": 67,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": null,
            "name": "Untitled",
            "description": "",
            "children": [],
            "printer": null
        },
        {
            "id": 100,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-01-09 17:05:43",
            "updated_at": "2015-07-21 13:49:54",
            "parent_id": 165,
            "lft": 68,
            "rgt": 79,
            "depth": 1,
            "type": 1,
            "printer_id": 13,
            "item_order": "925,926",
            "name": "M\u00f3n ch\u00ednh",
            "description": null,
            "children": [
                {
                    "id": 217,
                    "hotel_id": 8,
                    "icon": "",
                    "status": 1,
                    "created_at": "2015-05-30 18:14:08",
                    "updated_at": "2015-07-21 13:49:54",
                    "parent_id": 100,
                    "lft": 69,
                    "rgt": 74,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 13,
                    "item_order": null,
                    "name": "Main Sub 01",
                    "description": "",
                    "children": [
                        {
                            "id": 237,
                            "hotel_id": 8,
                            "icon": null,
                            "status": 1,
                            "created_at": "2015-07-04 16:55:04",
                            "updated_at": "2015-07-21 13:49:54",
                            "parent_id": 217,
                            "lft": 70,
                            "rgt": 71,
                            "depth": 3,
                            "type": 1,
                            "printer_id": 13,
                            "item_order": null,
                            "name": "Tr\u00e0",
                            "description": "Tr\u00e0 \u0111\u00e1 c\u00e1c lo\u1ea1i",
                            "children": [],
                            "printer": null
                        },
                        {
                            "id": 238,
                            "hotel_id": 8,
                            "icon": null,
                            "status": 1,
                            "created_at": "2015-07-04 16:58:39",
                            "updated_at": "2015-07-21 13:49:54",
                            "parent_id": 217,
                            "lft": 72,
                            "rgt": 73,
                            "depth": 3,
                            "type": 1,
                            "printer_id": 13,
                            "item_order": null,
                            "name": "Tr\u00e0",
                            "description": "Tr\u00e0 \u0111\u00e1 c\u00e1c lo\u1ea1i",
                            "children": [],
                            "printer": null
                        }
                    ],
                    "printer": null
                },
                {
                    "id": 227,
                    "hotel_id": 8,
                    "icon": "",
                    "status": 1,
                    "created_at": "2015-06-23 02:12:48",
                    "updated_at": "2015-07-21 13:49:54",
                    "parent_id": 100,
                    "lft": 75,
                    "rgt": 76,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 13,
                    "item_order": null,
                    "name": "Main Sub 02",
                    "description": "",
                    "children": [],
                    "printer": null
                },
                {
                    "id": 228,
                    "hotel_id": 8,
                    "icon": "",
                    "status": 1,
                    "created_at": "2015-06-23 02:13:03",
                    "updated_at": "2015-07-21 13:49:54",
                    "parent_id": 100,
                    "lft": 77,
                    "rgt": 78,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 13,
                    "item_order": null,
                    "name": "Tr\u00e0 \u0111\u00e1 the deo n\u00e0o",
                    "description": "C\u00e1c lo\u1ea1i tr\u00e0 ccc",
                    "children": [],
                    "printer": null
                }
            ],
            "printer": null
        },
        {
            "id": 99,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-01-09 17:05:15",
            "updated_at": "2015-07-21 13:49:54",
            "parent_id": 165,
            "lft": 80,
            "rgt": 103,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": "925,926",
            "name": "Khai v\u1ecb",
            "description": null,
            "children": [
                {
                    "id": 224,
                    "hotel_id": 8,
                    "icon": "",
                    "status": 1,
                    "created_at": "2015-06-10 17:05:28",
                    "updated_at": "2015-07-21 13:49:54",
                    "parent_id": 99,
                    "lft": 81,
                    "rgt": 82,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 0,
                    "item_order": null,
                    "name": "Ngon vl",
                    "description": "",
                    "children": [],
                    "printer": null
                },
                {
                    "id": 170,
                    "hotel_id": 8,
                    "icon": "",
                    "status": 1,
                    "created_at": "2015-05-22 15:44:22",
                    "updated_at": "2015-07-21 13:49:54",
                    "parent_id": 99,
                    "lft": 83,
                    "rgt": 96,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 0,
                    "item_order": null,
                    "name": "Tr\u00e0 \u0111\u00e1 the deo n\u00e0o",
                    "description": "C\u00e1c lo\u1ea1i tr\u00e0 ccc",
                    "children": [
                        {
                            "id": 173,
                            "hotel_id": 8,
                            "icon": "",
                            "status": 1,
                            "created_at": "2015-05-22 15:51:30",
                            "updated_at": "2015-07-21 13:49:54",
                            "parent_id": 170,
                            "lft": 84,
                            "rgt": 87,
                            "depth": 3,
                            "type": 1,
                            "printer_id": 0,
                            "item_order": null,
                            "name": "B\u00e1nh Ng\u1ecdt 02",
                            "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0",
                            "children": [
                                {
                                    "id": 190,
                                    "hotel_id": 8,
                                    "icon": "",
                                    "status": 1,
                                    "created_at": "2015-05-23 14:34:48",
                                    "updated_at": "2015-07-21 13:49:54",
                                    "parent_id": 173,
                                    "lft": 85,
                                    "rgt": 86,
                                    "depth": 4,
                                    "type": 1,
                                    "printer_id": 0,
                                    "item_order": null,
                                    "name": "Untitled",
                                    "description": "",
                                    "children": [],
                                    "printer": null
                                }
                            ],
                            "printer": null
                        },
                        {
                            "id": 172,
                            "hotel_id": 8,
                            "icon": "",
                            "status": 1,
                            "created_at": "2015-05-22 15:51:25",
                            "updated_at": "2015-07-21 13:49:54",
                            "parent_id": 170,
                            "lft": 88,
                            "rgt": 95,
                            "depth": 3,
                            "type": 1,
                            "printer_id": 0,
                            "item_order": null,
                            "name": "B\u00e1nh Ng\u1ecdt",
                            "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0",
                            "children": [
                                {
                                    "id": 205,
                                    "hotel_id": 8,
                                    "icon": "",
                                    "status": 1,
                                    "created_at": "2015-05-25 01:19:01",
                                    "updated_at": "2015-07-21 13:49:54",
                                    "parent_id": 172,
                                    "lft": 89,
                                    "rgt": 94,
                                    "depth": 4,
                                    "type": 1,
                                    "printer_id": 0,
                                    "item_order": null,
                                    "name": "Ng\u1ecdt nh\u1ea1t g\u00ec?",
                                    "description": "",
                                    "children": [
                                        {
                                            "id": 225,
                                            "hotel_id": 8,
                                            "icon": "",
                                            "status": 1,
                                            "created_at": "2015-06-23 02:07:18",
                                            "updated_at": "2015-07-21 13:49:54",
                                            "parent_id": 205,
                                            "lft": 90,
                                            "rgt": 93,
                                            "depth": 5,
                                            "type": 1,
                                            "printer_id": 0,
                                            "item_order": null,
                                            "name": "Tr\u00e0 Ng\u1ecdt",
                                            "description": "",
                                            "children": [
                                                {
                                                    "id": 226,
                                                    "hotel_id": 8,
                                                    "icon": "",
                                                    "status": 1,
                                                    "created_at": "2015-06-23 02:09:08",
                                                    "updated_at": "2015-07-21 13:49:54",
                                                    "parent_id": 225,
                                                    "lft": 91,
                                                    "rgt": 92,
                                                    "depth": 6,
                                                    "type": 1,
                                                    "printer_id": 0,
                                                    "item_order": null,
                                                    "name": "Tr\u00e0 \u0110\u00e9o G\u00ec N\u1eefa Nh\u1ec9",
                                                    "description": "",
                                                    "children": [],
                                                    "printer": null
                                                }
                                            ],
                                            "printer": null
                                        }
                                    ],
                                    "printer": null
                                }
                            ],
                            "printer": null
                        }
                    ],
                    "printer": null
                },
                {
                    "id": 240,
                    "hotel_id": 8,
                    "icon": null,
                    "status": 1,
                    "created_at": "2015-07-07 16:32:52",
                    "updated_at": "2015-07-21 13:49:54",
                    "parent_id": 99,
                    "lft": 97,
                    "rgt": 98,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 0,
                    "item_order": null,
                    "name": "Tr\u00e0 \u0111\u00e1 the deo n\u00e0o",
                    "description": "C\u00e1c lo\u1ea1i tr\u00e0",
                    "children": [],
                    "printer": null
                },
                {
                    "id": 241,
                    "hotel_id": 8,
                    "icon": null,
                    "status": 1,
                    "created_at": "2015-07-07 16:35:29",
                    "updated_at": "2015-07-21 13:49:54",
                    "parent_id": 99,
                    "lft": 99,
                    "rgt": 100,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 0,
                    "item_order": null,
                    "name": "Tr\u00e0 \u0111\u00e1 the deo n\u00e0o",
                    "description": "C\u00e1c lo\u1ea1i tr\u00e0",
                    "children": [],
                    "printer": null
                },
                {
                    "id": 242,
                    "hotel_id": 8,
                    "icon": null,
                    "status": 1,
                    "created_at": "2015-07-07 16:36:54",
                    "updated_at": "2015-07-21 13:49:54",
                    "parent_id": 99,
                    "lft": 101,
                    "rgt": 102,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 0,
                    "item_order": null,
                    "name": "Tr\u00e0 \u0111\u00e1 the deo n\u00e0o",
                    "description": "C\u00e1c lo\u1ea1i tr\u00e0",
                    "children": [],
                    "printer": null
                }
            ],
            "printer": null
        },
        {
            "id": 270,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-07-11 16:41:43",
            "updated_at": "2015-07-21 13:49:54",
            "parent_id": 165,
            "lft": 104,
            "rgt": 105,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": null,
            "name": "Untitled 1",
            "description": "",
            "children": [],
            "printer": null
        },
        {
            "id": 271,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-07-11 16:41:44",
            "updated_at": "2015-07-21 13:49:54",
            "parent_id": 165,
            "lft": 106,
            "rgt": 107,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": null,
            "name": "Untitled 2",
            "description": "",
            "children": [],
            "printer": null
        }
    ],
    "order": "102,100,99"
}

```

##Order categories##
update existing category, URL Params :

- lang (optional)

**Url**
<code>POST</code>api.hottab.pw/admin/food-categories/order?lang=vi&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMTY2NTk4OCIsImV4cCI6IjE0MzE3NTIzODgiLCJuYmYiOiIxNDMxNjY1OTg4IiwianRpIjoiYzgwYWQwMmE2NmMxZjMwZjkzYmQxMzg5MmIxOGEzMWUifQ.MWY5ODAxNGZmZGNkMWFlOGE0NzA1NzEwZWFjNTRmZTM1MTI3MDY1YWMyMjQ4NzkyYWJiNTIxNzJiMmZmMTdkYQ&hotel_id=8


**Parameters**
<code>api_hottab_pw/admin/food-categories/order?lang<code> vi
<code>token<code> eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMTY2NTk4OCIsImV4cCI6IjE0MzE3NTIzODgiLCJuYmYiOiIxNDMxNjY1OTg4IiwianRpIjoiYzgwYWQwMmE2NmMxZjMwZjkzYmQxMzg5MmIxOGEzMWUifQ.MWY5ODAxNGZmZGNkMWFlOGE0NzA1NzEwZWFjNTRmZTM1MTI3MDY1YWMyMjQ4NzkyYWJiNTIxNzJiMmZmMTdkYQ
<code>hotel_id<code> 8


**Request data**
{
    "children": [
        {
            "id": 99,
            "children": [
                {
                    "id": 227,
                    "children": [
                        {
                            "id": 228
                        }
                    ]
                }
            ]
        },
        {
            "id": 102
        },
        {
            "id": 103
        },
        {
            "id": 100
        },
        {
            "id": 111,
            "children": [
                {
                    "id": 101
                }
            ]
        }
    ]
}


Response:

```
{
    "error": false,
    "data": [
        {
            "id": 101,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-01-09 17:06:00",
            "updated_at": "2015-07-13 17:27:06",
            "parent_id": 165,
            "lft": 46,
            "rgt": 47,
            "depth": 1,
            "type": 1,
            "printer_id": 8,
            "item_order": null,
            "name": "Tr\u00e1ng mi\u1ec7ng",
            "description": null,
            "children": [],
            "printer": null
        },
        {
            "id": 272,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-07-11 16:41:46",
            "updated_at": "2015-07-31 14:21:48",
            "parent_id": 165,
            "lft": 50,
            "rgt": 51,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": null,
            "name": "Untitled3",
            "description": "",
            "children": [],
            "printer": null
        },
        {
            "id": 273,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-07-11 16:41:47",
            "updated_at": "2015-07-31 14:21:48",
            "parent_id": 165,
            "lft": 52,
            "rgt": 53,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": null,
            "name": "Untitled4",
            "description": "",
            "children": [],
            "printer": null
        },
        {
            "id": 274,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-07-11 16:41:49",
            "updated_at": "2015-07-31 14:21:48",
            "parent_id": 165,
            "lft": 54,
            "rgt": 55,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": null,
            "name": "Untitled",
            "description": "",
            "children": [],
            "printer": null
        },
        {
            "id": 275,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-07-11 16:41:50",
            "updated_at": "2015-07-31 14:21:48",
            "parent_id": 165,
            "lft": 56,
            "rgt": 57,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": null,
            "name": "Untitled",
            "description": "",
            "children": [],
            "printer": null
        },
        {
            "id": 276,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-07-11 16:41:52",
            "updated_at": "2015-07-31 14:21:48",
            "parent_id": 165,
            "lft": 58,
            "rgt": 59,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": null,
            "name": "Untitled",
            "description": "",
            "children": [],
            "printer": null
        },
        {
            "id": 277,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-07-11 16:44:43",
            "updated_at": "2015-07-31 14:21:48",
            "parent_id": 165,
            "lft": 60,
            "rgt": 61,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": null,
            "name": "Untitled",
            "description": "",
            "children": [],
            "printer": null
        },
        {
            "id": 270,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-07-11 16:41:43",
            "updated_at": "2015-07-31 14:21:48",
            "parent_id": 165,
            "lft": 62,
            "rgt": 63,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": null,
            "name": "Untitled 1",
            "description": "",
            "children": [],
            "printer": null
        },
        {
            "id": 271,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-07-11 16:41:44",
            "updated_at": "2015-07-31 14:21:48",
            "parent_id": 165,
            "lft": 64,
            "rgt": 65,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": null,
            "name": "Untitled 2",
            "description": "",
            "children": [],
            "printer": null
        },
        {
            "id": 99,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-01-09 17:05:15",
            "updated_at": "2015-07-31 14:21:48",
            "parent_id": 165,
            "lft": 66,
            "rgt": 93,
            "depth": 1,
            "type": 1,
            "printer_id": 0,
            "item_order": "925,926",
            "name": "Khai v\u1ecb",
            "description": null,
            "children": [
                {
                    "id": 224,
                    "hotel_id": 8,
                    "icon": "",
                    "status": 1,
                    "created_at": "2015-06-10 17:05:28",
                    "updated_at": "2015-07-31 14:21:48",
                    "parent_id": 99,
                    "lft": 67,
                    "rgt": 68,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 0,
                    "item_order": null,
                    "name": "Ngon vl",
                    "description": "",
                    "children": [],
                    "printer": null
                },
                {
                    "id": 170,
                    "hotel_id": 8,
                    "icon": "",
                    "status": 1,
                    "created_at": "2015-05-22 15:44:22",
                    "updated_at": "2015-07-31 14:21:48",
                    "parent_id": 99,
                    "lft": 69,
                    "rgt": 82,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 0,
                    "item_order": null,
                    "name": "Tr\u00e0 \u0111\u00e1 the deo n\u00e0o",
                    "description": "C\u00e1c lo\u1ea1i tr\u00e0 ccc",
                    "children": [
                        {
                            "id": 173,
                            "hotel_id": 8,
                            "icon": "",
                            "status": 1,
                            "created_at": "2015-05-22 15:51:30",
                            "updated_at": "2015-07-31 14:21:48",
                            "parent_id": 170,
                            "lft": 70,
                            "rgt": 73,
                            "depth": 3,
                            "type": 1,
                            "printer_id": 0,
                            "item_order": null,
                            "name": "B\u00e1nh Ng\u1ecdt 02",
                            "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0",
                            "children": [
                                {
                                    "id": 190,
                                    "hotel_id": 8,
                                    "icon": "",
                                    "status": 1,
                                    "created_at": "2015-05-23 14:34:48",
                                    "updated_at": "2015-07-31 14:21:48",
                                    "parent_id": 173,
                                    "lft": 71,
                                    "rgt": 72,
                                    "depth": 4,
                                    "type": 1,
                                    "printer_id": 0,
                                    "item_order": null,
                                    "name": "Untitled",
                                    "description": "",
                                    "children": [],
                                    "printer": null
                                }
                            ],
                            "printer": null
                        },
                        {
                            "id": 172,
                            "hotel_id": 8,
                            "icon": "",
                            "status": 1,
                            "created_at": "2015-05-22 15:51:25",
                            "updated_at": "2015-07-31 14:21:48",
                            "parent_id": 170,
                            "lft": 74,
                            "rgt": 81,
                            "depth": 3,
                            "type": 1,
                            "printer_id": 0,
                            "item_order": null,
                            "name": "B\u00e1nh Ng\u1ecdt",
                            "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0",
                            "children": [
                                {
                                    "id": 205,
                                    "hotel_id": 8,
                                    "icon": "",
                                    "status": 1,
                                    "created_at": "2015-05-25 01:19:01",
                                    "updated_at": "2015-07-31 14:21:48",
                                    "parent_id": 172,
                                    "lft": 75,
                                    "rgt": 80,
                                    "depth": 4,
                                    "type": 1,
                                    "printer_id": 0,
                                    "item_order": null,
                                    "name": "Ng\u1ecdt nh\u1ea1t g\u00ec?",
                                    "description": "",
                                    "children": [
                                        {
                                            "id": 225,
                                            "hotel_id": 8,
                                            "icon": "",
                                            "status": 1,
                                            "created_at": "2015-06-23 02:07:18",
                                            "updated_at": "2015-07-31 14:21:48",
                                            "parent_id": 205,
                                            "lft": 76,
                                            "rgt": 79,
                                            "depth": 5,
                                            "type": 1,
                                            "printer_id": 0,
                                            "item_order": null,
                                            "name": "Tr\u00e0 Ng\u1ecdt",
                                            "description": "",
                                            "children": [
                                                {
                                                    "id": 226,
                                                    "hotel_id": 8,
                                                    "icon": "",
                                                    "status": 1,
                                                    "created_at": "2015-06-23 02:09:08",
                                                    "updated_at": "2015-07-31 14:21:48",
                                                    "parent_id": 225,
                                                    "lft": 77,
                                                    "rgt": 78,
                                                    "depth": 6,
                                                    "type": 1,
                                                    "printer_id": 0,
                                                    "item_order": null,
                                                    "name": "Tr\u00e0 \u0110\u00e9o G\u00ec N\u1eefa Nh\u1ec9",
                                                    "description": "",
                                                    "children": [],
                                                    "printer": null
                                                }
                                            ],
                                            "printer": null
                                        }
                                    ],
                                    "printer": null
                                }
                            ],
                            "printer": null
                        }
                    ],
                    "printer": null
                },
                {
                    "id": 240,
                    "hotel_id": 8,
                    "icon": null,
                    "status": 1,
                    "created_at": "2015-07-07 16:32:52",
                    "updated_at": "2015-07-31 14:21:48",
                    "parent_id": 99,
                    "lft": 83,
                    "rgt": 84,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 0,
                    "item_order": null,
                    "name": "Tr\u00e0 \u0111\u00e1 the deo n\u00e0o",
                    "description": "C\u00e1c lo\u1ea1i tr\u00e0",
                    "children": [],
                    "printer": null
                },
                {
                    "id": 241,
                    "hotel_id": 8,
                    "icon": null,
                    "status": 1,
                    "created_at": "2015-07-07 16:35:29",
                    "updated_at": "2015-07-31 14:21:48",
                    "parent_id": 99,
                    "lft": 85,
                    "rgt": 86,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 0,
                    "item_order": null,
                    "name": "Tr\u00e0 \u0111\u00e1 the deo n\u00e0o",
                    "description": "C\u00e1c lo\u1ea1i tr\u00e0",
                    "children": [],
                    "printer": null
                },
                {
                    "id": 242,
                    "hotel_id": 8,
                    "icon": null,
                    "status": 1,
                    "created_at": "2015-07-07 16:36:54",
                    "updated_at": "2015-07-31 14:21:48",
                    "parent_id": 99,
                    "lft": 87,
                    "rgt": 88,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 0,
                    "item_order": null,
                    "name": "Tr\u00e0 \u0111\u00e1 the deo n\u00e0o",
                    "description": "C\u00e1c lo\u1ea1i tr\u00e0",
                    "children": [],
                    "printer": null
                },
                {
                    "id": 227,
                    "hotel_id": 8,
                    "icon": "",
                    "status": 1,
                    "created_at": "2015-06-23 02:12:48",
                    "updated_at": "2015-07-31 14:21:48",
                    "parent_id": 99,
                    "lft": 89,
                    "rgt": 92,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 13,
                    "item_order": null,
                    "name": "Main Sub 02",
                    "description": "",
                    "children": [
                        {
                            "id": 228,
                            "hotel_id": 8,
                            "icon": "",
                            "status": 1,
                            "created_at": "2015-06-23 02:13:03",
                            "updated_at": "2015-07-31 14:21:48",
                            "parent_id": 227,
                            "lft": 90,
                            "rgt": 91,
                            "depth": 3,
                            "type": 1,
                            "printer_id": 13,
                            "item_order": null,
                            "name": "Tr\u00e0 \u0111\u00e1 the deo n\u00e0o",
                            "description": "C\u00e1c lo\u1ea1i tr\u00e0 ccc",
                            "children": [],
                            "printer": null
                        }
                    ],
                    "printer": null
                }
            ],
            "printer": null
        },
        {
            "id": 102,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-01-10 11:52:29",
            "updated_at": "2015-07-31 14:21:48",
            "parent_id": 165,
            "lft": 94,
            "rgt": 95,
            "depth": 1,
            "type": 1,
            "printer_id": 13,
            "item_order": null,
            "name": "S\u00fap v\u00e0 Sal\u00e1t",
            "description": null,
            "children": [],
            "printer": null
        },
        {
            "id": 103,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-01-12 13:25:06",
            "updated_at": "2015-07-31 14:21:48",
            "parent_id": 165,
            "lft": 96,
            "rgt": 99,
            "depth": 1,
            "type": 1,
            "printer_id": 14,
            "item_order": null,
            "name": "Th\u1ee9c u\u1ed1ng",
            "description": null,
            "children": [
                {
                    "id": 176,
                    "hotel_id": 8,
                    "icon": "",
                    "status": 1,
                    "created_at": "2015-05-22 16:01:35",
                    "updated_at": "2015-07-31 14:21:48",
                    "parent_id": 103,
                    "lft": 97,
                    "rgt": 98,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 14,
                    "item_order": null,
                    "name": "Tr\u00e0 2222",
                    "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0",
                    "children": [],
                    "printer": null
                }
            ],
            "printer": null
        },
        {
            "id": 100,
            "hotel_id": 8,
            "icon": "",
            "status": 1,
            "created_at": "2015-01-09 17:05:43",
            "updated_at": "2015-07-31 14:21:48",
            "parent_id": 165,
            "lft": 100,
            "rgt": 109,
            "depth": 1,
            "type": 1,
            "printer_id": 13,
            "item_order": "925,926",
            "name": "M\u00f3n ch\u00ednh",
            "description": null,
            "children": [
                {
                    "id": 217,
                    "hotel_id": 8,
                    "icon": "",
                    "status": 1,
                    "created_at": "2015-05-30 18:14:08",
                    "updated_at": "2015-07-31 14:21:48",
                    "parent_id": 100,
                    "lft": 101,
                    "rgt": 108,
                    "depth": 2,
                    "type": 1,
                    "printer_id": 13,
                    "item_order": null,
                    "name": "Main Sub 01",
                    "description": "",
                    "children": [
                        {
                            "id": 237,
                            "hotel_id": 8,
                            "icon": null,
                            "status": 1,
                            "created_at": "2015-07-04 16:55:04",
                            "updated_at": "2015-07-31 14:21:48",
                            "parent_id": 217,
                            "lft": 102,
                            "rgt": 103,
                            "depth": 3,
                            "type": 1,
                            "printer_id": 13,
                            "item_order": null,
                            "name": "Tr\u00e0",
                            "description": "Tr\u00e0 \u0111\u00e1 c\u00e1c lo\u1ea1i",
                            "children": [],
                            "printer": null
                        },
                        {
                            "id": 238,
                            "hotel_id": 8,
                            "icon": null,
                            "status": 1,
                            "created_at": "2015-07-04 16:58:39",
                            "updated_at": "2015-07-31 14:21:48",
                            "parent_id": 217,
                            "lft": 104,
                            "rgt": 105,
                            "depth": 3,
                            "type": 1,
                            "printer_id": 13,
                            "item_order": null,
                            "name": "Tr\u00e0",
                            "description": "Tr\u00e0 \u0111\u00e1 c\u00e1c lo\u1ea1i",
                            "children": [],
                            "printer": null
                        },
                        {
                            "id": 278,
                            "hotel_id": 8,
                            "icon": "",
                            "status": 1,
                            "created_at": "2015-07-31 14:20:42",
                            "updated_at": "2015-07-31 14:21:48",
                            "parent_id": 217,
                            "lft": 106,
                            "rgt": 107,
                            "depth": 3,
                            "type": 1,
                            "printer_id": 13,
                            "item_order": null,
                            "name": "Tr\u00e0",
                            "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0",
                            "children": [],
                            "printer": null
                        }
                    ],
                    "printer": null
                }
            ],
            "printer": null
        }
    ]
}

```

##Create Food Category##
Create new category, params :

- hotel_id (required)
- lang (optional)


**Url**
<code>POST</code>api.hottab.pw/admin/food-categories?lang=vi


**Parameters**
<code>api_hottab_pw/admin/food-categories?lang<code> vi


**Request data**
{
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMTY2NTk4OCIsImV4cCI6IjE0MzE3NTIzODgiLCJuYmYiOiIxNDMxNjY1OTg4IiwianRpIjoiYzgwYWQwMmE2NmMxZjMwZjkzYmQxMzg5MmIxOGEzMWUifQ.MWY5ODAxNGZmZGNkMWFlOGE0NzA1NzEwZWFjNTRmZTM1MTI3MDY1YWMyMjQ4NzkyYWJiNTIxNzJiMmZmMTdkYQ",
    "hotel_id": "8",
    "name": "Tr\u00e0",
    "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0",
    "icon": "",
    "parent_id": "217"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 278,
        "hotel_id": 8,
        "icon": "",
        "status": 1,
        "created_at": "2015-07-31 14:20:42",
        "updated_at": "2015-07-31 14:20:42",
        "parent_id": 217,
        "lft": 74,
        "rgt": 75,
        "depth": 3,
        "type": 1,
        "printer_id": 13,
        "item_order": null,
        "name": "Tr\u00e0",
        "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0",
        "printer": null
    }
}

```

##Update Food Category##
update existing category, URL Params :

- lang (optional)

**Url**
<code>POST</code>api.hottab.pw/admin/food-categories/99?lang=vi


**Parameters**
<code>api_hottab_pw/admin/food-categories/99?lang<code> vi


**Request data**
{
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDM2NzYwMjg0IiwiZXhwIjoiMTQzNjg0NjY4NCIsIm5iZiI6IjE0MzY3NjAyODQiLCJqdGkiOiI1OGRkNDAwM2E5ZjNiODE5YzEyZmM0N2Y4YjdhNmY4MyJ9.ZWIwYjQxMjAzMzc5NGExY2JiOWZhZTIzNjZmM2VkMzM2ZTU1NzExYjE1MDY2NDc5OWNjODlmNGIyMDdhNzg5NQ",
    "_method": "PUT",
    "hotel_id": "8",
    "icon": "",
    "parent_id": "165",
    "item_order": "925,926"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 100,
        "hotel_id": 8,
        "icon": "",
        "status": 1,
        "created_at": "2015-01-09 17:05:43",
        "updated_at": "2015-05-15 17:13:18",
        "parent_id": 217,
        "lft": 22,
        "rgt": 23,
        "depth": 1,
        "name": "M\u00f3n ch\u00ednh"
    }
}

```

