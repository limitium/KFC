class LocationComponent extends Directive
  constructor: (LocationApi, ListApi) ->
    return {
      restrict: 'E'
      controllerAs: 'ctrl'
      templateUrl: '/components/investment/common/location.html'
      scope: {}
      bindToController: {
        model: '='
      }
      controller: () ->
        @init = () ->
          moscowId = 'Q6UJ9A004W3L'
          @model.location =
            metro:
              subways: []
            investLocation:
              magistrals: []
          LocationApi.Cities.get({id: moscowId}).$promise.then (moscow) =>
            @model.location.city = moscow

        @magistrals = []
        @subways = []
        @districts = []

        @getCities = (val) ->
          LocationApi.Cities.query({"name": val}).$promise
        @getInvestRings = () ->
          @investRings ?= ListApi.Lists.investRings()
        @getRegions = (val) ->
          LocationApi.Regions.query({"name": val}).$promise
        @getDistricts = () ->
          if @model.location?.city?.id != @lastDistrictCityId
            @lastDistrictCityId = @model.location.city.id
            @districts = LocationApi.Districts.query({"cities": [@model.location.city.id]})
          @districts
        @getHighways = (val) ->
          LocationApi.Highways.query({"name": val}).$promise
        @getStreets = (val) ->
          LocationApi.Streets.query({"name": val}).$promise
        @getSubways = () ->
          if @model.location?.city?.id != @lastSubwayCityId
            @lastSubwayCityId = @model.location.city.id
            @subways = LocationApi.Subways.query({"city": @model.location.city.id})
          @subways
        @getMagistrals = () ->
          if @model.location?.city?.id != @lastMagistralCityId
            @lastMagistralCityId = @model.location.city.id
            @magistrals = LocationApi.Streets.query({"city": @model.location.city.id})
          @magistrals
        @init()

        #Important! Should not return functions from directive's controllers see (https://github.com/angular/angular.js/issues/8876)
        return
    }


