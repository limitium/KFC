class InvestmentList extends Controller
  constructor: (@$http, @ListApi, @LocationApi, @ListTransformerService) ->
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



