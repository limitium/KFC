class TenantRoutes extends Config
  constructor: (@$stateProvider) ->
    @$stateProvider
    .state("tenant",
      url: "/tenant"
      template: "<ui-view/>"
      abstract: true
    )


    .state("tenant.new",
      url: "/new"
      templateUrl: "/components/tenant/new/layout.html"
      controller: "TenantNewController as tenantNew"
      params:
        investment: null
        redirectTo: null
    )
