class AccountList extends Controller
  constructor: (@TableUtils, @AccountApi) ->
    @dtOptions = @TableUtils.createOptions().withOption('searching', true)
    @dtColumnDefs = @TableUtils.createColumnsWithDefaultControlColumn(4)
    @accounts = []

  search: (query)=>
    @accounts.length = 0
    @accounts = @AccountApi.search name: query
