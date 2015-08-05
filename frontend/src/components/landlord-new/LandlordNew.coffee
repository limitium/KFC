class LandlordNew extends Controller
  constructor: (@StateParamsService, @ListApi) ->
    console.log 'LandlordNew constructor'
    @landlord = {}

    #   Getters
    @getContactTypes = ->
      @contactType ?= @ListApi.Lists.contactType()

    @getAccounts = (val) ->
      AccountApi.Accounts.query({"name": val}).$promise

    return


LandlordNew::deactivate = ->
  console.log 'LandlordNew::deactivate'
  return true

LandlordNew::activate = ->
  console.log 'LandlordNew::activate'
  return true
