class AccountShowContacts extends Controller
  constructor: (@TableUtils) ->
    @contacts = []
    @dtOptions = @TableUtils.createOptions().withOption('searching', true)
    @dtColumnDefs = @TableUtils.createColumns(6)
