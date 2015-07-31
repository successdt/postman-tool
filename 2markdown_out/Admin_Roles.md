##View##
List of roles

**Url**
<code>GET</code>api.hottab.pw/admin/roles/20?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMjEwNTE5MyIsImV4cCI6IjE0MzIxOTE1OTMiLCJuYmYiOiIxNDMyMTA1MTkzIiwianRpIjoiYTAyZjhmYTgxMjgxZGQ1ODkzNmY5MDliODc4Yjk4NDAifQ.ZmFiMmE0ZDEyZTliZTBmYjgzMDVlNDAwMzlkMDc2MTM5NDA0NGVkY2QzZjc5OWQxZTdiMmMyNzcyMjBmNGIzYg&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
[]


Response:

```
{
    "error": false,
    "data": {
        "id": 20,
        "hotel_id": 13,
        "is_protected": 0,
        "group_id": 3,
        "created_at": "2015-05-29 16:06:39",
        "updated_at": "2015-05-29 16:06:39",
        "name": "Waiter",
        "description": "",
        "permissions": []
    }
}

```

##Update##
Update user role

**Url**
<code>PUT</code>api.hottab.pw/admin/roles/7?lang=vi&hotel_id=8&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMjE5OTg3MCIsImV4cCI6IjE0MzIyODYyNzAiLCJuYmYiOiIxNDMyMTk5ODcwIiwianRpIjoiMWJmNjRhMTQ3ODUzMjk4ZTNlYjg2YjZjZmI2NWVhOWYifQ.ZWRlZTFiZTk3NzVmMTYwMDkwZTI5Y2UxNTI1MGZlZTlhZmQ0NjkxNzY2MTgyMWM0ZWJjZTNhMmRmM2FiOTdjNw


**Parameters**
<code>api_hottab_pw/admin/roles/7?lang<code> vi
<code>hotel_id<code> 8
<code>token<code> eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMjE5OTg3MCIsImV4cCI6IjE0MzIyODYyNzAiLCJuYmYiOiIxNDMyMTk5ODcwIiwianRpIjoiMWJmNjRhMTQ3ODUzMjk4ZTNlYjg2YjZjZmI2NWVhOWYifQ.ZWRlZTFiZTk3NzVmMTYwMDkwZTI5Y2UxNTI1MGZlZTlhZmQ0NjkxNzY2MTgyMWM0ZWJjZTNhMmRmM2FiOTdjNw


**Request data**
{
    "name": "Th\u01b0 cmn k\u00fd",
    "description": "C\u00e1c th\u1ec3 lo\u1ea1i th\u01b0 k\u00fd",
    "group_id": 5,
    "permissions": [
        {
            "permission_code": 101
        },
        {
            "permission_code": 2409
        }
    ]
}


Response:

```
{
    "error": false,
    "data": {
        "id": 27,
        "hotel_id": 8,
        "is_protected": 0,
        "group_id": 5,
        "created_at": "2015-07-31 15:48:51",
        "updated_at": "2015-07-31 15:49:20",
        "name": "Th\u01b0 cmn k\u00fd",
        "description": "C\u00e1c th\u1ec3 lo\u1ea1i th\u01b0 k\u00fd",
        "permissions": [
            {
                "id": 3,
                "role_id": 27,
                "permission_code": 101
            },
            {
                "id": 4,
                "role_id": 27,
                "permission_code": 2409
            }
        ]
    }
}

```

##Create##
Create new use role.

**Url**
<code>POST</code>api.hottab.pw/admin/roles?lang=vi&hotel_id=8&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMjAyOTA0NSIsImV4cCI6IjE0MzIxMTU0NDUiLCJuYmYiOiIxNDMyMDI5MDQ1IiwianRpIjoiMDZiZmQ4MTNiYjI0YzkwYWEyYTQzMjllNzM1MzYzMzcifQ.YWUzYjM3MjFlMGE0M2E1N2JhZWIzOTZjY2M1MGNhYzNhMzhhMjlkOGMxMjYyZjllNTVhNThlODY4N2NhMzIwZg


**Parameters**
<code>api_hottab_pw/admin/roles?lang<code> vi
<code>hotel_id<code> 8
<code>token<code> eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMjAyOTA0NSIsImV4cCI6IjE0MzIxMTU0NDUiLCJuYmYiOiIxNDMyMDI5MDQ1IiwianRpIjoiMDZiZmQ4MTNiYjI0YzkwYWEyYTQzMjllNzM1MzYzMzcifQ.YWUzYjM3MjFlMGE0M2E1N2JhZWIzOTZjY2M1MGNhYzNhMzhhMjlkOGMxMjYyZjllNTVhNThlODY4N2NhMzIwZg


**Request data**
{
    "name": "Th\u01b0 cmn k\u00fd",
    "description": "C\u00e1c th\u1ec3 lo\u1ea1i th\u01b0 k\u00fd",
    "permissions": [
        {
            "permission_code": 102
        },
        {
            "permission_code": 103
        }
    ]
}


Response:

```
{
    "error": false,
    "data": {
        "id": 27,
        "hotel_id": 8,
        "is_protected": 0,
        "group_id": 0,
        "created_at": "2015-07-31 15:48:51",
        "updated_at": "2015-07-31 15:48:51",
        "name": "Th\u01b0 cmn k\u00fd",
        "description": "C\u00e1c th\u1ec3 lo\u1ea1i th\u01b0 k\u00fd",
        "permissions": [
            {
                "id": 1,
                "role_id": 27,
                "permission_code": 102
            },
            {
                "id": 2,
                "role_id": 27,
                "permission_code": 103
            }
        ]
    }
}

```

##List role codes##


**Url**
<code>GET</code>api.hottab.pw/admin/roles/permissions?lang=vi&hotel_id=8&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMjEwNTE5MyIsImV4cCI6IjE0MzIxOTE1OTMiLCJuYmYiOiIxNDMyMTA1MTkzIiwianRpIjoiYTAyZjhmYTgxMjgxZGQ1ODkzNmY5MDliODc4Yjk4NDAifQ.ZmFiMmE0ZDEyZTliZTBmYjgzMDVlNDAwMzlkMDc2MTM5NDA0NGVkY2QzZjc5OWQxZTdiMmMyNzcyMjBmNGIzYg


**Parameters**
<code>api_hottab_pw/admin/roles/permissions?lang<code> vi
<code>hotel_id<code> 8
<code>token<code> eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMjEwNTE5MyIsImV4cCI6IjE0MzIxOTE1OTMiLCJuYmYiOiIxNDMyMTA1MTkzIiwianRpIjoiYTAyZjhmYTgxMjgxZGQ1ODkzNmY5MDliODc4Yjk4NDAifQ.ZmFiMmE0ZDEyZTliZTBmYjgzMDVlNDAwMzlkMDc2MTM5NDA0NGVkY2QzZjc5OWQxZTdiMmMyNzcyMjBmNGIzYg


**Request data**
{
    "password": "123456",
    "email": "thanhdd@hottab.net"
}


Response:

```
{
    "error": false,
    "message": {
        "general": {
            "all": 100,
            "admin": 101,
            "waiter": 102,
            "cashier": 103,
            "keeper": 104,
            "customer": 105
        },
        "Roles": {
            "index": 201,
            "store": 202,
            "show": 203,
            "update": 204,
            "destroy": 205
        },
        "Dashboards": {
            "getCustomers": 301,
            "getOrders": 302,
            "getBills": 303,
            "getToday": 304,
            "getOrdersV2": 305,
            "getBillsV2": 306,
            "getTodayV2": 307
        },
        "Devices": {
            "index": 401,
            "store": 402,
            "show": 403,
            "update": 404,
            "destroy": 405,
            "getMap": 406,
            "getList": 407,
            "allocate": 408,
            "deposit": 409,
            "withdraw": 410,
            "histories": 411,
            "information": 412,
            "closeCash": 413,
            "getCashReport": 414
        },
        "FoodCategories": {
            "index": 501,
            "store": 502,
            "show": 503,
            "update": 504,
            "destroy": 505
        },
        "FoodIngredients": {
            "index": 601,
            "store": 602,
            "show": 603,
            "update": 604,
            "destroy": 605,
            "getExport": 606
        },
        "FoodIngredientTransactions": {
            "index": 701,
            "store": 702,
            "show": 703,
            "update": 704,
            "destroy": 705
        },
        "FoodOptionTags": {
            "index": 801,
            "store": 802,
            "show": 803,
            "update": 804,
            "destroy": 805
        },
        "FoodOrders": {
            "index": 901,
            "store": 902,
            "show": 903,
            "update": 904,
            "destroy": 905,
            "customerIndex": 906,
            "waiterIndex": 907,
            "cashierIndex": 908,
            "customerShow": 909,
            "getPaidOrders": 910,
            "adminGetExport": 911
        },
        "FoodSetCategories": {
            "index": 1001,
            "store": 1002,
            "show": 1003,
            "update": 1004,
            "destroy": 1005
        },
        "FoodSets": {
            "index": 1101,
            "store": 1102,
            "show": 1103,
            "update": 1104,
            "destroy": 1105,
            "adminShow": 1106,
            "getCategory": 1107,
            "adminGetCategory": 1108
        },
        "Guests": {
            "index": 1201,
            "store": 1202,
            "show": 1203,
            "update": 1204,
            "destroy": 1205,
            "room": 1206
        },
        "Hotels": {
            "index": 1301,
            "store": 1302,
            "show": 1303,
            "update": 1304,
            "destroy": 1305,
            "room": 1306,
            "postIntroductions": 1307,
            "postDeleteIntroductions": 1308,
            "postGallery": 1309,
            "getView": 1310
        },
        "HotelSettings": {
            "index": 1401,
            "store": 1402,
            "show": 1403,
            "update": 1404,
            "destroy": 1405
        },
        "NewFoodCategories": {
            "index": 1501,
            "store": 1502,
            "show": 1503,
            "update": 1504,
            "destroy": 1505
        },
        "NewFoods": {
            "index": 1601,
            "store": 1602,
            "show": 1603,
            "update": 1604,
            "destroy": 1605,
            "adminIndex": 1606,
            "adminShow": 1607,
            "adminGetCategory": 1608,
            "getCategory": 1609,
            "getIngredients": 1610,
            "adminGetTag": 1611,
            "getTag": 1612,
            "duplicate": 1613
        },
        "Payments": {
            "index": 1701,
            "v2Store": 1702
        },
        "Reports": {
            "getSaleReport": 1801
        },
        "RoomPreferences": {
            "index": 1901,
            "store": 1902,
            "show": 1903,
            "update": 1904,
            "destroy": 1905
        },
        "ServiceCategories": {
            "index": 2001,
            "store": 2002,
            "show": 2003,
            "update": 2004,
            "destroy": 2005
        },
        "Services": {
            "index": 2101,
            "store": 2102,
            "show": 2103,
            "update": 2104,
            "destroy": 2105,
            "adminIndex": 2106,
            "adminGetCategory": 2107,
            "getCategory": 2108
        },
        "Settings": {
            "getIndex": 2201,
            "postIndex": 2202
        },
        "Tags": {
            "index": 2301,
            "store": 2302,
            "show": 2303,
            "update": 2304,
            "destroy": 2305
        },
        "Users": {
            "index": 2401,
            "store": 2402,
            "show": 2403,
            "update": 2404,
            "destroy": 2405,
            "groups": 2406,
            "postSignup": 2407,
            "postLogin": 2408,
            "postUpdate": 2409,
            "getProfile": 2410,
            "getConfirm": 2411,
            "postConfirm": 2412,
            "postReminder": 2413,
            "postReset": 2414,
            "getBasic": 2415,
            "postVenueFavList": 2416,
            "getVenueFavList": 2417
        },
        "Discounts": {
            "index": 2501,
            "store": 2502,
            "show": 2503,
            "update": 2504,
            "destroy": 2505
        },
        "Rooms": {
            "index": 2601,
            "store": 2602,
            "show": 2603,
            "update": 2604,
            "destroy": 2605,
            "waiterIndex": 2606,
            "deleteMany": 2607,
            "tags": 2608,
            "tag": 2609,
            "taken": 2610,
            "untaken": 2611,
            "waiterTags": 2612,
            "waiterTag": 2613
        },
        "Taxes": {
            "index": 2701,
            "store": 2702,
            "show": 2703,
            "update": 2704,
            "destroy": 2705,
            "getActiveTaxes": 2706
        }
    }
}

```

##List##
List of roles

**Url**
<code>GET</code>api.hottab.pw/admin/roles?lang=vi&hotel_id=8&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMjEwNTE5MyIsImV4cCI6IjE0MzIxOTE1OTMiLCJuYmYiOiIxNDMyMTA1MTkzIiwianRpIjoiYTAyZjhmYTgxMjgxZGQ1ODkzNmY5MDliODc4Yjk4NDAifQ.ZmFiMmE0ZDEyZTliZTBmYjgzMDVlNDAwMzlkMDc2MTM5NDA0NGVkY2QzZjc5OWQxZTdiMmMyNzcyMjBmNGIzYg


**Parameters**
<code>api_hottab_pw/admin/roles?lang<code> vi
<code>hotel_id<code> 8
<code>token<code> eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMjEwNTE5MyIsImV4cCI6IjE0MzIxOTE1OTMiLCJuYmYiOiIxNDMyMTA1MTkzIiwianRpIjoiYTAyZjhmYTgxMjgxZGQ1ODkzNmY5MDliODc4Yjk4NDAifQ.ZmFiMmE0ZDEyZTliZTBmYjgzMDVlNDAwMzlkMDc2MTM5NDA0NGVkY2QzZjc5OWQxZTdiMmMyNzcyMjBmNGIzYg


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
            "id": 8,
            "hotel_id": 8,
            "is_protected": 1,
            "group_id": 2,
            "created_at": "2015-05-21 16:22:03",
            "updated_at": "2015-05-21 16:22:03",
            "name": "Admin",
            "description": "Role for hotel admin"
        },
        {
            "id": 13,
            "hotel_id": 8,
            "is_protected": 0,
            "group_id": 3,
            "created_at": "2015-05-21 16:23:09",
            "updated_at": "2015-05-21 16:23:09",
            "name": "Waiter",
            "description": ""
        },
        {
            "id": 14,
            "hotel_id": 8,
            "is_protected": 0,
            "group_id": 6,
            "created_at": "2015-05-21 17:45:27",
            "updated_at": "2015-05-21 17:53:17",
            "name": "Bartender",
            "description": ""
        },
        {
            "id": 16,
            "hotel_id": 8,
            "is_protected": 0,
            "group_id": 4,
            "created_at": "2015-05-21 17:54:20",
            "updated_at": "2015-05-21 17:54:20",
            "name": "Cashier",
            "description": ""
        },
        {
            "id": 18,
            "hotel_id": 8,
            "is_protected": 0,
            "group_id": 7,
            "created_at": "2015-05-25 17:16:08",
            "updated_at": "2015-05-25 17:16:08",
            "name": "Supervisor",
            "description": ""
        },
        {
            "id": 23,
            "hotel_id": 8,
            "is_protected": 0,
            "group_id": 4,
            "created_at": "2015-06-25 11:07:54",
            "updated_at": "2015-06-25 11:07:54",
            "name": "HIEU",
            "description": ""
        },
        {
            "id": 24,
            "hotel_id": 8,
            "is_protected": 0,
            "group_id": 4,
            "created_at": "2015-06-25 11:08:23",
            "updated_at": "2015-06-25 11:08:23",
            "name": "HDFDF",
            "description": ""
        },
        {
            "id": 25,
            "hotel_id": 8,
            "is_protected": 0,
            "group_id": 4,
            "created_at": "2015-06-25 11:09:11",
            "updated_at": "2015-06-25 11:09:11",
            "name": "HUHUHU",
            "description": ""
        },
        {
            "id": 26,
            "hotel_id": 8,
            "is_protected": 0,
            "group_id": 3,
            "created_at": "2015-06-25 11:09:21",
            "updated_at": "2015-06-25 11:09:21",
            "name": "sdfsdfsdf",
            "description": ""
        }
    ]
}

```

##Delete##
Delete a user role

**Url**
<code>DELETE</code>api.hottab.pw/admin/roles/2?lang=vi&hotel_id=8&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMTk0MTI4NiIsImV4cCI6IjE0MzIwMjc2ODYiLCJuYmYiOiIxNDMxOTQxMjg2IiwianRpIjoiNDQ5ZDc0Mzg4YTVmY2ZlOWZkZGQyMGEyMjhiNzNlNDEifQ.ZDNiNzljZWQyMmYwZTg3YWE3MjgzOGJiMDc3Y2ZlOTQyNzgwYjI5YTgzNDNmNjJlNmNkMDkzNDFhNDgzY2ZhNA


**Parameters**
<code>api_hottab_pw/admin/roles/2?lang<code> vi
<code>hotel_id<code> 8
<code>token<code> eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMTk0MTI4NiIsImV4cCI6IjE0MzIwMjc2ODYiLCJuYmYiOiIxNDMxOTQxMjg2IiwianRpIjoiNDQ5ZDc0Mzg4YTVmY2ZlOWZkZGQyMGEyMjhiNzNlNDEifQ.ZDNiNzljZWQyMmYwZTg3YWE3MjgzOGJiMDc3Y2ZlOTQyNzgwYjI5YTgzNDNmNjJlNmNkMDkzNDFhNDgzY2ZhNA


**Request data**
[]


Response:

```
{
    "error": false,
    "message": "items.deleted"
}

```

