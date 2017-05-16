**API Business Intelligence Trade Force**
----
  Esta API tem como finalidade liberar os dados analíticos do DATA WAREHOUSE da TradeForce para gerar Dashboards 

* **URL**

  < https://intelligence.tradeforce.com/api/v1 >

* **Authorization:**
   /oauth/access_token 

  `POST - Request`
   
```
{
"username":"example@example.com",
"password":"123456",
"client_id":"1",
"client_secret":"secret",
"grant_type":"password"
}
```  
  
* **Status Code: 200 OK **
```
  {
  "access_token": "Bmz3FYOlZH2P1WWp7ss2NCoBEmIUwYXWSS5dhRP3",
  "token_type": "Bearer",
  "expires_in": 36000
  }
```

* **Status Code: 401 Unauthorized **
```
{
  "error": "invalid_client",
  "error_description": "Client authentication failed."
}
```

  
```
* **REQUESTS:**

* **GET:**
  
  - Headers

  Authorization: Bearer < token >
  Content-Type: application/json

  /dimensao_colaborador
  /dimensao_pdv
  /dimensao_formulario
  /dimensao_origem
  /dimensao_campanha
  /dimensao_entrada_campanha
  /dimensao_entrada_campanha_bloco
  /dimensao_storetracking
  /dimensao_storetracking_bloco 

```


* **Status Code: 200 **
```
[
  {
    "sk_formulario": "2751",
    "id": "2753",
    "valid_from": "1999-01-01 00:00:00.000",
    "valid_to": "2200-01-01 00:00:00.000",
    "version": "1",
    "Descricao": "ZZZ_Retrato_1704"
  },
  {
    "sk_formulario": "1805",
    "id": "1807",
    "valid_from": "1999-01-01 00:00:00.000",
    "valid_to": "2200-01-01 00:00:00.000",
    "version": "1",
    "Descricao": "ZZZ_Retrato_1703"
  },
]
```

* **Status Code: 401 Unauthorized **
```
{
  "error": "access_denied",
  "error_description": "The resource owner or authorization server denied the request."
}
```
* **REQUESTS:**

  **Method - GET**

```

  Authorization: Bearer < token >
  Content-Type: application/json

  /dimensao_colaborador
  /dimensao_pdv
  /dimensao_formulario
  /dimensao_origem
  /dimensao_campanha
  /dimensao_entrada_campanha
  /dimensao_entrada_campanha_bloco
  /dimensao_storetracking
  /dimensao_storetracking_bloco 

```

* **Query Builder:**

* **GET:**

```
   
  * **Limit:**
  /dimensao_colaborador?limit=2
  
  * **Order by:**
  /dimensao_pdv?order_by=id,desc
  
  * **Query Where Like :**
  
  /dimensao_formulario?descricao=*Abc
  /dimensao_storetracking_bloco=*Abc*

```

