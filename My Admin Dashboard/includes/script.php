<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

<script>
    // Dark/Light Mode Toggle
    $('#dark-mode-switch').on('change', function() {
        if ($(this).is(':checked')) {
            $('body').attr('data-sidebar', 'dark');
            $('body').attr('data-layout-mode', 'dark');
        } else {
            $('body').attr('data-sidebar', 'light');
            $('body').attr('data-layout-mode', 'light');
        }
    });

    // Initialize tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>