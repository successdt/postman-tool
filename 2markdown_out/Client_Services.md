##List Service Categories##
List of all service categories, URL Params:

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/service-categories?hotel_id=8&lang=vi


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
{"error":false,"data":[{"id":"6","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-16 11:20:39","updated_at":"2015-01-23 18:15:10","name":"In room","description":""}]}

```

##List of Services group by Categories##
List of all services grouped by category, URL Params:

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/services/?hotel_id=8&lang=vi


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
{"error":false,"data":[{"category":{"id":"6","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-16 11:20:39","updated_at":"2015-01-23 18:15:10","name":"In room","description":""},"items":[{"id":"199","service_category_id":"6","alias":"kh-n-m-t-199","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/roomimagedemo_x4HUgXHT.jpg","gallery":null,"price":"0.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","status":"1","deleted_at":null,"created_at":"2015-02-07 16:05:18","updated_at":"2015-02-24 15:44:21","multi_options":"0","has_upsell":"1","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/roomimagedemo_x4HUgXHT.jpg","name":"Kh\u0103n m\u1eb7t","intro":"","description":"","options":[{"id":"193","status":"1","created_at":"2015-02-12 10:35:17","updated_at":"2015-02-12 10:35:17","deleted_at":null,"price":"0.10","name":"Tooth brush"},{"id":"194","status":"1","created_at":"2015-02-14 15:15:05","updated_at":"2015-02-14 15:15:05","deleted_at":null,"price":"2.00","name":"Tooth paste"}],"upsells":["202","203"]},{"id":"202","service_category_id":"6","alias":"pillow-202","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/pillow_oFljZVmv.jpg","gallery":null,"price":"0.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","status":"1","deleted_at":null,"created_at":"2015-02-12 14:08:33","updated_at":"2015-02-14 15:06:15","multi_options":"0","has_upsell":"1","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/pillow_oFljZVmv.jpg","name":"Th\u00eam g\u1ed1i","intro":"","description":"","options":[],"upsells":["203"]},{"id":"203","service_category_id":"6","alias":"reading-light-203","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/readling_light_qFRhlKxb.jpg","gallery":null,"price":"0.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","status":"1","deleted_at":null,"created_at":"2015-02-12 14:08:45","updated_at":"2015-02-14 15:06:24","multi_options":"0","has_upsell":"1","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/readling_light_qFRhlKxb.jpg","name":"\u0110\u00e8n \u0111\u1ecdc s\u00e1ch","intro":"","description":"","options":[],"upsells":["202"]}]}]}

```

##View Service by ID##
View single service by id, URL Params:

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/services/200?hotel_id=8&lang=vi


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
{"error":false,"data":{"id":"199","service_category_id":"6","alias":"kh-n-m-t-199","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/roomimagedemo_x4HUgXHT.jpg","gallery":null,"price":"0.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","status":"1","deleted_at":null,"created_at":"2015-02-07 16:05:18","updated_at":"2015-02-24 15:44:21","multi_options":"0","has_upsell":"1","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/roomimagedemo_x4HUgXHT.jpg","name":"Kh\u0103n m\u1eb7t","intro":"","description":"","options":[{"id":"193","status":"1","created_at":"2015-02-12 10:35:17","updated_at":"2015-02-12 10:35:17","deleted_at":null,"price":"0.10","name":"Tooth brush"},{"id":"194","status":"1","created_at":"2015-02-14 15:15:05","updated_at":"2015-02-14 15:15:05","deleted_at":null,"price":"2.00","name":"Tooth paste"}],"upsells":["202","203"]}}

```

##List of Services by Category ID##
List services in single category, URL Params:

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/services/category/6?hotel_id=8&lang=vi


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
{"error":false,"data":{"category":{"id":"6","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-16 11:20:39","updated_at":"2015-01-23 18:15:10","name":"In room","description":""},"items":[{"id":"199","service_category_id":"6","alias":"kh-n-m-t-199","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/roomimagedemo_x4HUgXHT.jpg","gallery":null,"price":"0.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","status":"1","deleted_at":null,"created_at":"2015-02-07 16:05:18","updated_at":"2015-02-24 15:44:21","multi_options":"0","has_upsell":"1","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/roomimagedemo_x4HUgXHT.jpg","name":"Kh\u0103n m\u1eb7t","intro":"","description":"","options":[{"id":"193","status":"1","created_at":"2015-02-12 10:35:17","updated_at":"2015-02-12 10:35:17","deleted_at":null,"price":"0.10","name":"Tooth brush"},{"id":"194","status":"1","created_at":"2015-02-14 15:15:05","updated_at":"2015-02-14 15:15:05","deleted_at":null,"price":"2.00","name":"Tooth paste"}],"upsells":["202","203"]},{"id":"202","service_category_id":"6","alias":"pillow-202","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/pillow_oFljZVmv.jpg","gallery":null,"price":"0.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","status":"1","deleted_at":null,"created_at":"2015-02-12 14:08:33","updated_at":"2015-02-14 15:06:15","multi_options":"0","has_upsell":"1","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/pillow_oFljZVmv.jpg","name":"Th\u00eam g\u1ed1i","intro":"","description":"","options":[],"upsells":["203"]},{"id":"203","service_category_id":"6","alias":"reading-light-203","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/readling_light_qFRhlKxb.jpg","gallery":null,"price":"0.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","status":"1","deleted_at":null,"created_at":"2015-02-12 14:08:45","updated_at":"2015-02-14 15:06:24","multi_options":"0","has_upsell":"1","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/readling_light_qFRhlKxb.jpg","name":"\u0110\u00e8n \u0111\u1ecdc s\u00e1ch","intro":"","description":"","options":[],"upsells":["202"]}]}}

```

