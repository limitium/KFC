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

      @investment.blocks = [
      ]

      @addBlock = ->
        @investment.blocks.push @blockToAdd
        @plusButtonVisible = true
        @blockToAdd = {}
      @removeBlock = (index) ->
        @investment.blocks.splice(index, 1)

      #Getters
      @getVat = ->
        @vat ?= ListApi.Lists.investVat()
      @getCurrency = ->
        @currency ?= ListApi.Lists.kfCurrency()
      @getStatus = ->
        @status ?= ListApi.Lists.investStatus()
      return
    }

