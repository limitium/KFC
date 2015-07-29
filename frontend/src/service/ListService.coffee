class ListTransformer extends Service
  constructor: () ->

    @nameMapCache = {}
    @idMapCache = {}

    @addToNameMapCache = (list) ->
      result = {}
      for item in list.items
        result[item.text] = item
      @nameMapCache[list.itemid] = result

    @addToIdMapCache = (list) ->
      result = {}
      for item in list.items
        result[item.itemid] = item
      @idMapCache[list.itemid] = result

    @mapToName = (list) ->
      if !@nameMapCache[list.itemid]
        @addToNameMapCache(list)
      @nameMapCache[list.itemid]

    @mapToId = (list) ->
      if !@idMapCache[list.itemid]
        @addToIdMapCache(list)
      @idMapCache[list.itemid]

    @getById = (list, itemid) ->
      @mapToId(list)[itemid]

    @getByName = (list, name) ->
      @mapToName(list)[name]
