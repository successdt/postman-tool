##Get hotel settings##


**Url**
<code>GET</code>api.hottab.pw/cashier/hotel-settings?token=6c40802f49db480f9c8222ff28fc579e&hotel_id=8


**Parameters**

**Request params**
$$params

**Request data**
[
    {
        "key": "print_server_ip",
        "value": "192.168.1.1",
        "type": "text",
        "enabled": true
    }
]


Response:

```
{"error":false,"data":{"id":1,"hotel_id":8,"print_server_ip":"192.168.1.1","cash_closed":1,"config":"json string","staff_second_screen":1,"staff_drink_category":"[\"103\"]","staff_main_category":"[\"100\"]","staff_starter_category":"[\"99\"]","staff_default_number_customer":1,"staff_require_supervisor":0,"staff_secure_actions_add_food":0,"staff_secure_actions_edit_food":0,"staff_secure_actions_delete_food":1,"staff_secure_actions_add_discount":0,"staff_secure_actions_delete_discount":0,"staff_secure_actions_add_tax":0,"staff_secure_actions_delete_tax":0,"staff_secure_actions_selecte_table":1,"staff_secure_actions_change_order_number":0,"staff_secure_actions_add_item_discount":0,"staff_secure_actions_cancel_order":0,"staff_receipt_show_modifier":1,"staff_receipt_copy_bill":2,"staff_receipt_copy_fire":1,"staff_receipt_copy_kitchen":1,"staff_receipt_copy_report":1,"staff_receipt_copy_withdraw":1,"staff_receipt_copy_deposit":1,"staff_receipt_copy_bar":1,"staff_receipt_copy_kitchenResend":1,"staff_receipt_copy_barResend":1,"staff_receipt_copy_billCancel":1,"staff_receipt_table_change":0}}

```

