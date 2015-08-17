class ContactList extends Controller
  constructor: (@$http, @ListApi, @ListTransformerService, @TableUtils, @ContactApi) ->
    @contacts = []
    @dtOptions = @TableUtils.createOptions().withOption('searching', true)
    @dtColumnDefs = @TableUtils.createColumns(4)

    #This is for debug purposes, just to load some contacts at start
    @criteria =
      name: 'Albera'
    @doSearch()
  doSearch: () =>
    @contacts = @ContactApi.search(@criteria)

