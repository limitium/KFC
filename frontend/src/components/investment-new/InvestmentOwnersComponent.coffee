class InvestmentOwnersComponent extends Directive
  constructor: (ListApi, TableUtils, StateParamsService, $router) ->
    return {
      restrict: 'E'
      controllerAs: 'ctrl'
      templateUrl: '/components/investment-new/investment-owners.html'
      scope: {}
      bindToController: {
        investment: '='
      }
      controller: () ->
        @landlordDtOptions = TableUtils.createOptions()
        @landlordDtColumnDefs = TableUtils.createColumns(6)

        @removeLandlord = (index) ->
          @investment.landlords.splice(index, 1)

        @goToNewLandlord = ->
          StateParamsService.put('redirect', true)
          StateParamsService.put('investment', @investment)
          StateParamsService.put('from-tab', 'owners-tab')
          $router.navigate('/landlord/new')

        @getLandlords = ->
          if not @investment.landlords
            @investment.landlords = []
          @investment.landlords


        return
    }
