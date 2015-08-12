class LandlordRoutes extends Config
  constructor: (@$stateProvider) ->
    @$stateProvider
    .state("landlord",
      url: "/landlord"
      template: "<ui-view/>"
      abstract: true
    )


    .state("landlord.new",
      url: "/new"
      templateUrl: "/components/landlord/new/layout.html"
      controller: "LandlordNewController as landlordNew"
      params:
        investment: null
        redirectTo: null
    )
