class InvestmentBlocksComponent extends Directive
  constructor: (ListApi, TableUtils) ->
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

      if not @investment.blocks
        @investment.blocks = []

      @addBlock = ->
        if not @investment.blocks
          @investment.blocks = []
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

