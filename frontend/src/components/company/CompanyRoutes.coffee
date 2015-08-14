class InvestmentRoutes extends Config
  constructor: (@$stateProvider) ->
    @$stateProvider
    .state("company",
      url: "/company"
      template: "<ui-view/>"
      abstract: true
    )


    .state("company.list",
      url: "/list"
      templateUrl: "/components/company/list/company-list.html"
      controller: "CompanyListController as companyList"
    )
    .state("company.new",
      url: "/new"
      templateUrl: "/components/company/new/company-new.html"
      controller: "CompanyNewController as companyNew"
    )
