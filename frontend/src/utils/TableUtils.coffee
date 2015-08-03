class TableUtils extends Factory
  constructor: (DTOptionsBuilder, DTColumnDefBuilder) ->
    @language = {
      "emptyTable":     "Gde data",
      "info":           "Showing _START_ to _END_ of _TOTAL_ entries",
      "infoEmpty":      "Showing 0 to 0 of 0 entries",
      "infoFiltered":   "(filtered from _MAX_ total entries)",
      "infoPostFix":    "",
      "thousands":      ",",
      "lengthMenu":     "Show _MENU_ entries",
      "loadingRecords": "Loading...",
      "processing":     "Processing...",
      "search":         "Search:",
      "zeroRecords":    "No matching records found",
      "paginate": {
        "first":      "First",
        "last":       "Last",
        "next":       "Next",
        "previous":   "Previous"
      },
      "aria": {
        "sortAscending":  ": activate to sort column ascending",
        "sortDescending": ": activate to sort column descending"
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
        console.log 'columns', result
        result.push(DTColumnDefBuilder.newColumnDef(colNo - 1).notSortable())
        return result
    }

