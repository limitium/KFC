class PhotoApi extends Factory
  constructor: ($resource) ->
    return $resource(
      "/api/investments/:investmentId/photos/:id",
      id: "@spkPhotoId"
    )