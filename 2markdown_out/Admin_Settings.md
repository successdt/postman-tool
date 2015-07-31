##Get hotel settings##


**Url**
<code>GET</code>api.hottab.pw/admin/hotel-settings?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJleHAiOiIxNDM4NDEyNDc4IiwiaXNfcmVmcmVzaF90b2tlbiI6dHJ1ZSwic3ViIjo0MCwiaXNzIjoiaHR0cDpcL1wvYXBpLmhvdHRhYi5wd1wvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQzODMyNjA3OCIsIm5iZiI6IjE0MzgzMjYwNzgiLCJqdGkiOiIxZTcxOWM4YWU1MzkxZWQ1ZjdmMzNjMDc3ODU4NDMwOSJ9.NjUzOTM5ODk3ZTI5NGMwYTUwYWU5MjRjMmQyMTI4ZTIxMDJiYjA1MmFjZmNlNjU3NDBlNDFmMWE1NzNkNDQzNA&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "print_server_ip": "192.168.1.1",
    "config": "json string"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 1,
        "hotel_id": 8,
        "print_server_ip": "192.168.1.1",
        "cash_closed": 0,
        "config": "json string",
        "staff_second_screen": 1,
        "staff_drink_category": "[\"103\"]",
        "staff_main_category": "[\"100\"]",
        "staff_starter_category": "[\"99\"]",
        "staff_default_number_customer": 1,
        "staff_require_supervisor": 0,
        "staff_secure_actions_add_food": 0,
        "staff_secure_actions_edit_food": 0,
        "staff_secure_actions_delete_food": 1,
        "staff_secure_actions_add_discount": 0,
        "staff_secure_actions_delete_discount": 0,
        "staff_secure_actions_add_tax": 0,
        "staff_secure_actions_delete_tax": 0,
        "staff_secure_actions_selecte_table": 1,
        "staff_secure_actions_change_order_number": 0,
        "staff_secure_actions_add_item_discount": 0,
        "staff_secure_actions_cancel_order": 0,
        "staff_receipt_show_modifier": 1,
        "staff_receipt_copy_bill": 2,
        "staff_receipt_copy_fire": 1,
        "staff_receipt_copy_kitchen": 1,
        "staff_receipt_copy_report": 1,
        "staff_receipt_copy_withdraw": 1,
        "staff_receipt_copy_deposit": 1,
        "staff_receipt_copy_bar": 1,
        "staff_receipt_copy_kitchenResend": 1,
        "staff_receipt_copy_barResend": 1,
        "staff_receipt_copy_billCancel": 1,
        "staff_receipt_table_change": 0
    }
}

```

##Update hotel settings##


**Url**
<code>POST</code>api.hottab.pw/admin/hotel-settings?token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXUyJ9.eyJzdWIiOjQwLCJpc3MiOiJodHRwOlwvXC9hcGkuaG90dGFiLm5ldFwvYWRtaW5cL2xvZ2luIiwiaWF0IjoiMTQyOTgwMDAxMCIsImV4cCI6IjE0Mjk4ODY0MTAiLCJuYmYiOiIxNDI5ODAwMDEwIiwianRpIjoiNTY4ODg5M2Y4ZDhmN2JjNDQ4Y2NjMWNmMmI0ZjlhNTgifQ.MjRkYzIwOWI5ZWM2NDQ1ZGZmN2EzMDE0MWVjMTI3ZTU2YzEzYjBiNzY1Nzk1ZmI0YjNlNWE2MTQ4OTlkZWVmZg&hotel_id=8


**Parameters**
<code>token</code> $token
<code>hotel_id<code> 8


**Request data**
{
    "print_server_ip": "192.168.1.1",
    "config": "json string"
}


Response:

```
{
    "error": false,
    "data": {
        "id": 1,
        "hotel_id": 8,
        "print_server_ip": "192.168.1.1",
        "cash_closed": 0,
        "config": "json string",
        "staff_second_screen": 1,
        "staff_drink_category": "[\"103\"]",
        "staff_main_category": "[\"100\"]",
        "staff_starter_category": "[\"99\"]",
        "staff_default_number_customer": 1,
        "staff_require_supervisor": 0,
        "staff_secure_actions_add_food": 0,
        "staff_secure_actions_edit_food": 0,
        "staff_secure_actions_delete_food": 1,
        "staff_secure_actions_add_discount": 0,
        "staff_secure_actions_delete_discount": 0,
        "staff_secure_actions_add_tax": 0,
        "staff_secure_actions_delete_tax": 0,
        "staff_secure_actions_selecte_table": 1,
        "staff_secure_actions_change_order_number": 0,
        "staff_secure_actions_add_item_discount": 0,
        "staff_secure_actions_cancel_order": 0,
        "staff_receipt_show_modifier": 1,
        "staff_receipt_copy_bill": 2,
        "staff_receipt_copy_fire": 1,
        "staff_receipt_copy_kitchen": 1,
        "staff_receipt_copy_report": 1,
        "staff_receipt_copy_withdraw": 1,
        "staff_receipt_copy_deposit": 1,
        "staff_receipt_copy_bar": 1,
        "staff_receipt_copy_kitchenResend": 1,
        "staff_receipt_copy_barResend": 1,
        "staff_receipt_copy_billCancel": 1,
        "staff_receipt_table_change": 0
    }
}

```

