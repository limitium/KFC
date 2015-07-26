class allLists extends Controller
  constructor: (@ListApi) ->
    @activityChargeType = @ListApi.Lists.activityChargeType()
    @selected = {}
    @selected.activityChargeType = {}
    @availableColors = ['Red','Green','Blue','Yellow','Magenta','Maroon','Umbra','Turquoise']
