class InvestmentPicture extends Controller

  constructor: (@InvestmentPhoto, @$rootScope) ->
    @photos = []
    @photosToUpload = []
    @investmentId = "Q6UJ9A00VYQB"
    @loadPhoto()

  loadPhoto: ->
    photos = @InvestmentPhoto.query investmentId: @investmentId, =>
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

  removeFile: (file)=>
    @photosToUpload.splice(@photosToUpload.indexOf(file), 1)

  upload: =>
    for file in @photosToUpload
      do (file) =>
        if file.preview?
          file.isUploading = true
          photo = new @InvestmentPhoto encoded: file.preview
          photo.$save
            investmentId: @investmentId
          , =>
            @removeFile(file)
            @photos.push photo
          , ()=>
            console.log 'er'
            @removeFile(file)

