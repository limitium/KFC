class ContactList extends Controller
  constructor: (@$http, @ListApi, @ListTransformerService, @TableUtils, @ContactApi) ->
    @contacts = []
    @criteria =
      name: 'Morgan Stanley'
    @dtOptions = @TableUtils.createOptions().withOption('searching', true)
    @dtColumnDefs = @TableUtils.createColumns(4)
  doSearch: () =>
    @contacts = @ContactApi.search(@criteria)

