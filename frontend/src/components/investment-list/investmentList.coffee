class InvestmentList extends Controller
  constructor: (@$router, @$http) ->
    @busy = true

InvestmentList::activate = ->
  @$http.get('/api/investments')
  .success((data, status, headers, config) =>
    @investments = data;
  )
  .finally(=> @busy = false)