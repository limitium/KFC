class LandlordApi extends Factory
  constructor: ($resource) ->
    return {
      Landlords: $resource('api/landlords/:id', {}, {
        query: {method: 'GET', params: {id: ''}, isArray: true}
      })
    }

