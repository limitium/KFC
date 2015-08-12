class AccountRoutes extends Config
  constructor: (@$stateProvider) ->
    @$stateProvider
    .state("account",
      url: "/account"
      template: "<ui-view/>"
      abstract: true
    )


    .state("account.new",
      url: "/new"
      templateUrl: "/components/account/new/layout.html"
      controller: "AccountNewController as accountNew"
    )
