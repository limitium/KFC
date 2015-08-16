class RingRoutes extends Config
  constructor: (@$stateProvider) ->
    @$stateProvider
    .state("contact.ring",
      url: "/{contactid:[0-9A-Z]{12}}/ring"
      template: "<ui-view/>"
      abstract: true
    )
    .state("contact.ring.new",
      url: "/new"
      templateUrl: "/components/contact/ring/new/ring-new.html"
      controller: "RingNewController as ctrl"
    )
