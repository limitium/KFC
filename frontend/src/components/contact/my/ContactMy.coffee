class ContactMy extends Controller
  constructor: (@TableUtils, @ContactApi) ->
    @dtOptions = @TableUtils.createOptions().withOption('searching', true)
    @dtColumnDefs = @TableUtils.createColumnsWithDefaultControlColumn(4)
    @contacts = @ContactApi.my();