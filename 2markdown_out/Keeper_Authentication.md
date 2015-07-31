##Login##
Return user profile with token and hotel_id

**Url**
<code>POST</code>api.hottab.pw/housekeeper/login


**Parameters**
<code>api_hottab_pw/housekeeper/login<code> 


**Request data**
{
    "password": "123456",
    "email": "keeper@hottab.net"
}


Response:

```
{
    "error": false,
    "token": "9c014377cb7162201d391a23a276d162",
    "user": {
        "id": 92,
        "username": "keeper@hottab.net",
        "email": "keeper@hottab.net",
        "photo": null,
        "activated": 1,
        "last_login": "2015-02-25 11:16:30",
        "first_name": "Keeper",
        "last_name": "Hottab",
        "hotel_id": "8",
        "settings": []
    }
}

```

