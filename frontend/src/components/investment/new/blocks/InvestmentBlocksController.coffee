class InvestmentBlocks extends Controller
  constructor: (InvestmentService, ListApi, TableUtils) ->
    @investment = InvestmentService.investment
    @dtOptions = TableUtils.createOptions()
    @dtColumnDefs = TableUtils.createColumnsWithDefaultControlColumn(8)

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

