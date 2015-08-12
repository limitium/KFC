class InvestmentPicture extends Controller

  constructor: (@PhotoApi, @$rootScope) ->
    @photos = []
    @photosToUpload = []

#    @loadPhoto()

  loadPhoto: ->
    photos = @PhotoApi.query investmentId: "Q6UJ9A00VYQB", =>
      @photos.length = 0
      @photos.push photo for photo in photos

  onFilesChanged: (event)=>
    for file in event.target.files
      do (file) =>
        @photosToUpload.push file
        reader = new FileReader()
        reader.onload = =>
          file.preview = reader.result
          @$rootScope.$apply()
        reader.readAsDataURL file
