class AccountShowRequest extends Controller
  constructor: (@account,@TableUtils) ->
    @dtOptions = @TableUtils.createOptions().withOption('searching', true)
    @dtColumnDefs = @TableUtils.createColumns(6)