class Fullname extends Filter
  constructor: ->
    return (contact) ->
      if not contact or not contact.lastname or not contact.firstname or not contact.middlename then return ''
      return contact.lastname + ' ' + contact.firstname + ' ' + contact.middlename

