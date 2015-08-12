class TenantNew extends Controller
  constructor: (@$state,@$stateParams,@ListApi, @AccountApi) ->
    @tenant = {}
    @contacts = []

  #   Getters
  getContactTypes: ->
    @contactType ?= @ListApi.Lists.tenantContactType()

  getAccounts: (val) ->
    @AccountApi.Accounts.query(name: val).$promise

  onAccountChange: (selectedAccount)->
    @tenant.contact = ''
    @contacts = @AccountApi.Contacts.query accountid: selectedAccount.id

  save: =>
    investment = @$stateParams.investment
    return unless investment?
    if !investment.tenants
      investment.tenants = []
    investment.tenants.push @tenant
    @$state.go @$stateParams.redirectTo

