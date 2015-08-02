class InvestmentOwnersComponent extends Directive
  constructor: () ->
    return {
    restrict: 'E'
    controllerAs: 'investmentOwnerse'
    templateUrl: '/components/investment-new/investment-owners.html'
    scope: {}
    bindToController: {
      investment: '='
    }
    controller: () ->
      console.log 'TBD'

    }

