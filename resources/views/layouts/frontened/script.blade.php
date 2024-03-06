    <script src="{{ url('css/newassets/js/vendors/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('css/newassets/js/vendors/jquery-migrate-3.3.0.min.js') }}"></script>
    <script src="{{ url('css/newassets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('css/newassets/js/vendors/waypoints.js') }}"></script>
    <script src="{{ url('css/newassets/js/vendors/wow.js') }}"></script>
    <script src="{{ url('css/newassets/js/vendors/magnific-popup.js') }}"></script>
    <script src="{{ url('css/newassets/js/vendors/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('css/newassets/js/vendors/select2.min.js') }}"></script>
    <script src="{{ url('css/newassets/js/vendors/isotope.js') }}"></script>
    <script src="{{ url('css/newassets/js/vendors/scrollup.js') }}"></script>
    <script src="{{ url('css/newassets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('css/newassets/js/vendors/noUISlider.js') }}"></script>
    <script src="{{ url('css/newassets/js/vendors/slider.js') }}"></script>
    <!-- Count down-->
    <script src="{{ url('css/newassets/js/vendors/counterup.js') }}"></script>
    <script src="{{ url('css/newassets/js/vendors/jquery.countdown.min.js') }}"></script>
    <!-- Count down-->
    <script src="{{ url('css/newassets/js/vendors/jquery.elevatezoom.js') }}"></script>
    <script src="{{ url('css/newassets/js/vendors/slick.js') }}"></script>
    <script src="{{ url('css/newassets/js/main2513.js?v=3.0.0') }}"></script>
    <script src="{{ url('css/newassets/js/shop23cd.js?v=1.2.1') }}"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateInit"></script>
<script type="text/javascript">
function googleTranslateInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_button');
}
</script>
        <script>
        $(document).ready(function() {


            $('#searchbox').keyup(function() {
                var query = $(this).val();

                if (query != '') {
                    var _token = $('input[name="_token"]').val();
                    var pro = $('select[name="discount"]').val();
                    $.ajax({
                        url: "{{ route('autocomplete.search') }}",
                        method: "POST",
                        data: {
                            query: query,
                            _token: _token,
                            pro: pro
                        },
                        success: function(data) {
                            $('#searchrecord').fadeIn();
                            $('#searchrecord').html(data);
                        }
                    });
                } else {
                    $("#searchrecord").fadeOut();
                    $("#searchrecord").html("");
                }

            });

            $(document).on('click', 'li', function() {
                $('#search').val($(this).text());
                $('#searchrecord').fadeOut();
            });

        });
    </script>
    <script>
    $(document).on("click", "#send-it", function() {
            var a = document.getElementById("chat-input");
            if ("" != a.value) {
                var b = $("#get-number").text(),
                    c = document.getElementById("chat-input").value,
                    d = "https://web.whatsapp.com/send",
                    e = b,
                    f = "&text=" + c;
                if (
                    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
                        navigator.userAgent
                    )
                )
                    var d = "whatsapp://send";
                var g = d + "?phone=" + e + f;
                window.open(g, "_blank");
            }
        }),
        $(document).on("click", ".informasi", function() {
            (document.getElementById("get-number").innerHTML = $(this)
                .children(".my-number")
                .text()),
            $(".start-chat,.get-new")
                .addClass("show")
                .removeClass("hide"),
                $(".home-chat,.head-home")
                .addClass("hide")
                .removeClass("show"),
                (document.getElementById("get-nama").innerHTML = $(this)
                    .children(".info-chat")
                    .children(".chat-nama")
                    .text()),
                (document.getElementById("get-label").innerHTML = $(this)
                    .children(".info-chat")
                    .children(".chat-label")
                    .text());
        }),
        $(document).on("click", ".close-chat", function() {
            $("#whatsapp-chat")
                .addClass("hide")
                .removeClass("show");
        }),
        $(document).on("click", ".blantershow-chat", function() {
            $("#whatsapp-chat")
                .addClass("show")
                .removeClass("hide");
        });
</script>