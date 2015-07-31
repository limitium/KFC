class Location extends Service
  constructor: (@ListApi, @LocationApi, @ListTransformerService)->
    @template = '/components/investment-new/location.html'
    @reset = () ->
      moscowId = 'Q6UJ9A004W3L'
      @location =
        city: @LocationApi.Cities.get({id: moscowId})
        subways: []
        magistrals: []

    @magistrals = []
    @subways = []
    @getCities = (val) ->
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
      if @location.city.spkCityid != @lastSubwayCityId
        @lastSubwayCityId = @location.city.spkCityid
        @subways = @LocationApi.Subways.query({"city": @location.city.spkCityid})
      @subways
    @getMagistrals = () ->
      if @location.city.spkCityid != @lastMagistralCityId
        @lastMagistralCityId = @location.city.spkCityid
        @magistrals = @LocationApi.Streets.query({"city": @location.city.spkCityid})
      @magistrals


