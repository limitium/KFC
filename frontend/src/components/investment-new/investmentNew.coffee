class InvestmentNew extends Controller
  constructor: (@$rootScope, @$http, @$router, @ToastService, @ListApi, @ListTransformerService)->

    initFor = (propertyType) =>
      @investment =
        propertyType: propertyType
        encumbrances: []
        investSegments: []

      if propertyType == 'Здание'
        @additionalSegments = []
        @isIndividualSaleVisible = false
        @isPotokiVisible = false
        @isOfficeSqmVisible = false
        @isRetailSqmVisible = false
        @isHotelSqmVisible = false
        @isBedroomsVisible = false
        @isIndustrialSqmVisible = false
        @isTechOccupancyVisible = false
        @isNoiVisible = false
        @isLandLeaseTermVisible = false
        @getInvestSegment().$promise.then(mapAdditionalInvestments)


    @onPropertyTypeChange = ->
      objectTypeTemplates = {}
      objectTypeTemplates['Здание'] = '/components/investment-new/building.html'
      objectTypeTemplates['Земельный участок'] = '/components/investment-new/parcel.html'
      initFor(@investment.propertyType)
      @currentTemplate = objectTypeTemplates[@investment.propertyType]

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

    checkSqmMainSegment = =>
      @isOfficeSqmVisible = @investment.segment in ['Бизнес центр', 'Административное здание', 'Особняк']
      @isRetailSqmVisible = @investment.segment == 'Торговый центр'
      @isHotelSqmVisible = @investment.segment == 'Отель'
      @isBedroomsVisible = @investment.segment == 'Отель'
      @isIndustrialSqmVisible = @investment.segment == 'Склад'


    @onSegmentChange = ->
      @investment.investSegments = []
      @additionalSegments = @mainToAdditionalMap[@investment.segment]
      @isIndividualSaleVisible = @investment.segment == 'Бизнес центр'
      @isPotokiVisible = @investment.segment == 'Торговый центр'
      checkSqmMainSegment()

    @onAdditionalSegmentChange = ->
      additionalSegments = @investment.investSegments
      @isIndividualSaleVisible = false
      @isPotokiVisible = false
      checkSqmMainSegment()
      for additionalSegment in additionalSegments
        if additionalSegment == 'Бизнес центр'
          @isOfficeSqmVisible = true
          @isIndividualSaleVisible = true
        if additionalSegment == 'Торговый центр'
          @isRetailSqmVisible = true
          @isPotokiVisible = true
        if additionalSegment == 'Склад'
          @isIndustrialSqmVisible = true
        if additionalSegment == 'Отель'
          @isHotelSqmVisible = true
          @isBedroomsVisible = true

    @onLeaseStatusChange = ->
      @isTechOccupancyVisible = '% заполнения' == @investment.leaseStatus
      @isNoiVisible = '% заполнения' == @investment.leaseStatus

    @onLandOwnerTypeChange = ->
      @isLandLeaseTermVisible = 'аренда до' == @investment.landOwnerType



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
    @getInvestLeaseStatus = ->
      @investLeaseStatus ?= @ListApi.Lists.investLeaseStatus()
    @getInvestLandLeaseTerm = ->
      @investLandLeaseTerm ?= @ListApi.Lists.investLandLeaseTerm()

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
