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
          city: @LocationApi.Cities.get({id: 'Q6UJ9A004W3L'})

      @getInvestSegment().$promise.then(mapAdditionalInvestments)
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
      @isBuildingsSqmVisible = false
      @isResidentialSqmVisible = false
      @areTepsVisible = true
      @currentTemplate = objectTypeTemplates[@investment.propertyType]
      @locationVisible = false

    @investment =
      propertyType: 'Здание'

    checkSqmMainSegment = =>
      @isOfficeSqmVisible = @investment.segment in ['Бизнес центр', 'Административное здание', 'Особняк']
      @isRetailSqmVisible = @investment.segment == 'Торговый центр'
      @isHotelSqmVisible = @investment.segment == 'Отель'
      @isBedroomsVisible = @investment.segment == 'Отель'
      @isIndustrialSqmVisible = @investment.segment == 'Склад'
      @isResidentialSqmVisible = @investment.segment in ['Жилье', 'Апартаменты']


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

    @onAvailableBuildingsChange = ->
      @isBuildingsSqmVisible = 'Да' == @investment.availableBuildings

    @onLandStatusChange = ->
      @areTepsVisible = 'без проработок' != @investment.landStatus


    @getCities = (val) ->
      @LocationApi.Cities.query({"name": val}).$promise


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
