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
    .state("contact.edit",
      url: "/edit/:id"
      templateUrl: "/components/contact/edit/contact-edit.html"
      controller: "ContactEditController as ctrl"
    )
    .state("contact.my",
      url: "/my"
      templateUrl: "/components/contact/my/contact-my.html"
      controller: "ContactMyController as ctrl"
    )