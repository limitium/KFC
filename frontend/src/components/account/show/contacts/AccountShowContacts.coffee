class AccountShowContacts extends Controller
  constructor: (@account, @TableUtils) ->
    @contacts = []
    @dtOptions = @TableUtils.createOptions().withOption('searching', true)
    @dtColumnDefs = @TableUtils.createColumns(5)
