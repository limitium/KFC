class InvestmentList extends Controller
  constructor: (@$router, @$http) ->

InvestmentList::activate = ->
  @search =
    classes: []
    cities: []
    segments: []

