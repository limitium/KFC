class InvestmentPhoto extends Factory
  constructor: (Resource) ->
    return Resource(
      "/api/investments/:investmentId/photos/:id",
      id: "@spkPhotoId"
    )