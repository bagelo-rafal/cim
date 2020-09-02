$("body").delegate("#menu_date", "focusin", function() {
    $(this).datepicker({
            format: "mm/dd/yyyy",
            todayHighlight: true,
            autoclose: true
        }
    );
});
