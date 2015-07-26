class allLists extends Controller
  constructor: (@ListApi) ->
    @activityChargeType = @ListApi.Lists.activityChargeType()