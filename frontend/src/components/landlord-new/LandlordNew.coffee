class LandlordNew extends Controller
  constructor: (@StateParamsService, @ListApi, @AccountApi) ->
    console.log 'LandlordNew constructor'
    @landlord = {}

    #   Getters
    @getContactTypes = ->
      @contactType ?= @ListApi.Lists.contactType()
    @getAccounts = (val) ->
      @AccountApi.Accounts.query({"name": val}).$promise
    @getContacts = (val) ->
      @AccountApi.Contacts.query({"name": val, "account": @landlord.account.id}).$promise
    return


LandlordNew::deactivate = ->
  console.log 'LandlordNew::deactivate'
  return true

LandlordNew::activate = ->
  console.log 'LandlordNew::activate'
  return true
