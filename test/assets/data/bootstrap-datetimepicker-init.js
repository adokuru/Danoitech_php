﻿$('.form_datetime').datetimepicker({
	weekStart: 1,
	todayBtn:  1,
	autoclose: 1,
	todayHighlight: 1,
	startView: 2,
	forceParse: 0,
	showMeridian: 1
});
$('.form_date').datetimepicker({
	weekStart: 1,
	todayBtn:  1,
	autoclose: 1,
	todayHighlight: 1,
	startView: 2,
	minView: 2,
	forceParse: 0
});
$('.form_time').datetimepicker({
	weekStart: 1,
	todayBtn:  1,
	autoclose: 1,
	todayHighlight: 1,
	startView: 1,
	minView: 0,
	maxView: 1,
	forceParse: 0
});
$(function () {
	$('#datetimepicker1').datetimepicker();

	$('#datetimepicker4').datetimepicker({
		pickTime: false
	});
	$('#datetimepicker3').datetimepicker({
		format: 'DD/MM/YYYY'
	});
});


