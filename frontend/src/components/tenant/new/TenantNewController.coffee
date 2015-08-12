class TenantNew extends Controller
  constructor: (@ListApi, @AccountApi) ->
    @tenant = {}
    @contacts = []
    #   Getters
    @getContactTypes = ->
      @contactType ?= @ListApi.Lists.tenantContactType()
    @getAccounts = (val) ->
      @AccountApi.Accounts.query({"name": val}).$promise

    @onAccountChange = (selectedAccount)->
      @tenant.contact = ''
      @contacts = @AccountApi.Contacts.query({"accountid": selectedAccount.id})

    @save = () ->
      investment = @StateParamsService.get('investment')
      if !investment.tenants
        investment.tenants = []
      investment.tenants.push @tenant
      @$router.navigate('/investment/new')
    return

