class AccountShowHistory extends Controller
  constructor: (@TableUtils) ->
    @histories = []
    @dtOptions = @TableUtils.createOptions().withOption('searching', true)
    @dtColumnDefs = @TableUtils.createColumns(6)