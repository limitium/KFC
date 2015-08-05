class ConfirmationDelete extends Directive
  constructor: ($modal) ->
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
                  controller: 'ModalDeleteController as modaldelete'
              })
              modalInstance.result.then () ->
                scope.confirmationDelete()
          return
    }

class ModalDelete extends Controller
  constructor: ($modalInstance) ->
    @ok = () ->
      $modalInstance.close()
    @cancel = () ->
      $modalInstance.dismiss 'cancel'


