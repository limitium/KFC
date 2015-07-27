class InvestmentNew extends Controller
  constructor: (@$rootScope, @$http, @$router, @ToastService, @ListApi)->
    @investPropertyType = @ListApi.Lists.investPropertyType();
    @investment =
      nameRus: ''
      property:
        createuser: ''


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
