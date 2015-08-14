class ContactRoutes extends Config
  constructor: (@$stateProvider) ->
    @$stateProvider
    .state("contact",
      url: "/contact"
      template: "<ui-view/>"
      abstract: true
    )
    .state("contact.list",
      url: "/list"
      templateUrl: "/components/contact/list/contact-list-layout.html"
      controller: "ContactListController as ctrl"
    )
    .state("contact.my",
      url: "/my"
      templateUrl: "/components/contact/my/contact-my.html"
      controller: "ContactMyController as ctrl"
    )