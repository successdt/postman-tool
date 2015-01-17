##Add a venue to user's favourite list##
Add a venue to user's favourite list.

- Create new venue if not exist

- Use existing venue

- Type: hottab / foursquare 

Parameters:


* token:
* type:
* venue_id:
* name:
* location:
* image:
* latitude:
* longitude:
* short_desription:


Response:

```
#!json
{
    "error": "Token has been expired"
}

```
##Get Favourite Places##
### GET /places/fav-list ###
list of favourite venues include ad venue

Parameters:


* token:
* text:
* object_type:
* object_id:


Response:

```
#!json
{
    "error": "Token has been expired"
}

```
##Delete a Place From User's Favourite List##
Remove a place from user's favourite list.

- Doesn't remove place in the database

Parameters:


* token:
* id:


Response:

```
#!json
{
    "error": "Token has been expired"
}

```
##Search for Nearby Places##
search for nearby venue use latitude and longitue. Order by distance from current location.

Parameters:


* type:
* venue_id:
* name:
* location:
* image:
* short_desription:


Response:

```
#!json
{
    "error": false,
    "data": [
        {
            "distance": 1.451,
            "id": 20,
            "created_at": "2014-11-18 15:59:55",
            "updated_at": "2014-11-18 19:07:38",
            "type": "hottab",
            "venue_id": null,
            "name": "HubIT - The first incubator for the Vietnam startup",
            "location": "30 H\u00e0ng V\u00f4i, Ch\u01b0\u01a1ng D\u01b0\u01a1ng, Ho\u00e0n Ki\u1ebfm District, Hanoi, Vietnam",
            "image": "http:\/\/admin.hottabvn.tk\/uploads\/914474_720999541308415_1354732404_n_tqXxpo0N.jpg",
            "latitude": "21.030203639471920",
            "longitude": "105.856599469311500",
            "short_description": "The first incubator for the Vietnam startup"
        },
        {
            "distance": 3.02,
            "id": 6,
            "created_at": "2014-11-15 14:21:36",
            "updated_at": "2014-11-18 16:04:37",
            "type": "hottab",
            "venue_id": null,
            "name": "Pizza HUT",
            "location": "177 T\u00e2y S\u01a1n, Ng\u00e3 T\u01b0 S\u1edf, \u0110\u1ed1ng \u0110a, Hanoi, Vietnam",
            "image": "http:\/\/admin.hottabvn.tk\/uploads\/pizza-hut_logo_1513_PWK1hb8r.jpeg",
            "latitude": "21.006328000000000",
            "longitude": "105.823104000000060",
            "short_description": "Th\u1eadt l\u00e0 ngon"
        }
    ]
}

```
