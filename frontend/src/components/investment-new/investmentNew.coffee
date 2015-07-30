class InvestmentNew extends Controller
  constructor: (@$rootScope, @$http, @$router, @ToastService, @ListApi, @LocationApi, @ListTransformerService)->

    mapAdditionalInvestments = (investSegment) =>
      nMap = @ListTransformerService.mapToName(investSegment)
      @mainToAdditionalMap = {}
      @mainToAdditionalMap[nMap['Бизнес центр'].text] = [nMap["Торговый центр"], nMap["Склад"]]
      @mainToAdditionalMap[nMap["Торговый центр"].text] = [nMap["Бизнес центр"], nMap["Склад"]]
      @mainToAdditionalMap[nMap["Административное здание"].text] = []
      @mainToAdditionalMap[nMap["Особняк"].text] = []
      @mainToAdditionalMap[nMap["МФК"].text] = [nMap["Бизнес центр"], nMap["Торговый центр"], nMap["Отель"], nMap["Склад"]]
      @mainToAdditionalMap[nMap["Склад"].text] = [nMap["Бизнес центр"]]
      @mainToAdditionalMap[nMap["Отель"].text] = []
  #      Those two don't exist in invest segment picklist
  #      @mainToAdditionalMap[nMap["Жилье"].text] = [nMap["Коммерческие площади"]]
  #      @mainToAdditionalMap[nMap["Апартаменты"].text] = [nMap["Коммерческие площади"]]

    @reset = ->
      objectTypeTemplates = {}
      objectTypeTemplates['Здание'] = '/components/investment-new/building.html'
      objectTypeTemplates['Земельный участок'] = '/components/investment-new/parcel.html'
      @locationTemplate = '/components/investment-new/location.html'
      @investment =
        propertyType: @investment.propertyType
        encumbrances: []
        investSegments: []
        location:
        # Москва
          city: @LocationApi.Cities.get({id: 'Q6UJ9A004W3L'})

      @getInvestSegment().$promise.then(mapAdditionalInvestments)
      @additionalSegments = []
      @currentTemplate = objectTypeTemplates[@investment.propertyType]

    @investment =
      propertyType: 'Здание'

    @onSegmentChange = ->
      @investment.investSegments = []
      @additionalSegments = @mainToAdditionalMap[@investment.segment]

    @isSegmentSelected = (segment) ->
      segment == @investment.segment or segment in @investment.investSegments

    @anyOfSegmentsSelected = (segments) ->
      for segment in segments
        if @isSegmentSelected(segment)
          return true
      return false

    #   Getters
    @getInvestPropertyType = ->
      @investPropertyType ?= @ListApi.Lists.investPropertyType()
    @getKfCurrency = ->
      @kfCurrency ?= @ListApi.Lists.kfCurrency()
    @getInvestVat = ->
      @investVat ?= @ListApi.Lists.investVat()
    @getInvestSegment = ->
      @investSegment ?= @ListApi.Lists.investSegment()
    @getInvestStatus = ->
      @investStatus ?= @ListApi.Lists.investStatus()
    @getInvestClass = ->
      @investClass ?= @ListApi.Lists.investClass()
    @getInvestFitOut = ->
      @investFitOut ?= @ListApi.Lists.investFitOut()
    @getInvestBuildingStatus = ->
      @investBuildingStatus ?= @ListApi.Lists.investBuildingStatus()
    @getInvestObremenenie = ->
      @investObremenenie ?= @ListApi.Lists.investObremenenie()
    @getInvestObremenenieZu = ->
      @investObremenenieZu ?= @ListApi.Lists.investObremenenieZu()
    @getInvestLeaseStatus = ->
      @investLeaseStatus ?= @ListApi.Lists.investLeaseStatus()
    @getInvestLandLeaseTerm = ->
      @investLandLeaseTerm ?= @ListApi.Lists.investLandLeaseTerm()
    @getEntryCondition = ->
      @entryCondition ?= @ListApi.Lists.investEntry()
    @getAvailableBuildings = ->
      @availableBuildings ?= @ListApi.Lists.availableBuildings()
    @getInvestBuildingStatusZu = ->
      @investBuildingStatusZu ?= @ListApi.Lists.investBuildingStatusZu()
    @getInvestTechnical = ->
      @investTechnical ?= @ListApi.Lists.investTechnical()
    @getInvestLandStatus = ->
      @investLandStatus ?= @ListApi.Lists.investLandStatus()
    @getCities = (val) ->
      @LocationApi.Cities.query({"name": val}).$promise

    @reset()
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
