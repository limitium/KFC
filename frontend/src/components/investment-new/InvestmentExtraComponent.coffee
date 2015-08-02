class InvestmentExtraComponent extends Directive
  constructor: () ->
    return {
    restrict: 'E'
    controllerAs: 'investmentExtra'
    templateUrl: '/components/investment-new/investment-extra.html'
    scope: {}
    bindToController: {
      investment: '='
    }
    controller: () ->
      console.log 'TBD'

    }

