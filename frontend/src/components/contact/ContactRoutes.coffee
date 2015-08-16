class ContactRoutes extends Config
  constructor: (@$stateProvider) ->
    @$stateProvider
    .state("contact",
      url: "/contact"
      template: "<ui-view/>"
      abstract: true
    )
    .state("contact.list",
      url: "/list"
      templateUrl: "/components/contact/list/contact-list.html"
      controller: "ContactListController as ctrl"
    )
    .state("contact.createupdate",
      url: "/{id:[0-9A-Z]{12}|new}"
      abstract: true
      templateUrl: "/components/contact/createupdate/contact-create-update.html"
      controller: "ContactCreateUpdateController as ctrl"
      resolve: {
        contact: ['ContactApi', '$stateParams', (ContactApi, $stateParams) ->
          if $stateParams.id == 'new'
            return {
            }
          else
            return ContactApi.get id: $stateParams.id
        ]
      }
    )
    .state("contact.createupdate.description",
      url: "/description"
      templateUrl: "/components/contact/createupdate/description/contact-description.html"
      controller: "ContactDescriptionController as ctrl"
    )
    .state("contact.createupdate.history",
      url: "/history"
      templateUrl: "/components/contact/createupdate/history/contact-history.html"
      controller: "ContactHistoryController as ctrl"
    )
    .state("contact.createupdate.subscription",
      url: "/subscription"
      templateUrl: "/components/contact/createupdate/subscription/contact-subscription.html"
      controller: "ContactSubscriptionController as ctrl"
    )
    .state("contact.createupdate.application",
      url: "/application"
      templateUrl: "/components/contact/createupdate/application/contact-application.html"
      controller: "ContactApplicationController as ctrl"
    )
    .state("contact.createupdate.object",
      url: "/object"
      templateUrl: "/components/contact/createupdate/object/contact-object.html"
      controller: "ContactObjectController as ctrl"
    )
    .state("contact.my",
      url: "/my"
      templateUrl: "/components/contact/my/contact-my.html"
      controller: "ContactMyController as ctrl"
    )