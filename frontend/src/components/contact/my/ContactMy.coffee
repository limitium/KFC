class ContactMy extends Controller
  constructor: (@TableUtils) ->
    @dtOptions = @TableUtils.createOptions()
    @dtColumnDefs = @TableUtils.createColumnsWithDefaultControlColumn(4)
    @contacts = []