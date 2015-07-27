class allLists extends Controller
  constructor: (@ListApi) ->
    allLists = []
    selectedAllLists = []

    addList = (list) ->
      allLists.push(list)
      selectedAllLists.push({})

    addList(@ListApi.Lists.activityChargeType())
    addList(@ListApi.Lists.investPropertyType())
    addList(@ListApi.Lists.kfCurrency())
    addList(@ListApi.Lists.investVat())
    addList(@ListApi.Lists.investSegment())
    addList(@ListApi.Lists.investStatus())
    addList(@ListApi.Lists.investClass())
    addList(@ListApi.Lists.investFitOut())
    addList(@ListApi.Lists.investBuildingStatus())
    addList(@ListApi.Lists.investObremenenie())
    addList(@ListApi.Lists.investLeaseStatus())
    addList(@ListApi.Lists.investLandLeaseTerm())
    addList(@ListApi.Lists.investObremenenieZu())
    addList(@ListApi.Lists.kfInvestEntry())
    addList(@ListApi.Lists.availableBuildings())
    addList(@ListApi.Lists.investTechnical())
    addList(@ListApi.Lists.investLandStatus())


    @allLists = allLists
    @selectedAllLists = selectedAllLists

