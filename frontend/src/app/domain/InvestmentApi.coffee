class InvestmentApi extends Factory
  constructor: ($resource) ->
    return {
      Investments: $resource('api/investments/:id', {}, {
        query: {method: 'GET', params: {id: ''}, isArray: true}
      })
    }

