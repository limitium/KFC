class Main extends Controller
  constructor: (@$router) ->
    @$router.config [
      path: '/'
      redirectTo : '/investment'
    ,
      path: '/investment'
      components:
        main:'investmentList'
    ,
      path: '/offer/new'
      components:
        main: 'offerNew'
    ,
      path: '/offer/edit/:id'
      components:
        main: 'offerEdit'
    ]


class App extends App
  constructor: ->
    return ['ngNewRouter','angularMoment']


