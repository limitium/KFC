class InvestmentList extends Controller
  constructor: (@$router, @$http, @ListApi, @LocationApi) ->
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
      @districts ?= @LocationApi.Districts.query()
    @getSubways = () ->
      @districts ?= @LocationApi.Subways.query()

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



