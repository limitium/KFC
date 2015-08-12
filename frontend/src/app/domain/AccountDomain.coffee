class AccountApi extends Factory
  constructor: ($resource) ->
    return {
    Accounts: $resource('api/accounts/:id', {}, {
      query: {method: 'GET', params: {id: ''}, isArray: true}
    })
    Contacts: $resource('api/contacts/:id', {}, {
      query: {method: 'GET', params: {id: ''}, isArray: true}
    })

    }

