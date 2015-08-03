class InvestmentBlocksComponent extends Directive
  constructor: (DTOptionsBuilder, DTColumnDefBuilder, ListApi, TableUtils) ->
    return {
    restrict: 'E'
    controllerAs: 'ctrl'
    templateUrl: '/components/investment-new/investment-blocks.html'
    scope: {}
    bindToController: {
      investment: '='
    }
    controller: () ->
      @dtOptions = TableUtils.createOptions()
      @dtColumnDefs = TableUtils.createColumns(8)

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

