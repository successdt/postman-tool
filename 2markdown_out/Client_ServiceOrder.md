##Update Service Order##
- Token có thể có hoặc ko
- room_id, hotel_id và guest_id (required)

**Url**
<code>POST</code>api.hottab.pw/service-orders/13


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "_method",
        "value": "PUT",
        "type": "text",
        "enabled": true
    },
    {
        "key": "guest_id",
        "value": "11",
        "type": "text",
        "enabled": true
    },
    {
        "key": "room_id",
        "value": "72",
        "type": "text",
        "enabled": true
    },
    {
        "key": "hotel_id",
        "value": "8",
        "type": "text",
        "enabled": true
    },
    {
        "key": "order",
        "value": "{\"status\":1,\"customer_note\":\"Hurry up!!!\",\"waiter_note\":\"\",\"discounts\":[{\"id\":26}],\"taxes\":[{\"id\":43}],\"items\":[{\"id\":199,\"quantity\":4,\"options\":[{\"id\":193,\"selected\":true}]},{\"id\":200,\"quantity\":2,\"options\":[{\"id\":194,\"selected\":false},{\"id\":195,\"selected\":true}]}]}",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":{"current_time":1424883140,"order":{"id":13,"user_id":null,"customer_note":"Hurry up!!!","waiter_note":"","status":1,"room_id":72,"created_at":"2015-02-25 23:51:28","updated_at":"2015-02-25 23:52:20","service_order_parent_id":7,"total":672.4,"price_before_discount":672.4,"price_after_discount":667.4,"price_before_tax":667.4,"price_after_tax":748.09,"taxes":[{"id":4,"service_order_id":13,"tax_id":43,"rate":"12.00","amount":null,"created_at":"2015-02-25 23:52:20","updated_at":"2015-02-25 23:52:20"}],"discounts":[{"id":4,"service_order_id":13,"discount_id":26,"rate":null,"amount":"5.00","created_at":"2015-02-25 23:52:20","updated_at":"2015-02-25 23:52:20"}],"items":[{"id":19,"service_order_id":13,"service_id":199,"price":"0.00","quantity":4,"created_at":"2015-02-25 23:52:20","updated_at":"2015-02-25 23:52:20","subtotal":0.4,"options":[{"id":15,"service_order_item_id":19,"service_option_id":193,"price":"0.10","quantity":4,"created_at":"2015-02-25 23:52:20","updated_at":"2015-02-25 23:52:20"}]},{"id":20,"service_order_id":13,"service_id":200,"price":"168.00","quantity":2,"created_at":"2015-02-25 23:52:20","updated_at":"2015-02-25 23:52:20","subtotal":672,"options":[{"id":16,"service_order_item_id":20,"service_option_id":195,"price":"168.00","quantity":2,"created_at":"2015-02-25 23:52:20","updated_at":"2015-02-25 23:52:20"}]}]}}}

```

##Create Service Order##
- Token có thể có hoặc ko
- room_id, hotel_id và guest_id (required)

**Url**
<code>POST</code>api.hottab.pw/service-orders


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "guest_id",
        "value": "11",
        "type": "text",
        "enabled": true
    },
    {
        "key": "room_id",
        "value": "72",
        "type": "text",
        "enabled": true
    },
    {
        "key": "hotel_id",
        "value": "8",
        "type": "text",
        "enabled": true
    },
    {
        "key": "order",
        "value": "{\"status\":1,\"customer_note\":\"Hurry up!!!\",\"waiter_note\":\"\",\"discounts\":[{\"id\":26}],\"taxes\":[{\"id\":43}],\"items\":[{\"id\":199,\"quantity\":4,\"options\":[{\"id\":193,\"selected\":true}]},{\"id\":200,\"quantity\":2,\"options\":[{\"id\":194,\"selected\":false},{\"id\":195,\"selected\":true}]}]}",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":{"current_time":1424883088,"order":{"user_id":null,"service_order_parent_id":7,"customer_note":"Hurry up!!!","waiter_note":"","status":1,"room_id":"72","updated_at":"2015-02-25 23:51:28","created_at":"2015-02-25 23:51:28","id":13,"total":672.4,"price_before_discount":672.4,"price_after_discount":667.4,"price_before_tax":667.4,"price_after_tax":748.09,"taxes":[{"id":3,"service_order_id":13,"tax_id":43,"rate":"12.00","amount":null,"created_at":"2015-02-25 23:51:28","updated_at":"2015-02-25 23:51:28"}],"discounts":[{"id":3,"service_order_id":13,"discount_id":26,"rate":null,"amount":"5.00","created_at":"2015-02-25 23:51:28","updated_at":"2015-02-25 23:51:28"}],"items":[{"id":17,"service_order_id":13,"service_id":199,"price":"0.00","quantity":4,"created_at":"2015-02-25 23:51:28","updated_at":"2015-02-25 23:51:28","subtotal":0.4,"options":[{"id":13,"service_order_item_id":17,"service_option_id":193,"price":"0.10","quantity":4,"created_at":"2015-02-25 23:51:28","updated_at":"2015-02-25 23:51:28"}]},{"id":18,"service_order_id":13,"service_id":200,"price":"168.00","quantity":2,"created_at":"2015-02-25 23:51:28","updated_at":"2015-02-25 23:51:28","subtotal":672,"options":[{"id":14,"service_order_item_id":18,"service_option_id":195,"price":"168.00","quantity":2,"created_at":"2015-02-25 23:51:28","updated_at":"2015-02-25 23:51:28"}]}]}}}

```

##List Customer Service Orders##
Customer can view list all orders of him

- guest_id, room_id is required
- status (if not set) is show all

**Url**
<code>GET</code>api.hottab.pw/service-orders?guest_id=11&room_id=72&status=1


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "_method",
        "value": "PUT",
        "type": "text",
        "enabled": true
    },
    {
        "key": "guest_id",
        "value": "11",
        "type": "text",
        "enabled": true
    },
    {
        "key": "room_id",
        "value": "72",
        "type": "text",
        "enabled": true
    },
    {
        "key": "hotel_id",
        "value": "8",
        "type": "text",
        "enabled": true
    },
    {
        "key": "order",
        "value": "{\"status\":1,\"customer_note\":\"Hurry up!!!\",\"waiter_note\":\"\",\"discounts\":[{\"id\":26}],\"taxes\":[{\"id\":43}],\"items\":[{\"id\":199,\"quantity\":4,\"options\":[{\"id\":193,\"selected\":true}]},{\"id\":200,\"quantity\":2,\"options\":[{\"id\":194,\"selected\":false},{\"id\":195,\"selected\":true}]}]}",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"pagination":{"total":4,"per_page":10,"current_page":1,"last_page":1,"from":1,"to":4},"data":[{"current_time":1424883222,"order":{"id":13,"user_id":null,"customer_note":"Hurry up!!!","waiter_note":"","status":1,"room_id":72,"created_at":"2015-02-25 23:51:28","updated_at":"2015-02-25 23:52:20","service_order_parent_id":7,"total":"672.40","price_before_discount":"672.40","price_after_discount":"667.40","price_before_tax":"667.40","price_after_tax":"748.09","unix_created_at":1424883088,"unix_updated_at":1424883140,"room":{"id":72,"name":"VIP ROOM"},"parent_order":{"id":7,"user_id":0,"room_id":72,"guest_id":11,"status":1,"paid_at":null,"created_at":"2015-02-13 11:41:59","updated_at":"2015-02-25 23:52:20","guest":{"id":11,"name":"Messi"}},"taxes":[{"id":43,"hotel_id":8,"rate":"12.00","amount":null,"active":1,"deleted_at":null,"created_at":"2015-01-20 00:23:15","updated_at":"2015-01-20 00:23:15","name":"Takeaway"}],"discounts":[{"id":26,"hotel_id":8,"rate":null,"amount":"5.00","active":1,"default":1,"from_date":"0000-00-00 00:00:00","to_date":"0000-00-00 00:00:00","deleted_at":null,"created_at":"2015-01-25 18:35:38","updated_at":"2015-01-25 18:38:26","name":"Hang's Discount"}],"items":[{"id":199,"service_category_id":6,"alias":"towel-199","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/roomimagedemo_x4HUgXHT.jpg","gallery":null,"price":"0.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","status":1,"deleted_at":null,"created_at":"2015-02-07 16:05:18","updated_at":"2015-02-12 10:35:17","multi_options":0,"has_upsell":0,"intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/roomimagedemo_x4HUgXHT.jpg","name":"Towel","intro":"","description":"","quantity":4,"options":[{"id":193,"status":1,"created_at":"2015-02-12 10:35:17","updated_at":"2015-02-12 10:35:17","deleted_at":null,"price":"0.10","name":"ban chai","selected":true,"quantity":4}]},{"id":200,"service_category_id":6,"alias":"d-u-g-i-200","intro_img":"http:\/\/admin.hottab.dev\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"168.00","sale_price":"111.00","time_option":"","status":1,"deleted_at":null,"created_at":"2015-02-12 12:03:51","updated_at":"2015-02-12 14:08:23","multi_options":1,"has_upsell":1,"intro_img_original":"http:\/\/admin.hottab.dev\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"D\u1ea7u g\u1ed9i","intro":"the intro","description":"the desc","quantity":2,"options":[]}]}},{"current_time":1424883222,"order":{"id":12,"user_id":92,"customer_note":"Hurry up!!!","waiter_note":"","status":1,"room_id":72,"created_at":"2015-02-25 23:48:32","updated_at":"2015-02-25 23:49:07","service_order_parent_id":7,"total":"672.40","price_before_discount":"672.40","price_after_discount":"667.40","price_before_tax":"667.40","price_after_tax":"748.09","unix_created_at":1424882912,"unix_updated_at":1424882947,"room":{"id":72,"name":"VIP ROOM"},"parent_order":{"id":7,"user_id":0,"room_id":72,"guest_id":11,"status":1,"paid_at":null,"created_at":"2015-02-13 11:41:59","updated_at":"2015-02-25 23:52:20","guest":{"id":11,"name":"Messi"}},"taxes":[{"id":43,"hotel_id":8,"rate":"12.00","amount":null,"active":1,"deleted_at":null,"created_at":"2015-01-20 00:23:15","updated_at":"2015-01-20 00:23:15","name":"Takeaway"}],"discounts":[{"id":26,"hotel_id":8,"rate":null,"amount":"5.00","active":1,"default":1,"from_date":"0000-00-00 00:00:00","to_date":"0000-00-00 00:00:00","deleted_at":null,"created_at":"2015-01-25 18:35:38","updated_at":"2015-01-25 18:38:26","name":"Hang's Discount"}],"items":[{"id":199,"service_category_id":6,"alias":"towel-199","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/roomimagedemo_x4HUgXHT.jpg","gallery":null,"price":"0.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","status":1,"deleted_at":null,"created_at":"2015-02-07 16:05:18","updated_at":"2015-02-12 10:35:17","multi_options":0,"has_upsell":0,"intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/roomimagedemo_x4HUgXHT.jpg","name":"Towel","intro":"","description":"","quantity":4,"options":[{"id":193,"status":1,"created_at":"2015-02-12 10:35:17","updated_at":"2015-02-12 10:35:17","deleted_at":null,"price":"0.10","name":"ban chai","selected":true,"quantity":4}]},{"id":200,"service_category_id":6,"alias":"d-u-g-i-200","intro_img":"http:\/\/admin.hottab.dev\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"168.00","sale_price":"111.00","time_option":"","status":1,"deleted_at":null,"created_at":"2015-02-12 12:03:51","updated_at":"2015-02-12 14:08:23","multi_options":1,"has_upsell":1,"intro_img_original":"http:\/\/admin.hottab.dev\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"D\u1ea7u g\u1ed9i","intro":"the intro","description":"the desc","quantity":2,"options":[]}]}},{"current_time":1424883222,"order":{"id":10,"user_id":92,"customer_note":"hurry up!!","waiter_note":null,"status":1,"room_id":72,"created_at":"2015-02-13 11:44:25","updated_at":"2015-02-13 11:44:25","service_order_parent_id":7,"total":"0.50","price_before_discount":"0.50","price_after_discount":"0.50","price_before_tax":"0.50","price_after_tax":"0.50","unix_created_at":1423802665,"unix_updated_at":1423802665,"room":{"id":72,"name":"VIP ROOM"},"parent_order":{"id":7,"user_id":0,"room_id":72,"guest_id":11,"status":1,"paid_at":null,"created_at":"2015-02-13 11:41:59","updated_at":"2015-02-25 23:52:20","guest":{"id":11,"name":"Messi"}},"taxes":[],"discounts":[],"items":[{"id":199,"service_category_id":6,"alias":"towel-199","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/roomimagedemo_x4HUgXHT.jpg","gallery":null,"price":"0.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","status":1,"deleted_at":null,"created_at":"2015-02-07 16:05:18","updated_at":"2015-02-12 10:35:17","multi_options":0,"has_upsell":0,"intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/roomimagedemo_x4HUgXHT.jpg","name":"Towel","intro":"","description":"","quantity":5,"options":[{"id":193,"status":1,"created_at":"2015-02-12 10:35:17","updated_at":"2015-02-12 10:35:17","deleted_at":null,"price":"0.10","name":"ban chai","selected":true,"quantity":5}]}]}},{"current_time":1424883222,"order":{"id":8,"user_id":92,"customer_note":"hurry up!!","waiter_note":null,"status":1,"room_id":72,"created_at":"2015-02-13 11:41:59","updated_at":"2015-02-13 11:41:59","service_order_parent_id":7,"total":"0.00","price_before_discount":"0.00","price_after_discount":"0.00","price_before_tax":"0.00","price_after_tax":"0.00","unix_created_at":1423802519,"unix_updated_at":1423802519,"room":{"id":72,"name":"VIP ROOM"},"parent_order":{"id":7,"user_id":0,"room_id":72,"guest_id":11,"status":1,"paid_at":null,"created_at":"2015-02-13 11:41:59","updated_at":"2015-02-25 23:52:20","guest":{"id":11,"name":"Messi"}},"taxes":[],"discounts":[],"items":[{"id":202,"service_category_id":6,"alias":"pillow-202","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/pillow_oFljZVmv.jpg","gallery":null,"price":"0.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","status":1,"deleted_at":null,"created_at":"2015-02-12 14:08:33","updated_at":"2015-02-12 14:09:31","multi_options":0,"has_upsell":0,"intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/pillow_oFljZVmv.jpg","name":"Pillow","intro":"","description":"","quantity":1,"options":[]},{"id":203,"service_category_id":6,"alias":"reading-light-203","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/readling_light_qFRhlKxb.jpg","gallery":null,"price":"0.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","status":1,"deleted_at":null,"created_at":"2015-02-12 14:08:45","updated_at":"2015-02-12 14:09:41","multi_options":0,"has_upsell":0,"intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/readling_light_qFRhlKxb.jpg","name":"Reading light","intro":"","description":"","quantity":1,"options":[]}]}}]}

```

##View Single Service Order##
- guest_id, room_id is required
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/service-orders/13?guest_id=11&room_id=72&lang=vi


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "_method",
        "value": "PUT",
        "type": "text",
        "enabled": true
    },
    {
        "key": "guest_id",
        "value": "11",
        "type": "text",
        "enabled": true
    },
    {
        "key": "room_id",
        "value": "72",
        "type": "text",
        "enabled": true
    },
    {
        "key": "hotel_id",
        "value": "8",
        "type": "text",
        "enabled": true
    },
    {
        "key": "order",
        "value": "{\"status\":1,\"customer_note\":\"Hurry up!!!\",\"waiter_note\":\"\",\"discounts\":[{\"id\":26}],\"taxes\":[{\"id\":43}],\"items\":[{\"id\":199,\"quantity\":4,\"options\":[{\"id\":193,\"selected\":true}]},{\"id\":200,\"quantity\":2,\"options\":[{\"id\":194,\"selected\":false},{\"id\":195,\"selected\":true}]}]}",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":{"current_time":1424883197,"order":{"id":13,"user_id":null,"customer_note":"Hurry up!!!","waiter_note":"","status":1,"room_id":72,"created_at":"2015-02-25 23:51:28","updated_at":"2015-02-25 23:52:20","service_order_parent_id":7,"total":"672.40","price_before_discount":"672.40","price_after_discount":"667.40","price_before_tax":"667.40","price_after_tax":"748.09","unix_created_at":1424883088,"unix_updated_at":1424883140,"room":{"id":72,"name":"VIP ROOM"},"parent_order":{"id":7,"user_id":0,"room_id":72,"guest_id":11,"status":1,"paid_at":null,"created_at":"2015-02-13 11:41:59","updated_at":"2015-02-25 23:52:20","guest":{"id":11,"name":"Messi"}},"taxes":[{"id":43,"hotel_id":8,"rate":"12.00","amount":null,"active":1,"deleted_at":null,"created_at":"2015-01-20 00:23:15","updated_at":"2015-01-20 00:23:15","name":"Takeaway"}],"discounts":[{"id":26,"hotel_id":8,"rate":null,"amount":"5.00","active":1,"default":1,"from_date":"0000-00-00 00:00:00","to_date":"0000-00-00 00:00:00","deleted_at":null,"created_at":"2015-01-25 18:35:38","updated_at":"2015-01-25 18:38:26","name":"Hang's Discount"}],"items":[{"id":199,"service_category_id":6,"alias":"towel-199","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/roomimagedemo_x4HUgXHT.jpg","gallery":null,"price":"0.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","status":1,"deleted_at":null,"created_at":"2015-02-07 16:05:18","updated_at":"2015-02-12 10:35:17","multi_options":0,"has_upsell":0,"intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/roomimagedemo_x4HUgXHT.jpg","name":"Towel","intro":"","description":"","quantity":4,"options":[{"id":193,"status":1,"created_at":"2015-02-12 10:35:17","updated_at":"2015-02-12 10:35:17","deleted_at":null,"price":"0.10","name":"ban chai","selected":true,"quantity":4}]},{"id":200,"service_category_id":6,"alias":"d-u-g-i-200","intro_img":"http:\/\/admin.hottab.dev\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"168.00","sale_price":"111.00","time_option":"","status":1,"deleted_at":null,"created_at":"2015-02-12 12:03:51","updated_at":"2015-02-12 14:08:23","multi_options":1,"has_upsell":1,"intro_img_original":"http:\/\/admin.hottab.dev\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"D\u1ea7u g\u1ed9i","intro":"the intro","description":"the desc","quantity":2,"options":[]}]}}}

```

