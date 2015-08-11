class Main extends Controller
  constructor: (@$router) ->
    @$router.config [
#      path: '/'
#      redirectTo : '/investments'
#    ,
      path: '/investments'
      components:
        main:'investmentList'
    ,
      path: '/investment/new'
      components:
        main: 'investmentNew'
    ,
      path: '/offer/edit/:id'
      components:
        main: 'offerEdit'
    ,
      path: '/test/all-lists'
      components:
        main: 'allLists'
    ,
      path: '/test/components'
      components:
        main: 'testComponents'
    ,
      path: '/account/new'
      components:
        main: 'accountNew'
    ,
      path: '/landlord/new'
      components:
        main: 'landlordNew'
    ,
      path: '/tenant/new'
      components:
        main: 'tenantNew'
    ,
      path: '/photo'
      components:
        main: 'photo'
    ]


class App extends App
  constructor: ->
    return ['ngNewRouter','angularMoment','ngResource', 'ui.select', 'ui.bootstrap', 'ngSanitize', 'datatables', 'datatables.bootstrap']


