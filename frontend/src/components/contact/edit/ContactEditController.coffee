class ContactEdit extends Controller
  constructor: (@$http, @ListApi, @ListTransformerService, @TableUtils, @ContactApi, @$stateParams) ->
    @id = @$stateParams.id;

