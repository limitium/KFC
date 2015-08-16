class ApplicationNew extends Controller
  constructor: (@$http, @ListApi, @ListTransformerService, @TableUtils, @ContactApi, @$stateParams) ->
    @contactid = @$stateParams.contactid;

