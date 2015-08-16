class NoteRoutes extends Config
  constructor: (@$stateProvider) ->
    @$stateProvider
    .state("contact.note",
      url: "/{contactid:[0-9A-Z]{12}}/note"
      template: "<ui-view/>"
      abstract: true
    )
    .state("contact.note.new",
      url: "/new"
      templateUrl: "/components/contact/note/new/note-new.html"
      controller: "NoteNewController as ctrl"
    )
