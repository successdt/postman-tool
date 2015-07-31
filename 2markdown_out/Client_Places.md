##Add a venue to user's favourite list##
Add a venue to user's favourite list.

- Create new venue if not exist

- Use existing venue

- Type: hottab / foursquare 

**Url**
<code>POST</code>api.hottab.pw/places/fav-list


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
        "key": "type",
        "value": "foursquare",
        "type": "text",
        "enabled": true
    },
    {
        "key": "venue_id",
        "value": "51b817422fc69d5bf3de2228",
        "type": "text",
        "enabled": true
    },
    {
        "key": "name",
        "value": "The Kafe",
        "type": "text",
        "enabled": true
    },
    {
        "key": "location",
        "value": "18 \u0110i\u1ec7n Bi\u00ean PH\u1ee7",
        "type": "text",
        "enabled": true
    },
    {
        "key": "image",
        "value": "https:\/\/irs3.4sqi.net\/img\/general\/612x612\/36865461_C1koEAza0kaacZrpevn7tacUF8AERkRhdpA4Mh3h8N0.jpg",
        "type": "text",
        "enabled": true
    },
    {
        "key": "latitude",
        "value": "21.029809903808196",
        "type": "text",
        "enabled": true
    },
    {
        "key": "longitude",
        "value": "105.84209471940993",
        "type": "text",
        "enabled": true
    },
    {
        "key": "short_desription",
        "value": "best restaurant in Hanoi",
        "type": "text",
        "enabled": true
    }
]


Response:

```


```

##Search for Nearby Places##
search for nearby venue use latitude and longitue. Order by distance from current location.

**Url**
<code>GET</code>api.hottab.pw/places/search?token=4bd9358b40bf5e3b505d2fa87fbae13c&latitude=21.029809903808196&longitude=105.84209471940993


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "_method",
        "value": "PUT",
        "type": "text",
        "enabled": true
    },
    {
        "key": "guest_id",
        "value": "11",
        "type": "text",
        "enabled": true
    },
    {
        "key": "room_id",
        "value": "72",
        "type": "text",
        "enabled": true
    },
    {
        "key": "hotel_id",
        "value": "8",
        "type": "text",
        "enabled": true
    },
    {
        "key": "order",
        "value": "{\"status\":1,\"customer_note\":\"Hurry up!!!\",\"waiter_note\":\"\",\"foods\":[{\"id\":6,\"quantity\":2,\"type\":1},{\"id\":\"750\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1582\",\"selected\":false},{\"id\":\"1583\",\"selected\":false},{\"id\":\"1584\",\"selected\":true}]},{\"id\":\"754\",\"quantity\":\"4\",\"food_options\":[]},{\"id\":\"755\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1585\",\"selected\":true},{\"id\":\"1586\",\"selected\":false}]}]}",
        "type": "text",
        "enabled": true
    },
    {
        "key": "parent_bill",
        "value": "{\"status\":1,\"total\":255.88,\"split_type\":1,\"customer_number\":2,\"taxes\":[{\"id\":\"2\"},{\"id\":\"18\"}],\"discounts\":[{\"id\":\"10\"},{\"id\":\"5\"}],\"bills\":[{\"foods\":[{\"id\":6,\"quantity\":2,\"type\":1},{\"id\":\"750\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1582\",\"selected\":false},{\"id\":\"1583\",\"selected\":false},{\"id\":\"1584\",\"selected\":true}]},{\"id\":\"754\",\"quantity\":\"4\",\"food_options\":[]}]},{\"foods\":[{\"id\":\"755\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1585\",\"selected\":true},{\"id\":\"1586\",\"selected\":false}]}]}]}",
        "type": "text",
        "enabled": true
    }
]


Response:

```


```

##Get Favourite Places##
list of favourite venues include ad venue

**Url**
<code>GET</code>api.hottab.pw/places/fav-list?token=4bd9358b40bf5e3b505d2fa87fbae13c


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "_method",
        "value": "PUT",
        "type": "text",
        "enabled": true
    },
    {
        "key": "guest_id",
        "value": "11",
        "type": "text",
        "enabled": true
    },
    {
        "key": "room_id",
        "value": "72",
        "type": "text",
        "enabled": true
    },
    {
        "key": "hotel_id",
        "value": "8",
        "type": "text",
        "enabled": true
    },
    {
        "key": "order",
        "value": "{\"status\":1,\"customer_note\":\"Hurry up!!!\",\"waiter_note\":\"\",\"foods\":[{\"id\":6,\"quantity\":2,\"type\":1},{\"id\":\"750\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1582\",\"selected\":false},{\"id\":\"1583\",\"selected\":false},{\"id\":\"1584\",\"selected\":true}]},{\"id\":\"754\",\"quantity\":\"4\",\"food_options\":[]},{\"id\":\"755\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1585\",\"selected\":true},{\"id\":\"1586\",\"selected\":false}]}]}",
        "type": "text",
        "enabled": true
    },
    {
        "key": "parent_bill",
        "value": "{\"status\":1,\"total\":255.88,\"split_type\":1,\"customer_number\":2,\"taxes\":[{\"id\":\"2\"},{\"id\":\"18\"}],\"discounts\":[{\"id\":\"10\"},{\"id\":\"5\"}],\"bills\":[{\"foods\":[{\"id\":6,\"quantity\":2,\"type\":1},{\"id\":\"750\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1582\",\"selected\":false},{\"id\":\"1583\",\"selected\":false},{\"id\":\"1584\",\"selected\":true}]},{\"id\":\"754\",\"quantity\":\"4\",\"food_options\":[]}]},{\"foods\":[{\"id\":\"755\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1585\",\"selected\":true},{\"id\":\"1586\",\"selected\":false}]}]}]}",
        "type": "text",
        "enabled": true
    }
]


Response:

```


```

##Delete a Place From User's Favourite List##
Remove a place from user's favourite list.

- Doesn't remove place in the database

**Url**
<code>POST</code>api.hottab.pw/places/fav-delete


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
        "value": "2345",
        "type": "text",
        "enabled": true
    }
]


Response:

```


```

