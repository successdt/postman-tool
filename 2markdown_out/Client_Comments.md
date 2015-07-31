##Get Comments##
Get all comment of a object (food, service, etc..)

- object_type: food, service,...

- object\_id equal: food\_id, service\_id,...

**Url**
<code>GET</code>api.hottab.pw/comments?object_type=food&object_id=2


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


```

##Create comment##
Create a simple comment for a object with object\_type and object\_id

**Url**
<code>POST</code>api.hottab.pw/comments/create


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "token",
        "value": "4bd9358b40bf5e3b505d2fa87fbae13c",
        "type": "text",
        "enabled": true
    },
    {
        "key": "text",
        "value": "Test comment",
        "type": "text",
        "enabled": true
    },
    {
        "key": "object_type",
        "value": "food",
        "type": "text",
        "enabled": true
    },
    {
        "key": "object_id",
        "value": "291",
        "type": "text",
        "enabled": true
    }
]


Response:

```


```

