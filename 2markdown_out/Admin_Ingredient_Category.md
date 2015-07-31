##Order categories##
update existing category, URL Params :

- lang (optional)

**Url**
<code>POST</code>api.hottab.pw/admin/ingredient-categories/order?lang=vi&token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzMzE1Mjc1IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzMjI4ODc1IiwibmJmIjoiMTQzMzIyODg3NSIsImp0aSI6IjFhNGY1OWEyOWJiMDM1ZTE1YWVhZGM0MGQ5NjgzZGExIn0.NWI0Yjk2MTc2NDZmZmQ5MTViYmYyM2E0ZTJlMDg3OGI5Yzg3ZTlmYmE1MWU4ODM1MjZkMmFhYTBkZDg2NWQyZA&hotel_id=8


**Parameters**
<code>api_hottab_pw/admin/ingredient-categories/order?lang<code> vi
<code>token<code> "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzMzE1Mjc1IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzMjI4ODc1IiwibmJmIjoiMTQzMzIyODg3NSIsImp0aSI6IjFhNGY1OWEyOWJiMDM1ZTE1YWVhZGM0MGQ5NjgzZGExIn0.NWI0Yjk2MTc2NDZmZmQ5MTViYmYyM2E0ZTJlMDg3OGI5Yzg3ZTlmYmE1MWU4ODM1MjZkMmFhYTBkZDg2NWQyZA
<code>hotel_id<code> 8


**Request data**
{
    "children": [
        {
            "id": 8,
            "children": [
                {
                    "id": 6
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
            "id": 2,
            "hotel_id": 8,
            "icon": "",
            "parent_id": 1,
            "lft": 2,
            "rgt": 3,
            "depth": 1,
            "deleted_at": null,
            "created_at": "2015-07-31 15:17:41",
            "updated_at": "2015-07-31 15:17:41",
            "name": "Tr\u00e0",
            "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0",
            "children": []
        },
        {
            "id": 3,
            "hotel_id": 8,
            "icon": "",
            "parent_id": 1,
            "lft": 4,
            "rgt": 5,
            "depth": 1,
            "deleted_at": null,
            "created_at": "2015-07-31 15:17:48",
            "updated_at": "2015-07-31 15:17:48",
            "name": "Tr\u00e0",
            "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0",
            "children": []
        }
    ]
}

```

##Create ##
Create new category, params :

- hotel_id (required)
- lang (optional)


**Url**
<code>POST</code>api.hottab.pw/admin/ingredient-categories?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzMzE1Mjc1IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzMjI4ODc1IiwibmJmIjoiMTQzMzIyODg3NSIsImp0aSI6IjFhNGY1OWEyOWJiMDM1ZTE1YWVhZGM0MGQ5NjgzZGExIn0.NWI0Yjk2MTc2NDZmZmQ5MTViYmYyM2E0ZTJlMDg3OGI5Yzg3ZTlmYmE1MWU4ODM1MjZkMmFhYTBkZDg2NWQyZA


**Parameters**
<code>token</code> $token


**Request data**
{
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzMzE1Mjc1IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzMjI4ODc1IiwibmJmIjoiMTQzMzIyODg3NSIsImp0aSI6IjFhNGY1OWEyOWJiMDM1ZTE1YWVhZGM0MGQ5NjgzZGExIn0.NWI0Yjk2MTc2NDZmZmQ5MTViYmYyM2E0ZTJlMDg3OGI5Yzg3ZTlmYmE1MWU4ODM1MjZkMmFhYTBkZDg2NWQyZA",
    "hotel_id": "8",
    "name": "Tr\u00e0",
    "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0",
    "icon": ""
}


Response:

```
{
    "error": false,
    "data": {
        "id": 2,
        "hotel_id": 8,
        "icon": "",
        "parent_id": 1,
        "lft": 2,
        "rgt": 3,
        "depth": 1,
        "deleted_at": null,
        "created_at": "2015-07-31 15:17:41",
        "updated_at": "2015-07-31 15:17:41",
        "name": "Tr\u00e0",
        "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0",
        "items": [],
        "children": []
    }
}

```

##List##
list all categories of hotel, URL Params :

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/admin/ingredient-categories?hotel_id=8&lang=vi&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzMzE1Mjc1IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzMjI4ODc1IiwibmJmIjoiMTQzMzIyODg3NSIsImp0aSI6IjFhNGY1OWEyOWJiMDM1ZTE1YWVhZGM0MGQ5NjgzZGExIn0.NWI0Yjk2MTc2NDZmZmQ5MTViYmYyM2E0ZTJlMDg3OGI5Yzg3ZTlmYmE1MWU4ODM1MjZkMmFhYTBkZDg2NWQyZA


**Parameters**
<code>api_hottab_pw/admin/ingredient-categories?hotel_id<code> 8
<code>lang<code> vi
<code>token<code> eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzMzE1Mjc1IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzMjI4ODc1IiwibmJmIjoiMTQzMzIyODg3NSIsImp0aSI6IjFhNGY1OWEyOWJiMDM1ZTE1YWVhZGM0MGQ5NjgzZGExIn0.NWI0Yjk2MTc2NDZmZmQ5MTViYmYyM2E0ZTJlMDg3OGI5Yzg3ZTlmYmE1MWU4ODM1MjZkMmFhYTBkZDg2NWQyZA


**Request data**
{
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQyOTI2NDgzNSIsImV4cCI6IjE0MjkzNTEyMzUiLCJuYmYiOiIxNDI5MjY0ODM1IiwianRpIjoiYmVlNjQzNDc1MDc3MmQ4Mzc3YTRmMDgzYjkzYjA0NjYifQ.OWFhYzk5NWYzMTc1M2VjZjI4MGQ1OTRlOWYzYjY4N2I2MmNkYWI3ODdhMDg2MzAwMDk3MDhlZjFjZGM1YTViNg",
    "hotel_id": "8",
    "food_category_id": "100",
    "name": "B\u00fan ch\u1ea3 ch\u1ea5m",
    "intro": "the intro",
    "description": "the desc",
    "intro_img": "http:\/\/api.hottab.pw\/uploads\/87\/\/drink-2_jGRc77CR.jpg",
    "gallery": "",
    "price": "17.5",
    "time_option": "",
    "has_upsell": "1",
    "_method": "PUT",
    "food_options[1][name]": "C\u1ee1 r\u1ea5t l\u1edbn",
    "food_options[1][price]": "15",
    "food_options[2][name]": "C\u1ee1 v\u1eeba",
    "food_options[2][price]": "13",
    "upsells[1]": "14",
    "upsells[2]": "38",
    "tags[0][name]": "l\u00f2ng",
    "tags[1][name]": "l\u1ee3n",
    "priority": "1"
}


Response:

```
{
    "error": false,
    "data": [
        {
            "id": 2,
            "hotel_id": 8,
            "icon": "",
            "parent_id": 1,
            "lft": 2,
            "rgt": 3,
            "depth": 1,
            "deleted_at": null,
            "created_at": "2015-07-31 15:17:41",
            "updated_at": "2015-07-31 15:17:41",
            "name": "Tr\u00e0",
            "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0",
            "children": []
        },
        {
            "id": 3,
            "hotel_id": 8,
            "icon": "",
            "parent_id": 1,
            "lft": 4,
            "rgt": 5,
            "depth": 1,
            "deleted_at": null,
            "created_at": "2015-07-31 15:17:48",
            "updated_at": "2015-07-31 15:17:48",
            "name": "Tr\u00e0",
            "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0",
            "children": []
        }
    ]
}

```

##Get root category##


**Url**
<code>GET</code>api.hottab.pw/admin/ingredient-categories/root?lang=vi&token="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzMzE1Mjc1IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzMjI4ODc1IiwibmJmIjoiMTQzMzIyODg3NSIsImp0aSI6IjFhNGY1OWEyOWJiMDM1ZTE1YWVhZGM0MGQ5NjgzZGExIn0.NWI0Yjk2MTc2NDZmZmQ5MTViYmYyM2E0ZTJlMDg3OGI5Yzg3ZTlmYmE1MWU4ODM1MjZkMmFhYTBkZDg2NWQyZA&hotel_id=8


**Parameters**
<code>api_hottab_pw/admin/ingredient-categories/root?lang<code> vi
<code>token<code> "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzMzE1Mjc1IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzMjI4ODc1IiwibmJmIjoiMTQzMzIyODg3NSIsImp0aSI6IjFhNGY1OWEyOWJiMDM1ZTE1YWVhZGM0MGQ5NjgzZGExIn0.NWI0Yjk2MTc2NDZmZmQ5MTViYmYyM2E0ZTJlMDg3OGI5Yzg3ZTlmYmE1MWU4ODM1MjZkMmFhYTBkZDg2NWQyZA
<code>hotel_id<code> 8


**Request data**
{
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDMzMzE1Mjc1IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoiNDAiLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzMjI4ODc1IiwibmJmIjoiMTQzMzIyODg3NSIsImp0aSI6IjFhNGY1OWEyOWJiMDM1ZTE1YWVhZGM0MGQ5NjgzZGExIn0.NWI0Yjk2MTc2NDZmZmQ5MTViYmYyM2E0ZTJlMDg3OGI5Yzg3ZTlmYmE1MWU4ODM1MjZkMmFhYTBkZDg2NWQyZA",
    "hotel_id": "8",
    "name": "flour",
    "description": "flour for cake",
    "unit": "kg",
    "in_stock": "1000",
    "price": "13",
    "ingredient_category_id": "8"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 1,
        "hotel_id": 8,
        "icon": "",
        "parent_id": null,
        "lft": 1,
        "rgt": 6,
        "depth": 0,
        "deleted_at": null,
        "created_at": "2015-07-31 15:17:41",
        "updated_at": "2015-07-31 15:17:48",
        "items": [],
        "children": [
            {
                "id": 2,
                "hotel_id": 8,
                "icon": "",
                "parent_id": 1,
                "lft": 2,
                "rgt": 3,
                "depth": 1,
                "deleted_at": null,
                "created_at": "2015-07-31 15:17:41",
                "updated_at": "2015-07-31 15:17:41",
                "name": "Tr\u00e0",
                "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0"
            },
            {
                "id": 3,
                "hotel_id": 8,
                "icon": "",
                "parent_id": 1,
                "lft": 4,
                "rgt": 5,
                "depth": 1,
                "deleted_at": null,
                "created_at": "2015-07-31 15:17:48",
                "updated_at": "2015-07-31 15:17:48",
                "name": "Tr\u00e0",
                "description": "C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0"
            }
        ]
    }
}

```

##Update##
update existing category, URL Params :

- lang (optional)

**Url**
<code>POST</code>api.hottab.pw/admin/ingredient-categories/100?lang=vi


**Parameters**
<code>api_hottab_pw/admin/ingredient-categories/100?lang<code> vi


**Request data**
{
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMTY2NTk4OCIsImV4cCI6IjE0MzE3NTIzODgiLCJuYmYiOiIxNDMxNjY1OTg4IiwianRpIjoiYzgwYWQwMmE2NmMxZjMwZjkzYmQxMzg5MmIxOGEzMWUifQ.MWY5ODAxNGZmZGNkMWFlOGE0NzA1NzEwZWFjNTRmZTM1MTI3MDY1YWMyMjQ4NzkyYWJiNTIxNzJiMmZmMTdkYQ",
    "_method": "PUT",
    "hotel_id": "8",
    "icon": "",
    "parent_id": "217"
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

