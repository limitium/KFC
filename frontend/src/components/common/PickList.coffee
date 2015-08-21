class PickList extends Directive
  constructor: ($compile, ListApi) ->
    return {
    restrict: 'E'
    scope:
      model: '='
      change: '='
    compile: (element, attrs) ->
      (scope, element, attrs) ->
        multiple = ''
        modelName = 'model'
        scope.items = ListApi.getItems attrs.type

        if attrs.multiple?
          multiple = 'multiple'
          modelName = 'mmodel'
          scope.mmodel = (item.trim() for item in scope.model.split ',')
          scope.$watch 'mmodel', ->
            scope.model = scope.mmodel.join ', '
          , true

        change = if attrs.change? then 'ng-change="change"' else ''
        uiSelectMatch = if attrs.multiple? then '{{$item.text}}' else '{{$select.selected.text}}'
        uiSelectChoices = if attrs.multiple? then '{{item.text}}' else '<span ng-bind-html="item.text | highlight: $select.search"></span>'

        template = '<ui-select ' + multiple + ' ng-model="$parent.' + modelName + '" ' + change + ' >' +
            '<ui-select-match>' + uiSelectMatch + '</ui-select-match>' +
            '<ui-select-choices repeat="item.text as item in items | filter:$select.search">' +
            '   ' + uiSelectChoices +
            '</ui-select-choices>' +
            '</ui-select>';

        element.replaceWith($compile(template)(scope));
    }

