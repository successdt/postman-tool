##Create##


**Url**
<code>POST</code>http://api.hottab.pw/master/users/


**Parameters**

**Request params**
$$params

**Request data**
"{\r\n    \"first_name\" : \"First\",\r\n    \"last_name\" : \"Last\",\r\n    \"email\" : \"mail@example.com\",\r\n    \"password\" : \"123456\",\r\n    \"group_id\" : 2\r\n}"


Response:

```
{"error":false,"data":{"first_name":"First","last_name":"Last","email":"mail@example.com","updated_at":"2015-07-31 16:51:13","created_at":"2015-07-31 16:51:13","id":153,"activated":1,"group_id":2,"group_name":"Hotel Admin"}}

```

##Update##


**Url**
<code>PUT</code>http://api.hottab.pw/master/users/2


**Parameters**

**Request params**
$$params

**Request data**
"{\r\n    \"first_name\" : \"First\",\r\n    \"last_name\" : \"Last\",\r\n    \"password\" : \"123456\",\r\n    \"group_id\" : 2\r\n}"


Response:

```
{"error":false,"message":"user.updated"}

```

##Delete##


**Url**
<code>DELETE</code>http://api.hottab.pw/master/users/202


**Parameters**

**Request params**
$$params

**Request data**
[]


Response:

```
{"error":"token_absent"}

```

##List##


**Url**
<code>GET</code>http://api.hottab.pw/master/users


**Parameters**

**Request params**
$$params

**Request data**
[]


Response:

```
{"error":false,"data":[{"id":5,"first_name":"Andres","last_name":"Hew","email":"outsource79@gmail.com","activated":1,"group_name":"Super Administrators","group_id":1},{"id":7,"first_name":"demo","last_name":"demo","email":"demo@adeasdf.com","activated":1,"group_name":"Super Administrators","group_id":1},{"id":9,"first_name":"gss","last_name":"grgg","email":"ra@gnn.com","activated":1,"group_name":"Super Administrators","group_id":1},{"id":13,"first_name":"Super","last_name":"Admin","email":"admin@asd.com","activated":1,"group_name":"Super Administrators","group_id":1},{"id":14,"first_name":"Doptor","last_name":"Doptor","email":"info@doptor.org","activated":1,"group_name":"Super Administrators","group_id":1},{"id":15,"first_name":"duy thanh","last_name":"dao","email":"admin@hottab.net","activated":1,"group_name":"Super Administrators","group_id":1},{"id":1,"first_name":"test","last_name":"test","email":"test@gmail.com","activated":1,"group_name":"Hotel Admin","group_id":2},{"id":6,"first_name":"User","last_name":"user","email":"useradsf@asdfdsf.com","activated":1,"group_name":"Hotel Admin","group_id":2},{"id":16,"first_name":"Duy Thanh","last_name":"Dao","email":"successdt@gmail.com","activated":1,"group_name":"Hotel Admin","group_id":2},{"id":40,"first_name":"Duy Thanh","last_name":"Dao","email":"thanhdd@hottab.net","activated":1,"group_name":"Hotel Admin","group_id":2},{"id":87,"first_name":"hieu","last_name":"pham","email":"hieu@hottab.net","activated":1,"group_name":"Hotel Admin","group_id":2},{"id":153,"first_name":"First","last_name":"Last","email":"mail@example.com","activated":1,"group_name":"Hotel Admin","group_id":2},{"id":16,"first_name":"Duy Thanh","last_name":"Dao","email":"successdt@gmail.com","activated":1,"group_name":"Waiter","group_id":3},{"id":107,"first_name":"Cotien","last_name":"01","email":"cotien@hottab.net","activated":1,"group_name":"Cashier","group_id":4},{"id":108,"first_name":"Cotien","last_name":"02","email":"cotien02@hottab.net","activated":1,"group_name":"Cashier","group_id":4},{"id":111,"first_name":"hoang","last_name":"loi","email":"loi@hottab.net","activated":1,"group_name":"Cashier","group_id":4},{"id":33,"first_name":"hip","last_name":null,"email":"dd.thanh@net-frontier.jp","activated":1,"group_name":null,"group_id":null},{"id":34,"first_name":null,"last_name":null,"email":"successdt@hotmail.com","activated":1,"group_name":null,"group_id":null},{"id":38,"first_name":null,"last_name":null,"email":"thanh@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":39,"first_name":"Duy Th\u00e0nh","last_name":"\u0110\u00e0o","email":"success_dt@yahoo.com.vn","activated":1,"group_name":null,"group_id":null},{"id":42,"first_name":null,"last_name":null,"email":"successdt1@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":43,"first_name":null,"last_name":null,"email":"successdt2@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":44,"first_name":null,"last_name":null,"email":"successdt3@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":45,"first_name":null,"last_name":null,"email":"successdt4@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":46,"first_name":null,"last_name":null,"email":"successdt5@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":47,"first_name":null,"last_name":null,"email":"successdt6@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":48,"first_name":null,"last_name":null,"email":"successdt7@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":49,"first_name":null,"last_name":null,"email":"successdt8@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":50,"first_name":null,"last_name":null,"email":"successdt9@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":51,"first_name":null,"last_name":null,"email":"successdt10@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":52,"first_name":null,"last_name":null,"email":"successdt11@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":53,"first_name":null,"last_name":null,"email":"1successdt@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":54,"first_name":null,"last_name":null,"email":"2successdt@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":55,"first_name":null,"last_name":null,"email":"3successdt@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":56,"first_name":null,"last_name":null,"email":"4successdt@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":57,"first_name":null,"last_name":null,"email":"5successdt@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":58,"first_name":null,"last_name":null,"email":"6successdt@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":59,"first_name":null,"last_name":null,"email":"7successdt@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":60,"first_name":null,"last_name":null,"email":"8successdt@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":61,"first_name":null,"last_name":null,"email":"9successdt@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":62,"first_name":null,"last_name":null,"email":"10successdt@zoho.com","activated":1,"group_name":null,"group_id":null},{"id":63,"first_name":null,"last_name":null,"email":"10successdt@zoho.com1","activated":1,"group_name":null,"group_id":null},{"id":64,"first_name":null,"last_name":null,"email":"10successdt@zoho.com2","activated":1,"group_name":null,"group_id":null},{"id":65,"first_name":null,"last_name":null,"email":"10successdt@zoho.com3","activated":1,"group_name":null,"group_id":null},{"id":66,"first_name":null,"last_name":null,"email":"10successdt@zoho.com4","activated":1,"group_name":null,"group_id":null},{"id":67,"first_name":null,"last_name":null,"email":"10successdt@zoho.com5","activated":1,"group_name":null,"group_id":null},{"id":68,"first_name":null,"last_name":null,"email":"10successdt@zoho.com6","activated":1,"group_name":null,"group_id":null},{"id":69,"first_name":null,"last_name":null,"email":"10successdt@zoho.com7","activated":1,"group_name":null,"group_id":null},{"id":70,"first_name":null,"last_name":null,"email":"10successdt@zoho.com8","activated":1,"group_name":null,"group_id":null},{"id":71,"first_name":null,"last_name":null,"email":"10successdt@zoho.com9","activated":1,"group_name":null,"group_id":null},{"id":72,"first_name":null,"last_name":null,"email":"10successdt@zoho1.com","activated":1,"group_name":null,"group_id":null},{"id":73,"first_name":null,"last_name":null,"email":"10successdt@zoho2.com","activated":1,"group_name":null,"group_id":null},{"id":74,"first_name":null,"last_name":null,"email":"10successdt@zoho3.com","activated":1,"group_name":null,"group_id":null},{"id":75,"first_name":null,"last_name":null,"email":"successdt@zoho4.com","activated":1,"group_name":null,"group_id":null},{"id":76,"first_name":"Hieu","last_name":"Pham","email":"mr_hie@yahoo.com","activated":1,"group_name":null,"group_id":null},{"id":77,"first_name":"Ltt","last_name":"Demo","email":"ltthws@gmail.com","activated":1,"group_name":null,"group_id":null},{"id":78,"first_name":null,"last_name":null,"email":"mr_hie2@yahoo.com","activated":1,"group_name":null,"group_id":null},{"id":79,"first_name":null,"last_name":null,"email":"mr_hiefd2@yahoo.com","activated":1,"group_name":null,"group_id":null},{"id":80,"first_name":null,"last_name":null,"email":"mr_hieffd2@yahoo.com","activated":1,"group_name":null,"group_id":null},{"id":81,"first_name":null,"last_name":null,"email":"mr_hiegfdffd2@yahoo.com","activated":1,"group_name":null,"group_id":null},{"id":82,"first_name":null,"last_name":null,"email":"mr_hiegfdffdvdfdfd2@yahoo.com","activated":1,"group_name":null,"group_id":null},{"id":83,"first_name":null,"last_name":null,"email":"mr_hiegfdddffdvdfdfd2@yahoo.com","activated":1,"group_name":null,"group_id":null},{"id":84,"first_name":null,"last_name":null,"email":"mr_hie@yahoo.com2","activated":1,"group_name":null,"group_id":null},{"id":85,"first_name":null,"last_name":null,"email":"mr_hie@yahoo.comm","activated":1,"group_name":null,"group_id":null},{"id":86,"first_name":"Le Hai","last_name":"Ninh","email":"ninh.notification@gmail.com","activated":1,"group_name":null,"group_id":null},{"id":88,"first_name":null,"last_name":null,"email":"mr_hie@yahoo.co","activated":1,"group_name":null,"group_id":null},{"id":90,"first_name":null,"last_name":null,"email":"mr_hieu@yahoo.com","activated":1,"group_name":null,"group_id":null},{"id":91,"first_name":"Hoang Lao","last_name":"Ta","email":"lxhxxnxxx@gmail.com","activated":1,"group_name":null,"group_id":null},{"id":129,"first_name":"loi","last_name":"hoang","email":"cashier@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":130,"first_name":"hoang","last_name":"loi","email":"waiter@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":131,"first_name":"van","last_name":"loi","email":"barwaiter@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":132,"first_name":"super","last_name":"visor","email":"supervisor@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":134,"first_name":"Ninh","last_name":"Le Hai","email":"ninh@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":135,"first_name":"Pham","last_name":"Hieu","email":"hieupham@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":136,"first_name":"Anh","last_name":"Viet","email":"vanh@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":137,"first_name":"Cuong","last_name":"Khac","email":"khaccuong@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":138,"first_name":"Pham","last_name":"Huy","email":"phuy@gmail.com","activated":1,"group_name":null,"group_id":null},{"id":139,"first_name":"Duy","last_name":"Thanh","email":"thanhduy@gmail.com","activated":1,"group_name":null,"group_id":null},{"id":140,"first_name":"Tai","last_name":"Nguyen","email":"tai@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":141,"first_name":"Hieu","last_name":"Pham","email":"dfsdf@sdfsdf.com","activated":1,"group_name":null,"group_id":null},{"id":142,"first_name":"Waiter","last_name":"mot","email":"waiter1@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":143,"first_name":"Waiter","last_name":"hai","email":"waiter2@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":144,"first_name":"Waiter","last_name":"ba","email":"waiter3@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":145,"first_name":"Waiter","last_name":"bon","email":"waiter4@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":146,"first_name":"Waiter","last_name":"nam","email":"waiter5@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":147,"first_name":"Waiter","last_name":"sau","email":"waiter6@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":148,"first_name":"Waiter","last_name":"bay","email":"waiter7@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":149,"first_name":"Waiter","last_name":"tam","email":"waiter8@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":150,"first_name":"Waiter","last_name":"chin","email":"waiter9@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":151,"first_name":"Waiter","last_name":"muoi","email":"waiter10@hottab.net","activated":1,"group_name":null,"group_id":null},{"id":152,"first_name":"Duy Thanh","last_name":"Dao","email":"thanhdd@hottab.xyz","activated":1,"group_name":null,"group_id":null}]}

```

