class ContactApi extends Factory
  constructor: (Resource) ->
    return Resource(
      "/api/contacts/:id"
    , id: "@accountId"
    ,
      search:
        method: "GET"
        url: "/api/contacts"
        params:
          name: ""
        isArray: true
      hint:
        method: "GET"
        url: "/api/contacts"
        params:
          name: ""
          typeahead: true
        isArray: true
    )