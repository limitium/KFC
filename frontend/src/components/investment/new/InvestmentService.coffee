class Investment extends Service
  constructor: ->
    @investment = {}
    @busy = false

    @add = =>
      @busy = true
      #todo: change to resource
      @$http.post('/api/investments', @investment)
      .success((data, status, headers, config) =>
  #      @$router.parent.navigate('/')
        @ToastService.toast 'Investment created'
      )
      .finally(=>
        @busy = false
      )