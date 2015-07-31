##View a Order##


**Url**
<code>GET</code>api.hottab.pw/v2.1/waiter/food-orders/83?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjEwOSwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvd2FpdGVyXC9sb2dpbiIsImlhdCI6IjE0MzM5MjE1NjMiLCJleHAiOiIxNDM0MDA3OTYzIiwibmJmIjoiMTQzMzkyMTU2MyIsImp0aSI6ImUwNDQyZmFlNjE3YjYwMTg5YjAzYThjY2RhOTFhNzg3In0.NjIwMjQyNzA5NTJhYmYzZDJjODM5ZTRkNDhmYzNmYWJkNWZiOWY5ZmZlOTk1ZDc3ZjJiMmIwNjVmMGZjZDQ1OA


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
        "value": "waiter@hottab.net",
        "type": "text",
        "enabled": true
    }
]


Response:

```
 {"error":false,"data":{"id":1123,"room_id":72,"user_id":129,"guest_id":11,"order_number":null,"order_id":2,"status":1,"customer_number":1,"created_at":"2015-07-31 16:39:12","updated_at":"2015-07-31 16:40:01","current_time":1438337179,"taxes":[],"discounts":[],"customer_classes":{"\u0000*\u0000items":[]},"items":[{"id":750,"food_category_id":0,"intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Mozzarella_chees_sticks_xsEodMzk.jpg","price":13,"sale_price":null,"status":1,"time_option":"{\"readOnly\":[[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}],[{\"start\":\"09:00\",\"end\":\"22:00\"}]],\"admin\":[{\"start\":1422324000000,\"end\":1422370800000,\"days\":[{\"id\":0},{\"id\":1},{\"id\":2},{\"id\":3},{\"id\":4},{\"id\":5},{\"id\":6}]}]}","has_upsell":0,"multi_options":0,"intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Mozzarella_chees_sticks_xsEodMzk.jpg","priority":0,"printer_id":0,"name":"Mozzarella cheese sticks 2x","description":"This is nice","category":null,"options":[],"quantity":2,"type":0,"split":"","subtotal":26,"is_delivered":0,"customer_note":"","is_take_away":0,"do_not_make":0,"is_wasted":0,"is_foc":0,"foc_remark":0,"do_not_print":0,"discounts":[],"selected_options":[]},{"id":822,"food_category_id":176,"intro_img":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/thumbs\/Lobster_and_avocado_rolls_mca4c2e7.jpg","price":12000,"sale_price":null,"status":1,"time_option":"{\"readOnly\":[[],[],[],[],[],[],[]],\"admin\":[]}","has_upsell":1,"multi_options":1,"intro_img_original":"http:\/\/media.hottab.pw\/uploads\/api.hottab.pw\/40\/Lobster_and_avocado_rolls_mca4c2e7.jpg","priority":0,"printer_id":14,"name":"Lobster and Avocado Rolls","description":"Rice crepes filled with shrimp, lobster and avocado, served with spicy yoghurt sauce and louie dressing.","category":{"id":176,"hotel_id":8,"icon":"","status":1,"created_at":"2015-05-22 16:01:35","updated_at":"2015-07-31 14:51:06","parent_id":103,"lft":101,"rgt":102,"depth":2,"type":1,"printer_id":14,"item_order":null,"name":"Tr\u00e0 2222","description":"C\u00e1c th\u1ec3 lo\u1ea1i tr\u00e0"},"options":[],"quantity":2,"type":0,"split":"","subtotal":24000,"is_delivered":0,"customer_note":"","is_take_away":0,"do_not_make":0,"is_wasted":0,"is_foc":0,"foc_remark":0,"do_not_print":0,"discounts":[],"selected_options":[]}],"staff":{"id":129,"first_name":"loi","last_name":"hoang","email":"cashier@hottab.net"},"room":{"id":72,"name":"VIP ROOM 3","hotel_id":8}}}

```

##List Orders##


**Url**
<code>GET</code>api.hottab.pw/v2.1/waiter/food-orders?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQxLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvd2FpdGVyXC9sb2dpbiIsImlhdCI6IjE0MjgyMTkyMTUiLCJleHAiOiIxNDI4MzA1NjE1IiwibmJmIjoiMTQyODIxOTIxNSIsImp0aSI6IjBmOTAzZWM4YTAyOGRiOTNkYjkzODhjMjc2NTM0NmNiIn0.NjQ1NjI4OTU2ODc0MWI1NGMwODJhNzFlZTlkMmFkYWNhZWI4NzkyOGU5NTgxOWJlYzEwMjRkMmFhZTg0MTZjYg


**Parameters**

**Request params**
$$params

**Request data**
[]


Response:

```
{"error":false,"pagination":{"total":46,"per_page":10,"current_page":1,"last_page":5,"from":1,"to":10},"data":[{"id":1123,"room_id":72,"user_id":129,"guest_id":11,"order_number":null,"order_id":2,"status":1,"customer_number":1,"created_at":"2015-07-31 16:39:12","updated_at":"2015-07-31 16:40:01","current_time":1438337158,"staff":{"id":129,"first_name":"loi","last_name":"hoang","email":"cashier@hottab.net"},"room":{"id":72,"name":"VIP ROOM 3","hotel_id":8}},{"id":1121,"room_id":72,"user_id":129,"guest_id":11,"order_number":null,"order_id":6,"status":1,"customer_number":1,"created_at":"2015-07-29 16:26:07","updated_at":"2015-07-29 16:26:07","current_time":1438337158,"staff":{"id":129,"first_name":"loi","last_name":"hoang","email":"cashier@hottab.net"},"room":{"id":72,"name":"VIP ROOM 3","hotel_id":8}},{"id":1120,"room_id":72,"user_id":129,"guest_id":11,"order_number":null,"order_id":5,"status":1,"customer_number":1,"created_at":"2015-07-29 16:23:17","updated_at":"2015-07-29 16:23:17","current_time":1438337158,"staff":{"id":129,"first_name":"loi","last_name":"hoang","email":"cashier@hottab.net"},"room":{"id":72,"name":"VIP ROOM 3","hotel_id":8}},{"id":1119,"room_id":72,"user_id":129,"guest_id":11,"order_number":null,"order_id":4,"status":1,"customer_number":1,"created_at":"2015-07-29 16:22:33","updated_at":"2015-07-29 16:22:33","current_time":1438337158,"staff":{"id":129,"first_name":"loi","last_name":"hoang","email":"cashier@hottab.net"},"room":{"id":72,"name":"VIP ROOM 3","hotel_id":8}},{"id":1118,"room_id":72,"user_id":129,"guest_id":11,"order_number":null,"order_id":3,"status":1,"customer_number":1,"created_at":"2015-07-29 16:21:43","updated_at":"2015-07-29 16:21:43","current_time":1438337158,"staff":{"id":129,"first_name":"loi","last_name":"hoang","email":"cashier@hottab.net"},"room":{"id":72,"name":"VIP ROOM 3","hotel_id":8}},{"id":1117,"room_id":72,"user_id":129,"guest_id":11,"order_number":null,"order_id":2,"status":1,"customer_number":1,"created_at":"2015-07-29 16:16:02","updated_at":"2015-07-29 16:16:02","current_time":1438337158,"staff":{"id":129,"first_name":"loi","last_name":"hoang","email":"cashier@hottab.net"},"room":{"id":72,"name":"VIP ROOM 3","hotel_id":8}},{"id":1116,"room_id":72,"user_id":129,"guest_id":11,"order_number":null,"order_id":1,"status":1,"customer_number":1,"created_at":"2015-07-29 16:15:26","updated_at":"2015-07-29 16:15:26","current_time":1438337158,"staff":{"id":129,"first_name":"loi","last_name":"hoang","email":"cashier@hottab.net"},"room":{"id":72,"name":"VIP ROOM 3","hotel_id":8}},{"id":1115,"room_id":72,"user_id":129,"guest_id":11,"order_number":0,"order_id":3,"status":1,"customer_number":1,"created_at":"2015-07-27 15:10:56","updated_at":"2015-07-27 15:10:56","current_time":1438337158,"staff":{"id":129,"first_name":"loi","last_name":"hoang","email":"cashier@hottab.net"},"room":{"id":72,"name":"VIP ROOM 3","hotel_id":8}},{"id":1114,"room_id":72,"user_id":129,"guest_id":11,"order_number":0,"order_id":2,"status":1,"customer_number":1,"created_at":"2015-07-27 15:09:43","updated_at":"2015-07-27 15:09:43","current_time":1438337158,"staff":{"id":129,"first_name":"loi","last_name":"hoang","email":"cashier@hottab.net"},"room":{"id":72,"name":"VIP ROOM 3","hotel_id":8}},{"id":1113,"room_id":72,"user_id":129,"guest_id":11,"order_number":0,"order_id":1,"status":1,"customer_number":1,"created_at":"2015-07-27 15:07:28","updated_at":"2015-07-27 15:07:28","current_time":1438337158,"staff":{"id":129,"first_name":"loi","last_name":"hoang","email":"cashier@hottab.net"},"room":{"id":72,"name":"VIP ROOM 3","hotel_id":8}}]}

```

