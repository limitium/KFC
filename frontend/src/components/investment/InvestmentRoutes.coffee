class InvestmentRoutes extends Config
  constructor: (@$stateProvider) ->
    @$stateProvider
    .state("investment",
      url: "/investment"
      template: "<ui-view/>"
      abstract: true
    )


    .state("investment.new",
      url: "/new"
      abstract: true
      templateUrl: "/components/investment/new/layout.html"
      controller: "InvestmentNewController as investmentNew"
    )
    .state("investment.new.object",
      url: "/object"
      templateUrl: "/components/investment/new/object/layout.html"
      controller: "InvestmentObjectController as investmentObject"
    )
    .state("investment.new.blocks",
      url: "/blocks"
      templateUrl: "/components/investment/new/blocks/layout.html"
      controller: "InvestmentBlocksController as investmentBlocks"
    )
    .state("investment.new.extra",
      url: "/extra"
      templateUrl: "/components/investment/new/extra/layout.html"
      controller: "InvestmentExtraController as investmentExtra"
    )
    .state("investment.new.owners",
      url: "/owners"
      templateUrl: "/components/investment/new/owners/layout.html"
      controller: "InvestmentOwnersController as investmentOwners"
    )
    .state("investment.new.picture",
      url: "/picture"
      templateUrl: "/components/investment/new/picture/layout.html"
      controller: "InvestmentPictureController as investmentPicture"
    )


    .state("investment.list",
      url: "/list"
      templateUrl: "/components/investment/list/layout.html"
      controller: "InvestmentListController as investmentList"
    )