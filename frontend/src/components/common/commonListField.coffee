class CommonListField extends Directive
  constructor: ($compile) ->
    return {
    restrict: 'E'
    compile: (element, attrs) ->
      (scope, element, attrs) ->

        multiple = if attrs.multiple? then 'multiple' else ''
        template = '<div class="form-group">' +
                   '  <label class="col-sm-3 control-label">' + attrs.label + '</label>' +
                   '  <div class="col-sm-9">' +
                   '    <common-list model="' + attrs.model + '" items="' + attrs.items + '"' + multiple + '></common-list>' +
                   '  </div>' +
                   '</div>'
        element.replaceWith($compile(template)(scope));
    }

