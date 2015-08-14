class Resource extends Factory
  constructor: ($resource, $http) ->
    return class ResourceFactory extends $resource
      constructor: (url, paramDefaults, actions, options)->
        resource = super
        save = resource.save

        resource.save = (param, data, success, error)->
          save.call data
          , param
          , data
          , (response, responseHeaders)->
            if location = responseHeaders("Location")
              $http
              .get(location)
              .then (httpResponse)->
                angular.extend data, httpResponse.data
                success data, responseHeaders
              , error
            else
              success response, responseHeaders
          , error

        return resource
