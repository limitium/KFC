class TableUtils extends Factory
  constructor: (DTOptionsBuilder, DTColumnDefBuilder) ->
    @language = {
      "emptyTable":     "Нет записей",
      "paginate": {
        "first":      "Первая",
        "last":       "Последняя",
        "next":       "Вперед",
        "previous":   "Назад"
      }
    }
    return {
      createOptions: () =>
        DTOptionsBuilder.newOptions()
          .withBootstrap()
          .withOption('searching', false)
          .withOption('lengthChange', false)
          .withOption('info', false)
          .withOption('language', @language)
      createColumns: (colNo) ->
        result = ( DTColumnDefBuilder.newColumnDef(col) for col in [0..colNo - 1])
        result.push(DTColumnDefBuilder.newColumnDef(colNo - 1).notSortable())
        return result
    }

