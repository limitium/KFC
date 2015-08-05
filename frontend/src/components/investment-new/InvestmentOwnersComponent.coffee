class InvestmentOwnersComponent extends Directive
  constructor: (ListApi, TableUtils) ->
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

        @investment.landlords = [
        ]

        @addLandlord = ->
          if not @investment.landlords
            @investment.landlords = []

        @removeLandlord = (index) ->
          @investment.landlords.splice(index, 1)

        return
    }
