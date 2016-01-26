var EditableTable = function (currentTable, currentTableEdit) {

    return {

        //main function to initiate the module
        init: function (currentTable, currentTableEdit) {

            var oTable = $(currentTable).dataTable({
                "aLengthMenu": [
                    [5, 10, 15, -1],
                    [5, 10, 15, "All"] // change per page values here
                ],
                // set the initial value
                "iDisplayLength": 5,
                "sDom": "<'row-fluid'>t<'tbasBar'<'tbasBar-inner'<'span2'i><'span5'p><'span5'l>>",
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": '<select>'+
			             '<option value="5">5</option>'+
			             '<option value="10">10</option>'+
			             '<option value="15">15</option>'+
			             '<option value="-1">Tout</option>'+
			             '</select> Trier par nombre de Pages',
					"sInfo": "Affichage _START_ / _END_ de _TOTAL_ entrées",
					"sInfoEmpty": "Affichage 0/0 de 0 entrées",
					"sInfoFiltered": "(filterée de _MAX_ total entrées)",
					"sZeroRecords": "Aucun enregistrements correspondants trouvés",
                    "oPaginate": {
                        "sPrevious": "Prec",
                        "sNext": "Suivant"
                    }
                },
                "aoColumnDefs": [{
                        'bSortable': false,
                        'aTargets': [0]
                    }
                ]
            });
			
			var a = currentTable+"_wrapper .dataTables_filter input";
			var b = currentTable+"_wrapper .dataTables_length select";

            jQuery(a).addClass(" medium"); // modify table search input
            jQuery(b).addClass(" xsmall"); // modify table per page dropdown

        }

    };

}();