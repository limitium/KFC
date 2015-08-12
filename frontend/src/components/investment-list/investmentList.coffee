class InvestmentList extends Controller
  constructor: (@$router, @$http, @ListApi, @LocationApi, @ListTransformerService, @TableUtils) ->

    @dtOptions = @TableUtils.createOptions()
    @dtColumnDefs = @TableUtils.createColumns(13)
    @investments = []

    @doSearch = () ->
      @investments = [
        {
          "checked": false,
          "test": 123
        },
        {
          "checked": true,
          "test": 666
        }
      ]
      return

    @onCitiesChange = ->
      citiesIds = @ListTransformerService.getIdsByNames(@cities, @criteria.cities)
      @districts = @LocationApi.Districts.query({"cities[]": citiesIds})
      @subways = @LocationApi.Subways.query({"cities[]": citiesIds})

    #Getters
    @getInvestStatus = ->
      @investStatus ?= @ListApi.Lists.investStatus()
    @getInvestClass = ->
      @investClass ?= @ListApi.Lists.investClass()
    @getInvestLeaseStatus = ->
      @investLeaseStatus ?= @ListApi.Lists.investLeaseStatus()
    @getInvestSegment = ->
      @investSegment ?= @ListApi.Lists.investSegment()
    @getKfCurrency = ->
      @kfCurrency ?= @ListApi.Lists.kfCurrency()
    @getCities = () ->
      @cities ?= @LocationApi.Cities.query()
    @getInvestRings = () ->
      @investRings ?= @ListApi.Lists.investRings()
    @getDistricts = () ->
      @districts ?= []
    @getSubways = () ->
      @subways ?= []

InvestmentList::activate = ->
  @search =
    classes: []
    cities: []
    segments: []
    districts: []
    statuses: []
    rings: []
    leaseStatuses: []
    subways: []
    currencies: []



