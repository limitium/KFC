class Main extends Controller
  constructor: (@$router) ->
    @$router.config [
      path: '/'
      redirectTo : '/investments'
    ,
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
    ]


class App extends App
  constructor: ->
    return ['ngNewRouter','angularMoment','ngResource', 'ui.select', 'ngSanitize']


