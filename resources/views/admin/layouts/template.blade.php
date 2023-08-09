<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- theme meta -->
    <meta name="theme-name" content="focus" />
    <title>Focus Admin: Creative Admin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="{{ asset('css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lib/weather-icons.css"') }} "rel="stylesheet" />
    <link href="{{ asset('css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="index.html">
                            <!-- <img src="images/logo.png" alt="" /> --><span class="text-info">E-Pharmacy</span></a></div>



                    </li>


                    {{-- <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Charts <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="chart-flot.html">Flot</a></li>
                            <li><a href="chart-morris.html">Morris</a></li>
                            <li><a href="chartjs.html">Chartjs</a></li>
                            <li><a href="chartist.html">Chartist</a></li>
                            <li><a href="chart-peity.html">Peity</a></li>
                            <li><a href="chart-sparkline.html">Sparkle</a></li>
                            <li><a href="chart-knob.html">Knob</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="{{ url('/redirect') }}"><i class="ti-home"></i> Dashboard</a></li>
                    <li><a href="{{ route('alluser') }}"><i class="ti-email"></i> User</a></li>
                    <li><a href="{{ route('allcompany') }}"><i class="ti-calendar"></i> Company</a></li>
                    <li><a href="{{ route('allgeneric') }}"><i class="ti-user"></i> Generic</a></li>
                    <li><a href="{{ route('allmedicine') }}"><i class="ti-layout-grid2-alt"></i> Medicine</a></li>
                    <li><a href="{{ route('allstockmedicine') }}"><i class="ti-settings"></i> Stock Medicine</a></li>
                    <li><a href="{{ url('/billReciept') }}"><i class="ti-stats-up"></i> Sell Report</a></li>


                    <li><a><i class="ti-close"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">


                        <div class="dropdown dib">
                            <x-app-layout>

                            </x-app-layout>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">

                <!-- /# row -->
                <section id="main-content">
                    <div class="m-4">

                        @yield('content')
                    </div>



                </section>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    {{-- <script src="{{ asset('js/lib/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('js/lib/preloader/pace.min.js') }}"></script>
    <!-- sidebar -->

    <script src="{{ asset('js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- bootstrap -->

    <script src="{{ asset('js/lib/calendar-2/moment.latest.min.js') }}"></script>
    <script src="{{ asset('js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
    <script src="{{ asset('js/lib/calendar-2/pignose.init.js') }}"></script>


    <script src="{{ asset('js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('js/lib/weather/weather-init.js') }}"></script>
    <script src="{{ asset('js/lib/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('js/lib/circle-progress/circle-progress-init.js') }}"></script>
    <script src="{{ asset('') }}js/lib/chartist/chartist.min.js"></script>
    <script src="{{ asset('js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/lib/sparklinechart/sparkline.init.js') }}"></script>
    <script src="{{ asset('js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <script src="{{ asset('js/nirob.js') }}"></script>
    <!-- scripit init-->
    <script src="js/dashboard2.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

<script>
  $(document).ready(function() {
    $('#example').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    });
  });
</script>

<!-- ... Your remaining HTML code ... -->

<script>
    $(function() {
        $("#datepicker").datepicker();
    });
</script>


<script>
    $(document).ready(function () {

        // AJAX call to get the price of a medicine based on its ID
        $('#medicine').change(function () {
            var ids = $(this).find(':selected')[0].id;
            $.ajax({
                type: 'GET',
                url: '/get-price/' + ids,
                dataType: 'json',
                success: function (data) {
                    $('#price').text(data.price);
                }
            });
        });

        // Add to cart
        $('#add').on('click', function () {
            var name = $('#medicine').text();
            var qty = $('#qty').val();
            var price = parseFloat($('#price').text());

            if (qty == 0) {
                var erroMsg = '<span class="alert alert-danger ml-5">Minimum Qty should be 1 or More than 1</span>';
                $('#errorMsg').html(erroMsg).fadeOut(9000);
            } else {
                // Calculate total amount for the medicine
                var total = price * qty;

                // Append the selected medicine details to the cart table
                var tableRow = '<tr>' +
                    '<td>' + name + '</td>' +
                    '<td>' + qty + '</td>' +
                    '<td class="text-center">' + price + '</td>' +
                    '<td class="text-center">' + total.toFixed(2) + '</td>' +
                    '</tr>';

                $('#new').append(tableRow);

                // Calculate and update sub-total
                var subTotal = 0;
                $('#receipt_bill tbody tr').each(function () {
                    subTotal += parseFloat($(this).find('td:eq(3)').text());
                });

                // Calculate tax amount (5%)
                var taxAmount = subTotal * 0.05;

                // Calculate gross total (subtotal + tax)
                var totalPayment = subTotal + taxAmount;

                // Update sub-total, tax amount, and total payment
                $('#subTotal').text(subTotal.toFixed(2));
                $('#taxAmount').text(taxAmount.toFixed(2));
                $('#totalPayment').text(totalPayment.toFixed(2));
            }
        });

        // Code for the current date and time
        function displayClock() {
            var time = new Date().toLocaleTimeString();
            document.getElementById("time").innerHTML = time;
            setTimeout(displayClock, 1000);
        }
        displayClock();
    });
</script>

</body>

</html>
