class ContactEdit extends Controller
  constructor: (@$http, @ListApi, @ListTransformerService, @TableUtils, @ContactApi, @$stateParams) ->
    @contact =
      contactid: @$stateParams.id

