## Teamleader Case

### CRM

A fictive crm api for providing development environment data. 

### API Index

Get all products

```
GET /api/products
Host: hogent.jetstax.com/stage/teamleader/case/crm
Content-type: application/json

[
  ...
  {
    "id": "A101",
    "description": "Screwdriver",
    "category": "1",
    "price": "9.75"
  }
  ...
]
```

Get all customers

```
GET /api/customers
Host: hogent.jetstax.com/stage/teamleader/case/crm
Content-type: application/json

[
  ...
  {
    "id": "1",
    "name": "Coca Cola",
    "since": "2014-06-28",
    "revenue": "492.12"
  }
  ...
]
```

Debug a valid connection

```
GET/POST /api/debug
Host: hogent.jetstax.com/stage/teamleader/case/crm
Content-type: application/json

{
  "success": true,
  "message": "Successful connection",
}
```


