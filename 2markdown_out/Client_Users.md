##Send Password Reminder Email##
Send password reset code to email

**Url**
<code>POST</code>api.hottab.pw/users/reminder


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "email",
        "value": "successdt@hotmail.com",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"message":"Reminder email sent"}

```

##Update Profile##
update user profile, includes changing password

**Url**
<code>POST</code>api.hottab.pw/users/update


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
        "key": "password",
        "value": "123456",
        "type": "text",
        "enabled": true
    },
    {
        "key": "new_password",
        "value": "123456",
        "type": "text",
        "enabled": true
    },
    {
        "key": "first_name",
        "value": "Duy Thanh",
        "type": "text",
        "enabled": true
    },
    {
        "key": "last_name",
        "value": "Dao",
        "type": "text",
        "enabled": true
    },
    {
        "key": "photo",
        "value": "https:\/\/fbcdn-profile-a.akamaihd.net\/hprofile-ak-xfa1\/v\/t1.0-1\/p50x50\/406646_502758429737556_1605773667_n.jpg?oh=3c1115a15ab1ba3ad98c72fc3c739802&oe=54979128&__gda__=1418099472_8466bceef7c2027e3784fd06972a579d",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"message":"Update successfully"}

```

##Sign Up##
Register user account, return erorr if this email exists

**Url**
<code>POST</code>api.hottab.pw/users/signup


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
        "value": "successdt@gmail.com",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"token":"da9918a98352042a7b29796f75083930","message":"Please check your email to complete the registration"}

```

##Confirm email##
user email confirmation, using confirm\_code - which was sent by email

**Url**
<code>POST</code>api.hottab.pw/users/confirm


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
        "key": "confirm_code",
        "value": "9358b40bf5e3b505d2fa87fbae13c",
        "type": "text",
        "enabled": true
    }
]


Response:

```


```

##Get Basic Information by Email##
get user's basic information without token: name, profile picture, ...

**Url**
<code>GET</code>api.hottab.pw/users/basic?email=successdt@hotmail.com


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
{"error":false,"data":{"photo":"http:\/\/api.hottab.pw\/uploads\/users\/34\/1410763078_7-dieu-phai-manh-can-nho-cho-nu-hon-dau-hoan-hao-28c7a5.jpg","first_name":null,"last_name":null}}

```

##Get Profile##
Get user's profile

**Url**
<code>GET</code>api.hottab.pw/users/profile?token=4bd9358b40bf5e3b505d2fa87fbae13c


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
{"error":false,"data":{"id":94,"username":"hottab@gmail.com","email":"hottab@gmail.com","photo":null,"activated":1,"last_login":null,"first_name":null,"last_name":null,"settings":[]}}

```

##Renew token##
Send a refresh token to renew the token

**Url**
<code>POST</code>api.hottab.pw/refresh


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


```

##Resend Confirm email##
resend user's confirmation email

**Url**
<code>GET</code>api.hottab.pw/users/confirm?token=4bd9358b40bf5e3b505d2fa87fbae13c


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
{"error":false,"message":"Confirm email was sent to your email"}

```

##Reset Password##
Reset user's passwork when forgot

**Url**
<code>POST</code>api.hottab.pw/users/reset


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "code",
        "value": "%242y%2410%24tQEEe7P080ST2LE0DobnSOSABwawSRjCy0zQa7%2FMic9Zk5QPEuK3C.",
        "type": "text",
        "enabled": true
    },
    {
        "key": "password",
        "value": "123456",
        "type": "text",
        "enabled": true
    }
]


Response:

```


```

##Login##
return user profile and token

**Url**
<code>POST</code>api.hottab.pw/login


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
        "value": "successdt@gmail.com",
        "type": "text",
        "enabled": true
    }
]


Response:

```


```

##Logout##


**Url**
<code>POST</code>api.hottab.pw/logout


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

