class ContactCreateUpdate extends Controller
  constructor: (@$http, @ListApi, @ListTransformerService, @TableUtils, @ContactApi, @$stateParams, @contact) ->

  saveOrUpdate: ->
    console.log 'Saving', @contact
    if @contact.contactid != '' then @ContactApi.update(@contact) else @ContactApi.save(@contact)

