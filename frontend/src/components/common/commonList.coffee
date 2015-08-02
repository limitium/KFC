class CommonList extends Directive
  constructor: ($compile) ->
    return {
      restrict: 'E'
      compile: (element, attrs) ->
        (scope, element, attrs) ->
          multiple = if attrs.multiple? then 'multiple' else ''
          change = if attrs.change? then 'ng-change="' + attrs.change + '"' else ''
          uiSelectMatch = if attrs.multiple? then '{{$item.text}}' else '{{$select.selected.text}}'
          uiSelectChoices = if attrs.multiple? then '{{item.text}}' else '<span ng-bind-html="item.text | highlight: $select.search"></span>'
          template = '<ui-select ' + multiple + ' ng-model="' + attrs.model + '" ' + change + ' >' +
                     '<ui-select-match>' + uiSelectMatch + '</ui-select-match>' +
                     '<ui-select-choices repeat="item.text as item in ' + attrs.items + ' | filter:$select.search">' +
                     '   ' + uiSelectChoices +
                     '</ui-select-choices>' +
                     '</ui-select>';
          element.replaceWith($compile(template)(scope));
    }

