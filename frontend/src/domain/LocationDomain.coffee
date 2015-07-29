class LocationApi extends Factory
  constructor: ($resource) ->
    return {
      Cities: $resource('api/cities/:id', {}, {
        query: {method: 'GET', params: {id: ''}, isArray: true}
      })
      Regions: $resource('api/regions')
      Districts: $resource('api/districts')
    }

