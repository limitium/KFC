class InvestmentNew extends Controller
  constructor: (@$rootScope, @$http, @$router, @ToastService, @ListApi, @LocationApi, @ListTransformerService, @StateParamsService) ->
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
  return true

InvestmentNew::activate = ->
  @tabs =
    'object-tab':
      active: true
    'blocks-tab':
      active: false
    'owners-tab':
      active: false
    'photo-tab':
      active: false
    'extra-tab':
      active: false
  if @StateParamsService.get('redirect')
    @StateParamsService.put('redirect', false)
    @investment = @StateParamsService.get('investment')
    activeTab = @StateParamsService.get('from-tab')
    @tabs[activeTab].active = true
  else
    @investment = {}
    @tabs['object-tab'].active = true


  return true
