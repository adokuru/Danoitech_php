/**
 *  Document   : calendar.js
 *  Author     : redstar
 *  Description: Script for calendar data
 *
 **/
var AppCalendar = function() {
    return {
        init: function() {
            this.initCalendar()
        },
        initCalendar: function() {
            if (jQuery().fullCalendar) {
                var e = new Date,
                    t = e.getDate(),
                    a = e.getMonth(),
                    n = e.getFullYear(),
                    r = {};
                $("#calendar").removeClass("mobile"), r = {
                    left: "title",
                    center: "",
                    right: "prev,next,today,month,agendaWeek,agendaDay"
                };
                var l = function(e) {
                        var t = {
                            title: $.trim(e.text())
                        };
                        e.data("eventObject", t), e.draggable({
                            zIndex: 999,
                            revert: !0,
                            revertDuration: 0
                        })
                    },
                    o = function(e) {
                        e = 0 === e.length ? "Untitled Event" : e;
                        var t = $('<div class="external-event label label-event">' + e + "</div>");
                        jQuery("#event_box").append(t), l(t)
                    };
                $("#external-events div.external-event").each(function() {
                    l($(this))
                }), $(document).on('click', '#event_add', function () {
                	var e = $("#event_title").val();
                    o(e)
            	}), $("#event_box").html(""), o("Holiday"), o("Wife Birthday"), o("Meeting"), o("Anniversary"), o("Dinner"), o("Party"), $("#calendar").fullCalendar("destroy"), $("#calendar").fullCalendar({
                    header: r,
                    defaultView: "month",
                    slotMinutes: 15,
                    editable: !0,
                    droppable: !0,
                    drop: function(e, t) {
                        var a = $(this).data("eventObject"),
                            n = $.extend({}, a);
                        n.start = e, n.allDay = t, n.className = $(this).attr("data-class"), $("#calendar").fullCalendar("renderEvent", n, !0), $("#drop-remove").is(":checked") && $(this).remove()
                    },
                   
                    /***** events ********/
                    events: [{
                        title: "All Day Event",
                        start: new Date('2016-11-01'),
                        backgroundColor: "#00FFFF"
                    }, {
                        title: "Long Event",
                        start: new Date('2016-11-07'),
                        end: new Date('2016-11-10'),
                        backgroundColor: "#F3565D"
                    }, {
                        title: "Repeating Event",
                        start:  new Date('2016-11-16'),
                        allDay: !1,
                        backgroundColor: "#1bbc9b"
                    }, {
                        title: "Repeating Event",
                        start: new Date(n, a, t +5, 16, 0),
                        allDay: !1,
                        backgroundColor: "#1bbc9b"
                    }, {
                        title: "Meeting",
                        start: new Date(n, a, t, 10, 30),
                        allDay: !1
                    }, {
                        title: "Lunch",
                        start: new Date(n, a, t, 12, 0),
                        end: new Date(n, a, t, 14, 0),
                        backgroundColor: "#F8CB00",
                        allDay: !1
                    }, {
                        title: "Birthday Party",
                        start: new Date(n, a, t + 1, 19, 0),
                        end: new Date(n, a, t + 1, 22, 30),
                        backgroundColor: "#9b59b6",
                        allDay: !1
                    }, {
                        title: "Click for Google",
                        start: new Date(n, a, 29),
                        end: new Date(n, a, 30),
                        backgroundColor: "#9b59b6",
                        url: "http://google.com/"
                    }]
                })
            }
        }
    }
}();
jQuery(document).ready(function() {
	'use strict';
    AppCalendar.init()
});