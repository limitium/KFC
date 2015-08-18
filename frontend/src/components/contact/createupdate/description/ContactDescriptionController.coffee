class ContactDescription extends Controller
  constructor: (@$http, @ListApi, @ListTransformerService, @TableUtils, @ContactApi, @UserApi, @$stateParams, @contact) ->
    @dtOptions = @TableUtils.createOptions();
    @dtColumnDefs = @TableUtils.createColumnsWithDefaultControlColumn(4);
    @rebuildExcludedDepartments()

  rebuildExcludedDepartments: () ->
    excludedDepartments = {}
    for manager in @contact.managers
      if !excludedDepartments[manager.department]
        excludedDepartments[manager.department] = []
      if manager.division not in excludedDepartments[manager.department]
        excludedDepartments[manager.department].push manager.division
    @excludedDepartments = excludedDepartments

  canAddManager: () ->
    if not @managerToAdd
      return false
    department = @managerToAdd.department
    division = @managerToAdd.division
    for excludedDepartment of @excludedDepartments
      if excludedDepartment == department
        for excludedDivision in @excludedDepartments[excludedDepartment]
          if division == excludedDivision
            return false
    true

  addManager: ->
    @addRow = false
    @contact.managers.push(@managerToAdd)
    @managerToAdd = undefined
  onNewManagerSelect: (manager) ->
    @rebuildExcludedDepartments()

  getManagers: (val) ->
    @UserApi.UserInfo.hint(name: val).$promise






