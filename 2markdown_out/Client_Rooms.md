##Get Room Preferences##
Get current room preferences form and value

**Url**
<code>GET</code>api.hottab.pw/room-preferences/?hotel_id=2&room_id=1


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "token",
        "value": "3ed204a039dd32ab1c75ac1fd95ac507",
        "type": "text",
        "enabled": true
    },
    {
        "key": "id",
        "value": "813",
        "type": "text",
        "enabled": true
    }
]


Response:

```


```

##Get list taken rooms##


**Url**
<code>GET</code>api.hottab.pw/cashier/rooms/taken?token=7ef33ca848fe1617b50eeed1eb89840f


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "token",
        "value": "9b96173956d76aa64228f578a568cf96",
        "type": "text",
        "enabled": true
    },
    {
        "key": "payment_method_id",
        "value": "2",
        "type": "text",
        "enabled": true
    },
    {
        "key": "amount",
        "value": "500",
        "type": "text",
        "enabled": true
    },
    {
        "key": "uuid",
        "value": "PC lah",
        "type": "text",
        "enabled": true
    },
    {
        "key": "description",
        "value": "bla bla",
        "type": "text",
        "enabled": true
    },
    {
        "key": "card_transaction_id",
        "value": "1102",
        "type": "text",
        "enabled": true
    }
]


Response:

```


```

##Update Room Preferences##
update room preferences field

**Url**
<code>POST</code>api.hottab.pw/room-preferences/?hotel_id=2&room_id=1&preferences[1][id]=1&preferences[1][value]=1


**Parameters**

**Request params**
$$params

**Request data**
[]


Response:

```


```

