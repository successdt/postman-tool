##List##


**Url**
<code>GET</code>api.hottab.pw/cashier/customer-classes?hotel_id=8&token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjg5LCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvY2FzaGllclwvbG9naW4iLCJpYXQiOiIxNDMyNzE0Nzk1IiwiZXhwIjoiMTQzMjgwMTE5NSIsIm5iZiI6IjE0MzI3MTQ3OTUiLCJqdGkiOiI1MWI0MjVkNzczNGYwZWMyZWFkMDAzYzNkYmJjYjNiMiJ9.ZjRmMTRjMWUyOTA4MDI1NmQzMGQ4OTg0MTQyZmE2ZTI4NTk4OTQyNWNiZjY3MzM1N2ZkNTIyNTEzMzNmMWIyYw


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
{"error":false,"data":[{"id":11,"hotel_id":8,"created_at":"2015-05-30 11:12:07","updated_at":"2015-05-30 11:12:07","name":"non-Foreigner"}]}

```

