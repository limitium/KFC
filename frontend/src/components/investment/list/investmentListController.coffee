class InvestmentList extends Controller
  constructor: (@$http, @ListApi, @LocationApi, @ListTransformerService, @TableUtils, @InvestmentApi) ->
    @dtOptions = @TableUtils.createOptions()
    @dtColumnDefs = @TableUtils.createColumnsWithControlColumn(13, 0)
    @investments = []

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

  doSearch: () =>
    @investments = @InvestmentApi.Investments.query(@criteria)
    return


InvestmentList::activate = ->
  @criteria =
    classes: []
    cities: []
    segments: []
    districts: []
    statuses: []
    rings: []
    leaseStatuses: []
    subways: []
    currencies: []



