class ContactDescription extends Controller
  constructor: (@$http, @ListApi, @ListTransformerService, @TableUtils, @ContactApi, @$stateParams, @contact) ->

  getSex: ->
    @sex ?= @ListApi.Lists.sex()
  getLanguage: ->
    @language ?= @ListApi.Lists.language()




