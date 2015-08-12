class LandlordNew extends Controller
  constructor: (@ListApi, @AccountApi) ->
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

    @save = () ->
      investment = @StateParamsService.get('investment')
      if !investment.landlords
        investment.landlords = []
      investment.landlords.push @landlord
      @$router.navigate('/investment/new')
    return

