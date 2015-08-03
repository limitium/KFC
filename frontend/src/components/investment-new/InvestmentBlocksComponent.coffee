class InvestmentBlocksComponent extends Directive
  constructor: (DTOptionsBuilder, DTColumnDefBuilder, ListApi) ->
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
      @dtColumnDefs = [
        DTColumnDefBuilder.newColumnDef(0)
        DTColumnDefBuilder.newColumnDef(1)
        DTColumnDefBuilder.newColumnDef(2)
        DTColumnDefBuilder.newColumnDef(3)
        DTColumnDefBuilder.newColumnDef(4)
        DTColumnDefBuilder.newColumnDef(5)
        DTColumnDefBuilder.newColumnDef(6)
        DTColumnDefBuilder.newColumnDef(7).notSortable()
      ]
      @plusButtonVisible = true
      @blocks = [
        {
          floor: 1
          name: 'Этаж 1 блок 3'
          availableSq: 1500
          costSqm: 5000
          costSqmCurrency: 'USD'
          vat: 'без учета НДС'
          status: 'Закрытая продажа'
        }
      ]

      @addBlock = ->
        @blocks.push @blockToAdd
        @plusButtonVisible = true
      @removeBlock = (index) ->
        @blocks.splice(index, 1)
      return
    }

