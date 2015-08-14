class CompanyList extends Controller
  constructor: (@TableUtils) ->
    @dtOptions = @TableUtils.createOptions()
    @dtColumnDefs = @TableUtils.createColumnsWithDefaultControlColumn(4)
    @companies = []