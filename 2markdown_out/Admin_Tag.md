##Delete a tag##


**Url**
<code>DELETE</code>api.hottab.pw/admin/tags/1?token=b28e0d3404612f099cb1063ea38e9f17&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
[]


Response:

```


```

##List of tags##


**Url**
<code>GET</code>api.hottab.pw/admin/tags?token=b28e0d3404612f099cb1063ea38e9f17&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "name": "Hoa cmn qu\u1ea3"
}


Response:

```


```

##Create a tags##
type:

* 1: food tag

* 2: room tag

**Url**
<code>POST</code>api.hottab.pw/admin/tags?token=b28e0d3404612f099cb1063ea38e9f17&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "name": "Hoa cmn qu\u1ea3"
}


Response:

```


```

##View single tag##


**Url**
<code>GET</code>api.hottab.pw/admin/tags/1?token=b28e0d3404612f099cb1063ea38e9f17&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "name": "Hoa cmn qu\u1ea3"
}


Response:

```


```

##Update a tag##


**Url**
<code>POST</code>api.hottab.pw/admin/tags/1?token=b28e0d3404612f099cb1063ea38e9f17&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "name": "Hoa cmn qu\u1ea3",
    "_method": "PUT"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 4,
        "type": 1,
        "hotel_id": 8,
        "created_at": "2015-03-04 15:08:25",
        "updated_at": "2015-03-04 15:08:25",
        "name": "Hoa cmn qu\u1ea3"
    }
}

```

