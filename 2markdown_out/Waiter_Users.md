##Login##
Return user profile with token and hotel_id


**Url**
<code>POST</code>api.hottab.pw/waiter/login


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
        "value": "waiter@hottab.net",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"token":"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDIyODkzIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoxMzAsImlzcyI6Imh0dHA6XC9cL2FwaS5ob3R0YWIucHdcL3dhaXRlclwvbG9naW4iLCJpYXQiOiIxNDM4MzM2NDkzIiwibmJmIjoiMTQzODMzNjQ5MyIsImp0aSI6ImY2MDkzMmU5Y2IyMDU0NjhlOTI2MjYzMDc0YTA2ZWU3In0.N2NjM2MyMTNjMjIxOGI4ZDQxMDAxODcyZmIxNzYwMTc3Y2YyYTM0NzgzMTU0ODNlODgxMTQ2MmQyNzI3OGFlNQ","refresh_token":"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOjE0Mzk1NDYwOTMsImlzX3JlZnJlc2hfdG9rZW4iOnRydWUsInN1YiI6MTMwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC93YWl0ZXJcL2xvZ2luIiwiaWF0IjoiMTQzODMzNjQ5MyIsIm5iZiI6IjE0MzgzMzY0OTMiLCJqdGkiOiJmNjA5MzJlOWNiMjA1NDY4ZTkyNjI2MzA3NGEwNmVlNyJ9.ZDI2MzhiODU5YTY1OTc5OWQ4NGI3ZDNkNGFkMzEyNmJjYTBmNmU0OWYxM2UzMjIwNzMzOTZhMGE3NmQ0ODcxMA","firebase_token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkIjp7InVpZCI6IjEzMCJ9LCJ2IjowLCJpYXQiOjE0MzgzMzY0OTN9.lOR54fIsXeh-ZuqcovUZKuCZlu0PZR_F1eLrRbJYbu4","user":{"id":130,"username":"waiter@hottab.net","email":"waiter@hottab.net","photo":null,"activated":1,"last_login":"2015-07-31 16:54:53","first_name":"hoang","last_name":"loi","hotel_id":"8","settings":[],"roles":[{"id":13,"hotel_id":8,"is_protected":0,"group_id":3,"created_at":"2015-05-21 16:23:09","updated_at":"2015-05-21 16:23:09","name":"Waiter","description":""}],"permissions":[]}}

```

##Renew token##
Send a refresh token to renew the token

**Url**
<code>POST</code>api.hottab.pw/waiter/refresh


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
{"error":false,"token":"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDIzNTExIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjoxMzAsImlzcyI6Imh0dHA6XC9cL2FwaS5ob3R0YWIucHdcL3dhaXRlclwvcmVmcmVzaCIsImlhdCI6IjE0MzgzMzcxMTEiLCJuYmYiOiIxNDM4MzM3MTExIiwianRpIjoiM2ZmZjhiM2Q3MzExYzhhZWM0ZDNmOTE2MmFjMGQ4NjQifQ.MGE1YTUwMmQ3NGMwNWZhYjZhMTQxNWZhOGNjMmM4ZDFiMDI0ZjJhZWExMjJhOTc2YzBlM2MzZmVmY2YyYWZkMA"}

```

##Logout##


**Url**
<code>POST</code>api.hottab.pw/waiter/logout


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

##List waiters by uuid##


**Url**
<code>GET</code>api.hottab.pw/users/waiters?uuid=PC lah


**Parameters**

**Request params**
$$params

**Request data**
[]


Response:

```
{"error":false,"data":[{"email":"waiter@hottab.net","photo":null,"first_name":"hoang","last_name":"loi"},{"email":"tai@hottab.net","photo":null,"first_name":"Tai","last_name":"Nguyen"},{"email":"dfsdf@sdfsdf.com","photo":null,"first_name":"Hieu","last_name":"Pham"},{"email":"waiter1@hottab.net","photo":null,"first_name":"Waiter","last_name":"mot"},{"email":"waiter2@hottab.net","photo":null,"first_name":"Waiter","last_name":"hai"},{"email":"waiter3@hottab.net","photo":null,"first_name":"Waiter","last_name":"ba"},{"email":"waiter4@hottab.net","photo":null,"first_name":"Waiter","last_name":"bon"},{"email":"waiter5@hottab.net","photo":null,"first_name":"Waiter","last_name":"nam"},{"email":"waiter6@hottab.net","photo":null,"first_name":"Waiter","last_name":"sau"},{"email":"waiter7@hottab.net","photo":null,"first_name":"Waiter","last_name":"bay"},{"email":"waiter8@hottab.net","photo":null,"first_name":"Waiter","last_name":"tam"},{"email":"waiter9@hottab.net","photo":null,"first_name":"Waiter","last_name":"chin"},{"email":"waiter10@hottab.net","photo":null,"first_name":"Waiter","last_name":"muoi"}]}

```

