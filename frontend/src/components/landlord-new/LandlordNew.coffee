class LandlordNew extends Controller
  constructor: (@StateParamsService, @ListApi, @AccountApi) ->
    console.log 'LandlordNew constructor'
    @landlord = {}

    #   Getters
    @getContactTypes = ->
      @contactType ?= @ListApi.Lists.contactType()
    @getAccounts = (val) ->
      @AccountApi.Accounts.query({"name": val}).$promise

    @contacts = []
    @onAccountChange = (selectedAccount)->
      @landlord.contact = ''
      @contacts = @AccountApi.Contacts.query({"accountid": selectedAccount.id})
    return


LandlordNew::deactivate = ->
  console.log 'LandlordNew::deactivate'
  return true

LandlordNew::activate = ->
  console.log 'LandlordNew::activate'
  return true
