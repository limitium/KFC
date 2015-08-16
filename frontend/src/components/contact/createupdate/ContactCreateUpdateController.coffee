class ContactCreateUpdate extends Controller
  constructor: (@$http, @ListApi, @ListTransformerService, @TableUtils, @ContactApi, @$stateParams) ->
    if @$stateParams.id == 'new'
      @contact =
        contactid: ''
    else
      #Load it
      @contact =
        contactid: @$stateParams.id


