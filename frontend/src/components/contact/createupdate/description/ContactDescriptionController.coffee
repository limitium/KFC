class ContactDescription extends Controller
  constructor: (@$http, @ListApi, @ListTransformerService, @TableUtils, @ContactApi, @UserApi, @$stateParams, @contact) ->
    @dtOptions = @TableUtils.createOptions();
    @dtColumnDefs = @TableUtils.createColumnsWithDefaultControlColumn(4);

  onNewManagerSelect: (manager) ->
    @contact.managers.push(manager)

  getManagers: (val) ->
    excludedDepartments = {}
#    for manager in @contact.managers
#      if not manager.department of excludedDepartments
#        excludedDepartments[manager.department] = []
#      if manager.division not in excludedDepartments[manager.department]
#        excludedDepartments[manager.department].push manager.division
#    console.log excludedDepartments
    @UserApi.UserInfo.hint(name: val, excludeDepartments: excludedDepartments).$promise






