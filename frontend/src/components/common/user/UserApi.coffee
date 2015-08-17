class UserApi extends Factory
  constructor: (Resource) ->
    return {
      UserInfo: Resource(
        "/api/userinfos/:id"
      , id: "@accountId"
      ,
        hint:
          method: "GET"
          url: "/api/userinfos/hint"
          isArray: true
      )
    }