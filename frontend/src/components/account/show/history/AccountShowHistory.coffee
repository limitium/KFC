class AccountShowHistory extends Controller
  constructor: (@account,@TableUtils) ->
    @histories = []
    @dtOptions = @TableUtils.createOptions().withOption('searching', true)
    @dtColumnDefs = @TableUtils.createColumns(6)