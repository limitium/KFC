class InvestmentPictureComponent extends Directive
  constructor: () ->
    return {
    restrict: 'E'
    controllerAs: 'investmentPicture'
    templateUrl: '/components/investment-new/investment-picture.html'
    scope: {}
    bindToController: {
      investment: '='
    }
    controller: () ->
      console.log 'TBD'

    }

