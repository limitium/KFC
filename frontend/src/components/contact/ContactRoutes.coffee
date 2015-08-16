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
      templateUrl: "/components/contact/list/contact-list.html"
      controller: "ContactListController as ctrl"
    )
    .state("contact.createupdate",
      url: "/{id:[0-9A-Z]{12}|new}"
      templateUrl: "/components/contact/common/create-or-update.html"
      controller: "ContactEditController as ctrl"
    )
    .state("contact.my",
      url: "/my"
      templateUrl: "/components/contact/my/contact-my.html"
      controller: "ContactMyController as ctrl"
    )