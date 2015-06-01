<!-- jQuery -->
<script type="text/javascript" src="/admin/vendor/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/admin/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="/admin/assets/js/bootstrap/bootstrap.min.js"></script>

<!-- Theme Javascript -->
<script type="text/javascript" src="/admin/assets/js/utility/utility.js"></script>
<script type="text/javascript" src="/admin/assets/js/main.js"></script>
<script type="text/javascript" src="/admin/assets/js/demo.js"></script>
<script type="text/javascript" src="/admin/assets/js/preloader.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {

        "use strict";

        // Init Theme Core
        Core.init();

        // Init Theme Core
        Demo.init();

        var page_id = $("section#content").attr('data-page');
        $("[data-page='"+page_id+"']").addClass('active');
        console.log(page_id);


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
/*
        $( document ).ajaxError(function() {
            new PNotify({
                title: "Ошибка",
                text: "Обратитесь к администратору",
                addclass: "stack-topleft",
                type: 'error',
                delay: 2000
            })
        });
        */
    });
</script>
@yield('javascripts')