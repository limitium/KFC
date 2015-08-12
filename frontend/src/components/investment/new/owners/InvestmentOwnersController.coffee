class InvestmentOwners extends Controller
  constructor: (@$state, InvestmentService, ListApi, TableUtils) ->
    @investment = InvestmentService.investment
    @landlordDtOptions = TableUtils.createOptions()
    @landlordDtColumnDefs = TableUtils.createColumns(6)
    @tenantDtOptions = TableUtils.createOptions()
    @tenantDtColumnDefs = TableUtils.createColumns(8)

    if not @investment.landlords
      @investment.landlords = []
    if not @investment.tenants
      @investment.tenants = []


  removeLandlord: (index) =>
    @investment.landlords.splice(index, 1)
  removeTenant: (index) =>
    @investment.tenants.splice(index, 1)

  redirectTo: (state) =>
    @$state.go(state)
#      StateParamsService.put('redirect', true)
#      StateParamsService.put('investment', @investment)
#      StateParamsService.put('from-tab', 'owners-tab')

  goToNewLandlord: =>
    @redirectTo('landlord.new')

  goToNewTenant: =>
    @redirectTo('tenant.new')

  #Getters
  getContactTypes: =>
    @contactType ?= ListApi.Lists.contactType()
  getTenantContactTypes: =>
    @tenantContactType ?= ListApi.Lists.tenantContactType()

