##Update gallery##
update hotel gallery with array of photo. Each item object has url and caption

**Url**
<code>POST</code>api.hottab.pw/admin/hotels/gallery


**Parameters**
<code>api_hottab_pw/admin/hotels/gallery<code> 


**Request data**
{
    "token": "fe4a8fc53550eecd63bcbb049a4df3a6",
    "hotel_id": "8",
    "item[0][url]": "http:\/\/admin.hottab.pw\/uploads\/1\/gallery_t3KarSGe.jpg",
    "item[0][caption]": "Sample caption",
    "item[1][url]": "http:\/\/admin.hottab.pw\/uploads\/1\/gallery_t3KarSGe.jpg",
    "item[1][caption]": "Sample caption 2"
}


Response:

```
{
    "error": false,
    "data": 8
}

```

##Update Hotel##
update hotel infomation

**Url**
<code>POST</code>api.hottab.pw/admin/hotels/8


**Parameters**
<code>api_hottab_pw/admin/hotels/8<code> 


**Request data**
{
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQyODM4OTEwMiIsImV4cCI6IjE0Mjg0NzU1MDIiLCJuYmYiOiIxNDI4Mzg5MTAyIiwianRpIjoiN2E1OGQ4MWFkOTdjOGY2YjM0ZGE4YmI4MzU1YzE5NzIifQ.MzZjYTkyNWZhMDZjMzkxMGZiNTkwNDkwZGUzYzY2ZDdjMTYzMmExMjA3MjgxNGE5ZTYxZjY5ZGUzMzUwMTRjZA",
    "_method": "PUT",
    "logo": "http:\/\/api.hottab.pw\/uploads\/40\/offer_zvOWdqyP.jpg",
    "address": "T\u00e2y H\u1ed3",
    "phone": "+84438616161",
    "url": "http:\/\/republic.vn"
}


Response:

```
{
    "error": false,
    "data": "8"
}

```

##Delete Introduction##
Delete hotel introduction by id

**Url**
<code>POST</code>api.hottab.pw/admin/hotels/delete-introductions


**Parameters**
<code>api_hottab_pw/admin/hotels/delete-introductions<code> 


**Request data**
{
    "token": "fe4a8fc53550eecd63bcbb049a4df3a6",
    "hotel_id": "8",
    "id": "44"
}


Response:

```
{
    "error": false,
    "data": "Hotel introduction deleted"
}

```

##Create & Update Introduction##
Create or update hotel introduction

- Create new introduction if doesn't have id param or id is invalid

- Update hotel if id param exist

- Make sure that admin has permission to edit this hotel info

**Url**
<code>POST</code>api.hottab.pw/admin/hotels/introductions


**Parameters**
<code>api_hottab_pw/admin/hotels/introductions<code> 


**Request data**
{
    "token": "fe4a8fc53550eecd63bcbb049a4df3a6",
    "hotel_id": "8",
    "title": "Room intro",
    "image": "http:\/\/admin.hottab.pw\/uploads\/1\/Screenshot_1_uzfBpFnV.png",
    "content": "this is hotel intro"
}


Response:

```
{
    "error": false,
    "data": 39
}

```

##List hotels##
list all of all hotels belong to this user.
Used to choose hotel for admin

**Url**
<code>GET</code>api.hottab.pw/admin/hotels?token=fe4a8fc53550eecd63bcbb049a4df3a6


**Parameters**
<code>token</code> $token


**Request data**
{
    "password": "123456",
    "email": "successdt@gmail.com"
}


Response:

```
{
    "error": false,
    "data": [
        {
            "id": 8,
            "logo": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Logo_-_512px_Qcof3Uc1.jpg",
            "name": "Sahul Hotel"
        },
        {
            "id": 10,
            "logo": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/shrimp_marinara_zs73lg1Q.jpg",
            "name": "Hai Co Tien"
        },
        {
            "id": 11,
            "logo": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Strawberry_lemonade_lj7HzmYU.jpg",
            "name": "Ba Co Tien"
        },
        {
            "id": 13,
            "logo": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Logo_-_512px_Qcof3Uc1.jpg",
            "name": "B\u1ed1n C\u00f4 Ti\u00ean"
        }
    ]
}

```

##Detail##
Return object hotel infomation by hotel_id (id param in the url)

- result is used to edit hotel infomation

- return error : true if hotel_id is invalid

**Url**
<code>GET</code>api.hottab.pw/admin/hotels/8?token=fe4a8fc53550eecd63bcbb049a4df3a6


**Parameters**
<code>token</code> $token


**Request data**
{
    "password": "123456",
    "email": "successdt@gmail.com"
}


Response:

```
{
    "error": false,
    "data": {
        "id": "8",
        "user_id": "40",
        "name": "Sahul Hotel 2",
        "logo": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/download_hTABF6Q7.png",
        "image": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/WA-The-Roosevelt-New-Orleans-Grand-Lobby_inQL0hj5.jpg",
        "description": "<p style=\"color: rgb(36, 36, 36);text-align: justify;\"><span style=\"color: windowtext;\"><b>Warmest greetings from\u00a0Sahul Hotel!<\/b><br\/><br\/>On behalf of the Board of Management and staff at<span class=\"Apple-converted-space\">\u00a0<\/span><b>Sahul Hotel,<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>We would like to thank you for your attention to our Hotel.<br\/><br\/>As we want constantly enhance your satisfaction, our name is based on:<br\/><b><br\/>S: Standard<span class=\"Apple-converted-space\">\u00a0<\/span><br\/>A: Ahead<span class=\"Apple-converted-space\">\u00a0<\/span><br\/>HUL: High Up Levels<span class=\"Apple-converted-space\">\u00a0<\/span><\/b><br\/><br\/>Being one of new hotel in Hanoi, we are taking on foundation from International<b><span class=\"Apple-converted-space\">\u00a0<\/span>standard<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>5 stars hotel to set up our facilities and services. Our vision leads to our action: We always make continual efforts,<span class=\"Apple-converted-space\">\u00a0<\/span><b>go Ahead<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>to guide our Hotel at<span class=\"Apple-converted-space\">\u00a0<\/span><b>High Up Levels<\/b>. As we continue our efforts in making our Hotel become your ideal staying, we sincerely appreciate your comments on what we can do to increase and fine tune our services for your enjoyment.<br\/><br\/>Coming with our Slogan:<span class=\"Apple-converted-space\">\u00a0<\/span><b>\u201cWith Us You Feel At Home\u201d<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>we would like to bring to you warmly and friendly experiences like your beloved home every times stay at our Hotel.<br\/><br\/><\/span><\/p><div style=\"color: rgb(36, 36, 36);\"><div style=\"text-align: justify;\"><b>Hanoi Sahul Hotel<span class=\"Apple-converted-space\">\u00a0<\/span><\/b>is a 4 star hotel standard, located in 684 Minh Khai - Hai Ba Trung District - Hanoi. \u00a0Sahul Hotel is only 2.5 km from hotel to Hoan Kiem Lake, Water Puppet Theatre, St Josephs Cathedral, Night Market, Hanoi Post Office, Trang Tien Plaza shopping center etc. The Hotel is right beside Vinh Tuy Bridge, which is conveniently directly connected to famous tourist attraction sites such as Ha Long Bay and Hoa Lu Ninh Binh as well as large industrial zones by modern high ways. Furthermore, Sahul Hotel is within walking distance of Times City Mega Mall - Asia's largest underground retail complex, where guests can freely explore various shopping sites and recreational activities.<br\/><br\/><div style=\"text-align: center;\"><a class=\"colorbox cboxElement\" href=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/sahul_hotel_lobby__11.jpg\" rel=\"gallery1\" target=\"_blank\" style=\"width: 800px;height: 320px;\"><img class=\"img-editor\" alt=\"\" border=\"0\" src=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/sahul_hotel_lobby__11.jpg\"\/><\/a><br\/><\/div><\/div><div style=\"text-align: justify;\"><br\/><\/div><div style=\"text-align: justify;\"><b style=\"text-align: left;\">LOBBY LOUNGE<\/b><br\/><\/div><div style=\"text-align: justify;\"><br\/><\/div><div style=\"text-align: justify;\"><span>Located beside the hotel\u2019s main hall of Sahul Hotel, Lobby Lounge is an ideal place for meeting with friends, clients or just relaxing after work. The most popular choices are specially made cocktails or some dessert with afternoon tea. You can relax with your colleagues in soothing music. Besides, Lobby Lounge is also the best place to celebrate your birthday party or have a family gathering.<\/span><\/div><div style=\"text-align: justify;\"><br\/><\/div><b><\/b><div style=\"text-align: justify;\"><b>ROOMS<\/b><\/div><div style=\"text-align: justify;\"><br\/><\/div><div style=\"text-align: justify;\"><span>Sahul Hotel offers 216 spacious and tastefully decorated rooms with magnificent view of the city &amp; Red river view. Complimentary WiFi, an impressive indoor pool, sauna and modernly equipped fitness center, coupled with our team of friendly and professional staff will ensure customers have the most memorable stay.\u00a0<\/span><\/div><div style=\"text-align: justify;\"><br\/><\/div><b><\/b><div style=\"text-align: justify;\"><b>RESTAURANTS<\/b><\/div><div style=\"text-align: justify;\"><br\/><\/div><b><\/b><div style=\"text-align: justify;\"><b>Lotus Restaurant<span class=\"Apple-converted-space\">\u00a0<\/span><\/b><span>serves International Buffet and Western cuisine with a flare of Asian style will satisfy even the most hesitant customer.<\/span><\/div><div style=\"text-align: justify;\"><span>Hours of operation: 6:30 to 22:00\u00a0<\/span><\/div><div style=\"text-align: justify;\"><br\/><\/div><b><\/b><div style=\"text-align: justify;\"><b>Trang An Restaurant<span class=\"Apple-converted-space\">\u00a0<\/span><\/b><span>specializes in local cuisine, particularly Vietnamese dishes. Your special lunch or dinner will be served in one of our elegant and serene private VIP rooms.\u00a0<\/span><\/div><div style=\"text-align: justify;\"><span>Opening hours: 6:30 - 22:00\u00a0<\/span><\/div><div style=\"text-align: justify;\"><br\/><\/div><b><\/b><div style=\"text-align: justify;\"><b>CONFERENCE, EVENTS, WEDDING SERVICES<\/b><\/div><div style=\"text-align: justify;\"><span>\u00a0<\/span><\/div><div style=\"text-align: justify;\"><span>Sahul Hotel is the ideal venue for organizing conferences, events, wedding ceremonies and holiday party extravaganza. With an area of over 500m2 and flexibly designed ballrooms along with state-of-the-art sound equipment, modern lighting and our team of professional staff, we are committed to bringing you a successful and memorable event.<\/span><\/div><b><\/b><div style=\"text-align: justify;\"><br\/><\/div><div style=\"text-align: justify;\"><b>ENTERTAINMENT SERVICE<\/b><\/div><div style=\"text-align: justify;\"><span>\u00a0<\/span><\/div><b><\/b><div style=\"text-align: justify;\"><b>Karaoke Club and Night Club<span class=\"Apple-converted-space\">\u00a0<\/span><\/b><span>with 15 rooms and wine bar, leading modern Hanoi where luxury entertainment for parties, birthdays and friends exchanges.\u00a0<\/span><\/div><div style=\"text-align: justify;\"><br\/><\/div><b><\/b><div style=\"text-align: justify;\"><b>Massage &amp; Spa Service<\/b><span><span class=\"Apple-converted-space\">\u00a0<\/span>tub with 4 pools, hot, cold, green tea. 15 Massage VIP room, VIP room 2 double beds for male and female use, body 14 massage rooms, relaxation lounge with modern amenities.<\/span><\/div><div style=\"text-align: justify;\"><br\/><\/div><b><\/b><div style=\"text-align: justify;\"><b>For further information please contact:\u00a0<\/b><\/div><div style=\"text-align: justify;\"><br\/><\/div><font color=\"#ffc000\"><\/font><div style=\"text-align: justify;\"><b style=\"color: rgb(43, 43, 43);\"><font color=\"#ffc000\">HANOI SAHUL HOTEL<\/font><\/b><\/div><div style=\"text-align: justify;\"><br\/><\/div><div style=\"text-align: justify;\"><span>Address: 684 Minh Khai - Hai Ba Trung District - Ha Noi\u00a0<\/span><\/div><div style=\"text-align: justify;\"><span>Tel: (+844) 3987 4720 Fax: (+844) 3987 0746\u00a0<\/span><\/div><div style=\"text-align: justify;\"><span>Email: info@sahulhotel.com<\/span><\/div><div style=\"text-align: justify;\"><span>Website<\/span><a href=\"http:\/\/www.sahulhotel.com\/\" target=\"_blank\">: http:\/\/www.sahulhotel.com<\/a><\/div><div style=\"text-align: justify;\"><span>Fanpage:<span class=\"Apple-converted-space\">\u00a0<\/span><\/span><a href=\"http:\/\/www.facebook.com\/sahulhotel\" target=\"_blank\">http:\/\/www.facebook.com\/sahulhotel<\/a><\/div><\/div>",
        "status": "published",
        "review_count": "0",
        "gallery": [
            {
                "url": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/DinhGiaroom_EPUx7YBE.jpg",
                "caption": "Gorgeous wedding room"
            },
            {
                "url": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/sahul_hotel_suite_room__1_tOHUMSU1.jpg",
                "caption": ""
            },
            {
                "url": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/sahul_hotel_lobby__11_zTWjj86N.jpg",
                "caption": ""
            }
        ],
        "created_at": "2014-12-01 23:22:56",
        "updated_at": "2015-02-24 00:49:02",
        "introductions": [
            {
                "id": "30",
                "title": "Spa & Message",
                "image": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Spa__1__-_square_v5yQC6v3.jpg",
                "content": "<div class=\"article_detail\" style=\"float: left;width: 750px;color: rgb(36, 36, 36);\"><div id=\"divDetailContent\" style=\"color: rgb(36, 36, 36);float: left;width: 730px;\"><div style=\"text-align: justify;\"><div style=\"text-align: justify;\">Located on the 5th floor, Sahul Hotel's Spa &amp; Massage offers a place to relax and absolute quiet can help you relax and recharge an abundant source of energy after a long day stretch straight.\u00a0<br\/><br\/><div style=\"text-align: center;\"><a class=\"colorbox cboxElement\" href=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/dich_vu_spa_sahul.jpg\" rel=\"gallery1\" target=\"_blank\" style=\"width: 0px;height: 0px;\"><\/a><img src=\"http:\/\/montedaquintaresort.com\/uploads\/media\/photos\/spa-couple.jpg\" style=\"text-align: justify;width: 100%;\"\/><span class=\"Apple-converted-space\">\u00a0<\/span><br\/><\/div><br\/>Soak in the hot tub soothing massage will help you relax and get ready for the next experience in life.\u00a0<br\/><div style=\"text-align: center;\">\u00a0<img src=\"http:\/\/hotelmetdelhi.com\/content\/content_5945_1.jpg\" style=\"text-align: justify;width: 100%;\"\/><br style=\"text-align: justify;\"\/><span style=\"text-align: justify;\">Let's dismiss all thoughts of work aside and enjoy the moment and really relax with Sahul Hotel.<\/span><br\/><\/div><\/div><\/div><\/div><\/div><br\/>"
            },
            {
                "id": "37",
                "title": "Wedding room",
                "image": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/DinhGiaroom_EPUx7YBE.jpg",
                "content": "<p><strong style=\"color: rgb(51, 43, 25);text-align: justify;\"><a href=\"http:\/\/sahulhotel.com\/\" style=\"color: rgb(173, 131, 43);\"><span><\/span><\/a><\/strong><\/p><div class=\"article_detail\" style=\"float: left;width: 750px;color: rgb(36, 36, 36);\"><div id=\"divDetailContent\" style=\"color: rgb(36, 36, 36);float: left;width: 730px;\"><div style=\"text-align: justify;\"><\/div><\/div><\/div><strong style=\"color: rgb(51, 43, 25);text-align: justify;\"><a href=\"http:\/\/sahulhotel.com\/\" style=\"color: rgb(173, 131, 43);\"><span>Sahul<\/span><\/a><span><a href=\"http:\/\/hanoistay7hotel.com\/\" style=\"color: rgb(173, 131, 43);\">\u00a0Hotel<\/a><\/span><\/strong><span style=\"color: rgb(51, 43, 25);text-align: justify;\">\u2019<\/span><span style=\"color: rgb(51, 43, 25);text-align: justify;\"><span><\/span>s banquet rooms with a total area of over 500m2 and high ceilings are the ideal venue for couples to celebrate their wedding and anniversaries and special milestones. We also have enthusiastic, experienced and professional event planners always ready to provide you with convenient and timely solutions, making plan and following the events from the start to the end. We are dedicated to make your event at<span class=\"Apple-converted-space\">\u00a0<\/span><strong>Sahul<\/strong><\/span><strong style=\"color: rgb(51, 43, 25);text-align: justify;\">\u00a0Hotel<\/strong><span style=\"color: rgb(51, 43, 25);text-align: justify;\"><span class=\"Apple-converted-space\">\u00a0<\/span>a memorable one.<\/span><span style=\"color: rgb(51, 43, 25);text-align: justify;\"><\/span><br\/><p><\/p><div><span style=\"color: rgb(51, 43, 25);text-align: justify;\"><a class=\"colorbox cboxElement\" href=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/30_22.jpg\" rel=\"gallery1\" target=\"_blank\" style=\"text-align: center;width: 600px;height: 400px;\"><img class=\"img-editor\" src=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/30_22.jpg\"\/><\/a><br style=\"color: rgb(36, 36, 36);text-align: center;background-color: rgb(230, 230, 230);\"\/><br style=\"color: rgb(36, 36, 36);text-align: center;background-color: rgb(230, 230, 230);\"\/><a class=\"colorbox cboxElement\" href=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/Nhahang_2.jpg\" rel=\"gallery1\" target=\"_blank\" style=\"text-align: center;width: 600px;height: 400px;\"><img class=\"img-editor\" src=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/Nhahang_2.jpg\" style=\"width: 600px;height: 400px;\"\/><\/a><br\/><\/span><\/div>"
            },
            {
                "id": "38",
                "title": "Nightclub",
                "image": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/nightclubs_Qx3mGxMC.jpg",
                "content": "<p><\/p><div class=\"article_detail\" style=\"float: left;width: 750px;color: rgb(36, 36, 36);\"><div id=\"divDetailContent\" style=\"color: rgb(36, 36, 36);float: left;width: 730px;\"><\/div><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;\">Located on the third floor of Sahul Hotel, Night Club is an ideal venue for you to enjoy moments of true entertainment.\u00a0<br\/><br\/><div style=\"text-align: center;\"><a class=\"colorbox cboxElement\" href=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/sahul_hotel_night_club.jpg\" rel=\"gallery1\" target=\"_blank\" style=\"width: 800px;height: 533px;\"><img class=\"img-editor\" alt=\"\" border=\"0\" src=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/sahul_hotel_night_club.jpg\"\/><\/a><br\/><\/div><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;\"><br\/><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;\">Night Club offers VIP karaoke room system, the dance floor was decorated with luxurious interior equipment, sound and light system and style. Along with 8 separate VIP rooms and 1 large karaoke room which can accommodate up to 30 people, to meet the needs of customers to organize the festival, birthday vibrant.<br\/><br\/><div style=\"text-align: center;\"><a class=\"colorbox cboxElement\" href=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/sahul_hotel_karaoke__3.jpg\" rel=\"gallery1\" target=\"_blank\" style=\"width: 800px;height: 533px;\"><img class=\"img-editor\" alt=\"\" border=\"0\" src=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/sahul_hotel_karaoke__3.jpg\"\/><\/a><br\/><br\/><a class=\"colorbox cboxElement\" href=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/sahul_hotel_karaoke__1.jpg\" rel=\"gallery1\" target=\"_blank\" style=\"width: 800px;height: 533px;\"><img class=\"img-editor\" alt=\"\" border=\"0\" src=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/sahul_hotel_karaoke__1.jpg\"\/><\/a><br\/><br\/><a class=\"colorbox cboxElement\" href=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/sahul_hotel_karaoke_.jpg\" rel=\"gallery1\" target=\"_blank\" style=\"width: 800px;height: 533px;\"><img class=\"img-editor\" alt=\"\" border=\"0\" src=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/sahul_hotel_karaoke_.jpg\"\/><\/a><\/div><\/div><div class=\"article_reference\" style=\"width: 750px;float: left;color: rgb(37, 37, 37);\"><div class=\"list\" style=\"float: left;width: 750px !important;\"><\/div><\/div><p><\/p>"
            }
        ]
    }
}

```
