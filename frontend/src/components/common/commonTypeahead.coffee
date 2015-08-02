class CommonTypeahead extends Directive
  constructor: ($compile) ->
    return {
    restrict: 'E'
    compile: (element, attrs) ->
      (scope, element, attrs) ->
        multiple = if attrs.multiple? then 'multiple' else ''
        template = '<div class="form-group">' +
                   '  <label for="' + attrs.id + '" class="' + attrs.labelSize + ' control-label">' + attrs.label + '</label>' +
                   '  <div class="' + attrs.inputSize + '">' +
                   '    <input id="' + attrs.id + '" type="text" ng-model="' + attrs.model + '"' +
                   '           typeahead="item as item.text for item in ' + attrs.asyncGetter + '($viewValue)"' +
                   '           typeahead-wait-ms="300"' +
                   '           typeahead-loading="loading' + attrs.id + '" class="form-control">' +
                   '  </div>' +
                   '  <i ng-show="loading' + attrs.id + '" class="glyphicon glyphicon-refresh typeahead-loading-icon"></i>' +
                   '</div>'
        element.replaceWith($compile(template)(scope));
    }



