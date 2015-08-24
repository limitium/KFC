class ManagerSelector extends Directive
  constructor: ($compile) ->
    return {
    restrict: 'E'
    compile: (element, attrs) ->
      (scope, element, attrs) ->
        template = """
<div class="row">
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4">
                <label>#{ attrs.label }</label>
            </div>
            <div class="col-md-6">
                {{ctrl.account.detail.#{attrs.manager}.username}}
            </div>
            <div class="col-md-2">
                <button ng-show="ctrl.account.detail.#{attrs.manager}" type="button" class="btn btn-danger" aria-label="Remove"
                        ng-click="ctrl.account.detail.#{attrs.manager} = null">
                    <i class="fa fa-remove"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <user-selector user="ctrl.account.detail.#{ attrs.manager }"></user-selector>
    </div>
</div>
"""

        element.replaceWith($compile(template)(scope));
    }