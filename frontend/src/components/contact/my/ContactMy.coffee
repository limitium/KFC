class ContactMy extends Controller
  constructor: (@TableUtils) ->
    @dtOptions = @TableUtils.createOptions().withOption('searching', true)
    @dtColumnDefs = @TableUtils.createColumnsWithDefaultControlColumn(4)
    @contacts = []