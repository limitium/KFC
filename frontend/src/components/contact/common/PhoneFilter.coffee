class Phone extends Filter
  constructor: ->
    return (tel) ->
      if not tel then return ''
      value = tel.toString().trim().replace /^\+/, ''

      if value.match /[^0-9]/
        return tel

      if value.length == 10
        country = 1
        city = value.slice(0, 3)
        number = value.slice(3)
      else if value.length == 11
        country = value[0]
        city = value.slice(1, 4)
        number = value.slice(4)
      else if value.length == 12
        country = value.slice(0, 3)
        city = value.slice(3, 5)
        number = value.slice(5)
      else return tel

      if country == 1
        country = ""
      number = number.slice(0, 3) + '-' + number.slice(3)
      return (country + " (" + city + ") " + number).trim()
