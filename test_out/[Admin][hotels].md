##Create & Update Introduction##
Create or update hotel introduction

- Create new introduction if doesn't have id param or id is invalid

- Update hotel if id param exist

- Make sure that admin has permission to edit this hotel info

Parameters:


* token:
* hotel_id:
* title:
* image:
* content:


Response:

```
#!json
{
    "error": "Invalid token"
}

```
##Detail##
Return object hotel infomation by hotel_id (id param in the url)

- result is used to edit hotel infomation

- return error : true if hotel_id is invalid

Parameters:


* token:
* hotel_id:
* title:
* image:
* content:


Response:

```
#!json
{
    "error": "Invalid token"
}

```
##List hotels##
list all of all hotels belong to this user.
Used to choose hotel for admin

Parameters:


* token:
* hotel_id:
* description:
* _method:
* name:


Response:

```
#!json
{
    "error": "Invalid token"
}

```
##Delete Introduction##
Delete hotel introduction by id

Parameters:


* token:
* hotel_id:
* id:


Response:

```
#!json
{
    "error": "Invalid token"
}

```
##Update Hotel##
update hotel infomation

Parameters:


* token:
* description:
* _method:
* name:


Response:

```
#!json
{
    "error": "Invalid token"
}

```
##Update gallery##
update hotel gallery with array of photo. Each item object has url and caption

Parameters:


* token:
* hotel_id:
* item[0][url]:
* item[0][caption]:
* item[1][url]:
* item[1][caption]:


Response:

```
#!json
{
    "error": "Invalid token"
}

```
