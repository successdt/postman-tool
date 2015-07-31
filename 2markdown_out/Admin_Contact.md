##Delete##


**Url**
<code>DELETE</code>api.hottab.pw/admin/contacts/9?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4MzMyMDUxIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODI0NTY1MSIsIm5iZiI6IjE0MzgyNDU2NTEiLCJqdGkiOiJlMDBmMmI0YWRjYzBjMWIzZDk4OTY4NjliYzQyZGE1ZSJ9.NTkyZjA4NzVjNzc1OWJkNDFkYzNkZDdiYzVhN2U3MDQ2YWNhOWVkNmNhMTVhMjdhZmM4ODlhYTRmZDJmNjQyMg&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
[]


Response:

```
{
    "error": false,
    "message": "successfully deleted"
}

```

##View##


**Url**
<code>GET</code>api.hottab.pw/admin/contacts/2?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4MzMyMDUxIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODI0NTY1MSIsIm5iZiI6IjE0MzgyNDU2NTEiLCJqdGkiOiJlMDBmMmI0YWRjYzBjMWIzZDk4OTY4NjliYzQyZGE1ZSJ9.NTkyZjA4NzVjNzc1OWJkNDFkYzNkZDdiYzVhN2U3MDQ2YWNhOWVkNmNhMTVhMjdhZmM4ODlhYTRmZDJmNjQyMg&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "password": "123456",
    "email": "thanhdd@hottab.net"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 3,
        "hotel_id": "8",
        "supplier_id": "2",
        "email": "example@gmail.com",
        "phone": "84438262625",
        "mobile": "84988888888",
        "created_at": "2015-07-16 18:25:00",
        "updated_at": "2015-07-16 18:25:00",
        "name": "Ms Phuong",
        "job_position": "Genera director"
    }
}

```

##Create##
Create new contact
If have supplier\_id, it becomes supplier\_contact

**Url**
<code>POST</code>api.hottab.pw/admin/contacts?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMyOTY5OTEyIiwiZXhwIjoiMTQzMzA1NjMxMiIsIm5iZiI6IjE0MzI5Njk5MTIiLCJqdGkiOiIyMWE0YTM5YTk4NzM3MWQxOGI3NzU3YmMwODE3ZjU1OSJ9.MTg3MGZiMThjNmJhZjc1ZWExMzVhZjA4YTEwNTQyYTk0ZTFlMzQ1NzA4ODhhMzU2ZTUzYjc1MGZlY2NhYmQ0Yw&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "supplier_id": 1,
    "email": "example@gmail.com",
    "phone": "84438262625",
    "mobile": "84988888888",
    "name": "Ms Phuong",
    "job_position": "Genera director"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 4,
        "hotel_id": "8",
        "supplier_id": "1",
        "email": "example@gmail.com",
        "phone": "84438262625",
        "mobile": "84988888888",
        "created_at": "2015-07-31 13:37:53",
        "updated_at": "2015-07-31 13:37:53",
        "name": "Ms Phuong",
        "job_position": "Genera director"
    }
}

```

##List##


**Url**
<code>GET</code>api.hottab.pw/admin/contacts?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzMzg4MDU2IiwiZXhwIjoiMTQzMzQ3NDQ1NiIsIm5iZiI6IjE0MzMzODgwNTYiLCJqdGkiOiI2NjRhMjhjMTY2ZDZiNGM4OThmM2QwODYxZmZkYzg1MyJ9.YzkyNjI0MmY1NzUwOTY4N2RhZGFhOTlmZDA4OGU3YWQ1ZWVlYTEwY2JkMWRlMTVlMGEyODQxYWQ3NDMxYTM2Nw&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "password": "123456",
    "email": "thanhdd@hottab.net"
}


Response:

```
{
    "error": false,
    "data": [
        {
            "id": 3,
            "hotel_id": "8",
            "supplier_id": "2",
            "email": "example@gmail.com",
            "phone": "84438262625",
            "mobile": "84988888888",
            "created_at": "2015-07-16 18:25:00",
            "updated_at": "2015-07-16 18:25:00",
            "name": "Ms Phuong",
            "job_position": "Genera director"
        },
        {
            "id": 4,
            "hotel_id": "8",
            "supplier_id": "1",
            "email": "example@gmail.com",
            "phone": "84438262625",
            "mobile": "84988888888",
            "created_at": "2015-07-31 13:37:53",
            "updated_at": "2015-07-31 13:37:53",
            "name": "Ms Phuong",
            "job_position": "Genera director"
        }
    ]
}

```

##Update##
Update contact
If have supplier\_id, it becomes supplier\_contact

**Url**
<code>PUT</code>api.hottab.pw/admin/contacts/7?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLnB3XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDMzMzg4MDU2IiwiZXhwIjoiMTQzMzQ3NDQ1NiIsIm5iZiI6IjE0MzMzODgwNTYiLCJqdGkiOiI2NjRhMjhjMTY2ZDZiNGM4OThmM2QwODYxZmZkYzg1MyJ9.YzkyNjI0MmY1NzUwOTY4N2RhZGFhOTlmZDA4OGU3YWQ1ZWVlYTEwY2JkMWRlMTVlMGEyODQxYWQ3NDMxYTM2Nw&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "supplier_id": 1,
    "email": "example@gmail.com",
    "phone": "84438262625",
    "mobile": "84988888888",
    "name": "Ms Phuong Hoang",
    "job_position": "General director"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 3,
        "hotel_id": "8",
        "supplier_id": "1",
        "email": "example@gmail.com",
        "phone": "84438262625",
        "mobile": "84988888888",
        "created_at": "2015-07-16 18:25:00",
        "updated_at": "2015-07-31 13:39:11",
        "name": "Ms Phuong Hoang",
        "job_position": "General director"
    }
}

```

