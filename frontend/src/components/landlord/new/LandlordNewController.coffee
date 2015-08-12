class LandlordNew extends Controller
  constructor: (@$state, @$stateParams, @ListApi, @AccountApi) ->
    console.log 'LandlordNew constructor'
    @landlord = {}
    @contacts = []

    #   Getters
  getContactTypes: ->
    @contactType ?= @ListApi.Lists.contactType()

  getAccounts: (val) ->
    @AccountApi.Accounts.query(name: val).$promise

  onAccountChange: (selectedAccount)->
    @landlord.contact = ''
    @contacts = @AccountApi.Contacts.query accountid: selectedAccount.id

  save: =>
    investment = @$stateParams.investment
    return unless investment?
    if !investment.landlords
      investment.landlords = []
    investment.landlords.push @landlord
    @$state.go @$stateParams.redirectTo

