class TableUtils extends Factory
  constructor: (DTOptionsBuilder, DTColumnDefBuilder) ->
    @language = {
      "emptyTable":     "Нет записей",
      "search":         "Фильтр",
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
      createColumnsWithDefaultControlColumn: (colNo) ->
        return @createColumnsWithControlColumn(colNo, colNo - 1)
      createColumns: (colNo) -> (DTColumnDefBuilder.newColumnDef(col) for col in [0..colNo - 1])
      createColumnsWithControlColumn: (colNo, controlColumnIndex) ->
        result = ( DTColumnDefBuilder.newColumnDef(col) for col in [0..colNo - 1])
        result[controlColumnIndex] = DTColumnDefBuilder.newColumnDef(controlColumnIndex).notSortable();
        return result
    }

