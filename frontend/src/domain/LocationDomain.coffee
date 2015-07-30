class LocationApi extends Factory
  constructor: ($resource) ->
    return {
      Cities: $resource('api/cities/:id', {}, {
        query: {method: 'GET', params: {id: ''}, isArray: true}
      })
      Regions: $resource('api/regions/:id', {}, {
        query: {method: 'GET', params: {id: ''}, isArray: true}
      })
      Districts: $resource('api/districts/:id', {}, {
        query: {method: 'GET', params: {id: ''}, isArray: true}
      })

    }

