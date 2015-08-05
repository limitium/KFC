class AccountNew extends Controller
  constructor: (@$router, @StateParamsService) ->
    console.log 'AccountNew constructor'

AccountNew::activate = ->
  console.log 'Account new activate'
  return true

AccountNew::deactivate = ->
  @StateParamsService.put('mykey', 'account new')
  return true
