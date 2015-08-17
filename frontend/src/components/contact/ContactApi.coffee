class ContactApi extends Factory
  constructor: (Resource) ->
    return Resource(
      "/api/contacts/:id"
    , id: "@accountId"
    ,
      search:
        method: "GET"
        url: "/api/contacts/search"
        params:
          name: ""
        isArray: true
      update:
        method: 'PUT'
        params:
          id: '@id'
      hint:
        method: "GET"
        url: "/api/contacts/hint"
        params:
          name: ""
        isArray: true
    )