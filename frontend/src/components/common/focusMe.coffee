class FocusMe extends Directive
  constructor: ($timeout) ->
    return {
      restrict: 'A'
      link: (scope, elem) ->
        $timeout () ->
          elem[0].focus();
    }
