class InvestmentList extends Controller
  constructor: (@$router, @$http, @ListApi, @LocationApi, @ListTransformerService) ->
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
      if @search.cities.length > 0 and @search.cities != @lastDistrictSearchCities
        @lastDistrictSearchCities = @search.cities
        citiesIds = @ListTransformerService.getIdsByNames(@cities, @search.cities)
        console.log 'cities ids', citiesIds
        @districts = @LocationApi.Districts.query({"cities[]": citiesIds})
      @districts
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



