class CompanyList extends Controller
  constructor: (@TableUtils) ->
    @dtOptions = @TableUtils.createOptions().withOption('searching', true)
    @dtColumnDefs = @TableUtils.createColumnsWithDefaultControlColumn(4)
    @companies = []