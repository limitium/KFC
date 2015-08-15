class AccountShow extends Controller
  constructor: (@AccountApi, @$stateParams) ->
    @account = @AccountApi.get id: @$stateParams.id