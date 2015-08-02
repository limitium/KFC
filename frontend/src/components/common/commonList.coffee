class CommonList extends Directive
  constructor: ($compile) ->
    return {
      restrict: 'E'
      compile: (element, attrs) ->
        (scope, element, attrs) ->
          multiple = if attrs.multiple? then 'multiple' else ''
          change = if attrs.change? then 'ng-change="' + attrs.change + '"' else ''
          template = '<ui-select ' + multiple + ' ng-model="' + attrs.model + '" ' + change + ' >' +
                     '<ui-select-match>{{$item.text}}</ui-select-match>' +
                     '<ui-select-choices repeat="item.text as item in ' + attrs.items + ' | filter:$select.search">' +
                     '   {{item.text}}' +
                     '</ui-select-choices>' +
                     '</ui-select>';
          element.replaceWith($compile(template)(scope));
    }



