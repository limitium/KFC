class InvestmentNew extends Controller
  constructor: (@$rootScope, @$http, @$router, @ToastService)->
    @investment =
      spk_propertyid: ''
      name_rus: ''

    @busy = false

  add: =>
    @busy = true
    @$http.post('/api/investment', @investment)
    .success((data, status, headers, config) =>

#      @$router.parent.navigate('/')
      @ToastService.toast 'Investment created'
    )
    .finally(=>
      @busy = false
    )

InvestmentNew::canDeactivate = ->
  !@busy
