class Fullname extends Filter
  constructor: ->
    return (contact) ->
      return [contact.contactDetail.lastrus, contact.contactDetail.firstrus, contact.contactDetail.middlerus].join ' '

