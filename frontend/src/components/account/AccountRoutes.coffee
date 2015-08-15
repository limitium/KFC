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
    .state("account.show",
      url: "/show/:id"
      templateUrl: "/components/account/show/account-show.html"
      controller: "AccountShowController as ctrl"
      abstract: true
    )
    .state("account.show.info",
      url: "/info"
      templateUrl: "/components/account/show/info/account-show-info.html"
      controller: "AccountShowInfoController as ctrl"
    )
    .state("account.show.contacts",
      url: "/contacts"
      templateUrl: "/components/account/show/contacts/account-show-contacts.html"
      controller: "AccountShowContactsController as ctrl"
    )
    .state("account.show.history",
      url: "/history"
      templateUrl: "/components/account/show/history/account-show-history.html"
      controller: "AccountShowHistoryController as ctrl"
    )
