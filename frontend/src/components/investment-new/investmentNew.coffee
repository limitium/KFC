class InvestmentNew extends Controller
  constructor: (@$rootScope, @$http, @$router, @ToastService, @ListApi, @ListTransformerService)->
    @investPropertyType = @ListApi.Lists.investPropertyType();
    @kfCurrency = @ListApi.Lists.kfCurrency();
    @investVat = @ListApi.Lists.investVat();
    @investSegment = @ListApi.Lists.investSegment();
    @investStatus = @ListApi.Lists.investStatus();
    @investClass = @ListApi.Lists.investClass();
    @investFitOut = @ListApi.Lists.investFitOut();
    @investBuildingStatus = @ListApi.Lists.investBuildingStatus();
    @investObremenenie = @ListApi.Lists.investObremenenie();
    @investLeaseStatus = @ListApi.Lists.investLeaseStatus();
    @investLandLeaseTerm = @ListApi.Lists.investLandLeaseTerm();


    mapAdditionalInvestments = (investment) =>
      nMap = @ListTransformerService.mapToName(investment)
      @mainToAdditionalMap = {}
      @mainToAdditionalMap[nMap['Бизнес центр'].itemid] = [nMap["Торговый центр"], nMap["Склад"]]
      @mainToAdditionalMap[nMap["Торговый центр"].itemid] = [nMap["Бизнес центр"], nMap["Склад"]]
      @mainToAdditionalMap[nMap["Административное здание"].itemid] = []
      @mainToAdditionalMap[nMap["Особняк"].itemid] = []
      @mainToAdditionalMap[nMap["МФК"].itemid] = [nMap["Бизнес центр"], nMap["Торговый центр"], nMap["Отель"], nMap["Склад"]]
      @mainToAdditionalMap[nMap["Склад"].itemid] = [nMap["Бизнес центр"]]
      @mainToAdditionalMap[nMap["Отель"].itemid] = []

    @investSegment.$promise.then(mapAdditionalInvestments)

    @investment =
      nameRus: ''
      property:
        createuser: ''

    @additionalSegments = []
    @isIndividualSaleVisible = false
    @isPotokiVisible = false
    @isOfficeSqmVisible = false
    @isRetailSqmVisible = false
    @isHotelSqmVisible = false
    @isBedroomsVisible = false
    @isIndustrialSqmVisible = false

    checkSqmMainSegment = =>
      idMap = @ListTransformerService.mapToId(@investSegment)
      segment = idMap[@investment.segment]
      @isOfficeSqmVisible = segment.text in ['Бизнес центр', 'Административное здание', 'Особняк']
      @isRetailSqmVisible = segment.text == 'Торговый центр'
      @isHotelSqmVisible = segment.text == 'Отель'
      @isBedroomsVisible = segment.text == 'Отель'
      @isIndustrialSqmVisible = segment.text == 'Склад'


    @onSegmentChange = ->
      @investment.investSegments = []
      @additionalSegments = @mainToAdditionalMap[@investment.segment]
      idMap = @ListTransformerService.mapToId(@investSegment)
      segment = idMap[@investment.segment]
      @isIndividualSaleVisible = segment.text == 'Бизнес центр'
      @isPotokiVisible = segment.text == 'Торговый центр'

      checkSqmMainSegment()

    @onAdditionalSegmentChange = ->
      idMap = @ListTransformerService.mapToId(@investSegment)
      additionalSegments = (idMap[id] for id in @investment.investSegments)
      @isIndividualSaleVisible = false
      @isPotokiVisible = false
      checkSqmMainSegment()
      for additionalSegment in additionalSegments
        if additionalSegment.text == 'Бизнес центр'
          @isOfficeSqmVisible = true
          @isIndividualSaleVisible = true
        if additionalSegment.text == 'Торговый центр'
          @isRetailSqmVisible = true
          @isPotokiVisible = true
        if additionalSegment.text == 'Склад'
          @isIndustrialSqmVisible = true
        if additionalSegment.text == 'Отель'
          @isHotelSqmVisible = true
          @isBedroomsVisible = true


    @isTechOccupancyVisible = false
    @isNoiVisible = false
    @onLeaseStatusChange = ->
      idMap = @ListTransformerService.mapToId(@investLeaseStatus)
      leaseStatus = idMap[@investment.leaseStatus]
      @isTechOccupancyVisible = '% заполнения' == leaseStatus.text
      @isNoiVisible = '% заполнения' == leaseStatus.text

    @isLandLeaseTermVisible = false
    @onLandOwnerTypeChange = ->
      idMap = @ListTransformerService.mapToId(@investLandLeaseTerm)
      landOwnerType = idMap[@investment.landOwnerType]
      @isLandLeaseTermVisible = 'аренда до' == landOwnerType.text



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
