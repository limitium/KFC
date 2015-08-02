class InvestmentBlocksComponent extends Directive
  constructor: (DTOptionsBuilder, DTColumnBuilder) ->
    return {
    restrict: 'E'
    controllerAs: 'ctrl'
    templateUrl: '/components/investment-new/investment-blocks.html'
    scope: {}
    bindToController: {
      investment: '='
    }
    controller: () ->
      @dtOptions = DTOptionsBuilder.newOptions().withBootstrap()
      console.log 'options', @dtOptions
      @persons = [
        {
          firstName: 'Troy'
          lastName: 'Bennett'
        }
        ,
        {
          firstName: 'Abed'
          lastName: 'Leeroy'
        }
      ]
      return

    }

