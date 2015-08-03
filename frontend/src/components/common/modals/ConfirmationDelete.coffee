class ConfirmationDelete extends Directive
  constructor: ($modal) ->

    ModalInstanceCtrl = ($scope, $modalInstance) ->
      $scope.ok = () ->
        $modalInstance.close();
      $scope.cancel = () ->
        $modalInstance.dismiss('cancel')
    return {
      restrict: 'A'
      scope: {
        confirmationDelete: '&'
      }
      link: (scope, element, attrs) ->
          element.bind 'click', () ->
              modalInstance = $modal.open({
                animation: true
                size: 'sm'
                templateUrl: '/components/common/modals/confirmation-delete.html'
                controller: ModalInstanceCtrl
              })

              modalInstance.result.then( () ->
                scope.confirmationDelete()
              , () ->
              )
          return
    }
