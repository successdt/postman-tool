##Create User##


**Url**
<code>POST</code>api.hottab.pw/admin/users?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMjIwNzMzMCIsImV4cCI6IjE0MzIyOTM3MzAiLCJuYmYiOiIxNDMyMjA3MzMwIiwianRpIjoiMTBkMDMzNmUyMzU0ZWYyMzkzOTE1NDZjOGEyZTM5NDgifQ.MDNlNTIxOTFkOGJmYzI4MTVkODQxZWI2MjJkZjhkOGZhOTkyMjJiZGY3YjRlNzIwZGU4ZDA0Zjg0YmU0MTliMw&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "email": "thanhdd@hottab.xyz",
    "password": "123456",
    "first_name": "Duy Thanh",
    "last_name": "Dao",
    "roles": [
        {
            "id": 7
        }
    ]
}


Response:

```
{
    "error": false,
    "data": {
        "id": 152,
        "email": "thanhdd@hottab.xyz",
        "photo": null,
        "first_name": "Duy Thanh",
        "last_name": "Dao",
        "roles": [
            {
                "id": 7,
                "name": "Admin",
                "description": "Role for hotel admin"
            }
        ]
    }
}

```

##View a user profile##


**Url**
<code>GET</code>api.hottab.pw/admin/users/40


**Parameters**
<code>api_hottab_pw/admin/users/40<code> 


**Request data**
[]


Response:

```
{
    "error": false,
    "data": {
        "id": 40,
        "email": "thanhdd@hottab.net",
        "photo": "https:\/\/fbcdn-profile-a.akamaihd.net\/hprofile-ak-xfa1\/v\/t1.0-1\/p50x50\/406646_502758429737556_1605773667_n.jpg?oh=3c1115a15ab1ba3ad98c72fc3c739802&oe=54979128&__gda__=1418099472_8466bceef7c2027e3784fd06972a579d",
        "first_name": "Duy Thanh",
        "last_name": "Dao",
        "roles": [
            {
                "id": 8,
                "name": "Admin",
                "description": "Role for hotel admin"
            }
        ],
        "hotel": {
            "id": 8,
            "user_id": 40,
            "name": "Sahul Hotel",
            "logo": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Logo_-_512px_Qcof3Uc1.jpg",
            "image": "http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/DinhGiaroom_BwDJVMF1.jpg",
            "description": "<p>&#10;<\/p><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\">K\u00ednh ch\u00e0o Qu\u00fd kh\u00e1ch,<br\/>L\u01a1\u0300i \u0111\u00e2\u0300u ti\u00ean, thay m\u0103\u0323t Ban la\u0303nh \u0111a\u0323o cu\u0300ng toa\u0300n th\u00ea\u0309 ca\u0301n b\u00f4\u0323 c\u00f4ng nh\u00e2n vi\u00ean Kha\u0301ch sa\u0323n Ha\u0300 N\u00f4\u0323i Sahul, chu\u0301ng t\u00f4i xin ch\u00e2n tha\u0300nh ca\u0301m \u01a1n quy\u0301 kha\u0301ch \u0111a\u0303 da\u0300nh s\u01b0\u0323 quan t\u00e2m \u0111\u00ea\u0301n sa\u0309n ph\u00e2\u0309m va\u0300 di\u0323ch vu\u0323 cu\u0309a Kha\u0301ch sa\u0323n.<br\/><div><br\/><\/div>V\u1edbi ph\u01b0\u01a1ng ch\u00e2m, s\u1ef1 h\u00e0i l\u00f2ng c\u1ee7a qu\u00fd kh\u00e1ch l\u00e0 ni\u1ec1m h\u1ea1nh ph\u00fac v\u00e0 th\u00e0nh c\u00f4ng c\u1ee7a ch\u00fang t\u00f4i, Kha\u0301ch sa\u0323n t\u00ean g\u1ecdi<span class=\"Apple-converted-space\">\u00a0<\/span><b>SAHUL<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>\u0111\u00e3 ra \u0111\u1eddi d\u1ef1a tr\u00ean nh\u1eefng ti\u00eau ch\u00ed sau:<br\/><br\/><div style=\"text-align: left;\"><table class=\"\" style=\"width: 725px;background-color: transparent;\"><tbody><tr><td class=\"\"><b>S:Standard<\/b>\u00a0<\/td><td>\u00a0<\/td><td>\u00a0<\/td><td>C\u00f3 ngh\u0129a l\u00e0 \u201c<b>Ti\u00eau chu\u1ea9n\u201d<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>: ch\u00fang t\u00f4i l\u1ea5y ti\u00eau chu\u1ea9n c\u1ee7a m\u1ed9t Kh\u00e1ch s\u1ea1n 5 sao qu\u1ed1c t\u1ebf l\u00e0m n\u1ec1n t\u1ea3ng \u0111\u1ec3 x\u00e2y d\u1ef1ng v\u00e0 ph\u00e1t tri\u1ec3n Kh\u00e1ch s\u1ea1n<\/td><\/tr><tr><td><b>A: Ahead<\/b><\/td><td>\u00a0<\/td><td>\u00a0<\/td><td>C\u00f3 ngh\u0129a l\u00e0 \u201c<b>Ti\u1ebfn l\u00ean\u201d<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>: ch\u00fang t\u00f4i kh\u00f4ng ng\u1eebng \u0111\u1ed5i m\u1edbi v\u00e0 n\u00e2ng cao ch\u1ea5t l\u01b0\u1ee3ng d\u1ecbch v\u1ee5 \u0111\u1ec3 \u0111em \u0111\u00ea\u0301n s\u01b0\u0323 ha\u0300i lo\u0300ng cho qu\u00fd kh\u00e1ch<br\/><\/td><\/tr><tr><td><b>HUL: High Up Level<\/b><\/td><td>\u00a0<\/td><td>\u00a0<\/td><td class=\"\">Mang y\u0301 nghi\u0303a \u201d<b>T\u1ea7m cao m\u1edbi\u201d:<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>v\u01a1\u0301i nh\u01b0\u0303ng n\u00f4\u0303 l\u01b0\u0323c ph\u00e2\u0301n \u0111\u00e2\u0301u, kh\u00f4ng ng\u01b0\u0300ng sa\u0301ng ta\u0323o trong phong ca\u0301ch phu\u0323c vu\u0323 cu\u0300ng v\u01a1\u0301i nh\u01b0\u0303ng y\u0301 ki\u00ea\u0301n \u0111o\u0301ng go\u0301p quy\u0301 ba\u0301u cu\u0309a quy\u0301 kha\u0301ch, chu\u0301ng t\u00f4i mong mu\u00f4\u0301n se\u0303 \u0111\u01b0a Kha\u0301ch sa\u0323n v\u01b0\u01a1n l\u00ean nh\u01b0\u0303ng t\u00e2\u0300m cao m\u01a1\u0301i, mang \u0111\u0103\u0309ng c\u00e2\u0301p qu\u00f4\u0301c t\u00ea\u0301 nh\u01b0ng v\u00e2\u0303n mang \u0111\u00e2\u0323m ba\u0309n s\u0103\u0301c cu\u0309a Vi\u00ea\u0323t Nam.<\/td><\/tr><\/tbody><\/table><br\/><\/div><div style=\"text-align: left;\"><br\/><\/div>K\u1ebft h\u1ee3p v\u1edbi c\u00e2u kh\u1ea9u hi\u1ec7u \u00a0<b><i>\u201cWith us you feel at home\u201d,<\/i><\/b><span class=\"Apple-converted-space\">\u00a0<\/span>ch\u00fang t\u00f4i mu\u1ed1n mang l\u1ea1i c\u1ea3m gi\u00e1c th\u00e2n thi\u1ec7n, \u1ea5m \u00e1p nh\u01b0 ch\u00ednh ng\u00f4i nh\u00e0 y\u00eau th\u01b0\u01a1ng c\u1ee7a quy\u0301 kh\u00e1ch m\u1ed7i l\u1ea7n l\u01b0u tr\u00fa t\u1ea1i Kh\u00e1ch s\u1ea1n.<\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><div><br\/><\/div><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><div style=\"text-align: justify;\"><span>Kh\u00e1ch s\u1ea1n Sahul t\u1ecda l\u1ea1c t\u1ea1i 684 Minh Khai, qu\u1eadn Hai B\u00e0 Tr\u01b0ng v\u1edbi c\u00e1c d\u1ecbch v\u1ee5 \u0111\u1ea1t chu\u1ea9n 4 sao bao g\u1ed3m 216 ph\u00f2ng ngh\u1ec9, ph\u00f2ng \u0111\u1ea1i ti\u1ec7c v\u1edbi s\u1ee9c ch\u1ee9a t\u1edbi 400 ng\u01b0\u1eddi, h\u1ec7 th\u1ed1ng nh\u00e0 h\u00e0ng, qu\u1ea7y bar, trung t\u00e2m th\u1ec3 h\u00ecnh, Massage &amp; Spa, ph\u00f2ng h\u00e1t Karaoke, b\u1ec3 b\u01a1i trong nh\u00e0 s\u1ebd mang l\u1ea1i cho du kh\u00e1ch nh\u1eefng gi\u00e2y ph\u00fat ngh\u1ec9 ng\u01a1i, th\u01b0 gi\u00e3n tho\u1ea3i m\u00e1i nh\u1ea5t .<br\/><\/span><br\/><div style=\"text-align: center;\"><a class=\"colorbox cboxElement\" href=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/sahul_hotel_lobby__11.jpg\" rel=\"gallery1\" target=\"_blank\" style=\"color: rgb(54, 63, 68);width: 0px;height: 0px;\"><img class=\"img-editor\" alt=\"\" border=\"0\" src=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/sahul_hotel_lobby__11.jpg\"\/><\/a>\u00a0\u00a0<br\/><\/div><\/div><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><i>Kh\u00f4ng gian ph\u00f2ng ngh\u1ec9 sang tr\u1ecdng:<\/i><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\">Kh\u00e1ch s\u1ea1n Sahul g\u1ed3m 216 ph\u00f2ng, c\u00e1c ph\u00f2ng \u0111\u01b0\u1ee3c thi\u1ebft k\u1ebf theo l\u1ed1i ki\u1ebfn tr\u00fac hi\u1ec7n \u0111\u1ea1i mang l\u1ea1i c\u1ea3m gi\u00e1c d\u1ec5 ch\u1ecbu, \u1ea5m c\u00fang v\u00e0 sang tr\u1ecdng. Kh\u00f4ng gian trong ph\u00f2ng tho\u00e1ng m\u00e1t, s\u1ea1ch s\u1ebd, c\u00f3 c\u1eeda s\u1ed5 h\u01b0\u1edbng ra ngo\u00e0i, t\u1ea5t c\u1ea3 c\u00e1c ph\u00f2ng \u0111\u1ec1u \u0111\u01b0\u1ee3c trang thi\u1ebft b\u1ecb hi\u1ec7n \u0111\u1ea1i v\u00e0 ti\u1ec7n nghi, ph\u00f2ng kh\u00e9p k\u00edn c\u00f3 b\u1ed3n t\u1eafm n\u1eb1m, \u0111\u00e1p \u1ee9ng nhu c\u1ea7u c\u1ee7a m\u1ecdi doanh nh\u00e2n v\u00e0 kh\u00e1ch du l\u1ecbch.<br\/><br\/><table class=\"telerik-reTable-1\" style=\"text-align: center;width: 720px;background-color: transparent;\"><tbody><tr class=\"telerik-reTableHeaderRow-1\" style=\"color: rgb(63, 77, 107);text-align: left;\"><td class=\"telerik-reTableHeaderEvenCol-1\" style=\"color: rgb(58, 70, 99);text-align: center;\">\u00a0LO\u1ea0I PH\u00d2NG<\/td><td class=\"telerik-reTableHeaderOddCol-1\" style=\"color: rgb(58, 70, 99);text-align: center;\">\u00a0S\u1ed0 L\u01af\u1ee2NG<\/td><td class=\"telerik-reTableHeaderEvenCol-1\" style=\"color: rgb(58, 70, 99);text-align: center;\">\u00a0DI\u1ec6N T\u00cdCH (M2)<\/td><\/tr><tr class=\"telerik-reTableOddRow-1\" style=\"color: rgb(102, 102, 102);\"><td class=\"telerik-reTableEvenCol-1\">\u00a0SUPERIOR<\/td><td class=\"telerik-reTableOddCol-1\" style=\"text-align: center;\">\u00a010<\/td><td class=\"telerik-reTableEvenCol-1\" style=\"text-align: center;\">26 - 30\u00a0<\/td><\/tr><tr class=\"telerik-reTableEvenRow-1\" style=\"color: rgb(102, 102, 102);\"><td class=\"telerik-reTableEvenCol-1\">\u00a0DELUXE<\/td><td class=\"telerik-reTableOddCol-1\" style=\"text-align: center;\">\u00a0173<\/td><td class=\"telerik-reTableEvenCol-1\" style=\"text-align: center;\">\u00a032 - 34<\/td><\/tr><tr class=\"telerik-reTableOddRow-1\" style=\"color: rgb(102, 102, 102);\"><td class=\"telerik-reTableEvenCol-1\">\u00a0EXECUTIVE<\/td><td class=\"telerik-reTableOddCol-1\" style=\"text-align: center;\">\u00a022<\/td><td class=\"telerik-reTableEvenCol-1\" style=\"text-align: center;\">\u00a038<\/td><\/tr><tr class=\"telerik-reTableEvenRow-1\" style=\"color: rgb(102, 102, 102);\"><td class=\"telerik-reTableEvenCol-1\">\u00a0ROYAL SUITE<\/td><td class=\"telerik-reTableOddCol-1\" style=\"text-align: center;\">\u00a011<\/td><td class=\"telerik-reTableEvenCol-1\">\u00a065<\/td><\/tr><\/tbody><\/table><div style=\"text-align: center;\"><br\/><\/div><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><b style=\"text-align: left;\"><\/b><div style=\"text-align: justify;\"><b>Nh\u00e0 H\u00e0ng<\/b><\/div><br\/><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\">Hai nh\u00e0 h\u00e0ng c\u1ee7a kh\u00e1ch s\u1ea1n Sahul H\u00e0 N\u1ed9i v\u1edbi phong v\u1ecb v\u00e0 \u0111\u1ecbnh h\u01b0\u1edbng \u1ea9m th\u1ef1c kh\u00e1c nhau, kh\u00f4ng gian \u1ea9m th\u1ef1c s\u1ed1ng \u0111\u1ed9ng, phong ph\u00fa s\u1ebd kh\u00f4ng ch\u1ec9 mang \u0111\u1ebfn cho th\u1ef1c kh\u00e1ch nh\u1eefng b\u1eefa \u0103n ngon m\u00e0 c\u00f2n mang t\u1edbi nh\u1eefng tr\u1ea3i nghi\u1ec7m th\u00fa v\u1ecb v\u1ec1 \u1ea9m th\u1ef1c v\u0103n h\u00f3a v\u00f9ng mi\u1ec1n.<br\/><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><b style=\"color: rgb(36, 36, 36);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: justify;background-color: rgb(255, 255, 255);\"><b>Nh\u00e0 h\u00e0ng Sen<\/b><span><span class=\"Apple-converted-space\">\u00a0<\/span>ph\u1ee5c v\u1ee5 ti\u1ec7c Buffet qu\u1ed1c t\u1ebf v\u1edbi phong c\u00e1ch \u1ea9m th\u1ef1c tinh t\u1ebf, c\u00e1c m\u00f3n \u0103n \u00c2u - \u00c1 l\u00e0m h\u00e0i l\u00f2ng qu\u00fd kh\u00e1ch \u0111\u1ebfn t\u1eeb m\u1ecdi qu\u1ed1c gia tr\u00ean th\u1ebf gi\u1edbi.<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><span>Gi\u1edd ho\u1ea1t \u0111\u1ed9ng: 6:30 - 22:00\u00a0<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><span>S\u1ee9c ch\u1ee9a: 350 ng\u01b0\u1eddi<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><b style=\"color: rgb(36, 36, 36);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: justify;background-color: rgb(255, 255, 255);\"><b>Nh\u00e0 h\u00e0ng Tr\u00e0ng An<\/b><span><span class=\"Apple-converted-space\">\u00a0<\/span>ph\u1ee5c v\u1ee5 c\u00e1c m\u00f3n \u0103n \u00c2u - \u00c1 v\u00e0 \u0111\u1eb7c s\u1ea3n Vi\u1ec7t Nam. 4 ph\u00f2ng VIP thi\u1ebft k\u1ebf ri\u00eang bi\u1ec7t v\u00e0 sang tr\u1ecdng c\u00f3 th\u1ec3 \u0111\u00e1p \u1ee9ng \u0111\u01b0\u1ee3c nhu c\u1ea7u d\u00f9ng b\u1eefa c\u1ee7a kh\u00e1ch \u0111\u1ec3 g\u1eb7p g\u1ee1 \u0111\u1ed1i t\u00e1c, ng\u01b0\u1eddi th\u00e2n hay nh\u1eefng b\u1eefa \u0103n gia \u0111\u00ecnh, sinh nh\u1eadt th\u00e2n m\u1eadt \u1ea5m c\u00fang.<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><span>Gi\u1edd ho\u1ea1t \u0111\u1ed9ng: 6:30 - 22:00\u00a0<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><span>S\u1ee9c ch\u1ee9a: 130 - 150 ng\u01b0\u1eddi<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><b style=\"color: rgb(36, 36, 36);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: justify;background-color: rgb(255, 255, 255);\"><b>T\u1ed5 ch\u1ee9c h\u1ed9i ngh\u1ecb, ti\u1ec7c c\u01b0\u1edbi:<\/b><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\">\u00a0<\/div><b style=\"color: rgb(36, 36, 36);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: justify;background-color: rgb(255, 255, 255);\"><b>Kh\u00e1ch s\u1ea1n Sahul Hotel<\/b><span>\u00a0l\u00e0 m\u1ed9t l\u1ef1a ch\u1ecdn tuy\u1ec7t v\u1eddi \u0111\u1ec3 t\u1ed5 ch\u1ee9c c\u00e1c bu\u1ed5i h\u1ed9i ngh\u1ecb, s\u1ef1 ki\u1ec7n, \u0111\u1eb7c bi\u1ec7t ti\u1ec7c c\u01b0\u1edbi tr\u1ecdn g\u00f3i v\u1edbi ph\u1ea7n ti\u1ec7c v\u00e0 ph\u1ea7n l\u1ec5 ho\u00e0nh tr\u00e1ng, kh\u00f4ng gian l\u00e3ng m\u1ea1n sang tr\u1ecdng.\u00a0<\/span><span>M\u1eb7t b\u1eb1ng r\u1ed9ng 650m2, ch\u00fang t\u00f4i c\u00f3 th\u1ec3 linh ho\u1ea1t chia th\u00e0nh c\u00e1c kh\u00f4ng gian ph\u00f9 h\u1ee3p v\u1edbi y\u00eau c\u1ea7u c\u1ee7a qu\u00fd kh\u00e1ch. C\u00f9ng v\u1edbi trang thi\u1ebft b\u1ecb \u00e2m thanh, \u00e1nh s\u00e1ng hi\u1ec7n \u0111\u1ea1i, \u0111\u1ed9i ng\u0169 nh\u00e2n vi\u00ean chuy\u00ean nghi\u1ec7p, Ch\u00fang t\u00f4i cam k\u1ebft mang \u0111\u1ebfn cho qu\u00fd kh\u00e1ch m\u1ed9t s\u1ef1 ki\u1ec7n th\u00e0nh c\u00f4ng v\u00e0 \u0111\u00e1ng nh\u1edb.<br\/><\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><b style=\"color: rgb(36, 36, 36);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: justify;background-color: rgb(255, 255, 255);\"><b>D\u1ecbch v\u1ee5 gi\u1ea3i tr\u00ed Karaoke, Massage &amp; Spa:<\/b><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><b><br\/><\/b><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><span><b>C\u00e2u l\u1ea1c b\u1ed9 Night Club<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>v\u1edbi 15 ph\u00f2ng Karaoke v\u00e0 bar r\u01b0\u1ee3u sang tr\u1ecdng, hi\u1ec7n \u0111\u1ea1i h\u00e0ng \u0111\u1ea7u Th\u1ee7 \u0111\u00f4 H\u00e0 N\u1ed9i l\u00e0 n\u01a1i gi\u1ea3i tr\u00ed cao c\u1ea5p cho nh\u1eefng b\u1eefa ti\u1ec7c, sinh nh\u1eadt v\u00e0 giao l\u01b0u b\u1ea1n b\u00e8.<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><b style=\"color: rgb(36, 36, 36);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: justify;background-color: rgb(255, 255, 255);\"><b>D\u1ecbch v\u1ee5 Massage &amp; Spa<span class=\"Apple-converted-space\">\u00a0<\/span><\/b><span>v\u1edbi 4 b\u1ec3 t\u1eafm th\u1ee7y l\u1ef1c, n\u00f3ng, l\u1ea1nh, tr\u00e0 xanh. 15 ph\u00f2ng Massage VIP, ph\u00f2ng VIP 2 gi\u01b0\u1eddng s\u1eed d\u1ee5ng cho \u0111\u00f4i nam n\u1eef, 14 ph\u00f2ng Massage body, ph\u00f2ng ch\u1edd th\u01b0 gi\u00e3n ti\u1ec7n nghi hi\u1ec7n \u0111\u1ea1i.<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><b style=\"color: rgb(36, 36, 36);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: justify;background-color: rgb(255, 255, 255);\"><b>B\u1ec3 B\u01a1i:\u00a0<\/b><span>B\u1ec3 b\u01a1i n\u1eb1m \u1edf t\u1ea7ng 5 kh\u00e1ch s\u1ea1n lu\u00f4n \u0111\u01b0\u1ee3c ki\u1ec3m so\u00e1t d\u01b0\u1edbi c\u00e1c ti\u00eau chu\u1ea9n v\u1ec1 n\u01b0\u1edbc, quy tr\u00ecnh an to\u00e0n, c\u00e1c trang thi\u1ebft b\u1ecb gi\u00fap du kh\u00e1ch c\u00f3 nh\u1eefng gi\u1edd b\u01a1i th\u01b0 gi\u00e3n nh\u1ea5t d\u01b0\u1edbi l\u00e0n n\u01b0\u1edbc trong l\u00e0nh.\u00a0<\/span><span>Sau nh\u1eefng gi\u1edd l\u00e0m vi\u1ec7c m\u1ec7t m\u1ecfi, du kh\u00e1ch s\u1ebd t\u1eadn h\u01b0\u1edfng c\u1ea3m gi\u00e1c th\u01b0 gi\u00e3n v\u00e0 th\u1ea3 l\u1ecfng khi nh\u00fang m\u00ecnh v\u00e0o l\u00e0n n\u01b0\u1edbc trong l\u00e0nh, th\u01b0\u1eddng th\u1ee9c m\u1ed9t ly cocktail v\u00e0 ng\u1eafm nh\u00ecn th\u00e0nh ph\u1ed1, ngay t\u1ea1i qu\u1ea7y ph\u1ee5c v\u1ee5 \u0111\u1ed3 u\u1ed1ng Aqua-pool Bar.<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><i style=\"text-align: left;\"><b>M\u1ecdi chi ti\u1ebft xin vui l\u00f2ng li\u00ean h\u1ec7:<\/b><\/i><br\/><\/div><br style=\"color: rgb(36, 36, 36);background-color: rgb(230, 230, 230);\"\/><div style=\"color: rgb(36, 36, 36);text-align: left;background-color: rgb(255, 255, 255);\"><b><font color=\"#ac842c\">KH\u00c1CH S\u1ea0N SAHUL HA\u0300 N\u00d4\u0323I\u00a0<\/font><\/b><\/div><div style=\"color: rgb(36, 36, 36);text-align: left;background-color: rgb(255, 255, 255);\"><br\/><\/div><i style=\"color: rgb(36, 36, 36);background-color: rgb(255, 255, 255);\"><\/i><div style=\"color: rgb(85, 85, 85);text-align: left;background-color: rgb(255, 255, 255);\"><i><b>\u0110\u1ecba ch\u1ec9:<span class=\"Apple-converted-space\">\u00a0<\/span><\/b>684 Minh Khai - \u00a0Qu\u00e2\u0323n Hai B\u00e0 Tr\u01b0ng - H\u00e0 N\u1ed9i<\/i><\/div><b style=\"color: rgb(85, 85, 85);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: left;background-color: rgb(255, 255, 255);\"><i><b>\u0110i\u1ec7n tho\u1ea1i:<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>(+844) 3987 4720<\/i><\/div><b style=\"color: rgb(85, 85, 85);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: left;background-color: rgb(255, 255, 255);\"><i><b>Fax:<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>(+844) 3987 0746<span class=\"Apple-converted-space\">\u00a0<\/span><br\/><\/i><i>Email:<span class=\"Apple-converted-space\">\u00a0<\/span><\/i><i>info@sahulhotel.com<\/i><\/div><b style=\"color: rgb(85, 85, 85);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: left;background-color: rgb(255, 255, 255);\"><i><b>Website:<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>www.sahulhotel.com<\/i><\/div><p><\/p>",
            "status": "published",
            "review_count": 0,
            "gallery": "a:7:{i:0;a:2:{s:3:\"url\";s:72:\"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/DinhGiaroom_EPUx7YBE.jpg\";s:7:\"caption\";s:21:\"Gorgeous wedding room\";}i:1;a:2:{s:3:\"url\";s:86:\"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/sahul_hotel_suite_room__1_tOHUMSU1.jpg\";s:7:\"caption\";s:0:\"\";}i:2;a:2:{s:3:\"url\";s:82:\"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/sahul_hotel_lobby__11_zTWjj86N.jpg\";s:7:\"caption\";s:0:\"\";}i:3;a:2:{s:3:\"url\";s:80:\"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Strawberry_lemonade_lj7HzmYU.jpg\";s:7:\"caption\";s:0:\"\";}i:4;a:2:{s:3:\"url\";s:107:\"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/10994603_428933233950832_8791660473359471228_n_EQhZnYqE.jpg\";s:7:\"caption\";s:0:\"\";}i:5;a:2:{s:3:\"url\";s:91:\"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Screenshot_2015-02-12_18_58_19_W7WEMFJ3.png\";s:7:\"caption\";s:0:\"\";}i:6;a:2:{s:3:\"url\";s:75:\"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Martini_bianco_Jm2bgTfa.jpg\";s:7:\"caption\";s:0:\"\";}}",
            "created_at": "2014-12-01 23:22:56",
            "updated_at": "2015-07-10 15:43:44",
            "phone": "0983 929 424",
            "address": "Wifi password: askmefirst",
            "url": "http:\/\/google.com"
        }
    }
}

```

##List of Users##
Create hotel/restaurant staff
Group_id is required

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
{
    "error": false,
    "data": {
        "id": 1,
        "type": 1,
        "hotel_id": 8,
        "created_at": "2015-03-05 18:30:38",
        "updated_at": "2015-03-05 18:30:38",
        "name": "Hoa cmn qu\u1ea3"
    }
}

```

##Logout##


**Url**
<code>POST</code>api.hottab.pw/admin/logout


**Parameters**
<code>api_hottab_pw/admin/logout<code> 


**Request data**
{
    "friendly_uuid": "Pc lah"
}


Response:

```


```

##Get all groups##


**Url**
<code>GET</code>api.hottab.pw/admin/users/groups?token=fe4a8fc53550eecd63bcbb049a4df3a6


**Parameters**
<code>token</code> $token


**Request data**
[]


Response:

```
{
    "error": false,
    "data": [
        {
            "id": 3,
            "name": "Waiter"
        },
        {
            "id": 4,
            "name": "Cashier"
        },
        {
            "id": 6,
            "name": "Bar Waiter"
        },
        {
            "id": 7,
            "name": "Supervisor"
        }
    ]
}

```

##View user logs##
// Log status

* LOG\_STATUS\_SUCCESS : 1

* LOG\_STATUS\_FAILE : 0

// User log

* USER\_LOG\_ACTION\_LOG_IN : 1

* USER\_LOG\_ACTION\_LOG_OUT : 2

**Url**
<code>GET</code>api.hottab.pw/admin/user-logs/?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM3NTU1OTYyIiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzNzQ2OTU2MiIsIm5iZiI6IjE0Mzc0Njk1NjIiLCJqdGkiOiI1ZmU4YWIxNGFiMzkyNmE2ZjdhYWMzNzc2OTFmMzE5ZCJ9.ODQ1MGQ5NDNlZDJhOWY3MjY4NzI5MWUyOGI3ZDg1ZTNjYjc0MWExMzFjZmI2YzUxMGEyNDJhNTQ1M2E1ZGRjOA&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "name": "Hoa cmn qu\u1ea3"
}


Response:

```
{
    "error": false,
    "pagination": {
        "total": 142,
        "per_page": 10,
        "current_page": 1,
        "last_page": 15,
        "from": 1,
        "to": 10
    },
    "data": [
        {
            "id": 1092,
            "user_id": 93,
            "ip": "118.70.183.145",
            "action": 0,
            "status": 0,
            "created_at": "2015-02-25 15:56:48",
            "updated_at": "2015-02-25 15:56:48",
            "device_id": null,
            "user": null,
            "device": null
        },
        {
            "id": 1095,
            "user_id": 94,
            "ip": "118.70.183.145",
            "action": 0,
            "status": 0,
            "created_at": "2015-02-25 16:08:53",
            "updated_at": "2015-02-25 16:08:53",
            "device_id": null,
            "user": null,
            "device": null
        },
        {
            "id": 1096,
            "user_id": 95,
            "ip": "118.70.183.145",
            "action": 0,
            "status": 0,
            "created_at": "2015-02-25 16:17:06",
            "updated_at": "2015-02-25 16:17:06",
            "device_id": null,
            "user": null,
            "device": null
        },
        {
            "id": 1097,
            "user_id": 96,
            "ip": "118.70.183.145",
            "action": 0,
            "status": 0,
            "created_at": "2015-02-25 16:34:53",
            "updated_at": "2015-02-25 16:34:53",
            "device_id": null,
            "user": null,
            "device": null
        },
        {
            "id": 1098,
            "user_id": 97,
            "ip": "118.70.183.145",
            "action": 0,
            "status": 0,
            "created_at": "2015-02-25 16:48:15",
            "updated_at": "2015-02-25 16:48:15",
            "device_id": null,
            "user": null,
            "device": null
        },
        {
            "id": 1099,
            "user_id": 98,
            "ip": "118.70.183.145",
            "action": 0,
            "status": 0,
            "created_at": "2015-02-25 16:49:25",
            "updated_at": "2015-02-25 16:49:25",
            "device_id": null,
            "user": null,
            "device": null
        },
        {
            "id": 1100,
            "user_id": 99,
            "ip": "118.70.183.145",
            "action": 0,
            "status": 0,
            "created_at": "2015-02-25 17:01:44",
            "updated_at": "2015-02-25 17:01:44",
            "device_id": null,
            "user": null,
            "device": null
        },
        {
            "id": 1101,
            "user_id": 100,
            "ip": "118.70.183.145",
            "action": 0,
            "status": 0,
            "created_at": "2015-02-25 17:03:55",
            "updated_at": "2015-02-25 17:03:55",
            "device_id": null,
            "user": null,
            "device": null
        },
        {
            "id": 1102,
            "user_id": 101,
            "ip": "118.70.183.145",
            "action": 0,
            "status": 0,
            "created_at": "2015-02-25 18:04:04",
            "updated_at": "2015-02-25 18:04:04",
            "device_id": null,
            "user": null,
            "device": null
        },
        {
            "id": 1136,
            "user_id": 102,
            "ip": "118.70.183.145",
            "action": 0,
            "status": 0,
            "created_at": "2015-03-01 10:52:30",
            "updated_at": "2015-03-01 10:52:30",
            "device_id": null,
            "user": null,
            "device": null
        }
    ]
}

```

##Renew token##
Send a refresh token to renew the token

**Url**
<code>POST</code>api.hottab.pw/admin/refresh


**Parameters**
<code>api_hottab_pw/admin/refresh<code> 


**Request data**
{
    "refresh_token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOjE0MzA5NzA5NDMsInN1YiI6NDAsImlzcyI6Imh0dHA6XC9cL2FwaS5ob3R0YWIubmV0XC9hZG1pblwvbG9naW4iLCJpYXQiOiIxNDI5NzYxMzQzIiwibmJmIjoiMTQyOTc2MTM0MyIsImp0aSI6ImQ4NGUxNTA3MGZkNTRmZGQwOTBmOTUzZWY4MjIwMTFkIn0.ZjRmZDAwMTVkZmY3NzI4NTkzZDdjYTdlYjQwNzY5ZTkzYzU4MmUzZWFmYWE0NGYzNjEwYjFkMTUwMzZhODJmOA"
}


Response:

```
{
    "error": false,
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDIwNDI3IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL3JlZnJlc2giLCJpYXQiOiIxNDM4MzM0MDI3IiwibmJmIjoiMTQzODMzNDAyNyIsImp0aSI6IjZhMmUzOTMzMjRhZmYyYmJmMzdhZTM2NDJlYTY3MDgzIn0.MzBmOWRjZDk3Y2E0M2MzN2ViZjI2NDE1NDE0ZmIzNmJjMzFhNTEyOTk1MTM3NWUwNjYzMGE5NjhiMjZhMTk2Ng"
}

```

##List User##


**Url**
<code>GET</code>api.hottab.pw/admin/users?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMjIwNzMzMCIsImV4cCI6IjE0MzIyOTM3MzAiLCJuYmYiOiIxNDMyMjA3MzMwIiwianRpIjoiMTBkMDMzNmUyMzU0ZWYyMzkzOTE1NDZjOGEyZTM5NDgifQ.MDNlNTIxOTFkOGJmYzI4MTVkODQxZWI2MjJkZjhkOGZhOTkyMjJiZGY3YjRlNzIwZGU4ZDA0Zjg0YmU0MTliMw&hotel_id=8


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
            "id": 129,
            "first_name": "loi",
            "last_name": "hoang",
            "email": "cashier@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 16,
                    "name": "Cashier",
                    "description": ""
                }
            ]
        },
        {
            "id": 130,
            "first_name": "hoang",
            "last_name": "loi",
            "email": "waiter@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 13,
                    "name": "Waiter",
                    "description": ""
                }
            ]
        },
        {
            "id": 131,
            "first_name": "van",
            "last_name": "loi",
            "email": "barwaiter@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 14,
                    "name": "Bartender",
                    "description": ""
                }
            ]
        },
        {
            "id": 132,
            "first_name": "super",
            "last_name": "visor",
            "email": "supervisor@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 18,
                    "name": "Supervisor",
                    "description": ""
                }
            ]
        },
        {
            "id": 134,
            "first_name": "Ninh",
            "last_name": "Le Hai",
            "email": "ninh@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 16,
                    "name": "Cashier",
                    "description": ""
                }
            ]
        },
        {
            "id": 135,
            "first_name": "Pham",
            "last_name": "Hieu",
            "email": "hieupham@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 16,
                    "name": "Cashier",
                    "description": ""
                }
            ]
        },
        {
            "id": 136,
            "first_name": "Anh",
            "last_name": "Viet",
            "email": "vanh@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 16,
                    "name": "Cashier",
                    "description": ""
                }
            ]
        },
        {
            "id": 137,
            "first_name": "Cuong",
            "last_name": "Khac",
            "email": "khaccuong@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 16,
                    "name": "Cashier",
                    "description": ""
                }
            ]
        },
        {
            "id": 138,
            "first_name": "Pham",
            "last_name": "Huy",
            "email": "phuy@gmail.com",
            "activated": 1,
            "roles": [
                {
                    "id": 16,
                    "name": "Cashier",
                    "description": ""
                }
            ]
        },
        {
            "id": 139,
            "first_name": "Duy",
            "last_name": "Thanh",
            "email": "thanhduy@gmail.com",
            "activated": 1,
            "roles": [
                {
                    "id": 16,
                    "name": "Cashier",
                    "description": ""
                }
            ]
        },
        {
            "id": 140,
            "first_name": "Tai",
            "last_name": "Nguyen",
            "email": "tai@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 13,
                    "name": "Waiter",
                    "description": ""
                }
            ]
        },
        {
            "id": 141,
            "first_name": "Hieu",
            "last_name": "Pham",
            "email": "dfsdf@sdfsdf.com",
            "activated": 1,
            "roles": [
                {
                    "id": 13,
                    "name": "Waiter",
                    "description": ""
                }
            ]
        },
        {
            "id": 142,
            "first_name": "Waiter",
            "last_name": "mot",
            "email": "waiter1@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 13,
                    "name": "Waiter",
                    "description": ""
                }
            ]
        },
        {
            "id": 143,
            "first_name": "Waiter",
            "last_name": "hai",
            "email": "waiter2@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 13,
                    "name": "Waiter",
                    "description": ""
                }
            ]
        },
        {
            "id": 144,
            "first_name": "Waiter",
            "last_name": "ba",
            "email": "waiter3@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 13,
                    "name": "Waiter",
                    "description": ""
                }
            ]
        },
        {
            "id": 145,
            "first_name": "Waiter",
            "last_name": "bon",
            "email": "waiter4@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 13,
                    "name": "Waiter",
                    "description": ""
                }
            ]
        },
        {
            "id": 146,
            "first_name": "Waiter",
            "last_name": "nam",
            "email": "waiter5@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 13,
                    "name": "Waiter",
                    "description": ""
                }
            ]
        },
        {
            "id": 147,
            "first_name": "Waiter",
            "last_name": "sau",
            "email": "waiter6@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 13,
                    "name": "Waiter",
                    "description": ""
                }
            ]
        },
        {
            "id": 148,
            "first_name": "Waiter",
            "last_name": "bay",
            "email": "waiter7@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 13,
                    "name": "Waiter",
                    "description": ""
                }
            ]
        },
        {
            "id": 149,
            "first_name": "Waiter",
            "last_name": "tam",
            "email": "waiter8@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 13,
                    "name": "Waiter",
                    "description": ""
                }
            ]
        },
        {
            "id": 150,
            "first_name": "Waiter",
            "last_name": "chin",
            "email": "waiter9@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 13,
                    "name": "Waiter",
                    "description": ""
                }
            ]
        },
        {
            "id": 151,
            "first_name": "Waiter",
            "last_name": "muoi",
            "email": "waiter10@hottab.net",
            "activated": 1,
            "roles": [
                {
                    "id": 13,
                    "name": "Waiter",
                    "description": ""
                }
            ]
        }
    ]
}

```

##Update User##


**Url**
<code>PUT</code>api.hottab.pw/admin/users/40?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzMjAyOTA0NSIsImV4cCI6IjE0MzIxMTU0NDUiLCJuYmYiOiIxNDMyMDI5MDQ1IiwianRpIjoiMDZiZmQ4MTNiYjI0YzkwYWEyYTQzMjllNzM1MzYzMzcifQ.YWUzYjM3MjFlMGE0M2E1N2JhZWIzOTZjY2M1MGNhYzNhMzhhMjlkOGMxMjYyZjllNTVhNThlODY4N2NhMzIwZg


**Parameters**
<code>token</code> $token


**Request data**
{
    "roles": [
        {
            "id": 1
        }
    ]
}


Response:

```
{
    "error": false,
    "data": {
        "error": false,
        "message": "user.updated"
    }
}

```

##Login##
Login for admin, same as login for other role

**Url**
<code>POST</code>api.hottab.pw/admin/login?hotel_id=8


**Parameters**
<code>api_hottab_pw/admin/login?hotel_id<code> 8


**Request data**
{
    "password": "123456",
    "email": "thanhdd@hottab.net"
}


Response:

```
{
    "error": false,
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDIwMzA3IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODMzMzkwNyIsIm5iZiI6IjE0MzgzMzM5MDciLCJqdGkiOiI3ZWEzNTNkNjI2MWExYzQzMzRkNWYxM2Q2MWZmNGM3ZSJ9.YjVlNDUxZjBmYjNkZjcyNDg4NDYyMGE0OTYwZGVkYWY3MzFiY2JjZWVhOTZkOTE5NzhlMGZmMDRiZGY1Njk2ZA",
    "refresh_token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOjE0Mzk1NDM1MDcsImlzX3JlZnJlc2hfdG9rZW4iOnRydWUsInN1YiI6NDAsImlzcyI6Imh0dHA6XC9cL2FwaS5ob3R0YWIucHdcL2FkbWluXC9sb2dpbiIsImlhdCI6IjE0MzgzMzM5MDciLCJuYmYiOiIxNDM4MzMzOTA3IiwianRpIjoiN2VhMzUzZDYyNjFhMWM0MzM0ZDVmMTNkNjFmZjRjN2UifQ.MjJlZTU5ODM1YmIzYzk3MmExNGQ3NWJkZTEyNmVhNGExNmE1MzFmYzhmYzZlNmVmMDJkNjUwN2RmNDZkZmE4Yw",
    "firebase_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkIjp7InVpZCI6IjQwIn0sInYiOjAsImlhdCI6MTQzODMzMzkwN30.ePbVfw-zfvltCSGpHvmmzUAIVuj4692AZHUBRaa0BCA",
    "user": {
        "id": 40,
        "username": "thanhdd@hottab.net",
        "email": "thanhdd@hottab.net",
        "photo": null,
        "activated": 1,
        "last_login": "2015-07-31 16:11:47",
        "first_name": "duy thanh",
        "last_name": "dao",
        "settings": [],
        "roles": [
            {
                "id": 8,
                "hotel_id": 8,
                "is_protected": 1,
                "group_id": 2,
                "created_at": "2015-05-21 16:22:03",
                "updated_at": "2015-05-21 16:22:03",
                "name": "Admin",
                "description": "Role for hotel admin"
            },
            {
                "id": 10,
                "hotel_id": 10,
                "is_protected": 1,
                "group_id": 2,
                "created_at": "2015-05-21 16:22:03",
                "updated_at": "2015-05-21 16:22:03",
                "name": "Admin",
                "description": "Role for hotel admin"
            },
            {
                "id": 11,
                "hotel_id": 11,
                "is_protected": 1,
                "group_id": 2,
                "created_at": "2015-05-21 16:22:03",
                "updated_at": "2015-05-21 16:22:03",
                "name": "Admin",
                "description": "Role for hotel admin"
            },
            {
                "id": 19,
                "hotel_id": 13,
                "is_protected": 1,
                "group_id": 2,
                "created_at": "2015-05-29 16:06:39",
                "updated_at": "2015-05-29 16:06:39",
                "name": "Admin",
                "description": "Default role for admin"
            }
        ],
        "permissions": []
    }
}

```

##Delete a User##


**Url**
<code>DELETE</code>api.hottab.pw/admin/users/96?token=fe4a8fc53550eecd63bcbb049a4df3a6&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
[]


Response:

```
{
    "error": false,
    "message": "user.deleted"
}

```

##Update Your Profile##
update user profile, includes changing password

**Url**
<code>POST</code>api.hottab.pw/users/update


**Parameters**
<code>api_hottab_pw/users/update<code> 


**Request data**
{
    "token": "4bd9358b40bf5e3b505d2fa87fbae13c",
    "password": "123456",
    "new_password": "123456",
    "first_name": "Duy Thanh",
    "last_name": "Dao",
    "photo": "https:\/\/fbcdn-profile-a.akamaihd.net\/hprofile-ak-xfa1\/v\/t1.0-1\/p50x50\/406646_502758429737556_1605773667_n.jpg?oh=3c1115a15ab1ba3ad98c72fc3c739802&oe=54979128&__gda__=1418099472_8466bceef7c2027e3784fd06972a579d"
}


Response:

```
{
    "error": false,
    "message": "Update successfully"
}

```

