class InvestmentList extends Controller
  constructor: (@$router, @$http) ->
    @busy = true

InvestmentList::activate = ->
  @$http.get('/api/investment')
  .success((data, status, headers, config) =>
    @investments = data;
  )
  .finally(=> @busy = false)