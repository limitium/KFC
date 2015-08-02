class InvestmentBlocksComponent extends Directive
  constructor: () ->
    return {
    restrict: 'E'
    controllerAs: 'investmentBlocks'
    templateUrl: '/components/investment-new/investment-blocks.html'
    scope: {}
    bindToController: {
      investment: '='
    }
    controller: () ->
      console.log 'TBD'

    }

