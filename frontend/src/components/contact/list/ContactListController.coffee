class ContactList extends Controller
  constructor: (@$http, @ListApi, @ListTransformerService, @TableUtils) ->
    @contacts = []
    @dtOptions = @TableUtils.createOptions().withOption('searching', true)
    @dtColumnDefs = @TableUtils.createColumns(4)
  doSearch: () =>
    @contacts = [
      {
        company: 'Wipe inc.'
        person: 'Leeroy'
        phone: '322'
        email: 'nobody@nowhere.com'
      },
      {
        company: 'Wipe inc.'
        person: 'Leeroy'
        phone: '322'
        email: 'nobody@nowhere.com'
      }
    ]
    return
