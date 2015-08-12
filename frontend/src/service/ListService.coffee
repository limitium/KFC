class ListTransformer extends Service
  constructor: () ->
    @mapToName = (items) ->
      result = {}
      for item in items
        result[item.text] = item
      return result

    @getIdsByNames = (items, names) ->
      map = @mapToName(items)
      result = []
      for name in names
        if map[name]
          result.push(map[name].id)
      return result

