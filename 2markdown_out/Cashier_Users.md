##Login##
Cashier login, same as other role

**Url**
<code>POST</code>api.hottab.pw/cashier/login


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "password",
        "value": "123456",
        "type": "text",
        "enabled": true
    },
    {
        "key": "email",
        "value": "cashier@hottab.net",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"token":"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDIxNjAyIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoxMjksImlzcyI6Imh0dHA6XC9cL2FwaS5ob3R0YWIucHdcL2Nhc2hpZXJcL2xvZ2luIiwiaWF0IjoiMTQzODMzNTIwMiIsIm5iZiI6IjE0MzgzMzUyMDIiLCJqdGkiOiI0ZGU4NDAyODdkZjkzYTAyM2NjNjMxYjJhMDM1OGU1OSJ9.M2E2ZDc0NWVjYzI3Nzk5OTc3YmEwYWFlMjQ5OWI4OTJjMWQ5OTAxNzM0MTZiZTM0Y2M5MDU1MDg1MmY1MTRjNA","refresh_token":"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOjE0Mzk1NDQ4MDEsImlzX3JlZnJlc2hfdG9rZW4iOnRydWUsInN1YiI6MTI5LCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9jYXNoaWVyXC9sb2dpbiIsImlhdCI6IjE0MzgzMzUyMDEiLCJuYmYiOiIxNDM4MzM1MjAxIiwianRpIjoiNmJmMDM4Zjk4NDEyNWRhNjk1N2RhODY3OTgyNzE1ZWQifQ.MTE4Y2NjODgyYjhiOThlN2FjYWRhNGQxOGQ2YWFlNTUwZTE1ZmM1Y2Q3OTJhNzdkOGZiZjViMjljMjBiZWVmNg","firebase_token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkIjp7InVpZCI6IjEyOSJ9LCJ2IjowLCJpYXQiOjE0MzgzMzUyMDJ9.in3Mdp2AuBbRt2kVHb0d4DisgmOiM9ZfTOQnnywa4L0","user":{"id":129,"username":"cashier@hottab.net","email":"cashier@hottab.net","photo":null,"activated":1,"last_login":"2015-07-31 16:33:21","first_name":"loi","last_name":"hoang","hotel_id":"8","settings":[],"roles":[{"id":16,"hotel_id":8,"is_protected":0,"group_id":4,"created_at":"2015-05-21 17:54:20","updated_at":"2015-05-21 17:54:20","name":"Cashier","description":""}],"permissions":[]}}

```

##Logout##


**Url**
<code>POST</code>api.hottab.pw/cashier/logout


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "friendly_uuid",
        "value": "Pc lah",
        "type": "text",
        "enabled": true
    }
]


Response:

```


```

##List cashiers by uuid##


**Url**
<code>GET</code>api.hottab.pw/users/cashiers?uuid=PC lah


**Parameters**

**Request params**
$$params

**Request data**
[]


Response:

```
{"error":false,"data":[{"email":"cashier@hottab.net","photo":null,"first_name":"loi","last_name":"hoang"},{"email":"ninh@hottab.net","photo":null,"first_name":"Ninh","last_name":"Le Hai"},{"email":"hieupham@hottab.net","photo":null,"first_name":"Pham","last_name":"Hieu"},{"email":"vanh@hottab.net","photo":null,"first_name":"Anh","last_name":"Viet"},{"email":"khaccuong@hottab.net","photo":null,"first_name":"Cuong","last_name":"Khac"},{"email":"phuy@gmail.com","photo":null,"first_name":"Pham","last_name":"Huy"},{"email":"thanhduy@gmail.com","photo":null,"first_name":"Duy","last_name":"Thanh"}]}

```

##Renew token##
Send a refresh token to renew the token

**Url**
<code>POST</code>api.hottab.pw/cashier/refresh


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "refresh_token",
        "value": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOjE0MzA5NzA5NDMsInN1YiI6NDAsImlzcyI6Imh0dHA6XC9cL2FwaS5ob3R0YWIubmV0XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDI5NzYxMzQzIiwibmJmIjoiMTQyOTc2MTM0MyIsImp0aSI6ImQ4NGUxNTA3MGZkNTRmZGQwOTBmOTUzZWY4MjIwMTFkIn0.ZjRmZDAwMTVkZmY3NzI4NTkzZDdjYTdlYjQwNzY5ZTkzYzU4MmUzZWFmYWE0NGYzNjEwYjFkMTUwMzZhODJmOA",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"token":"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDIxNTc3IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoxMjksImlzcyI6Imh0dHA6XC9cL2FwaS5ob3R0YWIucHdcL2Nhc2hpZXJcL3JlZnJlc2giLCJpYXQiOiIxNDM4MzM1MTc3IiwibmJmIjoiMTQzODMzNTE3NyIsImp0aSI6ImI1MDY4MzI1NzBlOGNlMzgwNmIxMzE2YTUzZjYzZDUyIn0.MzlhOGJjMTgxNGVkZGExZDFjMTQ3ZjkwNGMzZjRmZjNmZTcyNWFjOGY2YjhkZjdjMGMwOTMxNzI0NGRhM2M0OQ"}

```

