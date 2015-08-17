class Resource extends Factory
  constructor: ($resource, $http) ->
    return class ResourceFactory extends $resource
      constructor: (url, paramDefaults, actions, options)->
        defActions =
          'get': {method: 'GET'}
          'save': {method: 'POST'}
          'query': {method: 'GET', isArray: true}
          'remove': {method: 'DELETE'}
          'delete': {method: 'DELETE'}

        allActions = angular.extend {}, defActions, actions

        for name,action of allActions
          action.interceptor =
            response: (response)->
              resource.isBusy = false
              response.resource
            responseError: ->
              resource.isBusy = false

        resource = super(url, paramDefaults, allActions, options)

        save = resource.save

        resource.save = (param, data, success, error)->
          save.call data
          , param
          , data
          , (response, responseHeaders)->
            if location = responseHeaders("Location")
              resource.isBusy = true
              $http
              .get(location)
              .then (httpResponse)->
                resource.isBusy = false
                angular.extend data, httpResponse.data
                success data, responseHeaders
              , error
            else
              success response, responseHeaders
          , error


        for name,action of allActions
          do (name)->
            actFunction = resource[name]
            resource[name] = ->
              resource.isBusy = true
              actFunction.apply @, arguments

        return resource
