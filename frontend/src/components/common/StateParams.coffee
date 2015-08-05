class StateParams extends Service
  constructor: () ->
    @params = {}
    @saveState = ($router) ->
      console.log 'Saving last state', $router?.parent.lastNavigationAttempt
      @params['last-state'] = $router?.parent.lastNavigationAttempt;

    @put = (key, value) ->
      @params[key] = value

    @get = (key) ->
      @params[key]

    @getLastState = () ->
      @params['last-state']

