class ListApi extends Factory
  constructor: ($resource) ->
    return {
    Lists: $resource('api/picklist', {}, {
      activityChargeType: {method: 'GET', params: {type: 'Activity Charge Type'}, isArray: false}
    })
    }

