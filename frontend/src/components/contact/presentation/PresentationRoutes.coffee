class PresentationRoutes extends Config
  constructor: (@$stateProvider) ->
    @$stateProvider
    .state("contact.presentation",
      url: "/{contactid:[0-9A-Z]{12}}/presentation"
      template: "<ui-view/>"
      abstract: true
    )
    .state("contact.presentation.new",
      url: "/new"
      templateUrl: "/components/contact/presentation/new/presentation-new.html"
      controller: "PresentationNewController as ctrl"
    )
