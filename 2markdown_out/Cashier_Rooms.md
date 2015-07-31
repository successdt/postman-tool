##Get list taken rooms##


**Url**
<code>GET</code>api.hottab.pw/cashier/rooms/taken?token=9b96173956d76aa64228f578a568cf96


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "token",
        "value": "da0e3e4a918dbab0e491c61713348204",
        "type": "text",
        "enabled": true
    },
    {
        "key": "bill_parent_id",
        "value": "94",
        "type": "text",
        "enabled": true
    },
    {
        "key": "payment_method_id",
        "value": "2",
        "type": "text",
        "enabled": true
    },
    {
        "key": "amount",
        "value": "30",
        "type": "text",
        "enabled": true
    },
    {
        "key": "change",
        "value": "9.76",
        "type": "text",
        "enabled": true
    },
    {
        "key": "note",
        "value": "payment",
        "type": "text",
        "enabled": true
    },
    {
        "key": "guest_id",
        "value": "3",
        "type": "text",
        "enabled": true
    },
    {
        "key": "room_id",
        "value": "63",
        "type": "text",
        "enabled": true
    },
    {
        "key": "uuid",
        "value": "PC lah",
        "type": "text",
        "enabled": true
    },
    {
        "key": "order",
        "value": "{\"id\":\"65\",\"user_id\":\"89\",\"food_order_parent_id\":\"1\",\"customer_note\":\"\",\"waiter_note\":\"\",\"status\":4,\"room_id\":\"63\",\"total\":\"22.49\",\"created_at\":\"2015-02-10 16:38:45\",\"updated_at\":\"2015-02-10 16:38:54\",\"type\":\"0\",\"unix_created_at\":1423561125,\"unix_updated_at\":1423561134,\"room\":{\"id\":\"63\",\"name\":\"TABLE 002\"},\"food_order_parent\":{\"id\":\"1\",\"user_id\":\"89\",\"room_id\":\"63\",\"guest_id\":\"3\",\"status\":\"1\",\"paid_at\":\"0000-00-00 00:00:00\",\"created_at\":\"2015-02-05 23:02:32\",\"updated_at\":\"2015-02-09 13:29:20\",\"guest\":{\"id\":\"3\",\"name\":\"John\"}},\"foods\":[{\"id\":\"750\",\"bill_id\":\"180\",\"food_id\":\"750\",\"price\":\"9.00\",\"quantity\":1,\"price_before_discount\":\"9.00\",\"price_after_discount\":\"9.00\",\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"food_set_id\":null,\"type\":\"0\",\"service_id\":null,\"food\":{\"id\":\"750\",\"food_category_id\":\"99\",\"alias\":\"mozzarella-cheese-sticks-750\",\"intro_img\":\"http:\/\/api.hottab.pw\/uploads\/40\/thumbs\/Mozzarella_chees_sticks_tOzltZ47.jpg\",\"gallery\":null,\"price\":\"9.00\",\"sale_price\":null,\"time_option\":\"{\\\"readOnly\\\":[[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}]],\\\"admin\\\":[{\\\"start\\\":1422324000000,\\\"end\\\":1422370800000,\\\"days\\\":[{\\\"id\\\":0},{\\\"id\\\":1},{\\\"id\\\":2},{\\\"id\\\":3},{\\\"id\\\":4},{\\\"id\\\":5},{\\\"id\\\":6}]}]}\",\"has_upsell\":\"1\",\"status\":\"1\",\"type\":\"food\",\"multi_options\":\"0\",\"deleted_at\":null,\"created_at\":\"2015-01-09 17:38:45\",\"updated_at\":\"2015-02-10 13:19:12\",\"name\":\"Mozzarella cheese sticks\",\"description\":\"\"},\"food_options\":[{\"id\":\"1579\",\"food_id\":\"0\",\"food_option_id\":\"0\",\"status\":\"1\",\"created_at\":\"2015-02-05 16:56:35\",\"updated_at\":\"2015-02-07 11:54:49\",\"price\":\"2.00\",\"deleted_at\":null,\"name\":\"Chili sauce\",\"selected\":false}],\"showQuantity\":true,\"splitQuantity\":\"1\",\"name\":\"Mozzarella cheese sticks\",\"multi_options\":\"0\",\"subtotal\":9},{\"id\":\"762\",\"bill_id\":\"180\",\"food_id\":\"762\",\"price\":\"8.49\",\"quantity\":1,\"price_before_discount\":\"13.49\",\"price_after_discount\":\"13.49\",\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"food_set_id\":null,\"type\":\"0\",\"service_id\":null,\"food\":{\"id\":\"762\",\"food_category_id\":\"99\",\"alias\":\"sweet-potato-bake-762\",\"intro_img\":\"http:\/\/api.hottab.pw\/uploads\/40\/thumbs\/Sweet_potato_bake_YNYDLKVu.jpg\",\"gallery\":null,\"price\":\"8.49\",\"sale_price\":null,\"time_option\":\"{\\\"readOnly\\\":[[],[],[],[],[],[],[]],\\\"admin\\\":[]}\",\"has_upsell\":\"0\",\"status\":\"1\",\"type\":\"food\",\"multi_options\":\"1\",\"deleted_at\":null,\"created_at\":\"2015-01-10 11:57:04\",\"updated_at\":\"2015-01-23 16:32:10\",\"name\":\"Sweet potato bake\",\"description\":\"Crispy, cheesy and gooey. With melted cheese and bacon\"},\"food_options\":[{\"id\":\"1533\",\"food_id\":\"0\",\"food_option_id\":\"0\",\"status\":\"1\",\"created_at\":\"2015-02-05 16:56:35\",\"updated_at\":\"2015-02-05 16:56:35\",\"price\":\"5.00\",\"deleted_at\":null,\"name\":\"XL Order\",\"selected\":true,\"quantity\":\"1\"}],\"showQuantity\":true,\"splitQuantity\":\"1\",\"name\":\"Sweet potato bake\",\"multi_options\":\"1\",\"subtotal\":13.49}]}",
        "type": "text",
        "enabled": true
    },
    {
        "key": "parent_bill",
        "value": "{\"id\":\"38\",\"bill_number\":\"bill_parent_38\",\"food_order_id\":\"65\",\"user_id\":\"89\",\"room_id\":\"63\",\"hotel_id\":\"8\",\"guest_id\":\"3\",\"split_type\":\"1\",\"customer_number\":\"1\",\"price_before_tax\":\"20.24\",\"price_after_tax\":\"20.24\",\"price_before_discount\":\"22.49\",\"price_after_discount\":\"20.24\",\"status\":2,\"paid_at\":\"0000-00-00 00:00:00\",\"created_at\":\"2015-02-10 16:38:45\",\"updated_at\":\"2015-02-10 16:38:54\",\"unix_created_at\":1423561125,\"unix_updated_at\":1423561134,\"payments\":[],\"room\":{\"id\":\"63\",\"name\":\"TABLE 002\"},\"taxes\":[],\"discounts\":[{\"id\":\"25\",\"bill_parent_id\":\"38\",\"bill_id\":null,\"discount_id\":\"25\",\"rate\":\"10.00\",\"amount\":null,\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"name\":\"Discount 1\"}],\"bills\":[{\"id\":\"180\",\"bill_number\":\"bill_38\",\"user_id\":\"89\",\"parent_bill_id\":\"38\",\"room_id\":\"63\",\"status\":\"3\",\"price_before_tax\":\"22.49\",\"price_after_tax\":\"22.49\",\"price_before_discount\":\"22.49\",\"price_after_discount\":\"22.49\",\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"foods\":[{\"id\":\"750\",\"bill_id\":\"180\",\"food_id\":\"750\",\"price\":\"9.00\",\"quantity\":1,\"price_before_discount\":\"9.00\",\"price_after_discount\":\"9.00\",\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"food_set_id\":null,\"type\":\"0\",\"service_id\":null,\"food\":{\"id\":\"750\",\"food_category_id\":\"99\",\"alias\":\"mozzarella-cheese-sticks-750\",\"intro_img\":\"http:\/\/api.hottab.pw\/uploads\/40\/thumbs\/Mozzarella_chees_sticks_tOzltZ47.jpg\",\"gallery\":null,\"price\":\"9.00\",\"sale_price\":null,\"time_option\":\"{\\\"readOnly\\\":[[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}]],\\\"admin\\\":[{\\\"start\\\":1422324000000,\\\"end\\\":1422370800000,\\\"days\\\":[{\\\"id\\\":0},{\\\"id\\\":1},{\\\"id\\\":2},{\\\"id\\\":3},{\\\"id\\\":4},{\\\"id\\\":5},{\\\"id\\\":6}]}]}\",\"has_upsell\":\"1\",\"status\":\"1\",\"type\":\"food\",\"multi_options\":\"0\",\"deleted_at\":null,\"created_at\":\"2015-01-09 17:38:45\",\"updated_at\":\"2015-02-10 13:19:12\",\"name\":\"Mozzarella cheese sticks\",\"description\":\"\"},\"food_options\":[{\"id\":\"1579\",\"food_id\":\"0\",\"food_option_id\":\"0\",\"status\":\"1\",\"created_at\":\"2015-02-05 16:56:35\",\"updated_at\":\"2015-02-07 11:54:49\",\"price\":\"2.00\",\"deleted_at\":null,\"name\":\"Chili sauce\",\"selected\":false}],\"showQuantity\":true,\"splitQuantity\":\"1\",\"name\":\"Mozzarella cheese sticks\",\"multi_options\":\"0\",\"subtotal\":9},{\"id\":\"762\",\"bill_id\":\"180\",\"food_id\":\"762\",\"price\":\"8.49\",\"quantity\":1,\"price_before_discount\":\"13.49\",\"price_after_discount\":\"13.49\",\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"food_set_id\":null,\"type\":\"0\",\"service_id\":null,\"food\":{\"id\":\"762\",\"food_category_id\":\"99\",\"alias\":\"sweet-potato-bake-762\",\"intro_img\":\"http:\/\/api.hottab.pw\/uploads\/40\/thumbs\/Sweet_potato_bake_YNYDLKVu.jpg\",\"gallery\":null,\"price\":\"8.49\",\"sale_price\":null,\"time_option\":\"{\\\"readOnly\\\":[[],[],[],[],[],[],[]],\\\"admin\\\":[]}\",\"has_upsell\":\"0\",\"status\":\"1\",\"type\":\"food\",\"multi_options\":\"1\",\"deleted_at\":null,\"created_at\":\"2015-01-10 11:57:04\",\"updated_at\":\"2015-01-23 16:32:10\",\"name\":\"Sweet potato bake\",\"description\":\"Crispy, cheesy and gooey. With melted cheese and bacon\"},\"food_options\":[{\"id\":\"1533\",\"food_id\":\"0\",\"food_option_id\":\"0\",\"status\":\"1\",\"created_at\":\"2015-02-05 16:56:35\",\"updated_at\":\"2015-02-05 16:56:35\",\"price\":\"5.00\",\"deleted_at\":null,\"name\":\"XL Order\",\"selected\":true,\"quantity\":\"1\"}],\"showQuantity\":true,\"splitQuantity\":\"1\",\"name\":\"Sweet potato bake\",\"multi_options\":\"1\",\"subtotal\":13.49}],\"total\":22.490000000000002}],\"totalTaxes\":0,\"totalDiscounts\":2.25,\"total\":20.24}",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":[{"id":186,"hotel_id":8,"name":205,"device_id":null,"created_at":"2015-04-10 16:30:46","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":205,"guest_id":82,"guest_name":"Guest_1428658247","tags":[{"id":10,"name":"T\u1ea7ng 2"}]},{"id":187,"hotel_id":8,"name":"asdf","device_id":26,"created_at":"2015-04-12 15:49:24","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"asdf","guest_id":83,"guest_name":"Guest_1428828565","tags":[]},{"id":164,"hotel_id":8,"name":"ch\u00e9m gi\u00f3","device_id":7,"created_at":"2015-03-14 11:23:37","updated_at":"2015-07-31 15:57:18","is_default":1,"room_name":"ch\u00e9m gi\u00f3","guest_id":26,"guest_name":"Guest_1426307018","tags":[{"id":9,"name":"T\u1ea7ng 1"}]},{"id":72,"hotel_id":8,"name":"VIP ROOM 3","device_id":6,"created_at":"-0001-11-30 00:00:00","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"VIP ROOM 3","guest_id":11,"guest_name":"Messi","tags":[{"id":17,"name":"VIP"}]}]}

```

##Get list un-taken rooms##


**Url**
<code>GET</code>api.hottab.pw/cashier/rooms/untaken?token=9b96173956d76aa64228f578a568cf96


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "token",
        "value": "da0e3e4a918dbab0e491c61713348204",
        "type": "text",
        "enabled": true
    },
    {
        "key": "bill_parent_id",
        "value": "94",
        "type": "text",
        "enabled": true
    },
    {
        "key": "payment_method_id",
        "value": "2",
        "type": "text",
        "enabled": true
    },
    {
        "key": "amount",
        "value": "30",
        "type": "text",
        "enabled": true
    },
    {
        "key": "change",
        "value": "9.76",
        "type": "text",
        "enabled": true
    },
    {
        "key": "note",
        "value": "payment",
        "type": "text",
        "enabled": true
    },
    {
        "key": "guest_id",
        "value": "3",
        "type": "text",
        "enabled": true
    },
    {
        "key": "room_id",
        "value": "63",
        "type": "text",
        "enabled": true
    },
    {
        "key": "uuid",
        "value": "PC lah",
        "type": "text",
        "enabled": true
    },
    {
        "key": "order",
        "value": "{\"id\":\"65\",\"user_id\":\"89\",\"food_order_parent_id\":\"1\",\"customer_note\":\"\",\"waiter_note\":\"\",\"status\":4,\"room_id\":\"63\",\"total\":\"22.49\",\"created_at\":\"2015-02-10 16:38:45\",\"updated_at\":\"2015-02-10 16:38:54\",\"type\":\"0\",\"unix_created_at\":1423561125,\"unix_updated_at\":1423561134,\"room\":{\"id\":\"63\",\"name\":\"TABLE 002\"},\"food_order_parent\":{\"id\":\"1\",\"user_id\":\"89\",\"room_id\":\"63\",\"guest_id\":\"3\",\"status\":\"1\",\"paid_at\":\"0000-00-00 00:00:00\",\"created_at\":\"2015-02-05 23:02:32\",\"updated_at\":\"2015-02-09 13:29:20\",\"guest\":{\"id\":\"3\",\"name\":\"John\"}},\"foods\":[{\"id\":\"750\",\"bill_id\":\"180\",\"food_id\":\"750\",\"price\":\"9.00\",\"quantity\":1,\"price_before_discount\":\"9.00\",\"price_after_discount\":\"9.00\",\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"food_set_id\":null,\"type\":\"0\",\"service_id\":null,\"food\":{\"id\":\"750\",\"food_category_id\":\"99\",\"alias\":\"mozzarella-cheese-sticks-750\",\"intro_img\":\"http:\/\/api.hottab.pw\/uploads\/40\/thumbs\/Mozzarella_chees_sticks_tOzltZ47.jpg\",\"gallery\":null,\"price\":\"9.00\",\"sale_price\":null,\"time_option\":\"{\\\"readOnly\\\":[[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}]],\\\"admin\\\":[{\\\"start\\\":1422324000000,\\\"end\\\":1422370800000,\\\"days\\\":[{\\\"id\\\":0},{\\\"id\\\":1},{\\\"id\\\":2},{\\\"id\\\":3},{\\\"id\\\":4},{\\\"id\\\":5},{\\\"id\\\":6}]}]}\",\"has_upsell\":\"1\",\"status\":\"1\",\"type\":\"food\",\"multi_options\":\"0\",\"deleted_at\":null,\"created_at\":\"2015-01-09 17:38:45\",\"updated_at\":\"2015-02-10 13:19:12\",\"name\":\"Mozzarella cheese sticks\",\"description\":\"\"},\"food_options\":[{\"id\":\"1579\",\"food_id\":\"0\",\"food_option_id\":\"0\",\"status\":\"1\",\"created_at\":\"2015-02-05 16:56:35\",\"updated_at\":\"2015-02-07 11:54:49\",\"price\":\"2.00\",\"deleted_at\":null,\"name\":\"Chili sauce\",\"selected\":false}],\"showQuantity\":true,\"splitQuantity\":\"1\",\"name\":\"Mozzarella cheese sticks\",\"multi_options\":\"0\",\"subtotal\":9},{\"id\":\"762\",\"bill_id\":\"180\",\"food_id\":\"762\",\"price\":\"8.49\",\"quantity\":1,\"price_before_discount\":\"13.49\",\"price_after_discount\":\"13.49\",\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"food_set_id\":null,\"type\":\"0\",\"service_id\":null,\"food\":{\"id\":\"762\",\"food_category_id\":\"99\",\"alias\":\"sweet-potato-bake-762\",\"intro_img\":\"http:\/\/api.hottab.pw\/uploads\/40\/thumbs\/Sweet_potato_bake_YNYDLKVu.jpg\",\"gallery\":null,\"price\":\"8.49\",\"sale_price\":null,\"time_option\":\"{\\\"readOnly\\\":[[],[],[],[],[],[],[]],\\\"admin\\\":[]}\",\"has_upsell\":\"0\",\"status\":\"1\",\"type\":\"food\",\"multi_options\":\"1\",\"deleted_at\":null,\"created_at\":\"2015-01-10 11:57:04\",\"updated_at\":\"2015-01-23 16:32:10\",\"name\":\"Sweet potato bake\",\"description\":\"Crispy, cheesy and gooey. With melted cheese and bacon\"},\"food_options\":[{\"id\":\"1533\",\"food_id\":\"0\",\"food_option_id\":\"0\",\"status\":\"1\",\"created_at\":\"2015-02-05 16:56:35\",\"updated_at\":\"2015-02-05 16:56:35\",\"price\":\"5.00\",\"deleted_at\":null,\"name\":\"XL Order\",\"selected\":true,\"quantity\":\"1\"}],\"showQuantity\":true,\"splitQuantity\":\"1\",\"name\":\"Sweet potato bake\",\"multi_options\":\"1\",\"subtotal\":13.49}]}",
        "type": "text",
        "enabled": true
    },
    {
        "key": "parent_bill",
        "value": "{\"id\":\"38\",\"bill_number\":\"bill_parent_38\",\"food_order_id\":\"65\",\"user_id\":\"89\",\"room_id\":\"63\",\"hotel_id\":\"8\",\"guest_id\":\"3\",\"split_type\":\"1\",\"customer_number\":\"1\",\"price_before_tax\":\"20.24\",\"price_after_tax\":\"20.24\",\"price_before_discount\":\"22.49\",\"price_after_discount\":\"20.24\",\"status\":2,\"paid_at\":\"0000-00-00 00:00:00\",\"created_at\":\"2015-02-10 16:38:45\",\"updated_at\":\"2015-02-10 16:38:54\",\"unix_created_at\":1423561125,\"unix_updated_at\":1423561134,\"payments\":[],\"room\":{\"id\":\"63\",\"name\":\"TABLE 002\"},\"taxes\":[],\"discounts\":[{\"id\":\"25\",\"bill_parent_id\":\"38\",\"bill_id\":null,\"discount_id\":\"25\",\"rate\":\"10.00\",\"amount\":null,\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"name\":\"Discount 1\"}],\"bills\":[{\"id\":\"180\",\"bill_number\":\"bill_38\",\"user_id\":\"89\",\"parent_bill_id\":\"38\",\"room_id\":\"63\",\"status\":\"3\",\"price_before_tax\":\"22.49\",\"price_after_tax\":\"22.49\",\"price_before_discount\":\"22.49\",\"price_after_discount\":\"22.49\",\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"foods\":[{\"id\":\"750\",\"bill_id\":\"180\",\"food_id\":\"750\",\"price\":\"9.00\",\"quantity\":1,\"price_before_discount\":\"9.00\",\"price_after_discount\":\"9.00\",\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"food_set_id\":null,\"type\":\"0\",\"service_id\":null,\"food\":{\"id\":\"750\",\"food_category_id\":\"99\",\"alias\":\"mozzarella-cheese-sticks-750\",\"intro_img\":\"http:\/\/api.hottab.pw\/uploads\/40\/thumbs\/Mozzarella_chees_sticks_tOzltZ47.jpg\",\"gallery\":null,\"price\":\"9.00\",\"sale_price\":null,\"time_option\":\"{\\\"readOnly\\\":[[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}]],\\\"admin\\\":[{\\\"start\\\":1422324000000,\\\"end\\\":1422370800000,\\\"days\\\":[{\\\"id\\\":0},{\\\"id\\\":1},{\\\"id\\\":2},{\\\"id\\\":3},{\\\"id\\\":4},{\\\"id\\\":5},{\\\"id\\\":6}]}]}\",\"has_upsell\":\"1\",\"status\":\"1\",\"type\":\"food\",\"multi_options\":\"0\",\"deleted_at\":null,\"created_at\":\"2015-01-09 17:38:45\",\"updated_at\":\"2015-02-10 13:19:12\",\"name\":\"Mozzarella cheese sticks\",\"description\":\"\"},\"food_options\":[{\"id\":\"1579\",\"food_id\":\"0\",\"food_option_id\":\"0\",\"status\":\"1\",\"created_at\":\"2015-02-05 16:56:35\",\"updated_at\":\"2015-02-07 11:54:49\",\"price\":\"2.00\",\"deleted_at\":null,\"name\":\"Chili sauce\",\"selected\":false}],\"showQuantity\":true,\"splitQuantity\":\"1\",\"name\":\"Mozzarella cheese sticks\",\"multi_options\":\"0\",\"subtotal\":9},{\"id\":\"762\",\"bill_id\":\"180\",\"food_id\":\"762\",\"price\":\"8.49\",\"quantity\":1,\"price_before_discount\":\"13.49\",\"price_after_discount\":\"13.49\",\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"food_set_id\":null,\"type\":\"0\",\"service_id\":null,\"food\":{\"id\":\"762\",\"food_category_id\":\"99\",\"alias\":\"sweet-potato-bake-762\",\"intro_img\":\"http:\/\/api.hottab.pw\/uploads\/40\/thumbs\/Sweet_potato_bake_YNYDLKVu.jpg\",\"gallery\":null,\"price\":\"8.49\",\"sale_price\":null,\"time_option\":\"{\\\"readOnly\\\":[[],[],[],[],[],[],[]],\\\"admin\\\":[]}\",\"has_upsell\":\"0\",\"status\":\"1\",\"type\":\"food\",\"multi_options\":\"1\",\"deleted_at\":null,\"created_at\":\"2015-01-10 11:57:04\",\"updated_at\":\"2015-01-23 16:32:10\",\"name\":\"Sweet potato bake\",\"description\":\"Crispy, cheesy and gooey. With melted cheese and bacon\"},\"food_options\":[{\"id\":\"1533\",\"food_id\":\"0\",\"food_option_id\":\"0\",\"status\":\"1\",\"created_at\":\"2015-02-05 16:56:35\",\"updated_at\":\"2015-02-05 16:56:35\",\"price\":\"5.00\",\"deleted_at\":null,\"name\":\"XL Order\",\"selected\":true,\"quantity\":\"1\"}],\"showQuantity\":true,\"splitQuantity\":\"1\",\"name\":\"Sweet potato bake\",\"multi_options\":\"1\",\"subtotal\":13.49}],\"total\":22.490000000000002}],\"totalTaxes\":0,\"totalDiscounts\":2.25,\"total\":20.24}",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":[{"id":163,"hotel_id":8,"name":"P1","device_id":5,"created_at":"2015-03-13 16:40:51","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"P1","guest_id":25,"guest_name":"Guest_1426239651","tags":[{"id":17,"name":"VIP"}]},{"id":193,"hotel_id":8,"name":"Ph\u00f2ng 1","device_id":null,"created_at":"2015-07-31 15:56:13","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"Ph\u00f2ng 1","guest_id":93,"guest_name":"Guest_1438332973","tags":[]},{"id":194,"hotel_id":8,"name":"Ph\u00f2ng 2","device_id":null,"created_at":"2015-07-31 15:56:13","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"Ph\u00f2ng 2","guest_id":94,"guest_name":"Guest_1438332973","tags":[]},{"id":188,"hotel_id":8,"name":"Take Away","device_id":null,"created_at":"2015-04-14 17:44:55","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"Take Away","guest_id":84,"guest_name":"Guest_1429008295","tags":[]}]}

```

##List of rooms by Tag ID##


**Url**
<code>GET</code>api.hottab.pw/cashier/rooms/tags/15?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQxLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvd2FpdGVyXC9sb2dpbiIsImlhdCI6IjE0Mjk1NDMwMzQiLCJleHAiOiIxNDI5NjI5NDM0IiwibmJmIjoiMTQyOTU0MzAzNCIsImp0aSI6IjQwZGI1MDYwYjM5OTBiZjdkMjEwNGVlYzIxNTAxMDViIn0.NmUzMzQ2ZDRkY2NjY2ViNzQ3N2JhNTNlOGMyYmQ4OTI3MDc1M2M4ZjUyOTY4ZjU4MmRkNDNjYWZhMGNjOWJjMw&hotel_id=8.


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
        "value": "successdt@zoho.com",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":{"id":9,"type":2,"hotel_id":8,"created_at":"2015-03-12 15:12:17","updated_at":"2015-03-12 15:12:17","name":"T\u1ea7ng 1","rooms":[{"id":164,"hotel_id":8,"name":"ch\u00e9m gi\u00f3","device_id":7,"created_at":"2015-03-14 11:23:37","updated_at":"2015-07-31 15:57:18","is_default":1,"room_name":"ch\u00e9m gi\u00f3","guest_id":26,"guest_name":"Guest_1426307018","tags":[{"id":9,"name":"T\u1ea7ng 1"}],"customer_number":35,"number_order":32}]}}

```

##List of rooms grouped by Tags##


**Url**
<code>GET</code>api.hottab.pw/cashier/rooms/tags?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQxLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvd2FpdGVyXC9sb2dpbiIsImlhdCI6IjE0Mjk1NDMwMzQiLCJleHAiOiIxNDI5NjI5NDM0IiwibmJmIjoiMTQyOTU0MzAzNCIsImp0aSI6IjQwZGI1MDYwYjM5OTBiZjdkMjEwNGVlYzIxNTAxMDViIn0.NmUzMzQ2ZDRkY2NjY2ViNzQ3N2JhNTNlOGMyYmQ4OTI3MDc1M2M4ZjUyOTY4ZjU4MmRkNDNjYWZhMGNjOWJjMw&hotel_id=8


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
        "value": "successdt@zoho.com",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":[{"id":9,"name":"T\u1ea7ng 1","rooms":[{"id":164,"hotel_id":8,"name":"ch\u00e9m gi\u00f3","device_id":7,"created_at":"2015-03-14 11:23:37","updated_at":"2015-07-31 15:57:18","is_default":1,"room_name":"ch\u00e9m gi\u00f3","guest_id":26,"guest_name":"Guest_1426307018","tags":[{"id":9,"name":"T\u1ea7ng 1"}],"customer_number":35,"number_order":32}]},{"id":10,"name":"T\u1ea7ng 2","rooms":[{"id":186,"hotel_id":8,"name":205,"device_id":null,"created_at":"2015-04-10 16:30:46","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":205,"guest_id":82,"guest_name":"Guest_1428658247","tags":[{"id":10,"name":"T\u1ea7ng 2"}],"customer_number":1,"number_order":1}]},{"id":17,"name":"VIP","rooms":[{"id":72,"hotel_id":8,"name":"VIP ROOM 3","device_id":6,"created_at":"-0001-11-30 00:00:00","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"VIP ROOM 3","guest_id":11,"guest_name":"Messi","tags":[{"id":17,"name":"VIP"}],"customer_number":13,"number_order":13},{"id":163,"hotel_id":8,"name":"P1","device_id":5,"created_at":"2015-03-13 16:40:51","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"P1","guest_id":25,"guest_name":"Guest_1426239651","tags":[{"id":17,"name":"VIP"}],"customer_number":0,"number_order":0}]},{"id":null,"name":null,"rooms":[{"id":187,"hotel_id":8,"name":"asdf","device_id":26,"created_at":"2015-04-12 15:49:24","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"asdf","guest_id":83,"guest_name":"Guest_1428828565","tags":[],"customer_number":1,"number_order":1},{"id":188,"hotel_id":8,"name":"Take Away","device_id":null,"created_at":"2015-04-14 17:44:55","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"Take Away","guest_id":84,"guest_name":"Guest_1429008295","tags":[],"customer_number":0,"number_order":0},{"id":193,"hotel_id":8,"name":"Ph\u00f2ng 1","device_id":null,"created_at":"2015-07-31 15:56:13","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"Ph\u00f2ng 1","guest_id":93,"guest_name":"Guest_1438332973","tags":[],"customer_number":0,"number_order":0},{"id":194,"hotel_id":8,"name":"Ph\u00f2ng 2","device_id":null,"created_at":"2015-07-31 15:56:13","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"Ph\u00f2ng 2","guest_id":94,"guest_name":"Guest_1438332973","tags":[],"customer_number":0,"number_order":0}]}]}

```

##Get list rooms##
list of rooms in this hotel

**Url**
<code>GET</code>api.hottab.pw/cashier/rooms?token=7ef33ca848fe1617b50eeed1eb89840f


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "token",
        "value": "7f3877ee727eb9c1f9efdd08f4f853e6",
        "type": "text",
        "enabled": true
    },
    {
        "key": "bill_parent_id",
        "value": "38",
        "type": "text",
        "enabled": true
    },
    {
        "key": "payment_method_id",
        "value": "2",
        "type": "text",
        "enabled": true
    },
    {
        "key": "amount",
        "value": "30",
        "type": "text",
        "enabled": true
    },
    {
        "key": "change",
        "value": "9.76",
        "type": "text",
        "enabled": true
    },
    {
        "key": "note",
        "value": "payment",
        "type": "text",
        "enabled": true
    },
    {
        "key": "guest_id",
        "value": "3",
        "type": "text",
        "enabled": true
    },
    {
        "key": "room_id",
        "value": "63",
        "type": "text",
        "enabled": true
    },
    {
        "key": "uuid",
        "value": "PC lah",
        "type": "text",
        "enabled": true
    },
    {
        "key": "order",
        "value": "{\"id\":\"65\",\"user_id\":\"89\",\"food_order_parent_id\":\"1\",\"customer_note\":\"\",\"waiter_note\":\"\",\"status\":4,\"room_id\":\"63\",\"total\":\"22.49\",\"created_at\":\"2015-02-10 16:38:45\",\"updated_at\":\"2015-02-10 16:38:54\",\"type\":\"0\",\"unix_created_at\":1423561125,\"unix_updated_at\":1423561134,\"room\":{\"id\":\"63\",\"name\":\"TABLE 002\"},\"food_order_parent\":{\"id\":\"1\",\"user_id\":\"89\",\"room_id\":\"63\",\"guest_id\":\"3\",\"status\":\"1\",\"paid_at\":\"0000-00-00 00:00:00\",\"created_at\":\"2015-02-05 23:02:32\",\"updated_at\":\"2015-02-09 13:29:20\",\"guest\":{\"id\":\"3\",\"name\":\"John\"}},\"foods\":[{\"id\":\"750\",\"bill_id\":\"180\",\"food_id\":\"750\",\"price\":\"9.00\",\"quantity\":1,\"price_before_discount\":\"9.00\",\"price_after_discount\":\"9.00\",\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"food_set_id\":null,\"type\":\"0\",\"service_id\":null,\"food\":{\"id\":\"750\",\"food_category_id\":\"99\",\"alias\":\"mozzarella-cheese-sticks-750\",\"intro_img\":\"http:\/\/api.hottab.pw\/uploads\/40\/thumbs\/Mozzarella_chees_sticks_tOzltZ47.jpg\",\"gallery\":null,\"price\":\"9.00\",\"sale_price\":null,\"time_option\":\"{\\\"readOnly\\\":[[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}]],\\\"admin\\\":[{\\\"start\\\":1422324000000,\\\"end\\\":1422370800000,\\\"days\\\":[{\\\"id\\\":0},{\\\"id\\\":1},{\\\"id\\\":2},{\\\"id\\\":3},{\\\"id\\\":4},{\\\"id\\\":5},{\\\"id\\\":6}]}]}\",\"has_upsell\":\"1\",\"status\":\"1\",\"type\":\"food\",\"multi_options\":\"0\",\"deleted_at\":null,\"created_at\":\"2015-01-09 17:38:45\",\"updated_at\":\"2015-02-10 13:19:12\",\"name\":\"Mozzarella cheese sticks\",\"description\":\"\"},\"food_options\":[{\"id\":\"1579\",\"food_id\":\"0\",\"food_option_id\":\"0\",\"status\":\"1\",\"created_at\":\"2015-02-05 16:56:35\",\"updated_at\":\"2015-02-07 11:54:49\",\"price\":\"2.00\",\"deleted_at\":null,\"name\":\"Chili sauce\",\"selected\":false}],\"showQuantity\":true,\"splitQuantity\":\"1\",\"name\":\"Mozzarella cheese sticks\",\"multi_options\":\"0\",\"subtotal\":9},{\"id\":\"762\",\"bill_id\":\"180\",\"food_id\":\"762\",\"price\":\"8.49\",\"quantity\":1,\"price_before_discount\":\"13.49\",\"price_after_discount\":\"13.49\",\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"food_set_id\":null,\"type\":\"0\",\"service_id\":null,\"food\":{\"id\":\"762\",\"food_category_id\":\"99\",\"alias\":\"sweet-potato-bake-762\",\"intro_img\":\"http:\/\/api.hottab.pw\/uploads\/40\/thumbs\/Sweet_potato_bake_YNYDLKVu.jpg\",\"gallery\":null,\"price\":\"8.49\",\"sale_price\":null,\"time_option\":\"{\\\"readOnly\\\":[[],[],[],[],[],[],[]],\\\"admin\\\":[]}\",\"has_upsell\":\"0\",\"status\":\"1\",\"type\":\"food\",\"multi_options\":\"1\",\"deleted_at\":null,\"created_at\":\"2015-01-10 11:57:04\",\"updated_at\":\"2015-01-23 16:32:10\",\"name\":\"Sweet potato bake\",\"description\":\"Crispy, cheesy and gooey. With melted cheese and bacon\"},\"food_options\":[{\"id\":\"1533\",\"food_id\":\"0\",\"food_option_id\":\"0\",\"status\":\"1\",\"created_at\":\"2015-02-05 16:56:35\",\"updated_at\":\"2015-02-05 16:56:35\",\"price\":\"5.00\",\"deleted_at\":null,\"name\":\"XL Order\",\"selected\":true,\"quantity\":\"1\"}],\"showQuantity\":true,\"splitQuantity\":\"1\",\"name\":\"Sweet potato bake\",\"multi_options\":\"1\",\"subtotal\":13.49}]}",
        "type": "text",
        "enabled": true
    },
    {
        "key": "parent_bill",
        "value": "{\"id\":\"38\",\"bill_number\":\"bill_parent_38\",\"food_order_id\":\"65\",\"user_id\":\"89\",\"room_id\":\"63\",\"hotel_id\":\"8\",\"guest_id\":\"3\",\"split_type\":\"1\",\"customer_number\":\"1\",\"price_before_tax\":\"20.24\",\"price_after_tax\":\"20.24\",\"price_before_discount\":\"22.49\",\"price_after_discount\":\"20.24\",\"status\":2,\"paid_at\":\"0000-00-00 00:00:00\",\"created_at\":\"2015-02-10 16:38:45\",\"updated_at\":\"2015-02-10 16:38:54\",\"unix_created_at\":1423561125,\"unix_updated_at\":1423561134,\"payments\":[],\"room\":{\"id\":\"63\",\"name\":\"TABLE 002\"},\"taxes\":[],\"discounts\":[{\"id\":\"25\",\"bill_parent_id\":\"38\",\"bill_id\":null,\"discount_id\":\"25\",\"rate\":\"10.00\",\"amount\":null,\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"name\":\"Discount 1\"}],\"bills\":[{\"id\":\"180\",\"bill_number\":\"bill_38\",\"user_id\":\"89\",\"parent_bill_id\":\"38\",\"room_id\":\"63\",\"status\":\"3\",\"price_before_tax\":\"22.49\",\"price_after_tax\":\"22.49\",\"price_before_discount\":\"22.49\",\"price_after_discount\":\"22.49\",\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"foods\":[{\"id\":\"750\",\"bill_id\":\"180\",\"food_id\":\"750\",\"price\":\"9.00\",\"quantity\":1,\"price_before_discount\":\"9.00\",\"price_after_discount\":\"9.00\",\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"food_set_id\":null,\"type\":\"0\",\"service_id\":null,\"food\":{\"id\":\"750\",\"food_category_id\":\"99\",\"alias\":\"mozzarella-cheese-sticks-750\",\"intro_img\":\"http:\/\/api.hottab.pw\/uploads\/40\/thumbs\/Mozzarella_chees_sticks_tOzltZ47.jpg\",\"gallery\":null,\"price\":\"9.00\",\"sale_price\":null,\"time_option\":\"{\\\"readOnly\\\":[[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}],[{\\\"start\\\":\\\"09:00\\\",\\\"end\\\":\\\"22:00\\\"}]],\\\"admin\\\":[{\\\"start\\\":1422324000000,\\\"end\\\":1422370800000,\\\"days\\\":[{\\\"id\\\":0},{\\\"id\\\":1},{\\\"id\\\":2},{\\\"id\\\":3},{\\\"id\\\":4},{\\\"id\\\":5},{\\\"id\\\":6}]}]}\",\"has_upsell\":\"1\",\"status\":\"1\",\"type\":\"food\",\"multi_options\":\"0\",\"deleted_at\":null,\"created_at\":\"2015-01-09 17:38:45\",\"updated_at\":\"2015-02-10 13:19:12\",\"name\":\"Mozzarella cheese sticks\",\"description\":\"\"},\"food_options\":[{\"id\":\"1579\",\"food_id\":\"0\",\"food_option_id\":\"0\",\"status\":\"1\",\"created_at\":\"2015-02-05 16:56:35\",\"updated_at\":\"2015-02-07 11:54:49\",\"price\":\"2.00\",\"deleted_at\":null,\"name\":\"Chili sauce\",\"selected\":false}],\"showQuantity\":true,\"splitQuantity\":\"1\",\"name\":\"Mozzarella cheese sticks\",\"multi_options\":\"0\",\"subtotal\":9},{\"id\":\"762\",\"bill_id\":\"180\",\"food_id\":\"762\",\"price\":\"8.49\",\"quantity\":1,\"price_before_discount\":\"13.49\",\"price_after_discount\":\"13.49\",\"created_at\":\"2015-02-10 16:38:54\",\"updated_at\":\"2015-02-10 16:38:54\",\"food_set_id\":null,\"type\":\"0\",\"service_id\":null,\"food\":{\"id\":\"762\",\"food_category_id\":\"99\",\"alias\":\"sweet-potato-bake-762\",\"intro_img\":\"http:\/\/api.hottab.pw\/uploads\/40\/thumbs\/Sweet_potato_bake_YNYDLKVu.jpg\",\"gallery\":null,\"price\":\"8.49\",\"sale_price\":null,\"time_option\":\"{\\\"readOnly\\\":[[],[],[],[],[],[],[]],\\\"admin\\\":[]}\",\"has_upsell\":\"0\",\"status\":\"1\",\"type\":\"food\",\"multi_options\":\"1\",\"deleted_at\":null,\"created_at\":\"2015-01-10 11:57:04\",\"updated_at\":\"2015-01-23 16:32:10\",\"name\":\"Sweet potato bake\",\"description\":\"Crispy, cheesy and gooey. With melted cheese and bacon\"},\"food_options\":[{\"id\":\"1533\",\"food_id\":\"0\",\"food_option_id\":\"0\",\"status\":\"1\",\"created_at\":\"2015-02-05 16:56:35\",\"updated_at\":\"2015-02-05 16:56:35\",\"price\":\"5.00\",\"deleted_at\":null,\"name\":\"XL Order\",\"selected\":true,\"quantity\":\"1\"}],\"showQuantity\":true,\"splitQuantity\":\"1\",\"name\":\"Sweet potato bake\",\"multi_options\":\"1\",\"subtotal\":13.49}],\"total\":22.490000000000002}],\"totalTaxes\":0,\"totalDiscounts\":2.25,\"total\":20.24}",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":[{"id":164,"hotel_id":8,"name":"ch\u00e9m gi\u00f3","device_id":7,"created_at":"2015-03-14 11:23:37","updated_at":"2015-07-31 15:57:18","is_default":1,"room_name":"ch\u00e9m gi\u00f3","number_orders":32,"guest_id":60,"guest_name":"Guest_1427170546","tags":[{"id":9,"name":"T\u1ea7ng 1"}]},{"id":72,"hotel_id":8,"name":"VIP ROOM 3","device_id":6,"created_at":"-0001-11-30 00:00:00","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"VIP ROOM 3","number_orders":13,"guest_id":57,"guest_name":"Guest_1427169524","tags":[{"id":17,"name":"VIP"}]},{"id":186,"hotel_id":8,"name":205,"device_id":null,"created_at":"2015-04-10 16:30:46","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":205,"number_orders":1,"guest_id":82,"guest_name":"Guest_1428658247","tags":[{"id":10,"name":"T\u1ea7ng 2"}]},{"id":187,"hotel_id":8,"name":"asdf","device_id":26,"created_at":"2015-04-12 15:49:24","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"asdf","number_orders":1,"guest_id":92,"guest_name":"Guest_1436439638","tags":[]},{"id":193,"hotel_id":8,"name":"Ph\u00f2ng 1","device_id":null,"created_at":"2015-07-31 15:56:13","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"Ph\u00f2ng 1","number_orders":0,"guest_id":93,"guest_name":"Guest_1438332973","tags":[]},{"id":194,"hotel_id":8,"name":"Ph\u00f2ng 2","device_id":null,"created_at":"2015-07-31 15:56:13","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"Ph\u00f2ng 2","number_orders":0,"guest_id":94,"guest_name":"Guest_1438332973","tags":[]},{"id":163,"hotel_id":8,"name":"P1","device_id":5,"created_at":"2015-03-13 16:40:51","updated_at":"2015-07-31 15:57:18","is_default":0,"room_name":"P1","number_orders":0,"guest_id":91,"guest_name":"Guest_1435938174","tags":[{"id":17,"name":"VIP"}]}]}

```

