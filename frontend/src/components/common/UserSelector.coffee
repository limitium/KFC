class UserSelector extends Directive
  constructor: ($compile, UserApi) ->
    return {
    restrict: 'E'
    scope:
      user: '='
    compile: (element, attrs) ->
      (scope, element, attrs) ->
        scope.query = ''
        scope.getUsers = (val) ->
          UserApi.UserInfo.hint(name: val).$promise
        scope.onUserSelect = (user)->
          scope.user = user
        scope.$watch 'user', ->
          scope.query = '' unless scope.user

        template = '''
<div class="form-group has-feedback">
    <input type="text"
           ng-model="query"
           typeahead-on-select="onUserSelect($item)"
           typeahead="item as item.username for item in getUsers($viewValue)"
           typeahead-wait-ms="500"
           typeahead-loading="isLoading"
           class="form-control">
    <span class="form-control-feedback"><i ng-show="isLoading" class="fa fa-refresh fa-spin"></i></span>
</div>
''';

        element.replaceWith($compile(template)(scope));
    }

