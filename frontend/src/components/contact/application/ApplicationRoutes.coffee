class ApplicationRoutes extends Config
  constructor: (@$stateProvider) ->
    @$stateProvider
    .state("contact.application",
      url: "/{contactid:[0-9A-Z]{12}}/application"
      template: "<ui-view/>"
      abstract: true
    )
    .state("contact.application.new",
      url: "/new"
      templateUrl: "/components/contact/application/new/application-new.html"
      controller: "ApplicationNewController as ctrl"
    )
