class InvestmentNew extends Controller
  constructor: (@$rootScope, @$http, @$router, @ToastService, @ListApi, @LocationApi, @ListTransformerService, @StateParamsService) ->
    console.log 'InvestmentNew constructor'
    @investment = {}
    @busy = false

  add: =>
    @busy = true
    @$http.post('/api/investments', @investment)
    .success((data, status, headers, config) =>
#      @$router.parent.navigate('/')
      @ToastService.toast 'Investment created'
    )
    .finally(=>
      @busy = false
    )

InvestmentNew::canDeactivate = ->
  !@busy

InvestmentNew::deactivate = ->
  @StateParamsService.put('key', 'investment')
  return true

InvestmentNew::activate = ->
  console.log 'InvestmentNew activate'
  return true
