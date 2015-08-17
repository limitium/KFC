class CircleProgress extends Directive
  constructor: ->
    return {
    restrict: 'E'
    scope:
      show: '='
    templateUrl: '/components/common/progress/circle.html'
    }