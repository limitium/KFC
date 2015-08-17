class ContactCreateUpdate extends Controller
  constructor: (@$http, @ListApi, @ListTransformerService, @TableUtils, @ContactApi, @$stateParams, @contact) ->

  saveOrUpdate: ->
    if @contact.contactid then @ContactApi.update({id: @contact.contactid}, @contact) else @ContactApi.save({}, @contact)

