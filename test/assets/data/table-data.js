/**
 *  Document   : table_data.js
 *  Author     : redstar
 *  Description: advance table page script
 *
 **/

$(document).ready(function() {
	'use strict';
	$('#example1').DataTable( {
		"scrollX": true
	} );

	var table = $('#example2').DataTable( {
		"scrollY": "200px",
		"paging": false
	} );

	$('a.toggle-vis').on( 'click', function (e) {
		e.preventDefault();

		// Get the column API object
		var column = table.column( $(this).attr('data-column') );

		// Toggle the visibility
		column.visible( ! column.visible() );
	} );

	var t = $('#example3').DataTable( {
		"scrollX": true
	} );
	var counter = 1;

	$('#addRow').on( 'click', function () {
		t.row.add( [
		            counter +'.1',
		            counter +'.2',
		            counter +'.3',
		            counter +'.4',
		            counter +'.5'
		            ] ).draw( false );

		counter++;
	} );

	// Automatically add a first row of data
	$('#addRow').click();

	$('#example4').DataTable( {
		"scrollX": true
	} );

	$('#saveStage').DataTable( {
		"scrollX": true,
		stateSave: true
	} );

	var table = $('#tableGroup').DataTable({
		"columnDefs": [
		               { "visible": false, "targets": 2 }
		               ],
		               "order": [[ 2, 'asc' ]],
		               "scrollX": true,
		               "displayLength": 25,
		               "drawCallback": function ( settings ) {
		            	   var api = this.api();
		            	   var rows = api.rows( {page:'current'} ).nodes();
		            	   var last=null;

		            	   api.column(2, {page:'current'} ).data().each( function ( group, i ) {
		            		   if ( last !== group ) {
		            			   $(rows).eq( i ).before(
		            					   '<tr class="group"><td colspan="5">'+group+'</td></tr>'
		            			   );

		            			   last = group;
		            		   }
		            	   } );
		               }
	} );

	// Order by the grouping
	$('#tableGroup tbody').on( 'click', 'tr.group', function () {
		var currentOrder = table.order()[0];
		if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
			table.order( [ 2, 'desc' ] ).draw();
		}
		else {
			table.order( [ 2, 'asc' ] ).draw();
		}
	} );

	$('#exportTable').DataTable( {
		dom: 'Bfrtip',
		buttons: [
		          'copy', 'csv', 'excel', 'pdf', 'print'
		          ]
	} );


	var dataSet = [
	               [ "Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800" ],
	               [ "Garrett Winters", "Accountant", "Tokyo", "8422", "2011/07/25", "$170,750" ],
	               [ "Ashton Cox", "Junior Technical Author", "San Francisco", "1562", "2009/01/12", "$86,000" ],
	               [ "Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "6224", "2012/03/29", "$433,060" ],
	               [ "Airi Satou", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700" ],
	               [ "Brielle Williamson", "Integration Specialist", "New York", "4804", "2012/12/02", "$372,000" ],
	               [ "Herrod Chandler", "Sales Assistant", "San Francisco", "9608", "2012/08/06", "$137,500" ],
	               [ "Rhona Davidson", "Integration Specialist", "Tokyo", "6200", "2010/10/14", "$327,900" ],
	               [ "Colleen Hurst", "Javascript Developer", "San Francisco", "2360", "2009/09/15", "$205,500" ],
	               [ "Sonya Frost", "Software Engineer", "Edinburgh", "1667", "2008/12/13", "$103,600" ],
	               [ "Jena Gaines", "Office Manager", "London", "3814", "2008/12/19", "$90,560" ],
	               [ "Quinn Flynn", "Support Lead", "Edinburgh", "9497", "2013/03/03", "$342,000" ],
	               [ "Charde Marshall", "Regional Director", "San Francisco", "6741", "2008/10/16", "$470,600" ],
	               [ "Haley Kennedy", "Senior Marketing Designer", "London", "3597", "2012/12/18", "$313,500" ],
	               [ "Tatyana Fitzpatrick", "Regional Director", "London", "1965", "2010/03/17", "$385,750" ],
	               [ "Michael Silva", "Marketing Designer", "London", "1581", "2012/11/27", "$198,500" ],
	               [ "Paul Byrd", "Chief Financial Officer (CFO)", "New York", "3059", "2010/06/09", "$725,000" ],
	               [ "Gloria Little", "Systems Administrator", "New York", "1721", "2009/04/10", "$237,500" ],
	               [ "Bradley Greer", "Software Engineer", "London", "2558", "2012/10/13", "$132,000" ],
	               [ "Dai Rios", "Personnel Lead", "Edinburgh", "2290", "2012/09/26", "$217,500" ],
	               [ "Jenette Caldwell", "Development Lead", "New York", "1937", "2011/09/03", "$345,000" ],
	               [ "Yuri Berry", "Chief Marketing Officer (CMO)", "New York", "6154", "2009/06/25", "$675,000" ],
	               [ "Caesar Vance", "Pre-Sales Support", "New York", "8330", "2011/12/12", "$106,450" ],
	               [ "Doris Wilder", "Sales Assistant", "Sidney", "3023", "2010/09/20", "$85,600" ],
	               [ "Angelica Ramos", "Chief Executive Officer (CEO)", "London", "5797", "2009/10/09", "$1,200,000" ],
	               [ "Gavin Joyce", "Developer", "Edinburgh", "8822", "2010/12/22", "$92,575" ],
	               [ "Jennifer Chang", "Regional Director", "Singapore", "9239", "2010/11/14", "$357,650" ],
	               [ "Brenden Wagner", "Software Engineer", "San Francisco", "1314", "2011/06/07", "$206,850" ],
	               [ "Fiona Green", "Chief Operating Officer (COO)", "San Francisco", "2947", "2010/03/11", "$850,000" ],
	               [ "Shou Itou", "Regional Marketing", "Tokyo", "8899", "2011/08/14", "$163,000" ],
	               [ "Michelle House", "Integration Specialist", "Sidney", "2769", "2011/06/02", "$95,400" ],
	               [ "Suki Burks", "Developer", "London", "6832", "2009/10/22", "$114,500" ],
	               [ "Prescott Bartlett", "Technical Author", "London", "3606", "2011/05/07", "$145,000" ],
	               [ "Gavin Cortez", "Team Leader", "San Francisco", "2860", "2008/10/26", "$235,500" ],
	               [ "Martena Mccray", "Post-Sales support", "Edinburgh", "8240", "2011/03/09", "$324,050" ],
	               [ "Unity Butler", "Marketing Designer", "San Francisco", "5384", "2009/12/09", "$85,675" ]
	               ];

	$('#dataTable').DataTable( {
		"scrollX": true,
		data: dataSet,
		columns: [
		          { title: "Name" },
		          { title: "Position" },
		          { title: "Office" },
		          { title: "Extn." },
		          { title: "Start date" },
		          { title: "Salary" }
		          ]
	} );

	// Child Row table data
	childRowTable();

} );

function childRowTable(){
	var childData =  [
	                  {
	                	  "id": "1",
	                	  "name": "Tiger Nixon",
	                	  "position": "System Architect",
	                	  "salary": "$320,800",
	                	  "start_date": "2011/04/25",
	                	  "office": "Edinburgh",
	                	  "extn": "5421"
	                  },
	                  {
	                	  "id": "2",
	                	  "name": "Garrett Winters",
	                	  "position": "Accountant",
	                	  "salary": "$170,750",
	                	  "start_date": "2011/07/25",
	                	  "office": "Tokyo",
	                	  "extn": "8422"
	                  },
	                  {
	                	  "id": "3",
	                	  "name": "Ashton Cox",
	                	  "position": "Junior Technical Author",
	                	  "salary": "$86,000",
	                	  "start_date": "2009/01/12",
	                	  "office": "San Francisco",
	                	  "extn": "1562"
	                  }, 
	                  {
	                	  "id": "4",
	                	  "name": "Cedric Kelly",
	                	  "position": "Senior Javascript Developer",
	                	  "salary": "$433,060",
	                	  "start_date": "2012/03/29",
	                	  "office": "Edinburgh",
	                	  "extn": "6224"
	                  },
	                  {
	                	  "id": "5",
	                	  "name": "Airi Satou",
	                	  "position": "Accountant",
	                	  "salary": "$162,700",
	                	  "start_date": "2008/11/28",
	                	  "office": "Tokyo",
	                	  "extn": "5407"
	                  },
	                  {
	                	  "id": "6",
	                	  "name": "Brielle Williamson",
	                	  "position": "Integration Specialist",
	                	  "salary": "$372,000",
	                	  "start_date": "2012/12/02",
	                	  "office": "New York",
	                	  "extn": "4804"
	                  },
	                  {
	                	  "id": "7",
	                	  "name": "Herrod Chandler",
	                	  "position": "Sales Assistant",
	                	  "salary": "$137,500",
	                	  "start_date": "2012/08/06",
	                	  "office": "San Francisco",
	                	  "extn": "9608"
	                  },
	                  {
	                	  "id": "8",
	                	  "name": "Rhona Davidson",
	                	  "position": "Integration Specialist",
	                	  "salary": "$327,900",
	                	  "start_date": "2010/10/14",
	                	  "office": "Tokyo",
	                	  "extn": "6200"
	                  },
	                  {
	                	  "id": "9",
	                	  "name": "Colleen Hurst",
	                	  "position": "Javascript Developer",
	                	  "salary": "$205,500",
	                	  "start_date": "2009/09/15",
	                	  "office": "San Francisco",
	                	  "extn": "2360"
	                  },
	                  {
	                	  "id": "10",
	                	  "name": "Sonya Frost",
	                	  "position": "Software Engineer",
	                	  "salary": "$103,600",
	                	  "start_date": "2008/12/13",
	                	  "office": "Edinburgh",
	                	  "extn": "1667"
	                  },
	                  {
	                	  "id": "11",
	                	  "name": "Jena Gaines",
	                	  "position": "Office Manager",
	                	  "salary": "$90,560",
	                	  "start_date": "2008/12/19",
	                	  "office": "London",
	                	  "extn": "3814"
	                  },
	                  {
	                	  "id": "12",
	                	  "name": "Quinn Flynn",
	                	  "position": "Support Lead",
	                	  "salary": "$342,000",
	                	  "start_date": "2013/03/03",
	                	  "office": "Edinburgh",
	                	  "extn": "9497"
	                  },
	                  {
	                	  "id": "13",
	                	  "name": "Charde Marshall",
	                	  "position": "Regional Director",
	                	  "salary": "$470,600",
	                	  "start_date": "2008/10/16",
	                	  "office": "San Francisco",
	                	  "extn": "6741"
	                  },
	                  {
	                	  "id": "14",
	                	  "name": "Haley Kennedy",
	                	  "position": "Senior Marketing Designer",
	                	  "salary": "$313,500",
	                	  "start_date": "2012/12/18",
	                	  "office": "London",
	                	  "extn": "3597"
	                  },
	                  {
	                	  "id": "15",
	                	  "name": "Tatyana Fitzpatrick",
	                	  "position": "Regional Director",
	                	  "salary": "$385,750",
	                	  "start_date": "2010/03/17",
	                	  "office": "London",
	                	  "extn": "1965"
	                  },
	                  {
	                	  "id": "16",
	                	  "name": "Michael Silva",
	                	  "position": "Marketing Designer",
	                	  "salary": "$198,500",
	                	  "start_date": "2012/11/27",
	                	  "office": "London",
	                	  "extn": "1581"
	                  },
	                  {
	                	  "id": "17",
	                	  "name": "Paul Byrd",
	                	  "position": "Chief Financial Officer (CFO)",
	                	  "salary": "$725,000",
	                	  "start_date": "2010/06/09",
	                	  "office": "New York",
	                	  "extn": "3059"
	                  },
	                  {
	                	  "id": "18",
	                	  "name": "Gloria Little",
	                	  "position": "Systems Administrator",
	                	  "salary": "$237,500",
	                	  "start_date": "2009/04/10",
	                	  "office": "New York",
	                	  "extn": "1721"
	                  },
	                  {
	                	  "id": "19",
	                	  "name": "Bradley Greer",
	                	  "position": "Software Engineer",
	                	  "salary": "$132,000",
	                	  "start_date": "2012/10/13",
	                	  "office": "London",
	                	  "extn": "2558"
	                  },
	                  {
	                	  "id": "20",
	                	  "name": "Dai Rios",
	                	  "position": "Personnel Lead",
	                	  "salary": "$217,500",
	                	  "start_date": "2012/09/26",
	                	  "office": "Edinburgh",
	                	  "extn": "2290"
	                  }

	                  ];

	/* Formatting function for row details - modify as you need */
	function format ( d ) {
		// `d` is the original data object for the row
		return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
		'<tr>'+
		'<td>Full name:</td>'+
		'<td>'+d.name+'</td>'+
		'</tr>'+
		'<tr>'+
		'<td>Extension number:</td>'+
		'<td>'+d.extn+'</td>'+
		'</tr>'+
		'<tr>'+
		'<td>Extra info:</td>'+
		'<td>And any further details here (images etc)...</td>'+
		'</tr>'+
		'</table>';
	}



	var table = $('#chieldRow').DataTable( {
		data: childData,
		"columns": [
		            {
		            	"className":      'details-control',
		            	"orderable":      false,
		            	"data":           null,
		            	"defaultContent": ''
		            },
		            { "data": "name" },
		            { "data": "position" },
		            { "data": "office" },
		            { "data": "salary" }
		            ],
		            "order": [[1, 'asc']]
	} );

	// Add event listener for opening and closing details
	$('#chieldRow tbody').on('click', 'td.details-control', function () {
		var tr = $(this).closest('tr');
		var row = table.row( tr );

		if ( row.child.isShown() ) {
			// This row is already open - close it
			row.child.hide();
			tr.removeClass('shown');
		}
		else {
			// Open this row
			row.child( format(row.data()) ).show();
			tr.addClass('shown');
		}
	} );
}