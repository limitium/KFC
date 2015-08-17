class LineProgress extends Directive
  constructor: ->
    return {
    restrict: 'E'
    scope:
      show: '='
    templateUrl: '/components/common/progress/line.html'
    }