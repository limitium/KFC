class AccountRoutes extends Config
  constructor: (@$stateProvider) ->
    @$stateProvider
    .state("account",
      url: "/account"
      template: "<ui-view/>"
      abstract: true
    )


    .state("account.list",
      url: "/list"
      templateUrl: "/components/account/list/account-list.html"
      controller: "AccountListController as ctrl"
    )
    .state("account.new",
      url: "/new"
      templateUrl: "/components/account/new/account-new.html"
      controller: "AccountNewController as ctrl"
    )
