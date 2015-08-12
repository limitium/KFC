class InvestmentNew extends Controller

  constructor: (InvestmentService) ->
    @busy = InvestmentService.busy
