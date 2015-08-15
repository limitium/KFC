class AccountApi extends Factory
  constructor: (Resource) ->
    return Resource(
      "/api/accounts/:id"
    , id: "@accountid"
    ,
      list:
        method: "GET"
        url: "/api/accounts/list"
        params:
          name: ""
        isArray: true

      search:
        method: "GET"
        url: "/api/accounts/search"
        params:
          name: ""
        isArray: true
    )