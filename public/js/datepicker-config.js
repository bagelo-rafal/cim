$("body").delegate("#create-menu_date", "focusin", function() {
    $(this).datepicker({
            format: "mm/dd/yyyy",
            todayHighlight: true,
            autoclose: true
        }
    );
});
$("body").delegate("#edit-menu_date", "focusin", function() {
    $(this).datepicker({
            format: "mm/dd/yyyy",
            todayHighlight: true,
            autoclose: true
        }
    );
});
