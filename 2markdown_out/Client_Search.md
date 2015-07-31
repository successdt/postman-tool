##Search##
Search for every object like: food, service,...

- Search keyword will be saved to the Database to help us improve searching performance

**Url**
<code>GET</code>api.hottab.pw/search?token=4bd9358b40bf5e3b505d2fa87fbae13c&q=pizza


**Parameters**

**Request params**
$$params

**Request data**
[]


Response:

```


```

##Search Click##
Call this API when user choose a search result

- More click, higher position in the results list

**Url**
<code>POST</code>api.hottab.pw/search/click


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
        "key": "result_id",
        "value": "1",
        "type": "text",
        "enabled": true
    },
    {
        "key": "query_id",
        "value": "2",
        "type": "text",
        "enabled": true
    }
]


Response:

```


```

