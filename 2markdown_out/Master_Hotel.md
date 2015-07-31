##View a hotel##


**Url**
<code>GET</code>api.hottab.pw/master/hotels/2?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjE1LCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvXC9sb2dpbiIsImlhdCI6IjE0MzIyODg4NTgiLCJleHAiOiIxNDMyMzc1MjU4IiwibmJmIjoiMTQzMjI4ODg1OCIsImp0aSI6IjUzNzQ2MjUwMGJhNGZlNTFhNGM5MDk3NzUwZDI0MWM2In0.ZDRhYzY2MTBiNzBiMmQyM2Q4YjhhMjQwYmYyMzk4NzJiYzVkNjFhMjhiNTJlNTBiZDFlMzNjOTEzOWFjMjMxMQ


**Parameters**

**Request params**
$$params

**Request data**
[]


Response:

```
{"error":false,"data":{"id":2,"user_id":87,"name":"Hieu's hotel","number_of_rooms":2,"description":null,"phone":"","address":"","url":"","user":{"id":87,"email":"hieu@hottab.net"},"rooms":[{"id":61,"name":"room_test111"},{"id":62,"name":"1111"}]}}

```

##Update hotel##


**Url**
<code>POST</code>api.hottab.pw/master/hotels/8?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjE1LCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvXC9sb2dpbiIsImlhdCI6IjE0MzIyODg4NTgiLCJleHAiOiIxNDMyMzc1MjU4IiwibmJmIjoiMTQzMjI4ODg1OCIsImp0aSI6IjUzNzQ2MjUwMGJhNGZlNTFhNGM5MDk3NzUwZDI0MWM2In0.ZDRhYzY2MTBiNzBiMmQyM2Q4YjhhMjQwYmYyMzk4NzJiYzVkNjFhMjhiNTJlNTBiZDFlMzNjOTEzOWFjMjMxMQ


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "name",
        "value": "Foruna hotel",
        "type": "text",
        "enabled": true
    },
    {
        "key": "user_id",
        "value": "41",
        "type": "text",
        "enabled": true
    },
    {
        "key": "_method",
        "value": "PUT",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":{"error":false,"data":{"id":8,"user_id":"41","name":"Foruna hotel","logo":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Logo_-_512px_Qcof3Uc1.jpg","image":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/DinhGiaroom_BwDJVMF1.jpg","description":"<p>&#10;<\/p><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\">K\u00ednh ch\u00e0o Qu\u00fd kh\u00e1ch,<br\/>L\u01a1\u0300i \u0111\u00e2\u0300u ti\u00ean, thay m\u0103\u0323t Ban la\u0303nh \u0111a\u0323o cu\u0300ng toa\u0300n th\u00ea\u0309 ca\u0301n b\u00f4\u0323 c\u00f4ng nh\u00e2n vi\u00ean Kha\u0301ch sa\u0323n Ha\u0300 N\u00f4\u0323i Sahul, chu\u0301ng t\u00f4i xin ch\u00e2n tha\u0300nh ca\u0301m \u01a1n quy\u0301 kha\u0301ch \u0111a\u0303 da\u0300nh s\u01b0\u0323 quan t\u00e2m \u0111\u00ea\u0301n sa\u0309n ph\u00e2\u0309m va\u0300 di\u0323ch vu\u0323 cu\u0309a Kha\u0301ch sa\u0323n.<br\/><div><br\/><\/div>V\u1edbi ph\u01b0\u01a1ng ch\u00e2m, s\u1ef1 h\u00e0i l\u00f2ng c\u1ee7a qu\u00fd kh\u00e1ch l\u00e0 ni\u1ec1m h\u1ea1nh ph\u00fac v\u00e0 th\u00e0nh c\u00f4ng c\u1ee7a ch\u00fang t\u00f4i, Kha\u0301ch sa\u0323n t\u00ean g\u1ecdi<span class=\"Apple-converted-space\">\u00a0<\/span><b>SAHUL<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>\u0111\u00e3 ra \u0111\u1eddi d\u1ef1a tr\u00ean nh\u1eefng ti\u00eau ch\u00ed sau:<br\/><br\/><div style=\"text-align: left;\"><table class=\"\" style=\"width: 725px;background-color: transparent;\"><tbody><tr><td class=\"\"><b>S:Standard<\/b>\u00a0<\/td><td>\u00a0<\/td><td>\u00a0<\/td><td>C\u00f3 ngh\u0129a l\u00e0 \u201c<b>Ti\u00eau chu\u1ea9n\u201d<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>: ch\u00fang t\u00f4i l\u1ea5y ti\u00eau chu\u1ea9n c\u1ee7a m\u1ed9t Kh\u00e1ch s\u1ea1n 5 sao qu\u1ed1c t\u1ebf l\u00e0m n\u1ec1n t\u1ea3ng \u0111\u1ec3 x\u00e2y d\u1ef1ng v\u00e0 ph\u00e1t tri\u1ec3n Kh\u00e1ch s\u1ea1n<\/td><\/tr><tr><td><b>A: Ahead<\/b><\/td><td>\u00a0<\/td><td>\u00a0<\/td><td>C\u00f3 ngh\u0129a l\u00e0 \u201c<b>Ti\u1ebfn l\u00ean\u201d<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>: ch\u00fang t\u00f4i kh\u00f4ng ng\u1eebng \u0111\u1ed5i m\u1edbi v\u00e0 n\u00e2ng cao ch\u1ea5t l\u01b0\u1ee3ng d\u1ecbch v\u1ee5 \u0111\u1ec3 \u0111em \u0111\u00ea\u0301n s\u01b0\u0323 ha\u0300i lo\u0300ng cho qu\u00fd kh\u00e1ch<br\/><\/td><\/tr><tr><td><b>HUL: High Up Level<\/b><\/td><td>\u00a0<\/td><td>\u00a0<\/td><td class=\"\">Mang y\u0301 nghi\u0303a \u201d<b>T\u1ea7m cao m\u1edbi\u201d:<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>v\u01a1\u0301i nh\u01b0\u0303ng n\u00f4\u0303 l\u01b0\u0323c ph\u00e2\u0301n \u0111\u00e2\u0301u, kh\u00f4ng ng\u01b0\u0300ng sa\u0301ng ta\u0323o trong phong ca\u0301ch phu\u0323c vu\u0323 cu\u0300ng v\u01a1\u0301i nh\u01b0\u0303ng y\u0301 ki\u00ea\u0301n \u0111o\u0301ng go\u0301p quy\u0301 ba\u0301u cu\u0309a quy\u0301 kha\u0301ch, chu\u0301ng t\u00f4i mong mu\u00f4\u0301n se\u0303 \u0111\u01b0a Kha\u0301ch sa\u0323n v\u01b0\u01a1n l\u00ean nh\u01b0\u0303ng t\u00e2\u0300m cao m\u01a1\u0301i, mang \u0111\u0103\u0309ng c\u00e2\u0301p qu\u00f4\u0301c t\u00ea\u0301 nh\u01b0ng v\u00e2\u0303n mang \u0111\u00e2\u0323m ba\u0309n s\u0103\u0301c cu\u0309a Vi\u00ea\u0323t Nam.<\/td><\/tr><\/tbody><\/table><br\/><\/div><div style=\"text-align: left;\"><br\/><\/div>K\u1ebft h\u1ee3p v\u1edbi c\u00e2u kh\u1ea9u hi\u1ec7u \u00a0<b><i>\u201cWith us you feel at home\u201d,<\/i><\/b><span class=\"Apple-converted-space\">\u00a0<\/span>ch\u00fang t\u00f4i mu\u1ed1n mang l\u1ea1i c\u1ea3m gi\u00e1c th\u00e2n thi\u1ec7n, \u1ea5m \u00e1p nh\u01b0 ch\u00ednh ng\u00f4i nh\u00e0 y\u00eau th\u01b0\u01a1ng c\u1ee7a quy\u0301 kh\u00e1ch m\u1ed7i l\u1ea7n l\u01b0u tr\u00fa t\u1ea1i Kh\u00e1ch s\u1ea1n.<\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><div><br\/><\/div><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><div style=\"text-align: justify;\"><span>Kh\u00e1ch s\u1ea1n Sahul t\u1ecda l\u1ea1c t\u1ea1i 684 Minh Khai, qu\u1eadn Hai B\u00e0 Tr\u01b0ng v\u1edbi c\u00e1c d\u1ecbch v\u1ee5 \u0111\u1ea1t chu\u1ea9n 4 sao bao g\u1ed3m 216 ph\u00f2ng ngh\u1ec9, ph\u00f2ng \u0111\u1ea1i ti\u1ec7c v\u1edbi s\u1ee9c ch\u1ee9a t\u1edbi 400 ng\u01b0\u1eddi, h\u1ec7 th\u1ed1ng nh\u00e0 h\u00e0ng, qu\u1ea7y bar, trung t\u00e2m th\u1ec3 h\u00ecnh, Massage &amp; Spa, ph\u00f2ng h\u00e1t Karaoke, b\u1ec3 b\u01a1i trong nh\u00e0 s\u1ebd mang l\u1ea1i cho du kh\u00e1ch nh\u1eefng gi\u00e2y ph\u00fat ngh\u1ec9 ng\u01a1i, th\u01b0 gi\u00e3n tho\u1ea3i m\u00e1i nh\u1ea5t .<br\/><\/span><br\/><div style=\"text-align: center;\"><a class=\"colorbox cboxElement\" href=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/sahul_hotel_lobby__11.jpg\" rel=\"gallery1\" target=\"_blank\" style=\"color: rgb(54, 63, 68);width: 0px;height: 0px;\"><img class=\"img-editor\" alt=\"\" border=\"0\" src=\"http:\/\/sahulhotel.com\/FileUpload\/Images\/sahul_hotel_lobby__11.jpg\"\/><\/a>\u00a0\u00a0<br\/><\/div><\/div><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><i>Kh\u00f4ng gian ph\u00f2ng ngh\u1ec9 sang tr\u1ecdng:<\/i><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\">Kh\u00e1ch s\u1ea1n Sahul g\u1ed3m 216 ph\u00f2ng, c\u00e1c ph\u00f2ng \u0111\u01b0\u1ee3c thi\u1ebft k\u1ebf theo l\u1ed1i ki\u1ebfn tr\u00fac hi\u1ec7n \u0111\u1ea1i mang l\u1ea1i c\u1ea3m gi\u00e1c d\u1ec5 ch\u1ecbu, \u1ea5m c\u00fang v\u00e0 sang tr\u1ecdng. Kh\u00f4ng gian trong ph\u00f2ng tho\u00e1ng m\u00e1t, s\u1ea1ch s\u1ebd, c\u00f3 c\u1eeda s\u1ed5 h\u01b0\u1edbng ra ngo\u00e0i, t\u1ea5t c\u1ea3 c\u00e1c ph\u00f2ng \u0111\u1ec1u \u0111\u01b0\u1ee3c trang thi\u1ebft b\u1ecb hi\u1ec7n \u0111\u1ea1i v\u00e0 ti\u1ec7n nghi, ph\u00f2ng kh\u00e9p k\u00edn c\u00f3 b\u1ed3n t\u1eafm n\u1eb1m, \u0111\u00e1p \u1ee9ng nhu c\u1ea7u c\u1ee7a m\u1ecdi doanh nh\u00e2n v\u00e0 kh\u00e1ch du l\u1ecbch.<br\/><br\/><table class=\"telerik-reTable-1\" style=\"text-align: center;width: 720px;background-color: transparent;\"><tbody><tr class=\"telerik-reTableHeaderRow-1\" style=\"color: rgb(63, 77, 107);text-align: left;\"><td class=\"telerik-reTableHeaderEvenCol-1\" style=\"color: rgb(58, 70, 99);text-align: center;\">\u00a0LO\u1ea0I PH\u00d2NG<\/td><td class=\"telerik-reTableHeaderOddCol-1\" style=\"color: rgb(58, 70, 99);text-align: center;\">\u00a0S\u1ed0 L\u01af\u1ee2NG<\/td><td class=\"telerik-reTableHeaderEvenCol-1\" style=\"color: rgb(58, 70, 99);text-align: center;\">\u00a0DI\u1ec6N T\u00cdCH (M2)<\/td><\/tr><tr class=\"telerik-reTableOddRow-1\" style=\"color: rgb(102, 102, 102);\"><td class=\"telerik-reTableEvenCol-1\">\u00a0SUPERIOR<\/td><td class=\"telerik-reTableOddCol-1\" style=\"text-align: center;\">\u00a010<\/td><td class=\"telerik-reTableEvenCol-1\" style=\"text-align: center;\">26 - 30\u00a0<\/td><\/tr><tr class=\"telerik-reTableEvenRow-1\" style=\"color: rgb(102, 102, 102);\"><td class=\"telerik-reTableEvenCol-1\">\u00a0DELUXE<\/td><td class=\"telerik-reTableOddCol-1\" style=\"text-align: center;\">\u00a0173<\/td><td class=\"telerik-reTableEvenCol-1\" style=\"text-align: center;\">\u00a032 - 34<\/td><\/tr><tr class=\"telerik-reTableOddRow-1\" style=\"color: rgb(102, 102, 102);\"><td class=\"telerik-reTableEvenCol-1\">\u00a0EXECUTIVE<\/td><td class=\"telerik-reTableOddCol-1\" style=\"text-align: center;\">\u00a022<\/td><td class=\"telerik-reTableEvenCol-1\" style=\"text-align: center;\">\u00a038<\/td><\/tr><tr class=\"telerik-reTableEvenRow-1\" style=\"color: rgb(102, 102, 102);\"><td class=\"telerik-reTableEvenCol-1\">\u00a0ROYAL SUITE<\/td><td class=\"telerik-reTableOddCol-1\" style=\"text-align: center;\">\u00a011<\/td><td class=\"telerik-reTableEvenCol-1\">\u00a065<\/td><\/tr><\/tbody><\/table><div style=\"text-align: center;\"><br\/><\/div><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><b style=\"text-align: left;\"><\/b><div style=\"text-align: justify;\"><b>Nh\u00e0 H\u00e0ng<\/b><\/div><br\/><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\">Hai nh\u00e0 h\u00e0ng c\u1ee7a kh\u00e1ch s\u1ea1n Sahul H\u00e0 N\u1ed9i v\u1edbi phong v\u1ecb v\u00e0 \u0111\u1ecbnh h\u01b0\u1edbng \u1ea9m th\u1ef1c kh\u00e1c nhau, kh\u00f4ng gian \u1ea9m th\u1ef1c s\u1ed1ng \u0111\u1ed9ng, phong ph\u00fa s\u1ebd kh\u00f4ng ch\u1ec9 mang \u0111\u1ebfn cho th\u1ef1c kh\u00e1ch nh\u1eefng b\u1eefa \u0103n ngon m\u00e0 c\u00f2n mang t\u1edbi nh\u1eefng tr\u1ea3i nghi\u1ec7m th\u00fa v\u1ecb v\u1ec1 \u1ea9m th\u1ef1c v\u0103n h\u00f3a v\u00f9ng mi\u1ec1n.<br\/><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><b style=\"color: rgb(36, 36, 36);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: justify;background-color: rgb(255, 255, 255);\"><b>Nh\u00e0 h\u00e0ng Sen<\/b><span><span class=\"Apple-converted-space\">\u00a0<\/span>ph\u1ee5c v\u1ee5 ti\u1ec7c Buffet qu\u1ed1c t\u1ebf v\u1edbi phong c\u00e1ch \u1ea9m th\u1ef1c tinh t\u1ebf, c\u00e1c m\u00f3n \u0103n \u00c2u - \u00c1 l\u00e0m h\u00e0i l\u00f2ng qu\u00fd kh\u00e1ch \u0111\u1ebfn t\u1eeb m\u1ecdi qu\u1ed1c gia tr\u00ean th\u1ebf gi\u1edbi.<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><span>Gi\u1edd ho\u1ea1t \u0111\u1ed9ng: 6:30 - 22:00\u00a0<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><span>S\u1ee9c ch\u1ee9a: 350 ng\u01b0\u1eddi<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><b style=\"color: rgb(36, 36, 36);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: justify;background-color: rgb(255, 255, 255);\"><b>Nh\u00e0 h\u00e0ng Tr\u00e0ng An<\/b><span><span class=\"Apple-converted-space\">\u00a0<\/span>ph\u1ee5c v\u1ee5 c\u00e1c m\u00f3n \u0103n \u00c2u - \u00c1 v\u00e0 \u0111\u1eb7c s\u1ea3n Vi\u1ec7t Nam. 4 ph\u00f2ng VIP thi\u1ebft k\u1ebf ri\u00eang bi\u1ec7t v\u00e0 sang tr\u1ecdng c\u00f3 th\u1ec3 \u0111\u00e1p \u1ee9ng \u0111\u01b0\u1ee3c nhu c\u1ea7u d\u00f9ng b\u1eefa c\u1ee7a kh\u00e1ch \u0111\u1ec3 g\u1eb7p g\u1ee1 \u0111\u1ed1i t\u00e1c, ng\u01b0\u1eddi th\u00e2n hay nh\u1eefng b\u1eefa \u0103n gia \u0111\u00ecnh, sinh nh\u1eadt th\u00e2n m\u1eadt \u1ea5m c\u00fang.<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><span>Gi\u1edd ho\u1ea1t \u0111\u1ed9ng: 6:30 - 22:00\u00a0<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><span>S\u1ee9c ch\u1ee9a: 130 - 150 ng\u01b0\u1eddi<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><b style=\"color: rgb(36, 36, 36);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: justify;background-color: rgb(255, 255, 255);\"><b>T\u1ed5 ch\u1ee9c h\u1ed9i ngh\u1ecb, ti\u1ec7c c\u01b0\u1edbi:<\/b><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\">\u00a0<\/div><b style=\"color: rgb(36, 36, 36);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: justify;background-color: rgb(255, 255, 255);\"><b>Kh\u00e1ch s\u1ea1n Sahul Hotel<\/b><span>\u00a0l\u00e0 m\u1ed9t l\u1ef1a ch\u1ecdn tuy\u1ec7t v\u1eddi \u0111\u1ec3 t\u1ed5 ch\u1ee9c c\u00e1c bu\u1ed5i h\u1ed9i ngh\u1ecb, s\u1ef1 ki\u1ec7n, \u0111\u1eb7c bi\u1ec7t ti\u1ec7c c\u01b0\u1edbi tr\u1ecdn g\u00f3i v\u1edbi ph\u1ea7n ti\u1ec7c v\u00e0 ph\u1ea7n l\u1ec5 ho\u00e0nh tr\u00e1ng, kh\u00f4ng gian l\u00e3ng m\u1ea1n sang tr\u1ecdng.\u00a0<\/span><span>M\u1eb7t b\u1eb1ng r\u1ed9ng 650m2, ch\u00fang t\u00f4i c\u00f3 th\u1ec3 linh ho\u1ea1t chia th\u00e0nh c\u00e1c kh\u00f4ng gian ph\u00f9 h\u1ee3p v\u1edbi y\u00eau c\u1ea7u c\u1ee7a qu\u00fd kh\u00e1ch. C\u00f9ng v\u1edbi trang thi\u1ebft b\u1ecb \u00e2m thanh, \u00e1nh s\u00e1ng hi\u1ec7n \u0111\u1ea1i, \u0111\u1ed9i ng\u0169 nh\u00e2n vi\u00ean chuy\u00ean nghi\u1ec7p, Ch\u00fang t\u00f4i cam k\u1ebft mang \u0111\u1ebfn cho qu\u00fd kh\u00e1ch m\u1ed9t s\u1ef1 ki\u1ec7n th\u00e0nh c\u00f4ng v\u00e0 \u0111\u00e1ng nh\u1edb.<br\/><\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><b style=\"color: rgb(36, 36, 36);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: justify;background-color: rgb(255, 255, 255);\"><b>D\u1ecbch v\u1ee5 gi\u1ea3i tr\u00ed Karaoke, Massage &amp; Spa:<\/b><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><b><br\/><\/b><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><span><b>C\u00e2u l\u1ea1c b\u1ed9 Night Club<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>v\u1edbi 15 ph\u00f2ng Karaoke v\u00e0 bar r\u01b0\u1ee3u sang tr\u1ecdng, hi\u1ec7n \u0111\u1ea1i h\u00e0ng \u0111\u1ea7u Th\u1ee7 \u0111\u00f4 H\u00e0 N\u1ed9i l\u00e0 n\u01a1i gi\u1ea3i tr\u00ed cao c\u1ea5p cho nh\u1eefng b\u1eefa ti\u1ec7c, sinh nh\u1eadt v\u00e0 giao l\u01b0u b\u1ea1n b\u00e8.<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><b style=\"color: rgb(36, 36, 36);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: justify;background-color: rgb(255, 255, 255);\"><b>D\u1ecbch v\u1ee5 Massage &amp; Spa<span class=\"Apple-converted-space\">\u00a0<\/span><\/b><span>v\u1edbi 4 b\u1ec3 t\u1eafm th\u1ee7y l\u1ef1c, n\u00f3ng, l\u1ea1nh, tr\u00e0 xanh. 15 ph\u00f2ng Massage VIP, ph\u00f2ng VIP 2 gi\u01b0\u1eddng s\u1eed d\u1ee5ng cho \u0111\u00f4i nam n\u1eef, 14 ph\u00f2ng Massage body, ph\u00f2ng ch\u1edd th\u01b0 gi\u00e3n ti\u1ec7n nghi hi\u1ec7n \u0111\u1ea1i.<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><b style=\"color: rgb(36, 36, 36);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: justify;background-color: rgb(255, 255, 255);\"><b>B\u1ec3 B\u01a1i:\u00a0<\/b><span>B\u1ec3 b\u01a1i n\u1eb1m \u1edf t\u1ea7ng 5 kh\u00e1ch s\u1ea1n lu\u00f4n \u0111\u01b0\u1ee3c ki\u1ec3m so\u00e1t d\u01b0\u1edbi c\u00e1c ti\u00eau chu\u1ea9n v\u1ec1 n\u01b0\u1edbc, quy tr\u00ecnh an to\u00e0n, c\u00e1c trang thi\u1ebft b\u1ecb gi\u00fap du kh\u00e1ch c\u00f3 nh\u1eefng gi\u1edd b\u01a1i th\u01b0 gi\u00e3n nh\u1ea5t d\u01b0\u1edbi l\u00e0n n\u01b0\u1edbc trong l\u00e0nh.\u00a0<\/span><span>Sau nh\u1eefng gi\u1edd l\u00e0m vi\u1ec7c m\u1ec7t m\u1ecfi, du kh\u00e1ch s\u1ebd t\u1eadn h\u01b0\u1edfng c\u1ea3m gi\u00e1c th\u01b0 gi\u00e3n v\u00e0 th\u1ea3 l\u1ecfng khi nh\u00fang m\u00ecnh v\u00e0o l\u00e0n n\u01b0\u1edbc trong l\u00e0nh, th\u01b0\u1eddng th\u1ee9c m\u1ed9t ly cocktail v\u00e0 ng\u1eafm nh\u00ecn th\u00e0nh ph\u1ed1, ngay t\u1ea1i qu\u1ea7y ph\u1ee5c v\u1ee5 \u0111\u1ed3 u\u1ed1ng Aqua-pool Bar.<\/span><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><br\/><\/div><div style=\"color: rgb(36, 36, 36);text-align: justify;background-color: rgb(255, 255, 255);\"><i style=\"text-align: left;\"><b>M\u1ecdi chi ti\u1ebft xin vui l\u00f2ng li\u00ean h\u1ec7:<\/b><\/i><br\/><\/div><br style=\"color: rgb(36, 36, 36);background-color: rgb(230, 230, 230);\"\/><div style=\"color: rgb(36, 36, 36);text-align: left;background-color: rgb(255, 255, 255);\"><b><font color=\"#ac842c\">KH\u00c1CH S\u1ea0N SAHUL HA\u0300 N\u00d4\u0323I\u00a0<\/font><\/b><\/div><div style=\"color: rgb(36, 36, 36);text-align: left;background-color: rgb(255, 255, 255);\"><br\/><\/div><i style=\"color: rgb(36, 36, 36);background-color: rgb(255, 255, 255);\"><\/i><div style=\"color: rgb(85, 85, 85);text-align: left;background-color: rgb(255, 255, 255);\"><i><b>\u0110\u1ecba ch\u1ec9:<span class=\"Apple-converted-space\">\u00a0<\/span><\/b>684 Minh Khai - \u00a0Qu\u00e2\u0323n Hai B\u00e0 Tr\u01b0ng - H\u00e0 N\u1ed9i<\/i><\/div><b style=\"color: rgb(85, 85, 85);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: left;background-color: rgb(255, 255, 255);\"><i><b>\u0110i\u1ec7n tho\u1ea1i:<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>(+844) 3987 4720<\/i><\/div><b style=\"color: rgb(85, 85, 85);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: left;background-color: rgb(255, 255, 255);\"><i><b>Fax:<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>(+844) 3987 0746<span class=\"Apple-converted-space\">\u00a0<\/span><br\/><\/i><i>Email:<span class=\"Apple-converted-space\">\u00a0<\/span><\/i><i>info@sahulhotel.com<\/i><\/div><b style=\"color: rgb(85, 85, 85);background-color: rgb(255, 255, 255);\"><\/b><div style=\"color: rgb(85, 85, 85);text-align: left;background-color: rgb(255, 255, 255);\"><i><b>Website:<\/b><span class=\"Apple-converted-space\">\u00a0<\/span>www.sahulhotel.com<\/i><\/div><p><\/p>","status":"published","review_count":0,"gallery":"a:7:{i:0;a:2:{s:3:\"url\";s:72:\"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/DinhGiaroom_EPUx7YBE.jpg\";s:7:\"caption\";s:21:\"Gorgeous wedding room\";}i:1;a:2:{s:3:\"url\";s:86:\"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/sahul_hotel_suite_room__1_tOHUMSU1.jpg\";s:7:\"caption\";s:0:\"\";}i:2;a:2:{s:3:\"url\";s:82:\"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/sahul_hotel_lobby__11_zTWjj86N.jpg\";s:7:\"caption\";s:0:\"\";}i:3;a:2:{s:3:\"url\";s:80:\"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Strawberry_lemonade_lj7HzmYU.jpg\";s:7:\"caption\";s:0:\"\";}i:4;a:2:{s:3:\"url\";s:107:\"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/10994603_428933233950832_8791660473359471228_n_EQhZnYqE.jpg\";s:7:\"caption\";s:0:\"\";}i:5;a:2:{s:3:\"url\";s:91:\"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Screenshot_2015-02-12_18_58_19_W7WEMFJ3.png\";s:7:\"caption\";s:0:\"\";}i:6;a:2:{s:3:\"url\";s:75:\"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Martini_bianco_Jm2bgTfa.jpg\";s:7:\"caption\";s:0:\"\";}}","created_at":"2014-12-01 23:22:56","updated_at":"2015-07-31 16:47:22","phone":"0983 929 424","address":"Wifi password: askmefirst","url":"http:\/\/google.com"}}}

```

##Create hotel##


**Url**
<code>POST</code>api.hottab.pw/master/hotels?key=9s4MBG8bYv2FbExKo89l


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "name",
        "value": "Foruna hotel",
        "type": "text",
        "enabled": true
    },
    {
        "key": "user_id",
        "value": "41",
        "type": "text",
        "enabled": true
    }
]


Response:

```


```

##Create hotel##


**Url**
<code>GET</code>api.hottab.pw/master/hotels?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjE1LCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvXC9sb2dpbiIsImlhdCI6IjE0MzIyODg4NTgiLCJleHAiOiIxNDMyMzc1MjU4IiwibmJmIjoiMTQzMjI4ODg1OCIsImp0aSI6IjUzNzQ2MjUwMGJhNGZlNTFhNGM5MDk3NzUwZDI0MWM2In0.ZDRhYzY2MTBiNzBiMmQyM2Q4YjhhMjQwYmYyMzk4NzJiYzVkNjFhMjhiNTJlNTBiZDFlMzNjOTEzOWFjMjMxMQ


**Parameters**

**Request params**
$$params

**Request data**
[]


Response:

```


```

##List hotel admin##


**Url**
<code>GET</code>api.hottab.pw/master/hotels/admins?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjE1LCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvXC9sb2dpbiIsImlhdCI6IjE0MzIyODg4NTgiLCJleHAiOiIxNDMyMzc1MjU4IiwibmJmIjoiMTQzMjI4ODg1OCIsImp0aSI6IjUzNzQ2MjUwMGJhNGZlNTFhNGM5MDk3NzUwZDI0MWM2In0.ZDRhYzY2MTBiNzBiMmQyM2Q4YjhhMjQwYmYyMzk4NzJiYzVkNjFhMjhiNTJlNTBiZDFlMzNjOTEzOWFjMjMxMQ


**Parameters**

**Request params**
$$params

**Request data**
[]


Response:

```
{"error":false,"data":[{"id":1,"email":"test@gmail.com"},{"id":6,"email":"useradsf@asdfdsf.com"},{"id":16,"email":"successdt@gmail.com"},{"id":40,"email":"thanhdd@hottab.net"},{"id":87,"email":"hieu@hottab.net"}]}

```

