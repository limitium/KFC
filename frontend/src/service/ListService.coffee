class ListTransformer extends Service
  constructor: () ->
    @mapToName = (items) ->
      result = {}
      for item in items
        result[item.text] = item
      return result
