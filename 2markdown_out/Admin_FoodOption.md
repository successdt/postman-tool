##Get all food option template tags##


**Url**
<code>GET</code>http://api.hottab.pw/admin/option-categories/?hotel_id=16&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDM1Mjg5MTI5IiwiZXhwIjoiMTQzNTM3NTUyOSIsIm5iZiI6IjE0MzUyODkxMjkiLCJqdGkiOiJkNjljZDlkNTU3MDdhYmM4NjBlMTRkNzE3MWEwMjc1ZiJ9.MDc3OTEwYWJmOTU1YWZmMDQ4N2FlNGUyYTVmNGFhZmFhY2QwNDJlNmI2YjI3YjlhOGM0YTA3NWFhMWRmZTFmOA


**Parameters**
<code>http://api_hottab_pw/admin/option-categories/?hotel_id<code> 16
<code>token<code> eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDM1Mjg5MTI5IiwiZXhwIjoiMTQzNTM3NTUyOSIsIm5iZiI6IjE0MzUyODkxMjkiLCJqdGkiOiJkNjljZDlkNTU3MDdhYmM4NjBlMTRkNzE3MWEwMjc1ZiJ9.MDc3OTEwYWJmOTU1YWZmMDQ4N2FlNGUyYTVmNGFhZmFhY2QwNDJlNmI2YjI3YjlhOGM0YTA3NWFhMWRmZTFmOA


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
            "id": 1,
            "hotel_id": 8,
            "type": 2,
            "icon": "",
            "parent_id": null,
            "lft": null,
            "rgt": null,
            "depth": 0,
            "multi_options": 0,
            "deleted_at": null,
            "created_at": "2015-06-27 11:13:12",
            "updated_at": "2015-06-27 11:13:12",
            "is_required": 0,
            "name": "Hello",
            "options": [
                {
                    "id": 2190,
                    "price": 100000,
                    "name": "Team"
                },
                {
                    "id": 2191,
                    "price": 100000,
                    "name": "Game Over"
                }
            ]
        },
        {
            "id": 2,
            "hotel_id": 8,
            "type": 2,
            "icon": "",
            "parent_id": null,
            "lft": null,
            "rgt": null,
            "depth": 0,
            "multi_options": 0,
            "deleted_at": null,
            "created_at": "2015-06-27 11:13:12",
            "updated_at": "2015-06-27 11:13:12",
            "is_required": 0,
            "name": "Bonjour",
            "options": [
                {
                    "id": 2243,
                    "price": 200000,
                    "name": "Red Peach Sangria ES"
                },
                {
                    "id": 2244,
                    "price": 5000,
                    "name": "Margarita"
                },
                {
                    "id": 2245,
                    "price": 4000,
                    "name": "Bloody Mary"
                },
                {
                    "id": 2246,
                    "price": 4000,
                    "name": "Martini Bianco"
                },
                {
                    "id": 2247,
                    "price": 30000,
                    "name": "Strawberry Lemonade"
                },
                {
                    "id": 2248,
                    "price": 39000,
                    "name": "Raspberry Kiss"
                }
            ]
        },
        {
            "id": 3,
            "hotel_id": 8,
            "type": 2,
            "icon": "",
            "parent_id": null,
            "lft": null,
            "rgt": null,
            "depth": 0,
            "multi_options": 0,
            "deleted_at": null,
            "created_at": "2015-06-27 11:13:12",
            "updated_at": "2015-06-27 11:13:12",
            "is_required": 0,
            "name": "Linh tinh",
            "options": [
                {
                    "id": 2192,
                    "price": 4000,
                    "name": "Mini chocolate souffle"
                },
                {
                    "id": 2193,
                    "price": 3000,
                    "name": "Strawberry chocolate truffle pie"
                },
                {
                    "id": 2194,
                    "price": 3000,
                    "name": "Brookie"
                },
                {
                    "id": 2195,
                    "price": 5000,
                    "name": "Mini creme souffle"
                },
                {
                    "id": 2196,
                    "price": 5000,
                    "name": "New York style cheesecake"
                },
                {
                    "id": 2197,
                    "price": 10000,
                    "name": "Salted caramel butterscotch pudding"
                },
                {
                    "id": 2198,
                    "price": 10000,
                    "name": "S'mores Brownie"
                }
            ]
        },
        {
            "id": 4,
            "hotel_id": 8,
            "type": 2,
            "icon": "",
            "parent_id": null,
            "lft": null,
            "rgt": null,
            "depth": 0,
            "multi_options": 0,
            "deleted_at": null,
            "created_at": "2015-06-27 11:13:12",
            "updated_at": "2015-06-27 11:13:12",
            "is_required": 0,
            "name": "Starter",
            "options": [
                {
                    "id": 2199,
                    "price": 45000,
                    "name": "Caesar salad"
                },
                {
                    "id": 2200,
                    "price": 12,
                    "name": "Chicken and Spinach"
                },
                {
                    "id": 2201,
                    "price": 12,
                    "name": "Cobb Salad (half)"
                },
                {
                    "id": 2202,
                    "price": 7,
                    "name": "Greek Salad"
                },
                {
                    "id": 2203,
                    "price": 17,
                    "name": "Honey-Crisp Chicken Salad"
                },
                {
                    "id": 2204,
                    "price": 19,
                    "name": "Santa Fe Salad"
                },
                {
                    "id": 2205,
                    "price": 4,
                    "name": "French Onion Soup"
                },
                {
                    "id": 2206,
                    "price": 4,
                    "name": "Seafood chowder"
                },
                {
                    "id": 2207,
                    "price": 3,
                    "name": "Tomato Basil Soup"
                },
                {
                    "id": 2208,
                    "price": 6,
                    "name": "Tomato Bisque Soup"
                }
            ]
        },
        {
            "id": 5,
            "hotel_id": 8,
            "type": 2,
            "icon": "",
            "parent_id": null,
            "lft": null,
            "rgt": null,
            "depth": 0,
            "multi_options": 0,
            "deleted_at": null,
            "created_at": "2015-06-27 11:13:12",
            "updated_at": "2015-06-27 11:13:12",
            "is_required": 0,
            "name": "Drink",
            "options": [
                {
                    "id": 2213,
                    "price": 30000,
                    "name": "Strawberry Lemonade"
                },
                {
                    "id": 2214,
                    "price": 39000,
                    "name": "Raspberry Kiss"
                }
            ]
        },
        {
            "id": 120,
            "hotel_id": 8,
            "type": 2,
            "icon": "",
            "parent_id": null,
            "lft": null,
            "rgt": null,
            "depth": 0,
            "multi_options": 0,
            "deleted_at": null,
            "created_at": "2015-07-31 14:13:01",
            "updated_at": "2015-07-31 14:13:01",
            "is_required": 0,
            "name": "kh\u00f4ng ti\u00eau \u0111\u1ec1",
            "options": []
        }
    ]
}

```

