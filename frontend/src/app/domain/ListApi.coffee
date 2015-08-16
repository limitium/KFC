class ListApi extends Factory
  constructor: ($resource) ->
    return {
    Lists: $resource('api/picklist', {}, {
      activityChargeType: {method: 'GET', params: {type: 'Activity Charge Type'}, isArray: true, cache: true}
      investPropertyType: {method: 'GET', params: {type: 'INVEST_PROPERTY_TYPE'}, isArray: true, cache: true}
      kfCurrency: {method: 'GET', params: {type: 'KF CURRENCY'}, isArray: true, cache: true}
      investVat: {method: 'GET', params: {type: 'INVEST_VAT'}, isArray: true, cache: true}
      investSegment: {method: 'GET', params: {type: 'INVEST_SEGMENT'}, isArray: true, cache: true}
      investStatus: {method: 'GET', params: {type: 'INVEST_STATUS'}, isArray: true, cache: true}
      investClass: {method: 'GET', params: {type: 'INVEST_CLASS'}, isArray: true, cache: true}
      investFitOut: {method: 'GET', params: {type: 'INVEST_FIT_OUT'}, isArray: true, cache: true}
      investBuildingStatus: {method: 'GET', params: {type: 'INVEST_BUILDING_STATUS'}, isArray: true, cache: true}
      investBuildingStatusZu: {method: 'GET', params: {type: 'INVEST_BUILDING_STATUS_ZU'}, isArray: true, cache: true}
      investObremenenie: {method: 'GET', params: {type: 'INVEST_OBREMENENIE'}, isArray: true, cache: true}
      investObremenenieZu: {method: 'GET', params: {type: 'INVEST_OBREMENENIE_ZU'}, isArray: true, cache: true}
      investLeaseStatus: {method: 'GET', params: {type: 'INVEST_LEASE_STATUS'}, isArray: true, cache: true}
      investLandLeaseTerm: {method: 'GET', params: {type: 'INVEST_LAND_LEASE_TERM'}, isArray: true, cache: true}
      kfInvestEntry: {method: 'GET', params: {type: 'KF_INVEST_ENTRY'}, isArray: true, cache: true}
      availableBuildings: {method: 'GET', params: {type: 'AVAILABLE_BUILDINGS'}, isArray: true, cache: true}
      investTechnical: {method: 'GET', params: {type: 'INVEST_TECHNICAL'}, isArray: true, cache: true}
      investLandStatus: {method: 'GET', params: {type: 'INVEST_LAND_STATUS'}, isArray: true, cache: true}
      investEntry: {method: 'GET', params: {type: 'INVEST_ENTRY'}, isArray: true, cache: true}
      investRings: {method: 'GET', params: {type: 'INVEST_RINGS'}, isArray: true, cache: true}
      contactType: {method: 'GET', params: {type: 'Landlord Type'}, isArray: true, cache: true}
      tenantContactType: {method: 'GET', params: {type: 'Tenant Type'}, isArray: true, cache: true}
      sex: {method: 'GET', params: {type: 'Sex'}, isArray: true, cache: true}
      language: {method: 'GET', params: {type: 'KF Language Report'}, isArray: true, cache: true}

    })
    }

