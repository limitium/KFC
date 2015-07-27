class ListApi extends Factory
  constructor: ($resource) ->
    return {
    Lists: $resource('api/picklist', {}, {
      activityChargeType: {method: 'GET', params: {type: 'Activity Charge Type'}, isArray: false}
      investPropertyType: {method: 'GET', params: {type: 'INVEST_PROPERTY_TYPE'}, isArray: false}
      kfCurrency: {method: 'GET', params: {type: 'KF CURRENCY'}, isArray: false}
      investVat: {method: 'GET', params: {type: 'INVEST_VAT'}, isArray: false}
      investSegment: {method: 'GET', params: {type: 'INVEST_SEGMENT'}, isArray: false}
      investStatus: {method: 'GET', params: {type: 'INVEST_STATUS'}, isArray: false}
      investClass: {method: 'GET', params: {type: 'INVEST_CLASS'}, isArray: false}
      investFitOut: {method: 'GET', params: {type: 'INVEST_FIT_OUT'}, isArray: false}
      investBuildingStatus: {method: 'GET', params: {type: 'INVEST_BUILDING_STATUS'}, isArray: false}
      investObremenenie: {method: 'GET', params: {type: 'INVEST_OBREMENENIE'}, isArray: false}
      investObremenenieZu: {method: 'GET', params: {type: 'INVEST_OBREMENENIE_ZU'}, isArray: false}
      investLeaseStatus: {method: 'GET', params: {type: 'INVEST_LEASE_STATUS'}, isArray: false}
      investLandLeaseTerm: {method: 'GET', params: {type: 'INVEST_LAND_LEASE_TERM'}, isArray: false}
      kfInvestEntry: {method: 'GET', params: {type: 'KF_INVEST_ENTRY'}, isArray: false}
      availableBuildings: {method: 'GET', params: {type: 'AVAILABLE_BUILDINGS'}, isArray: false}
      investTechnical: {method: 'GET', params: {type: 'INVEST_TECHNICAL'}, isArray: false}
      investLandStatus: {method: 'GET', params: {type: 'INVEST_LAND_STATUS'}, isArray: false}
    })
    }

