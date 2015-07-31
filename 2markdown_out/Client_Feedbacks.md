##Get Feedback Question##
Get feedback question for current user, one question on once request

**Url**
<code>GET</code>api.hottab.pw/feedback/question?token=4bd9358b40bf5e3b505d2fa87fbae13c


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

##Answer##
answer a feedback question

**Url**
<code>POST</code>api.hottab.pw/feedback/answer


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
        "key": "id",
        "value": "1",
        "type": "text",
        "enabled": true
    },
    {
        "key": "answer",
        "value": "example",
        "type": "text",
        "enabled": true
    }
]


Response:

```


```

