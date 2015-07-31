##List Food Categories##
list all food categories of hotel, URL Params :

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/new-food-categories?hotel_id=8&lang=vi


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
        "value": "{\"status\":1,\"customer_note\":\"Hurry up!!!\",\"waiter_note\":\"\",\"foods\":[{\"id\":6,\"quantity\":2,\"type\":1},{\"id\":\"750\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1582\",\"selected\":false},{\"id\":\"1583\",\"selected\":false},{\"id\":\"1584\",\"selected\":true}]},{\"id\":\"754\",\"quantity\":\"4\",\"food_options\":[]},{\"id\":\"755\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1585\",\"selected\":true},{\"id\":\"1586\",\"selected\":false}]}]}",
        "type": "text",
        "enabled": true
    },
    {
        "key": "parent_bill",
        "value": "{\"status\":1,\"total\":255.88,\"split_type\":1,\"customer_number\":2,\"taxes\":[{\"id\":\"2\"},{\"id\":\"18\"}],\"discounts\":[{\"id\":\"10\"},{\"id\":\"5\"}],\"bills\":[{\"foods\":[{\"id\":6,\"quantity\":2,\"type\":1},{\"id\":\"750\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1582\",\"selected\":false},{\"id\":\"1583\",\"selected\":false},{\"id\":\"1584\",\"selected\":true}]},{\"id\":\"754\",\"quantity\":\"4\",\"food_options\":[]}]},{\"foods\":[{\"id\":\"755\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1585\",\"selected\":true},{\"id\":\"1586\",\"selected\":false}]}]}]}",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":[{"id":"99","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-09 17:05:15","updated_at":"2015-01-17 18:19:25","parent_id":"0","name":"Khai v\u1ecb"},{"id":"100","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-09 17:05:43","updated_at":"2015-01-17 18:20:52","parent_id":"0","name":"M\u00f3n ch\u00ednh"},{"id":"101","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-09 17:06:00","updated_at":"2015-01-17 18:20:58","parent_id":"0","name":"Tr\u00e1ng mi\u1ec7ng"},{"id":"102","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-10 11:52:29","updated_at":"2015-01-17 18:21:03","parent_id":"0","name":"S\u00fap v\u00e0 Sal\u00e1t"},{"id":"103","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-12 13:25:06","updated_at":"2015-01-17 18:21:07","parent_id":"0","name":"Th\u1ee9c u\u1ed1ng"},{"id":"117","hotel_id":"8","icon":"","status":"1","created_at":"2015-02-24 15:54:00","updated_at":"2015-02-24 15:54:00","parent_id":"0","name":"Tr\u00e0","description":"C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0"}]}

```

##Get all foods by tags##


**Url**
<code>GET</code>api.hottab.pw/food-tags?hotel_id=8&lang=vi&token=b28e0d3404612f099cb1063ea38e9f17&tags[0]=12&tags[1]=14


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "token",
        "value": "b28e0d3404612f099cb1063ea38e9f17",
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
        "key": "food_category_id",
        "value": "100",
        "type": "text",
        "enabled": true
    },
    {
        "key": "name",
        "value": "B\u00fan ch\u1ea3",
        "type": "text",
        "enabled": true
    },
    {
        "key": "intro",
        "value": "the intro",
        "type": "text",
        "enabled": true
    },
    {
        "key": "description",
        "value": "the desc",
        "type": "text",
        "enabled": true
    },
    {
        "key": "intro_img",
        "value": "http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg",
        "type": "text",
        "enabled": true
    },
    {
        "key": "gallery",
        "value": "",
        "type": "text",
        "enabled": true
    },
    {
        "key": "price",
        "value": "17.5",
        "type": "text",
        "enabled": true
    },
    {
        "key": "sale_price",
        "value": "11",
        "type": "text",
        "enabled": true
    },
    {
        "key": "time_option",
        "value": "",
        "type": "text",
        "enabled": true
    },
    {
        "key": "has_upsell",
        "value": "1",
        "type": "text",
        "enabled": true
    },
    {
        "key": "upsells[1]",
        "value": "37",
        "type": "text",
        "enabled": true
    },
    {
        "key": "upsells[2]",
        "value": "38",
        "type": "text",
        "enabled": true
    },
    {
        "key": "food_options[1][name]",
        "value": "C\u1ee1 l\u1edbn",
        "type": "text",
        "enabled": true
    },
    {
        "key": "food_options[1][price]",
        "value": "15",
        "type": "text",
        "enabled": true
    },
    {
        "key": "food_options[2][name]",
        "value": "C\u1ee1 v\u1eeba",
        "type": "text",
        "enabled": true
    },
    {
        "key": "food_options[2][price]",
        "value": "13",
        "type": "text",
        "enabled": true
    },
    {
        "key": "tags[0][name]",
        "value": "b\u00fan",
        "type": "text",
        "enabled": true
    },
    {
        "key": "tags[1][name]",
        "value": "\u0111\u1eadu",
        "type": "text",
        "enabled": true
    }
]


Response:

```


```

##List of Foods by Category ID##
List all foods by category_id, URL params :

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/new-foods/category/99?hotel_id=8&lang=vi


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
        "value": "{\"status\":1,\"customer_note\":\"Hurry up!!!\",\"waiter_note\":\"\",\"foods\":[{\"id\":6,\"quantity\":2,\"type\":1},{\"id\":\"750\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1582\",\"selected\":false},{\"id\":\"1583\",\"selected\":false},{\"id\":\"1584\",\"selected\":true}]},{\"id\":\"754\",\"quantity\":\"4\",\"food_options\":[]},{\"id\":\"755\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1585\",\"selected\":true},{\"id\":\"1586\",\"selected\":false}]}]}",
        "type": "text",
        "enabled": true
    },
    {
        "key": "parent_bill",
        "value": "{\"status\":1,\"total\":255.88,\"split_type\":1,\"customer_number\":2,\"taxes\":[{\"id\":\"2\"},{\"id\":\"18\"}],\"discounts\":[{\"id\":\"10\"},{\"id\":\"5\"}],\"bills\":[{\"foods\":[{\"id\":6,\"quantity\":2,\"type\":1},{\"id\":\"750\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1582\",\"selected\":false},{\"id\":\"1583\",\"selected\":false},{\"id\":\"1584\",\"selected\":true}]},{\"id\":\"754\",\"quantity\":\"4\",\"food_options\":[]}]},{\"foods\":[{\"id\":\"755\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1585\",\"selected\":true},{\"id\":\"1586\",\"selected\":false}]}]}]}",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":{"category":{"id":"99","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-09 17:05:15","updated_at":"2015-01-17 18:19:25","parent_id":"0","name":"Khai v\u1ecb"},"foods":[{"id":"750","food_category_id":"99","alias":"mozzarella-cheese-sticks-750","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mozzarella_chees_sticks_xsEodMzk.jpg","gallery":null,"price":"9.00","sale_price":null,"time_option":"{\"readOnly\":[[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}]],\"admin\":[{\"start\":1422324000000,\"end\":1422370800000,\"days\":[{\"id\":0},{\"id\":1},{\"id\":2},{\"id\":3},{\"id\":4},{\"id\":5},{\"id\":6}]}]}","has_upsell":"1","status":"1","type":"food","multi_options":"0","deleted_at":null,"created_at":"2015-01-09 17:38:45","updated_at":"2015-02-12 10:36:06","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mozzarella_chees_sticks_xsEodMzk.jpg","name":"Ph\u00f4 mai que","description":"","food_options":[{"id":"1579","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-07 11:54:49","price":"2.00","deleted_at":null,"name":"T\u01b0\u01a1ng \u1edbt"},{"id":"1582","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-12 10:36:06","updated_at":"2015-02-12 10:36:06","price":"0.00","deleted_at":null,"name":"extra sugar"}],"food_upsells":["758","754"]},{"id":"754","food_category_id":"99","alias":"b-nh-m-b-t-i-754","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Garlic_bread_YdkorSMs.jpg","gallery":null,"price":"6.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-09 17:42:15","updated_at":"2015-02-11 18:59:52","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Garlic_bread_YdkorSMs.jpg","name":"B\u00e1nh m\u00ec b\u01a1 t\u1ecfi","description":"","food_options":[],"food_upsells":["750","738"]},{"id":"755","food_category_id":"99","alias":"chicken-wings-755","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/chicken_wings_oG6GJ7of.jpg","gallery":null,"price":"8.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-09 17:44:12","updated_at":"2015-02-14 14:54:30","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/chicken_wings_oG6GJ7of.jpg","name":"C\u00e1nh g\u00e0 n\u01b0\u1edbng","description":"6 mi\u1ebfng c\u00e1nh g\u00e0.","food_options":[{"id":"1575","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"4.00","deleted_at":null,"name":"Th\u00eam 4 mi\u1ebfng"},{"id":"1576","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"10.00","deleted_at":null,"name":"Th\u00eam 10 mi\u1ebfng"}],"food_upsells":["735"]},{"id":"758","food_category_id":"99","alias":"ravioli-chi-n-758","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Fried_Ravioli_UiQ4Jycl.jpg","gallery":null,"price":"9.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-09 17:47:02","updated_at":"2015-02-11 19:00:21","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Fried_Ravioli_UiQ4Jycl.jpg","name":"Ravioli chi\u00ean","description":"G\u1ed3m 6 mi\u1ebfng","food_options":[{"id":"1574","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-07 11:02:03","price":"5.00","deleted_at":null,"name":"Th\u00eam 6 mi\u1ebfng"}],"food_upsells":[]},{"id":"762","food_category_id":"99","alias":"khoai-ng-t-n-ng-762","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Sweet_potato_bake_kla4Vop6.jpg","gallery":null,"price":"8.49","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 11:57:04","updated_at":"2015-02-11 19:00:42","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Sweet_potato_bake_kla4Vop6.jpg","name":"Khoai ng\u1ecdt n\u01b0\u1edbng","description":"Trong dai ngo\u00e0i gi\u00f2n. K\u00e8m ph\u00f4 mai v\u00e0 th\u1ecbt mu\u1ed1i.","food_options":[{"id":"1533","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"5.00","deleted_at":null,"name":"G\u1ea5p \u0111\u00f4i"}],"food_upsells":[]},{"id":"764","food_category_id":"99","alias":"b-nh-m-caprese-764","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Caprese_flatbread_dDUfUBSp.jpg","gallery":null,"price":"7.49","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 11:59:46","updated_at":"2015-02-11 19:01:13","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Caprese_flatbread_dDUfUBSp.jpg","name":"B\u00e1nh m\u00ec Caprese","description":"C\u00e1ch kh\u1edfi \u0111\u1ea7u b\u1eefa \u0103n ho\u00e0n h\u1ea3o. B\u00e1nh m\u00ec d\u00e1t m\u1ecfng k\u00e8m c\u00e0 chua, ph\u00f4 mai mozzarella, h\u00fang, v\u00e0 ph\u00f4 mai Romano.","food_options":[{"id":"1534","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"5.00","deleted_at":null,"name":"B\u00e1nh l\u1edbn"}],"food_upsells":[]},{"id":"819","food_category_id":"99","alias":"c-ng-tataki-819","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Tuna_tataki_68bfEloU.jpg","gallery":null,"price":"12.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-12 14:47:37","updated_at":"2015-02-11 19:01:27","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Tuna_tataki_68bfEloU.jpg","name":"C\u00e1 ng\u1eeb tataki","description":"C\u00e1 ng\u1eeb \u01b0\u1edbp x\u00ec d\u1ea7u v\u00e0 chanh, n\u01b0\u1edbc b\u01a1 nghi\u1ec1n","food_options":[{"id":"1535","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"8.00","deleted_at":null,"name":"Th\u00eam 6 mi\u1ebfng"}],"food_upsells":["814","813"]},{"id":"821","food_category_id":"99","alias":"ch-o-t-m-821","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Creamy_Rice_yKc8eg77.jpg","gallery":null,"price":"7.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-12 14:50:22","updated_at":"2015-02-11 19:01:42","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Creamy_Rice_yKc8eg77.jpg","name":"Ch\u00e1o t\u00f4m","description":"T\u00f4m s\u00fa v\u00e0 a-ti-s\u00f4","food_options":[],"food_upsells":["746","738"]},{"id":"822","food_category_id":"99","alias":"cu-n-t-m-h-m-v-b--822","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Lobster_and_avocado_rolls_mca4c2e7.jpg","gallery":null,"price":"12.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-12 14:53:58","updated_at":"2015-02-11 19:01:57","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Lobster_and_avocado_rolls_mca4c2e7.jpg","name":"Cu\u1ed9n t\u00f4m h\u00f9m v\u00e0 b\u01a1","description":"C\u01a1m cu\u1ed9n t\u00f4m h\u00f9m v\u00e0 b\u01a1, \u0103n k\u00e8m v\u1edbi s\u1ed1t chua cay","food_options":[],"food_upsells":["815","814"]},{"id":"823","food_category_id":"99","alias":"n-i-nachos-cho-nh-m-823","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mountain_of____nachos_kcTIOH6R.jpg","gallery":null,"price":"15.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-12 15:00:28","updated_at":"2015-02-11 19:02:10","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mountain_of____nachos_kcTIOH6R.jpg","name":"N\u00fai Nachos (cho nh\u00f3m)","description":"Su\u1ea5t Nachos \u0111\u1ee7 cho 3 \u0111\u1ebfn 4 ng\u01b0\u1eddi \u0103n. Tortilla k\u00e8m v\u1edbi th\u1ecbt b\u00f2 xay trong n\u01b0\u1edbc x\u1ed1t cay, ph\u00f4 mai queso, \u0111\u1eadu \u0111en, c\u00e0 chua, kem t\u01b0\u01a1i..","food_options":[{"id":"1536","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"3.00","deleted_at":null,"name":"Th\u00eam ph\u00f4 mai"}],"food_upsells":[]}]}}

```

##View Food by ID##
View food detail by food_id, URL params :

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/new-foods/750?hotel_id=8&lang=vi


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
        "value": "{\"status\":1,\"customer_note\":\"Hurry up!!!\",\"waiter_note\":\"\",\"foods\":[{\"id\":6,\"quantity\":2,\"type\":1},{\"id\":\"750\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1582\",\"selected\":false},{\"id\":\"1583\",\"selected\":false},{\"id\":\"1584\",\"selected\":true}]},{\"id\":\"754\",\"quantity\":\"4\",\"food_options\":[]},{\"id\":\"755\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1585\",\"selected\":true},{\"id\":\"1586\",\"selected\":false}]}]}",
        "type": "text",
        "enabled": true
    },
    {
        "key": "parent_bill",
        "value": "{\"status\":1,\"total\":255.88,\"split_type\":1,\"customer_number\":2,\"taxes\":[{\"id\":\"2\"},{\"id\":\"18\"}],\"discounts\":[{\"id\":\"10\"},{\"id\":\"5\"}],\"bills\":[{\"foods\":[{\"id\":6,\"quantity\":2,\"type\":1},{\"id\":\"750\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1582\",\"selected\":false},{\"id\":\"1583\",\"selected\":false},{\"id\":\"1584\",\"selected\":true}]},{\"id\":\"754\",\"quantity\":\"4\",\"food_options\":[]}]},{\"foods\":[{\"id\":\"755\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1585\",\"selected\":true},{\"id\":\"1586\",\"selected\":false}]}]}]}",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":{"id":"750","food_category_id":"99","alias":"mozzarella-cheese-sticks-750","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mozzarella_chees_sticks_xsEodMzk.jpg","gallery":null,"price":"9.00","sale_price":null,"time_option":"{\"readOnly\":[[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}]],\"admin\":[{\"start\":1422324000000,\"end\":1422370800000,\"days\":[{\"id\":0},{\"id\":1},{\"id\":2},{\"id\":3},{\"id\":4},{\"id\":5},{\"id\":6}]}]}","has_upsell":"1","status":"1","type":"food","multi_options":"0","deleted_at":null,"created_at":"2015-01-09 17:38:45","updated_at":"2015-02-12 10:36:06","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mozzarella_chees_sticks_xsEodMzk.jpg","name":"Ph\u00f4 mai que","description":"","food_options":[{"id":"1579","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-07 11:54:49","price":"2.00","deleted_at":null,"name":"T\u01b0\u01a1ng \u1edbt"},{"id":"1582","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-12 10:36:06","updated_at":"2015-02-12 10:36:06","price":"0.00","deleted_at":null,"name":"extra sugar"}],"food_upsells":["758","754"]}}

```

##List of Foods group by Categories##
list all foods of the hotel, grouped by category, URL params :

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/new-foods?hotel_id=8&lang=vi


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
        "value": "{\"status\":1,\"customer_note\":\"Hurry up!!!\",\"waiter_note\":\"\",\"foods\":[{\"id\":6,\"quantity\":2,\"type\":1},{\"id\":\"750\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1582\",\"selected\":false},{\"id\":\"1583\",\"selected\":false},{\"id\":\"1584\",\"selected\":true}]},{\"id\":\"754\",\"quantity\":\"4\",\"food_options\":[]},{\"id\":\"755\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1585\",\"selected\":true},{\"id\":\"1586\",\"selected\":false}]}]}",
        "type": "text",
        "enabled": true
    },
    {
        "key": "parent_bill",
        "value": "{\"status\":1,\"total\":255.88,\"split_type\":1,\"customer_number\":2,\"taxes\":[{\"id\":\"2\"},{\"id\":\"18\"}],\"discounts\":[{\"id\":\"10\"},{\"id\":\"5\"}],\"bills\":[{\"foods\":[{\"id\":6,\"quantity\":2,\"type\":1},{\"id\":\"750\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1582\",\"selected\":false},{\"id\":\"1583\",\"selected\":false},{\"id\":\"1584\",\"selected\":true}]},{\"id\":\"754\",\"quantity\":\"4\",\"food_options\":[]}]},{\"foods\":[{\"id\":\"755\",\"quantity\":\"4\",\"food_options\":[{\"id\":\"1585\",\"selected\":true},{\"id\":\"1586\",\"selected\":false}]}]}]}",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":[{"category":{"id":"99","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-09 17:05:15","updated_at":"2015-01-17 18:19:25","parent_id":"0","name":"Khai v\u1ecb"},"foods":[{"id":"750","food_category_id":"99","alias":"mozzarella-cheese-sticks-750","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mozzarella_chees_sticks_xsEodMzk.jpg","gallery":null,"price":"9.00","sale_price":null,"time_option":"{\"readOnly\":[[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}]],\"admin\":[{\"start\":1422324000000,\"end\":1422370800000,\"days\":[{\"id\":0},{\"id\":1},{\"id\":2},{\"id\":3},{\"id\":4},{\"id\":5},{\"id\":6}]}]}","has_upsell":"1","status":"1","type":"food","multi_options":"0","deleted_at":null,"created_at":"2015-01-09 17:38:45","updated_at":"2015-02-12 10:36:06","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mozzarella_chees_sticks_xsEodMzk.jpg","name":"Ph\u00f4 mai que","description":"","food_options":[{"id":"1579","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-07 11:54:49","price":"2.00","deleted_at":null,"name":"T\u01b0\u01a1ng \u1edbt"},{"id":"1582","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-12 10:36:06","updated_at":"2015-02-12 10:36:06","price":"0.00","deleted_at":null,"name":"extra sugar"}],"food_upsells":["758","754"]},{"id":"754","food_category_id":"99","alias":"b-nh-m-b-t-i-754","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Garlic_bread_YdkorSMs.jpg","gallery":null,"price":"6.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-09 17:42:15","updated_at":"2015-02-11 18:59:52","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Garlic_bread_YdkorSMs.jpg","name":"B\u00e1nh m\u00ec b\u01a1 t\u1ecfi","description":"","food_options":[],"food_upsells":["750","738"]},{"id":"755","food_category_id":"99","alias":"chicken-wings-755","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/chicken_wings_oG6GJ7of.jpg","gallery":null,"price":"8.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-09 17:44:12","updated_at":"2015-02-14 14:54:30","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/chicken_wings_oG6GJ7of.jpg","name":"C\u00e1nh g\u00e0 n\u01b0\u1edbng","description":"6 mi\u1ebfng c\u00e1nh g\u00e0.","food_options":[{"id":"1575","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"4.00","deleted_at":null,"name":"Th\u00eam 4 mi\u1ebfng"},{"id":"1576","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"10.00","deleted_at":null,"name":"Th\u00eam 10 mi\u1ebfng"}],"food_upsells":["735"]},{"id":"758","food_category_id":"99","alias":"ravioli-chi-n-758","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Fried_Ravioli_UiQ4Jycl.jpg","gallery":null,"price":"9.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-09 17:47:02","updated_at":"2015-02-11 19:00:21","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Fried_Ravioli_UiQ4Jycl.jpg","name":"Ravioli chi\u00ean","description":"G\u1ed3m 6 mi\u1ebfng","food_options":[{"id":"1574","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-07 11:02:03","price":"5.00","deleted_at":null,"name":"Th\u00eam 6 mi\u1ebfng"}],"food_upsells":[]},{"id":"762","food_category_id":"99","alias":"khoai-ng-t-n-ng-762","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Sweet_potato_bake_kla4Vop6.jpg","gallery":null,"price":"8.49","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 11:57:04","updated_at":"2015-02-11 19:00:42","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Sweet_potato_bake_kla4Vop6.jpg","name":"Khoai ng\u1ecdt n\u01b0\u1edbng","description":"Trong dai ngo\u00e0i gi\u00f2n. K\u00e8m ph\u00f4 mai v\u00e0 th\u1ecbt mu\u1ed1i.","food_options":[{"id":"1533","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"5.00","deleted_at":null,"name":"G\u1ea5p \u0111\u00f4i"}],"food_upsells":[]},{"id":"764","food_category_id":"99","alias":"b-nh-m-caprese-764","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Caprese_flatbread_dDUfUBSp.jpg","gallery":null,"price":"7.49","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 11:59:46","updated_at":"2015-02-11 19:01:13","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Caprese_flatbread_dDUfUBSp.jpg","name":"B\u00e1nh m\u00ec Caprese","description":"C\u00e1ch kh\u1edfi \u0111\u1ea7u b\u1eefa \u0103n ho\u00e0n h\u1ea3o. B\u00e1nh m\u00ec d\u00e1t m\u1ecfng k\u00e8m c\u00e0 chua, ph\u00f4 mai mozzarella, h\u00fang, v\u00e0 ph\u00f4 mai Romano.","food_options":[{"id":"1534","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"5.00","deleted_at":null,"name":"B\u00e1nh l\u1edbn"}],"food_upsells":[]},{"id":"819","food_category_id":"99","alias":"c-ng-tataki-819","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Tuna_tataki_68bfEloU.jpg","gallery":null,"price":"12.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-12 14:47:37","updated_at":"2015-02-11 19:01:27","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Tuna_tataki_68bfEloU.jpg","name":"C\u00e1 ng\u1eeb tataki","description":"C\u00e1 ng\u1eeb \u01b0\u1edbp x\u00ec d\u1ea7u v\u00e0 chanh, n\u01b0\u1edbc b\u01a1 nghi\u1ec1n","food_options":[{"id":"1535","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"8.00","deleted_at":null,"name":"Th\u00eam 6 mi\u1ebfng"}],"food_upsells":["814","813"]},{"id":"821","food_category_id":"99","alias":"ch-o-t-m-821","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Creamy_Rice_yKc8eg77.jpg","gallery":null,"price":"7.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-12 14:50:22","updated_at":"2015-02-11 19:01:42","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Creamy_Rice_yKc8eg77.jpg","name":"Ch\u00e1o t\u00f4m","description":"T\u00f4m s\u00fa v\u00e0 a-ti-s\u00f4","food_options":[],"food_upsells":["746","738"]},{"id":"822","food_category_id":"99","alias":"cu-n-t-m-h-m-v-b--822","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Lobster_and_avocado_rolls_mca4c2e7.jpg","gallery":null,"price":"12.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-12 14:53:58","updated_at":"2015-02-11 19:01:57","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Lobster_and_avocado_rolls_mca4c2e7.jpg","name":"Cu\u1ed9n t\u00f4m h\u00f9m v\u00e0 b\u01a1","description":"C\u01a1m cu\u1ed9n t\u00f4m h\u00f9m v\u00e0 b\u01a1, \u0103n k\u00e8m v\u1edbi s\u1ed1t chua cay","food_options":[],"food_upsells":["815","814"]},{"id":"823","food_category_id":"99","alias":"n-i-nachos-cho-nh-m-823","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mountain_of____nachos_kcTIOH6R.jpg","gallery":null,"price":"15.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-12 15:00:28","updated_at":"2015-02-11 19:02:10","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mountain_of____nachos_kcTIOH6R.jpg","name":"N\u00fai Nachos (cho nh\u00f3m)","description":"Su\u1ea5t Nachos \u0111\u1ee7 cho 3 \u0111\u1ebfn 4 ng\u01b0\u1eddi \u0103n. Tortilla k\u00e8m v\u1edbi th\u1ecbt b\u00f2 xay trong n\u01b0\u1edbc x\u1ed1t cay, ph\u00f4 mai queso, \u0111\u1eadu \u0111en, c\u00e0 chua, kem t\u01b0\u01a1i..","food_options":[{"id":"1536","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"3.00","deleted_at":null,"name":"Th\u00eam ph\u00f4 mai"}],"food_upsells":[]}]},{"category":{"id":"100","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-09 17:05:43","updated_at":"2015-01-17 18:20:52","parent_id":"0","name":"M\u00f3n ch\u00ednh"},"foods":[{"id":"735","food_category_id":"100","alias":"spinach-lasagna-735","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/spinach-lasagna_5eXwDdkR.jpg","gallery":null,"price":"12.99","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-09 17:12:40","updated_at":"2015-02-14 15:10:22","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/spinach-lasagna_5eXwDdkR.jpg","name":"Lasagna rau ch\u00e2n v\u1ecbt","description":"Rau ch\u00e2n v\u1ecbt t\u01b0\u01a1i v\u00e0 nhi\u1ec1u lo\u1ea1i ph\u00f4 mai k\u1ebft h\u1ee3p nh\u01b0 Ricotta, Romano, Mozzarella l\u00e0m n\u00ean h\u01b0\u01a1ng v\u1ecb tuy\u1ec7t h\u1ea3o cho m\u00f3n \u0103n.","food_options":[{"id":"1537","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"2.00","deleted_at":null,"name":"Nhi\u1ec1u rau"},{"id":"1538","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"3.00","deleted_at":null,"name":"Th\u00eam ph\u00f4 mai"}],"food_upsells":["815"]},{"id":"738","food_category_id":"100","alias":"salmon-steak-738","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/steak_salmon_n36795YS.jpg","gallery":null,"price":"14.50","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-09 17:24:13","updated_at":"2015-02-11 19:03:31","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/steak_salmon_n36795YS.jpg","name":"B\u00edt t\u1ebft c\u00e1 h\u1ed3i","description":"C\u00e1 h\u1ed3i v\u1edbi l\u1edbp da gi\u00f2n v\u00e0ng, rau m\u00f9i t\u00e2y, b\u01a1 th\u1ef1c v\u1eadt, k\u00e8m th\u00eam ch\u00fat n\u01b0\u1edbc s\u1ed1t khoai t\u00e2y.","food_options":[{"id":"1539","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"0.00","deleted_at":null,"name":"Kh\u00f4ng rau"},{"id":"1540","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"5.00","deleted_at":null,"name":"Mi\u1ebfng c\u00e1 l\u1edbn"}],"food_upsells":[]},{"id":"741","food_category_id":"100","alias":"phi-l-b--741","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/fillet_medallions_XZRqWm3C.jpg","gallery":null,"price":"23.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"0","deleted_at":null,"created_at":"2015-01-09 17:27:43","updated_at":"2015-02-12 13:41:47","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/fillet_medallions_XZRqWm3C.jpg","name":"Phi-l\u00ea b\u00f2","description":"2 mi\u1ebfng phil\u00ea b\u00f2, 2 l\u1ea1ng.","food_options":[{"id":"1541","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"0.00","deleted_at":null,"name":"Ch\u00edn \u0111\u1ec1u"},{"id":"1542","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"0.00","deleted_at":null,"name":"V\u1eeba"},{"id":"1543","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"0.00","deleted_at":null,"name":"T\u00e1i v\u1eeba"},{"id":"1544","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"0.00","deleted_at":null,"name":"T\u00e1i"}],"food_upsells":[]},{"id":"746","food_category_id":"100","alias":"rack-of-lamb-746","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Rack_of_lamb_uHti3RQd.jpg","gallery":null,"price":"29.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-09 17:32:36","updated_at":"2015-02-11 19:03:57","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Rack_of_lamb_uHti3RQd.jpg","name":"2 mi\u1ebfng s\u01b0\u1eddn c\u1eebu","description":"Rau ch\u00e2n v\u1ecbt, khoai t\u00e2y, r\u01b0\u1ee3u vang \u0111\u1ecf.","food_options":[{"id":"1564","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"0.00","deleted_at":null,"name":"Kh\u00f4ng khoai t\u00e2y"}],"food_upsells":["741"]},{"id":"760","food_category_id":"100","alias":"shrimp-marinara-760","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/shrimp_marinara_zs73lg1Q.jpg","gallery":null,"price":"25.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-09 17:54:21","updated_at":"2015-02-11 19:04:11","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/shrimp_marinara_zs73lg1Q.jpg","name":"T\u00f4m marinara","description":"T\u00f4i k\u00e8m t\u1ecfi, n\u01b0\u1edbc s\u1ed1t r\u01b0\u1ee3u chanh tr\u1eafng. \u0102n k\u00e8m m\u00ec linguine.","food_options":[{"id":"1545","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"3.00","deleted_at":null,"name":"\u0110\u1ed5i sang cua"},{"id":"1546","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"2.00","deleted_at":null,"name":"\u0110\u1ed5i sang c\u00e1 h\u1ed3i"},{"id":"1547","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"4.00","deleted_at":null,"name":"\u0110\u1ed5i sang s\u00f2"}],"food_upsells":[]},{"id":"761","food_category_id":"100","alias":"frutti-di-mare-761","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Frutti_di_mare_WGZi5mwV.jpg","gallery":null,"price":"34.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-09 17:57:40","updated_at":"2015-02-11 19:04:27","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Frutti_di_mare_WGZi5mwV.jpg","name":"M\u00ec s\u1ed1t h\u1ea3i s\u1ea3n","description":"H\u1ea3i s\u1ea3n t\u1ed5ng h\u1ee3p g\u1ed3m c\u00f3 t\u00f4m, s\u00f2 \u0111i\u1ec7p, trai. D\u00f9ng c\u00f9ng n\u01b0\u1edbc s\u1ed1t Calamari v\u00e0 m\u00ec s\u1ee3i Linguine.","food_options":[{"id":"1548","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"0.00","deleted_at":null,"name":"Kh\u00f4ng s\u00f2"},{"id":"1549","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"0.00","deleted_at":null,"name":"Kh\u00f4ng trai"}],"food_upsells":[]},{"id":"765","food_category_id":"100","alias":"top-sirloin-steak-765","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Top_Sirloin_Steak_uS0cFZ4V.jpg","gallery":null,"price":"15.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 12:02:31","updated_at":"2015-02-11 19:04:47","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Top_Sirloin_Steak_uS0cFZ4V.jpg","name":"B\u00edt t\u1ebft l\u01b0ng b\u00f2","description":"200 grams th\u1ecbt. K\u00e8m khoai t\u00e2y v\u00e0 s\u1ee3i m\u0103ng t\u00e2y.","food_options":[{"id":"1550","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"5.00","deleted_at":null,"name":"300 grams th\u1ecbt"}],"food_upsells":[]},{"id":"770","food_category_id":"100","alias":"chicken-parmigiana-770","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Chicken_Parmigiana_1qgediZ3.jpg","gallery":null,"price":"18.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 12:10:19","updated_at":"2015-02-11 19:05:06","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Chicken_Parmigiana_1qgediZ3.jpg","name":"G\u00e0 Parmigiana","food_options":[{"id":"1551","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"2.00","deleted_at":null,"name":"Mi\u1ebfng g\u00e0 l\u1edbn"},{"id":"1552","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"3.00","deleted_at":null,"name":"Th\u00eam ph\u00f4 mai"}],"food_upsells":["774","772"]},{"id":"771","food_category_id":"100","alias":"new-england-fried-shrimp-771","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/New_England_fried_Shrimp_7dhTvAEs.jpg","gallery":null,"price":"14.99","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 12:16:01","updated_at":"2015-02-11 19:05:32","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/New_England_fried_Shrimp_7dhTvAEs.jpg","name":"T\u00f4m r\u00e1n New England","food_options":[{"id":"1553","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"0.00","deleted_at":null,"name":"Thay t\u00f4m s\u00fa"},{"id":"1554","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"2.00","deleted_at":null,"name":"Th\u00eam n\u01b0\u1edbc s\u1ed1t"}],"food_upsells":["791","798"]},{"id":"774","food_category_id":"100","alias":"crab-linguine-774","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Crab_Linguine_yLJncLOm.jpg","gallery":null,"price":"19.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:39:46","updated_at":"2015-02-11 19:05:45","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Crab_Linguine_yLJncLOm.jpg","name":"M\u00ec cua h\u1ea3i s\u1ea3n","food_options":[],"food_upsells":["788","790"]},{"id":"775","food_category_id":"100","alias":"nigerian-suya-775","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Nigerian_Suya_Wjcrx6a0.JPG","gallery":null,"price":"21.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:41:14","updated_at":"2015-02-11 19:06:07","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Nigerian_Suya_Wjcrx6a0.JPG","name":"Th\u1ecbt xi\u00ean Nigeria","food_options":[{"id":"1555","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"0.00","deleted_at":null,"name":"Th\u00eam s\u1ed1t"},{"id":"1556","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"8.00","deleted_at":null,"name":"Th\u00eam 4 que"},{"id":"1557","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"12.00","deleted_at":null,"name":"Th\u00eam 6 que"}],"food_upsells":["755"]}]},{"category":{"id":"101","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-09 17:06:00","updated_at":"2015-01-17 18:20:58","parent_id":"0","name":"Tr\u00e1ng mi\u1ec7ng"},"foods":[{"id":"772","food_category_id":"101","alias":"mini-chocolate-souffle-772","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mini_chocolate_souffle_K94Lc6OM.jpg","gallery":null,"price":"4.50","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 13:28:52","updated_at":"2015-02-11 19:06:23","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mini_chocolate_souffle_K94Lc6OM.jpg","name":"B\u00e1nh su-ph\u1edd-l\u00ea socola nh\u1ecf","description":"D\u00f9ng \u1ea5m ngay sau khi l\u00e0m c\u00f9ng kem vani.","food_options":[],"food_upsells":[]},{"id":"773","food_category_id":"101","alias":"strawberry-chocolate-truffle-pie-773","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Strawberry_chocolate_truffle_pie_-_This_decadently_rich_pie_features_dark_chocolate_cookie_crumb_crust__a_layer_of_chocolate_ganache__and_dark_chocolate_silk_topped_off_with_chocolate_whipped_cream__chocolate_curls__8YxnmFRT.jpg","gallery":null,"price":"3.99","sale_price":null,"time_option":"{\"readOnly\":[[{\"start\":\"09:00\",\"end\":\"10:59\"}],[{\"start\":\"09:00\",\"end\":\"10:59\"}],[{\"start\":\"09:00\",\"end\":\"10:59\"}],[{\"start\":\"09:00\",\"end\":\"10:59\"}],[{\"start\":\"09:00\",\"end\":\"10:59\"}],[{\"start\":\"09:00\",\"end\":\"10:59\"}],[{\"start\":\"09:00\",\"end\":\"10:59\"}]],\"admin\":[{\"start\":1422064800000,\"end\":\"2015-01-24T03:59:00.000Z\",\"days\":[{\"id\":0},{\"id\":1},{\"id\":2},{\"id\":3},{\"id\":4},{\"id\":5},{\"id\":6}]}]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 13:30:45","updated_at":"2015-02-11 19:06:35","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Strawberry_chocolate_truffle_pie_-_This_decadently_rich_pie_features_dark_chocolate_cookie_crumb_crust__a_layer_of_chocolate_ganache__and_dark_chocolate_silk_topped_off_with_chocolate_whipped_cream__chocolate_curls__8YxnmFRT.jpg","name":"B\u00e1nh d\u00e2u socola","food_options":[{"id":"1567","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"0.50","deleted_at":null,"name":"Extra Strawberry"}],"food_upsells":["758","755"]},{"id":"776","food_category_id":"101","alias":"brookie-776","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/brookie_-____inspired_by_baked_in_brooklyn____6I0qhOi7.jpg","gallery":null,"price":"3.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:42:13","updated_at":"2015-02-11 19:06:46","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/brookie_-____inspired_by_baked_in_brooklyn____6I0qhOi7.jpg","name":"B\u00e1nh cookie t\u1ea7ng","food_options":[],"food_upsells":[]},{"id":"777","food_category_id":"101","alias":"mini-creme-souffle-777","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/MINI_CREME_BRULEE_-_with_vanilla_bean_custard_and_chocolate_topped_with_caramelized_bananas_VEkrj2yt.jpg","gallery":null,"price":"5.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:42:48","updated_at":"2015-02-11 19:06:58","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/MINI_CREME_BRULEE_-_with_vanilla_bean_custard_and_chocolate_topped_with_caramelized_bananas_VEkrj2yt.jpg","name":"B\u00e1nh su-ph\u1edd-l\u00ea chu\u1ed1i","description":"Chu\u1ed1i, ca-ra-men, vani v\u00e0 socola.","food_options":[{"id":"1558","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"5.00","deleted_at":null,"name":"Mua 3 t\u1eb7ng 1"}],"food_upsells":["773","758"]},{"id":"778","food_category_id":"101","alias":"new-york-style-cheesecake-778","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/New_York_style_cheesecake_-_gingersnap_crust__cranberry_orange_preserve_e8ceFffR.jpg","gallery":null,"price":"4.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:43:07","updated_at":"2015-02-11 19:07:08","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/New_York_style_cheesecake_-_gingersnap_crust__cranberry_orange_preserve_e8ceFffR.jpg","name":"B\u00e1nh ph\u00f4 mai New York","description":"\u0110\u1ebf b\u00e1nh l\u00e0m t\u1eeb g\u1eebng, ph\u1ea7n kem \u0111\u01b0\u1ee3c ph\u1ee7 th\u00eam n\u01b0\u1edbc d\u00e2u v\u00e0 cam.","food_options":[],"food_upsells":[]},{"id":"779","food_category_id":"101","alias":"salted-caramel-butterscotch-pudding-779","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Salted_caramel_butterscotch_pudding_-_topped_with_house_made_whipped_cream__chocolate_cookie_crumble_and_maldon_sea_salt_JfeFOpF7.jpg","gallery":null,"price":"5.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:44:56","updated_at":"2015-02-11 19:07:18","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Salted_caramel_butterscotch_pudding_-_topped_with_house_made_whipped_cream__chocolate_cookie_crumble_and_maldon_sea_salt_JfeFOpF7.jpg","name":"B\u00e1nh ca-ra-men m\u1eb7n","description":"Ph\u1ee7 tr\u00ean l\u1edbp kem t\u1ef1 ch\u1ebf c\u1ee7a nh\u00e0 h\u00e0ng, ca-ra-men \u0111\u01b0\u1ee3c l\u00e0m c\u00f9ng mu\u1ed1i bi\u1ec3n tinh khi\u1ebft.","food_options":[{"id":"1559","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"5.00","deleted_at":null,"name":"Mua 3 t\u1eb7ng 1"}],"food_upsells":[]},{"id":"780","food_category_id":"101","alias":"s-mores-brownie-780","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/S_mores_Brownie_-_chocolate_brownie_with_graham_cracker_crust_and_roasted_marshmallows_B0ornwx7.jpg","gallery":null,"price":"7.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:46:14","updated_at":"2015-02-11 19:07:28","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/S_mores_Brownie_-_chocolate_brownie_with_graham_cracker_crust_and_roasted_marshmallows_B0ornwx7.jpg","name":"S'mores Brownie","description":"B\u00e1nh brownie so-co-la \u0111\u01b0\u1ee3c ph\u1ee7 b\u1ea3o b\u00e1nh quy nh\u1ecf v\u00e0 marshmallows.","food_options":[],"food_upsells":[]}]},{"category":{"id":"102","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-10 11:52:29","updated_at":"2015-01-17 18:21:03","parent_id":"0","name":"S\u00fap v\u00e0 Sal\u00e1t"},"foods":[{"id":"781","food_category_id":"102","alias":"caesar-salad-781","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Caesar_Salad_OqwIMGdx.jpg","gallery":null,"price":"0.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:47:59","updated_at":"2015-02-11 19:07:45","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Caesar_Salad_OqwIMGdx.jpg","name":"Sal\u00e1t Caesar","description":"B\u1eafp c\u1ea3i Rumani, ph\u00f4 mai parmesan ph\u00f4 mai t\u1ef1 l\u00e0m c\u1ee7a c\u1eeda h\u00e0ng, c\u00f9ng v\u1edbi l\u1edbp n\u01b0\u1edbc tr\u1ed9n \u0111\u1eb7c bi\u1ec7t.","food_options":[{"id":"1566","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"12.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"}],"food_upsells":[]},{"id":"784","food_category_id":"102","alias":"chicken-and-spinach-784","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Chicken_and_Spinach_-_Grilled_chicken__hard-boiled_egg__mushrooms__applewood_smoked_bacon_and_tomatoes_served_on_fresh_spinach_with_Balsamic_Vinaigrette_dressing__LyTNDbjb.JPG","gallery":null,"price":"12.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:48:46","updated_at":"2015-02-11 19:07:54","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Chicken_and_Spinach_-_Grilled_chicken__hard-boiled_egg__mushrooms__applewood_smoked_bacon_and_tomatoes_served_on_fresh_spinach_with_Balsamic_Vinaigrette_dressing__LyTNDbjb.JPG","name":"Sa l\u00e1t rau ch\u00e2n v\u1ecbt","description":"Th\u1ecbt g\u00e0 x\u00e9 phay n\u01b0\u1edbng m\u1ecdi, tr\u1ee9ng g\u00e0, n\u1ea5m, th\u1ecbt ngu\u1ed9i v\u00e0 c\u00e0 chua \u0111\u01b0\u1ee3c tr\u1ed9n c\u00f9ng rau ch\u00e2n v\u1ecbt c\u00f9ng v\u1edbi n\u01b0\u1edbc tr\u1ed9n tr\u1ee9 danh c\u1ee7a Balsamic.","food_options":[{"id":"1565","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"5.00","deleted_at":null,"name":"Th\u00eam g\u1ea5p \u0111\u00f4i g\u00e0"}],"food_upsells":[]},{"id":"786","food_category_id":"102","alias":"cobb-salad-half-786","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Cobb_Salad_vi2d7JLW.jpg","gallery":null,"price":"12.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:49:21","updated_at":"2015-02-11 19:08:04","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Cobb_Salad_vi2d7JLW.jpg","name":"Sa l\u00e1t Cobb (\u0111\u0129a nh\u1ecf)","description":"Th\u1ecbt g\u00e0 lo\u1ea1i h\u1ea3o h\u1ea1ng, b\u1eafp c\u1ea3i Rumani, th\u1ecbt ngu\u1ed9i, ph\u00f4 mai Gorgonzola, tr\u1ed9n c\u00f9ng c\u00e0 chua v\u00e0 tr\u1ee9ng lu\u1ed9c b\u00f3p v\u1ee5n.","food_options":[{"id":"1560","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"6.00","deleted_at":null,"name":"\u0110\u0129a to"}],"food_upsells":[]},{"id":"788","food_category_id":"102","alias":"greek-salad-788","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/greek_salad_-_spinach__lettuce__red_onions__black_olives__tomato_slices_and_feta_cheese__5_50_KdSinlAz.jpg","gallery":null,"price":"7.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:49:55","updated_at":"2015-02-11 19:08:15","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/greek_salad_-_spinach__lettuce__red_onions__black_olives__tomato_slices_and_feta_cheese__5_50_KdSinlAz.jpg","name":"Sa l\u00e1t Hy L\u1ea1p","description":"Rau ch\u00e2n v\u1ecbt, b\u1eafp c\u1ea3i, h\u00e0nh t\u00edm, qu\u1ea3 \u00f4-liu \u0111en, c\u00e0 chua th\u00e1i l\u00e1t v\u00e0 ph\u00f4 mai s\u1eefa c\u1eebu.","food_options":[],"food_upsells":[]},{"id":"789","food_category_id":"102","alias":"honey-crisp-chicken-salad-789","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Honey-Crisp_Chicken_Salad_wQgi4F6E.JPG","gallery":null,"price":"17.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:50:52","updated_at":"2015-02-11 19:08:25","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Honey-Crisp_Chicken_Salad_wQgi4F6E.JPG","name":"Sa l\u00e1t g\u00e0 m\u1eadt ong","description":"2 lo\u1ea1i b\u1eafp c\u1ea3i \u0111\u1eb7c bi\u1ec7t, g\u00e0, h\u1ea1t h\u1ea1nh nh\u00e2n rang, d\u01b0a chu\u1ed9t, tr\u1ee9ng g\u00e0 v\u1ee5n, ng\u00f4, c\u00e0 chua tr\u1ed9n c\u00f9ng m\u00f9 t\u1ea1t m\u1eadt ong.","food_options":[],"food_upsells":[]},{"id":"790","food_category_id":"102","alias":"santa-fe-salad-790","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/SantaFe_salad_-_Romaine__blackened_chicken_breast__red_onions__fire___roasted_red_bell_peppers___1keNMyy4.jpg","gallery":null,"price":"19.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:51:23","updated_at":"2015-02-11 19:08:34","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/SantaFe_salad_-_Romaine__blackened_chicken_breast__red_onions__fire___roasted_red_bell_peppers___1keNMyy4.jpg","name":"Sa l\u00e1t Santa Fe","description":"\u1ee8c g\u00e0 \u0111en, h\u00e0nh t\u00edm, \u1edbt chu\u00f4ng \u0111\u1ecf n\u01b0\u1edbng.","food_options":[],"food_upsells":["777"]},{"id":"791","food_category_id":"102","alias":"french-onion-soup-791","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/French_Onion_Soup_vVgssYnM.jpg","gallery":null,"price":"4.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:52:38","updated_at":"2015-02-11 19:08:43","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/French_Onion_Soup_vVgssYnM.jpg","name":"S\u00fap h\u00e0nh Ph\u00e1p","description":"M\u1ed9t ch\u00fat r\u01b0\u1ee3u Burgundy v\u00e0 r\u1ea5t nhi\u1ec1u h\u00e0nh. \u0110i\u1ec3m th\u00eam b\u1edfi b\u00e1nh m\u00ec v\u1ee5n ph\u00eda tr\u00ean c\u00f9ng ph\u00f4 mai Th\u1ee5y S\u0129 v\u00e0 ph\u00f4 mai Mozzarrella.","food_options":[{"id":"1568","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"2.99","deleted_at":null,"name":"Th\u1ed1"},{"id":"1569","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"2.00","deleted_at":null,"name":"C\u1ed1c"}],"food_upsells":["764","754"]},{"id":"794","food_category_id":"102","alias":"seafood-chowder-794","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Seafood_Chowder_c4FPs7ZF.jpg","gallery":null,"price":"4.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:53:39","updated_at":"2015-02-11 19:08:52","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Seafood_Chowder_c4FPs7ZF.jpg","name":"H\u1ea3i s\u1ea3n h\u1ea7m","description":"M\u00f3n \u0103n c\u1ee7a nh\u00e0 v\u00f4 \u0111\u1ecbch. S\u00f2 \u0111i\u1ec7p, t\u00f4m, c\u00e1 scrod, khoai t\u00e2y nghi\u1ec1n.","food_options":[{"id":"1570","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"1.99","deleted_at":null,"name":"C\u1ed1c"},{"id":"1571","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"2.99","deleted_at":null,"name":"Th\u1ed1"}],"food_upsells":["798"]},{"id":"797","food_category_id":"102","alias":"tomato-basil-soup-797","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Tomato_Basil_Soup_NvMGr0IS.jpg","gallery":null,"price":"3.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"1","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:54:43","updated_at":"2015-02-11 19:09:06","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Tomato_Basil_Soup_NvMGr0IS.jpg","name":"S\u00fap c\u00e0 chua h\u00fang qu\u1ebf","food_options":[],"food_upsells":["754"]},{"id":"798","food_category_id":"102","alias":"tomato-bisque-soup-798","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Tomato_Bisque_Soup_V42NCB9Z.jpg","gallery":null,"price":"6.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-10 14:55:02","updated_at":"2015-02-11 19:09:30","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Tomato_Bisque_Soup_V42NCB9Z.jpg","name":"S\u00fap c\u00e0 chua th\u1ecbt cua","food_options":[],"food_upsells":[]}]},{"category":{"id":"103","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-12 13:25:06","updated_at":"2015-01-17 18:21:07","parent_id":"0","name":"Th\u1ee9c u\u1ed1ng"},"foods":[{"id":"813","food_category_id":"103","alias":"red-peach-sangria-es-813","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/red_peach_sangria_Q4eS642m.jpg","gallery":null,"price":"4.99","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-12 13:26:20","updated_at":"2015-02-11 19:10:01","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/red_peach_sangria_Q4eS642m.jpg","name":"Red Peach Sangria ES","description":"Redwood Creek Cabernet Sauvignon\u00ae, Peachtree Schnapps\u00ae, cranberry and pineapple juice with a splash of Sierra Mist\u00ae with a squeeze of fresh orange","food_options":[],"food_upsells":[]},{"id":"814","food_category_id":"103","alias":"margarita-814","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Magaria_QAy4TtGr.jpg","gallery":null,"price":"5.99","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-12 13:28:52","updated_at":"2015-02-15 15:33:32","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Magaria_QAy4TtGr.jpg","name":"Margarita","description":"Milagro Tequilla\u00ae and Fat & Juicy Margarita mix, featuring a signature mix of key limes, fresh orange and tamarind.  Served with a salted lime wedge","food_options":[],"food_upsells":[]},{"id":"815","food_category_id":"103","alias":"bloody-mary-815","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Bloody_mary_I9Cesq5B.jpg","gallery":null,"price":"4.99","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-12 13:33:17","updated_at":"2015-02-11 19:10:17","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Bloody_mary_I9Cesq5B.jpg","name":"Bloody Mary","description":"Sobieski Vodka\u00ae served with a tangy Fat & Juicy Bloody Mary mix and all the fixings.","food_options":[{"id":"1561","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"0.00","deleted_at":null,"name":"No Alcohol"},{"id":"1562","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"0.50","deleted_at":null,"name":"Extra Celery"},{"id":"1563","food_id":"0","food_option_id":"0","status":"1","created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"0.00","deleted_at":null,"name":"Tomato"}],"food_upsells":[]},{"id":"816","food_category_id":"103","alias":"martini-bianco-816","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Martini_bianco_Jm2bgTfa.jpg","gallery":null,"price":"4.99","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-12 13:45:06","updated_at":"2015-02-11 19:10:26","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Martini_bianco_Jm2bgTfa.jpg","name":"Martini Bianco","description":"A Fine Blend of Dry White Wines, Herbs, and Vanilla, Garnished with a Strawberry","food_options":[],"food_upsells":[]},{"id":"817","food_category_id":"103","alias":"strawberry-lemonade-817","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Strawberry_lemonade_lj7HzmYU.jpg","gallery":null,"price":"3.59","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-12 13:50:19","updated_at":"2015-02-11 19:10:33","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Strawberry_lemonade_lj7HzmYU.jpg","name":"Strawberry Lemonade","description":"Made with Freshly Squeezed Lemon Juice","food_options":[],"food_upsells":[]},{"id":"818","food_category_id":"103","alias":"raspberry-kiss-818","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Raspberry_Kiss_9QUrFLfQ.jpg","gallery":null,"price":"3.99","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":"0","status":"1","type":"food","multi_options":"1","deleted_at":null,"created_at":"2015-01-12 14:31:52","updated_at":"2015-02-11 19:10:40","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Raspberry_Kiss_9QUrFLfQ.jpg","name":"Raspberry Kiss","description":"Bacardi limon rum, Chambord raspberry liqueur, cranberry juice and a kiss of sweet and sour. Served with a sugared rim and garnished with raspberries.","food_options":[],"food_upsells":[]}]},{"category":{"id":"117","hotel_id":"8","icon":"","status":"1","created_at":"2015-02-24 15:54:00","updated_at":"2015-02-24 15:54:00","parent_id":"0","name":"Tr\u00e0","description":"C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0"},"foods":[]}]}

```

##List of Foods in Category Tree##
List all foods in category tree, URL params :

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/new-foods/category/99/tree?hotel_id=8&lang=vi


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "token",
        "value": "3f483f852605bbf7953c9e3081600161",
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
        "key": "food_category_id",
        "value": "127",
        "type": "text",
        "enabled": true
    },
    {
        "key": "name",
        "value": "B\u00fan ch\u1ea3",
        "type": "text",
        "enabled": true
    },
    {
        "key": "intro",
        "value": "the intro",
        "type": "text",
        "enabled": true
    },
    {
        "key": "description",
        "value": "the desc",
        "type": "text",
        "enabled": true
    },
    {
        "key": "intro_img",
        "value": "http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg",
        "type": "text",
        "enabled": true
    },
    {
        "key": "gallery",
        "value": "",
        "type": "text",
        "enabled": true
    },
    {
        "key": "price",
        "value": "17.5",
        "type": "text",
        "enabled": true
    },
    {
        "key": "sale_price",
        "value": "11",
        "type": "text",
        "enabled": true
    },
    {
        "key": "time_option",
        "value": "",
        "type": "text",
        "enabled": true
    },
    {
        "key": "has_upsell",
        "value": "1",
        "type": "text",
        "enabled": true
    },
    {
        "key": "upsells[1]",
        "value": "37",
        "type": "text",
        "enabled": true
    },
    {
        "key": "upsells[2]",
        "value": "38",
        "type": "text",
        "enabled": true
    },
    {
        "key": "food_options[1][name]",
        "value": "C\u1ee1 l\u1edbn",
        "type": "text",
        "enabled": true
    },
    {
        "key": "food_options[1][price]",
        "value": "15",
        "type": "text",
        "enabled": true
    },
    {
        "key": "food_options[2][name]",
        "value": "C\u1ee1 v\u1eeba",
        "type": "text",
        "enabled": true
    },
    {
        "key": "food_options[2][price]",
        "value": "13",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":{"id":99,"hotel_id":8,"icon":null,"status":1,"created_at":"2015-01-09 17:05:15","updated_at":"2015-01-17 18:19:25","parent_id":0,"foods":[{"id":754,"food_category_id":99,"alias":"garlic-bread-754","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Garlic_bread_YdkorSMs.jpg","gallery":null,"price":"6.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":1,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-09 17:42:15","updated_at":"2015-02-27 00:28:11","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Garlic_bread_YdkorSMs.jpg","name":"B\u00e1nh m\u00ec b\u01a1 t\u1ecfi","description":"","food_options":[],"food_upsells":[738]},{"id":758,"food_category_id":99,"alias":"ravioli-chi-n-758","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Fried_Ravioli_UiQ4Jycl.jpg","gallery":null,"price":"9.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":0,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-09 17:47:02","updated_at":"2015-02-11 19:00:21","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Fried_Ravioli_UiQ4Jycl.jpg","name":"Ravioli chi\u00ean","description":"G\u1ed3m 6 mi\u1ebfng","food_options":[{"id":1574,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-05 16:56:35","updated_at":"2015-02-07 11:02:03","price":"5.00","deleted_at":null,"name":"Th\u00eam 6 mi\u1ebfng"}],"food_upsells":[]},{"id":762,"food_category_id":99,"alias":"khoai-ng-t-n-ng-762","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Sweet_potato_bake_kla4Vop6.jpg","gallery":null,"price":"8.49","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":0,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-10 11:57:04","updated_at":"2015-02-11 19:00:42","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Sweet_potato_bake_kla4Vop6.jpg","name":"Khoai ng\u1ecdt n\u01b0\u1edbng","description":"Trong dai ngo\u00e0i gi\u00f2n. K\u00e8m ph\u00f4 mai v\u00e0 th\u1ecbt mu\u1ed1i.","food_options":[{"id":1533,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"5.00","deleted_at":null,"name":"G\u1ea5p \u0111\u00f4i"}],"food_upsells":[]},{"id":764,"food_category_id":99,"alias":"b-nh-m-caprese-764","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Caprese_flatbread_dDUfUBSp.jpg","gallery":null,"price":"7.49","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":0,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-10 11:59:46","updated_at":"2015-02-11 19:01:13","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Caprese_flatbread_dDUfUBSp.jpg","name":"B\u00e1nh m\u00ec Caprese","description":"C\u00e1ch kh\u1edfi \u0111\u1ea7u b\u1eefa \u0103n ho\u00e0n h\u1ea3o. B\u00e1nh m\u00ec d\u00e1t m\u1ecfng k\u00e8m c\u00e0 chua, ph\u00f4 mai mozzarella, h\u00fang, v\u00e0 ph\u00f4 mai Romano.","food_options":[{"id":1534,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"5.00","deleted_at":null,"name":"B\u00e1nh l\u1edbn"}],"food_upsells":[]},{"id":819,"food_category_id":99,"alias":"c-ng-tataki-819","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Tuna_tataki_68bfEloU.jpg","gallery":null,"price":"12.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":1,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-12 14:47:37","updated_at":"2015-02-11 19:01:27","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Tuna_tataki_68bfEloU.jpg","name":"C\u00e1 ng\u1eeb tataki","description":"C\u00e1 ng\u1eeb \u01b0\u1edbp x\u00ec d\u1ea7u v\u00e0 chanh, n\u01b0\u1edbc b\u01a1 nghi\u1ec1n","food_options":[{"id":1535,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"8.00","deleted_at":null,"name":"Th\u00eam 6 mi\u1ebfng"}],"food_upsells":[814,813]},{"id":821,"food_category_id":99,"alias":"ch-o-t-m-821","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Creamy_Rice_yKc8eg77.jpg","gallery":null,"price":"7.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":1,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-12 14:50:22","updated_at":"2015-02-11 19:01:42","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Creamy_Rice_yKc8eg77.jpg","name":"Ch\u00e1o t\u00f4m","description":"T\u00f4m s\u00fa v\u00e0 a-ti-s\u00f4","food_options":[],"food_upsells":[746,738]},{"id":822,"food_category_id":99,"alias":"cu-n-t-m-h-m-v-b--822","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Lobster_and_avocado_rolls_mca4c2e7.jpg","gallery":null,"price":"12.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":1,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-12 14:53:58","updated_at":"2015-02-11 19:01:57","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Lobster_and_avocado_rolls_mca4c2e7.jpg","name":"Cu\u1ed9n t\u00f4m h\u00f9m v\u00e0 b\u01a1","description":"C\u01a1m cu\u1ed9n t\u00f4m h\u00f9m v\u00e0 b\u01a1, \u0103n k\u00e8m v\u1edbi s\u1ed1t chua cay","food_options":[],"food_upsells":[815,814]},{"id":823,"food_category_id":99,"alias":"n-i-nachos-cho-nh-m-823","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mountain_of____nachos_kcTIOH6R.jpg","gallery":null,"price":"15.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":0,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-12 15:00:28","updated_at":"2015-02-11 19:02:10","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mountain_of____nachos_kcTIOH6R.jpg","name":"N\u00fai Nachos (cho nh\u00f3m)","description":"Su\u1ea5t Nachos \u0111\u1ee7 cho 3 \u0111\u1ebfn 4 ng\u01b0\u1eddi \u0103n. Tortilla k\u00e8m v\u1edbi th\u1ecbt b\u00f2 xay trong n\u01b0\u1edbc x\u1ed1t cay, ph\u00f4 mai queso, \u0111\u1eadu \u0111en, c\u00e0 chua, kem t\u01b0\u01a1i..","food_options":[{"id":1536,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"3.00","deleted_at":null,"name":"Th\u00eam ph\u00f4 mai"}],"food_upsells":[]},{"id":839,"food_category_id":99,"alias":"b-n-ch--839","intro_img":"","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-28 11:49:34","updated_at":"2015-02-28 11:49:34","intro_img_original":null,"name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1583,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 11:49:34","updated_at":"2015-02-28 11:49:34","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1584,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 11:49:34","updated_at":"2015-02-28 11:49:34","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]}],"subcategories":[{"id":127,"hotel_id":8,"icon":null,"status":1,"created_at":"2015-02-26 22:29:59","updated_at":"2015-02-26 22:29:59","parent_id":99,"name":"Kingsman","foods":[{"id":750,"food_category_id":127,"alias":"mozzarella-cheese-sticks-2-750","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mozzarella_chees_sticks_xsEodMzk.jpg","gallery":null,"price":"13.00","sale_price":null,"time_option":"{\"readOnly\":[[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}]],\"admin\":[{\"start\":1422324000000,\"end\":1422370800000,\"days\":[{\"id\":0},{\"id\":1},{\"id\":2},{\"id\":3},{\"id\":4},{\"id\":5},{\"id\":6}]}]}","has_upsell":1,"status":1,"type":"food","multi_options":0,"deleted_at":null,"created_at":"2015-01-09 17:38:45","updated_at":"2015-02-27 15:44:26","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mozzarella_chees_sticks_xsEodMzk.jpg","name":"Ph\u00f4 mai que","description":"","food_options":[],"food_upsells":[]},{"id":837,"food_category_id":127,"alias":"hieu-837","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Caesar_Salad_OqwIMGdx.jpg","gallery":null,"price":"123.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":0,"status":1,"type":null,"multi_options":0,"deleted_at":null,"created_at":"2015-02-27 15:54:56","updated_at":"2015-02-27 15:55:27","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Caesar_Salad_OqwIMGdx.jpg","name":"Hieu","description":"","food_options":[],"food_upsells":[]},{"id":846,"food_category_id":127,"alias":"b-n-ch--846","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-28 16:36:53","updated_at":"2015-02-28 16:36:53","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1597,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 16:36:53","updated_at":"2015-02-28 16:36:53","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1598,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 16:36:53","updated_at":"2015-02-28 16:36:53","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]},{"id":847,"food_category_id":127,"alias":"b-n-ch--847","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-28 16:36:56","updated_at":"2015-02-28 16:36:56","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1599,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 16:36:56","updated_at":"2015-02-28 16:36:56","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1600,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 16:36:56","updated_at":"2015-02-28 16:36:56","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]}],"subcategories":[]},{"id":128,"hotel_id":8,"icon":null,"status":1,"created_at":"2015-02-26 22:30:00","updated_at":"2015-02-26 22:30:00","parent_id":99,"name":"Second","foods":[{"id":755,"food_category_id":128,"alias":"chicken-wings-755","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/chicken_wings_oG6GJ7of.jpg","gallery":null,"price":"8.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":1,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-09 17:44:12","updated_at":"2015-02-28 10:17:32","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/chicken_wings_oG6GJ7of.jpg","name":"C\u00e1nh g\u00e0 n\u01b0\u1edbng","description":"6 mi\u1ebfng c\u00e1nh g\u00e0.","food_options":[{"id":1575,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"4.00","deleted_at":null,"name":"Th\u00eam 4 mi\u1ebfng"},{"id":1576,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"10.00","deleted_at":null,"name":"Th\u00eam 10 mi\u1ebfng"}],"food_upsells":[735]},{"id":840,"food_category_id":128,"alias":"b-n-ch--840","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-28 16:32:08","updated_at":"2015-02-28 16:32:08","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1585,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 16:32:08","updated_at":"2015-02-28 16:32:08","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1586,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 16:32:08","updated_at":"2015-02-28 16:32:08","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]},{"id":841,"food_category_id":128,"alias":"b-n-ch--841","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-28 16:32:11","updated_at":"2015-02-28 16:32:11","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1587,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 16:32:11","updated_at":"2015-02-28 16:32:11","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1588,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 16:32:11","updated_at":"2015-02-28 16:32:11","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]}],"subcategories":[]},{"id":129,"hotel_id":8,"icon":null,"status":1,"created_at":"2015-02-26 23:33:23","updated_at":"2015-02-26 23:33:23","parent_id":99,"name":"Third","foods":[{"id":842,"food_category_id":129,"alias":"b-n-ch--842","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-28 16:32:15","updated_at":"2015-02-28 16:32:15","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1589,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 16:32:15","updated_at":"2015-02-28 16:32:15","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1590,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 16:32:15","updated_at":"2015-02-28 16:32:15","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]}],"subcategories":[]},{"id":139,"hotel_id":8,"icon":null,"status":1,"created_at":"2015-02-27 00:12:59","updated_at":"2015-02-27 00:12:59","parent_id":99,"name":"Fourth","foods":[],"subcategories":[]},{"id":140,"hotel_id":8,"icon":null,"status":1,"created_at":"2015-02-27 13:23:34","updated_at":"2015-02-27 13:23:34","parent_id":99,"name":"Fifth","foods":[{"id":843,"food_category_id":140,"alias":"b-n-ch--843","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-28 16:32:22","updated_at":"2015-02-28 16:32:22","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1591,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 16:32:22","updated_at":"2015-02-28 16:32:22","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1592,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 16:32:22","updated_at":"2015-02-28 16:32:22","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]},{"id":844,"food_category_id":140,"alias":"b-n-ch--844","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-28 16:32:23","updated_at":"2015-02-28 16:32:23","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1593,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 16:32:23","updated_at":"2015-02-28 16:32:23","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1594,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 16:32:23","updated_at":"2015-02-28 16:32:23","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]},{"id":845,"food_category_id":140,"alias":"b-n-ch--845","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-28 16:32:24","updated_at":"2015-02-28 16:32:24","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1595,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 16:32:24","updated_at":"2015-02-28 16:32:24","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1596,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-28 16:32:24","updated_at":"2015-02-28 16:32:24","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]}],"subcategories":[]}]}}

```

##Category Tree by Category ID##
Category tree of single Category, URL Params :

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/new-food-categories/0/tree?hotel_id=8&lang=vi


**Parameters**

**Request params**
$$params

**Request data**
[]


Response:

```
{"error":false,"data":[{"id":"99","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-09 17:05:15","updated_at":"2015-01-17 18:19:25","parent_id":"0","name":"Khai v\u1ecb","subcategories":[]},{"id":"100","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-09 17:05:43","updated_at":"2015-01-17 18:20:52","parent_id":"0","name":"M\u00f3n ch\u00ednh","subcategories":[]},{"id":"101","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-09 17:06:00","updated_at":"2015-01-17 18:20:58","parent_id":"0","name":"Tr\u00e1ng mi\u1ec7ng","subcategories":[]},{"id":"102","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-10 11:52:29","updated_at":"2015-01-17 18:21:03","parent_id":"0","name":"S\u00fap v\u00e0 Sal\u00e1t","subcategories":[]},{"id":"103","hotel_id":"8","icon":null,"status":"1","created_at":"2015-01-12 13:25:06","updated_at":"2015-01-17 18:21:07","parent_id":"0","name":"Th\u1ee9c u\u1ed1ng","subcategories":[]},{"id":"117","hotel_id":"8","icon":"","status":"1","created_at":"2015-02-24 15:54:00","updated_at":"2015-02-24 15:54:00","parent_id":"0","name":"Tr\u00e0","description":"C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0","subcategories":[]}]}

```

##List of Foods by Category ID and Subcategories##
List all foods by category_id and subcategories, URL params :

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/new-foods/category/99/subcategories?hotel_id=8&lang=vi


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "token",
        "value": "3f483f852605bbf7953c9e3081600161",
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
        "key": "food_category_id",
        "value": "128",
        "type": "text",
        "enabled": true
    },
    {
        "key": "name",
        "value": "B\u00fan ch\u1ea3",
        "type": "text",
        "enabled": true
    },
    {
        "key": "intro",
        "value": "the intro",
        "type": "text",
        "enabled": true
    },
    {
        "key": "description",
        "value": "the desc",
        "type": "text",
        "enabled": true
    },
    {
        "key": "intro_img",
        "value": "http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg",
        "type": "text",
        "enabled": true
    },
    {
        "key": "gallery",
        "value": "",
        "type": "text",
        "enabled": true
    },
    {
        "key": "price",
        "value": "17.5",
        "type": "text",
        "enabled": true
    },
    {
        "key": "sale_price",
        "value": "11",
        "type": "text",
        "enabled": true
    },
    {
        "key": "time_option",
        "value": "",
        "type": "text",
        "enabled": true
    },
    {
        "key": "has_upsell",
        "value": "1",
        "type": "text",
        "enabled": true
    },
    {
        "key": "upsells[1]",
        "value": "37",
        "type": "text",
        "enabled": true
    },
    {
        "key": "upsells[2]",
        "value": "38",
        "type": "text",
        "enabled": true
    },
    {
        "key": "food_options[1][name]",
        "value": "C\u1ee1 l\u1edbn",
        "type": "text",
        "enabled": true
    },
    {
        "key": "food_options[1][price]",
        "value": "15",
        "type": "text",
        "enabled": true
    },
    {
        "key": "food_options[2][name]",
        "value": "C\u1ee1 v\u1eeba",
        "type": "text",
        "enabled": true
    },
    {
        "key": "food_options[2][price]",
        "value": "13",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":{"foods":[{"id":750,"food_category_id":99,"alias":"mozzarella-cheese-sticks-750","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mozzarella_chees_sticks_xsEodMzk.jpg","gallery":null,"price":"9.00","sale_price":null,"time_option":"{\"readOnly\":[[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}]],\"admin\":[{\"start\":1422324000000,\"end\":1422370800000,\"days\":[{\"id\":0},{\"id\":1},{\"id\":2},{\"id\":3},{\"id\":4},{\"id\":5},{\"id\":6}]}]}","has_upsell":1,"status":1,"type":"food","multi_options":0,"deleted_at":null,"created_at":"2015-01-09 17:38:45","updated_at":"2015-02-12 10:36:06","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mozzarella_chees_sticks_xsEodMzk.jpg","name":"Ph\u00f4 mai que","description":"","food_options":[{"id":1579,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-05 16:56:35","updated_at":"2015-02-07 11:54:49","price":"2.00","deleted_at":null,"name":"T\u01b0\u01a1ng \u1edbt"},{"id":1582,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-12 10:36:06","updated_at":"2015-02-12 10:36:06","price":"0.00","deleted_at":null,"name":"extra sugar"}],"food_upsells":[758,754]},{"id":754,"food_category_id":99,"alias":"b-nh-m-b-t-i-754","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Garlic_bread_YdkorSMs.jpg","gallery":null,"price":"6.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":1,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-09 17:42:15","updated_at":"2015-02-11 18:59:52","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Garlic_bread_YdkorSMs.jpg","name":"B\u00e1nh m\u00ec b\u01a1 t\u1ecfi","description":"","food_options":[],"food_upsells":[750,738]},{"id":755,"food_category_id":99,"alias":"chicken-wings-755","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/chicken_wings_oG6GJ7of.jpg","gallery":null,"price":"8.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":1,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-09 17:44:12","updated_at":"2015-02-14 14:54:30","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/chicken_wings_oG6GJ7of.jpg","name":"C\u00e1nh g\u00e0 n\u01b0\u1edbng","description":"6 mi\u1ebfng c\u00e1nh g\u00e0.","food_options":[{"id":1575,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"4.00","deleted_at":null,"name":"Th\u00eam 4 mi\u1ebfng"},{"id":1576,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"10.00","deleted_at":null,"name":"Th\u00eam 10 mi\u1ebfng"}],"food_upsells":[735]},{"id":758,"food_category_id":99,"alias":"ravioli-chi-n-758","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Fried_Ravioli_UiQ4Jycl.jpg","gallery":null,"price":"9.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":0,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-09 17:47:02","updated_at":"2015-02-11 19:00:21","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Fried_Ravioli_UiQ4Jycl.jpg","name":"Ravioli chi\u00ean","description":"G\u1ed3m 6 mi\u1ebfng","food_options":[{"id":1574,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-05 16:56:35","updated_at":"2015-02-07 11:02:03","price":"5.00","deleted_at":null,"name":"Th\u00eam 6 mi\u1ebfng"}],"food_upsells":[]},{"id":762,"food_category_id":99,"alias":"khoai-ng-t-n-ng-762","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Sweet_potato_bake_kla4Vop6.jpg","gallery":null,"price":"8.49","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":0,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-10 11:57:04","updated_at":"2015-02-11 19:00:42","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Sweet_potato_bake_kla4Vop6.jpg","name":"Khoai ng\u1ecdt n\u01b0\u1edbng","description":"Trong dai ngo\u00e0i gi\u00f2n. K\u00e8m ph\u00f4 mai v\u00e0 th\u1ecbt mu\u1ed1i.","food_options":[{"id":1533,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"5.00","deleted_at":null,"name":"G\u1ea5p \u0111\u00f4i"}],"food_upsells":[]},{"id":764,"food_category_id":99,"alias":"b-nh-m-caprese-764","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Caprese_flatbread_dDUfUBSp.jpg","gallery":null,"price":"7.49","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":0,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-10 11:59:46","updated_at":"2015-02-11 19:01:13","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Caprese_flatbread_dDUfUBSp.jpg","name":"B\u00e1nh m\u00ec Caprese","description":"C\u00e1ch kh\u1edfi \u0111\u1ea7u b\u1eefa \u0103n ho\u00e0n h\u1ea3o. B\u00e1nh m\u00ec d\u00e1t m\u1ecfng k\u00e8m c\u00e0 chua, ph\u00f4 mai mozzarella, h\u00fang, v\u00e0 ph\u00f4 mai Romano.","food_options":[{"id":1534,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"5.00","deleted_at":null,"name":"B\u00e1nh l\u1edbn"}],"food_upsells":[]},{"id":819,"food_category_id":99,"alias":"c-ng-tataki-819","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Tuna_tataki_68bfEloU.jpg","gallery":null,"price":"12.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":1,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-12 14:47:37","updated_at":"2015-02-11 19:01:27","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Tuna_tataki_68bfEloU.jpg","name":"C\u00e1 ng\u1eeb tataki","description":"C\u00e1 ng\u1eeb \u01b0\u1edbp x\u00ec d\u1ea7u v\u00e0 chanh, n\u01b0\u1edbc b\u01a1 nghi\u1ec1n","food_options":[{"id":1535,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"8.00","deleted_at":null,"name":"Th\u00eam 6 mi\u1ebfng"}],"food_upsells":[814,813]},{"id":821,"food_category_id":99,"alias":"ch-o-t-m-821","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Creamy_Rice_yKc8eg77.jpg","gallery":null,"price":"7.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":1,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-12 14:50:22","updated_at":"2015-02-11 19:01:42","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Creamy_Rice_yKc8eg77.jpg","name":"Ch\u00e1o t\u00f4m","description":"T\u00f4m s\u00fa v\u00e0 a-ti-s\u00f4","food_options":[],"food_upsells":[746,738]},{"id":822,"food_category_id":99,"alias":"cu-n-t-m-h-m-v-b--822","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Lobster_and_avocado_rolls_mca4c2e7.jpg","gallery":null,"price":"12.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":1,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-12 14:53:58","updated_at":"2015-02-11 19:01:57","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Lobster_and_avocado_rolls_mca4c2e7.jpg","name":"Cu\u1ed9n t\u00f4m h\u00f9m v\u00e0 b\u01a1","description":"C\u01a1m cu\u1ed9n t\u00f4m h\u00f9m v\u00e0 b\u01a1, \u0103n k\u00e8m v\u1edbi s\u1ed1t chua cay","food_options":[],"food_upsells":[815,814]},{"id":823,"food_category_id":99,"alias":"n-i-nachos-cho-nh-m-823","intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mountain_of____nachos_kcTIOH6R.jpg","gallery":null,"price":"15.00","sale_price":null,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":0,"status":1,"type":"food","multi_options":1,"deleted_at":null,"created_at":"2015-01-12 15:00:28","updated_at":"2015-02-11 19:02:10","intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mountain_of____nachos_kcTIOH6R.jpg","name":"N\u00fai Nachos (cho nh\u00f3m)","description":"Su\u1ea5t Nachos \u0111\u1ee7 cho 3 \u0111\u1ebfn 4 ng\u01b0\u1eddi \u0103n. Tortilla k\u00e8m v\u1edbi th\u1ecbt b\u00f2 xay trong n\u01b0\u1edbc x\u1ed1t cay, ph\u00f4 mai queso, \u0111\u1eadu \u0111en, c\u00e0 chua, kem t\u01b0\u01a1i..","food_options":[{"id":1536,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-05 16:56:35","updated_at":"2015-02-05 16:56:35","price":"3.00","deleted_at":null,"name":"Th\u00eam ph\u00f4 mai"}],"food_upsells":[]},{"id":834,"food_category_id":126,"alias":"b-n-ch--834","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-26 17:51:23","updated_at":"2015-02-26 17:51:24","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1585,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:51:24","updated_at":"2015-02-26 17:51:24","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1586,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:51:24","updated_at":"2015-02-26 17:51:24","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]},{"id":835,"food_category_id":135,"alias":"b-n-ch--835","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-26 17:51:42","updated_at":"2015-02-26 17:51:42","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1587,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:51:42","updated_at":"2015-02-26 17:51:42","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1588,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:51:42","updated_at":"2015-02-26 17:51:42","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]},{"id":836,"food_category_id":132,"alias":"b-n-ch--836","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-26 17:51:58","updated_at":"2015-02-26 17:51:58","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1589,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:51:58","updated_at":"2015-02-26 17:51:58","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1590,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:51:58","updated_at":"2015-02-26 17:51:58","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]},{"id":837,"food_category_id":132,"alias":"b-n-ch--837","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-26 17:52:00","updated_at":"2015-02-26 17:52:00","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1591,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:52:00","updated_at":"2015-02-26 17:52:00","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1592,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:52:00","updated_at":"2015-02-26 17:52:00","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]},{"id":838,"food_category_id":127,"alias":"b-n-ch--838","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-26 17:52:12","updated_at":"2015-02-26 17:52:12","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1593,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:52:12","updated_at":"2015-02-26 17:52:12","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1594,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:52:12","updated_at":"2015-02-26 17:52:12","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]},{"id":839,"food_category_id":127,"alias":"b-n-ch--839","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-26 17:52:13","updated_at":"2015-02-26 17:52:13","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1595,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:52:13","updated_at":"2015-02-26 17:52:13","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1596,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:52:13","updated_at":"2015-02-26 17:52:13","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]},{"id":840,"food_category_id":128,"alias":"b-n-ch--840","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-26 17:52:17","updated_at":"2015-02-26 17:52:17","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1597,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:52:17","updated_at":"2015-02-26 17:52:17","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1598,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:52:17","updated_at":"2015-02-26 17:52:17","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]},{"id":841,"food_category_id":128,"alias":"b-n-ch--841","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-26 17:52:18","updated_at":"2015-02-26 17:52:18","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1599,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:52:18","updated_at":"2015-02-26 17:52:18","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1600,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:52:18","updated_at":"2015-02-26 17:52:18","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]},{"id":842,"food_category_id":128,"alias":"b-n-ch--842","intro_img":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","gallery":"","price":"17.50","sale_price":"11.00","time_option":"","has_upsell":1,"status":1,"type":null,"multi_options":null,"deleted_at":null,"created_at":"2015-02-26 17:52:19","updated_at":"2015-02-26 17:52:19","intro_img_original":"http:\/\/admin.hottab.pw\/assets\/admin\/bootstrap3\/img\/gallery\/order\/dessert\/dessert-3.jpg","name":"B\u00fan ch\u1ea3","intro":"the intro","description":"the desc","food_options":[{"id":1601,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:52:19","updated_at":"2015-02-26 17:52:19","price":"15.00","deleted_at":null,"name":"C\u1ee1 l\u1edbn"},{"id":1602,"food_id":0,"food_option_id":0,"status":1,"created_at":"2015-02-26 17:52:19","updated_at":"2015-02-26 17:52:19","price":"13.00","deleted_at":null,"name":"C\u1ee1 v\u1eeba"}],"food_upsells":[]}]}}

```

##List Food Sub Categories of Category##
list all food direct subcategories of single Category, URL Params :

- hotel_id (required)
- lang (optional)

**Url**
<code>GET</code>api.hottab.pw/new-food-categories/99/subcategories?hotel_id=8&lang=vi


**Parameters**

**Request params**
$$params

**Request data**
[]


Response:

```
{"error":false,"data":[{"id":126,"hotel_id":8,"icon":"","status":1,"created_at":"2015-02-24 15:54:10","updated_at":"2015-02-24 15:54:10","parent_id":99,"name":"Tr\u00e0","description":"C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0"},{"id":127,"hotel_id":8,"icon":"","status":1,"created_at":"2015-02-24 15:54:11","updated_at":"2015-02-24 15:54:11","parent_id":99,"name":"Tr\u00e0","description":"C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0"},{"id":128,"hotel_id":8,"icon":"","status":1,"created_at":"2015-02-24 15:54:12","updated_at":"2015-02-24 15:54:12","parent_id":99,"name":"Tr\u00e0","description":"C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0"},{"id":135,"hotel_id":8,"icon":"","status":1,"created_at":"2015-02-24 16:28:35","updated_at":"2015-02-24 16:29:24","parent_id":99,"name":"Tr\u00e0","description":"Tr\u00e0 \u0111\u1ea1o"}]}

```

