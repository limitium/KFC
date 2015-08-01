class LocationComponent extends Directive
  constructor: (LocationApi) ->
    return {
      restrict: 'E'
      controllerAs: 'ctrl'
      templateUrl: '/components/investment-common/location.html'
      bindToController: true
      scope:
        model: '='
      controller: () ->
        @LocationApi = LocationApi
        @init = () ->
          moscowId = 'Q6UJ9A004W3L'
          @model.location =
            subways: []
            magistrals: []
          @LocationApi.Cities.get({id: moscowId}).$promise.then (moscow) =>
            @model.location.city = moscow

        @magistrals = []
        @subways = []
        @getCities = (val) ->
          console.log 'Get cities'
          @LocationApi.Cities.query({"name": val}).$promise
        @getRegions = (val) ->
          @LocationApi.Regions.query({"name": val}).$promise
        @getDistricts = (val) ->
          @LocationApi.Districts.query({"name": val}).$promise
        @getHighways = (val) ->
          @LocationApi.Highways.query({"name": val}).$promise
        @getStreets = (val) ->
          @LocationApi.Streets.query({"name": val}).$promise
        @getSubways = () ->
          if @model.location.city.spkCityid != @lastSubwayCityId
            @lastSubwayCityId = @model.location.city.spkCityid
            @subways = @LocationApi.Subways.query({"city": @model.location.city.spkCityid})
          @subways
        @getMagistrals = () ->
          if @model.location.city.spkCityid != @lastMagistralCityId
            @lastMagistralCityId = @model.location.city.spkCityid
            @magistrals = @LocationApi.Streets.query({"city": @model.location.city.spkCityid})
          @magistrals

        @init()
    }


