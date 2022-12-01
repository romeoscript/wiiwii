@extends("layouts.spacedcustomlayout")

@section("body")


  <script src="wiwi/assets/vendors/js/vendor.bundle.base.js"></script>


  <script src="wiwi/assets/vendors/chart.js/Chart.min.js"></script>
  <script src="wiwi/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="wiwi/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="wiwi/assets/vendors/justgage/raphael-2.1.4.min.js"></script>
  <script src="wiwi/assets/vendors/justgage/justgage.js"></script>
  
  <script src="wiwi/assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="wiwi/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="wiwi/assets/vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js"></script>
  
  <script src="wiwi/assets/js/shared/off-canvas.js"></script>
  <script src="wiwi/assets/js/shared/hoverable-collapse.js"></script>
  <script src="wiwi/assets/js/shared/misc.js"></script>
  <script src="wiwi/assets/js/shared/settings.js"></script>
  <script src="wiwi/assets/js/shared/todolist.js"></script>
  
  
  <script src="wiwi/assets/js/demo_1/dashboard.js"></script>
  <script src="wiwi/assets/js/shared/data-table.js"></script>
  <script src="../cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/js/fontawesome.js"></script>
  <script>
       $(function() {
           'use strict';
  
           $('#datatable1').DataTable({
               responsive: true,
               language: {
                   searchPlaceholder: 'Search...',
                   sSearch: '',
                   lengthMenu: '_MENU_ items/page',
               }
           });
  
           $('#datatable2').DataTable({
               bLengthChange: false,
               searching: false,
               responsive: true
           });
  
           // Select2
           $('.dataTables_length select').select2({
               minimumResultsForSearch: Infinity
           });
  
       });
  
       function hide_element(x) {
           document.querySelector(x).style.display = 'none';
       }
  
       function show_element(x) {
           document.querySelector(x).style.display = 'block';
       }
  
       function get_options(y, val, x) {
           show_element('#loader');
           $.ajax({
               type: "POST",
               url: 'includes/ajax.php',
               data: y + '=' + val,
               success: function(data) {
                   $(x).html(data);
                   hide_element('#loader');
               }
           });
       }
  
       function get_options_and_hide(y, val, x, hide_it) {
           show_element('#loader');
           var my_ele = document.querySelector(hide_it);
           if (my_ele) {
               hide_element(hide_it);
           }
           $.ajax({
               type: "POST",
               url: 'includes/ajax.php',
               data: y + '=' + val,
               success: function(data) {
                   $(x).html(data);
                   hide_element('#loader');
               }
           });
       }
  
       function copy_ref(data, btn) {
           var copyText = document.getElementById(data);
           copyText.select();
           document.execCommand("copy");
           $(btn).addClass('btn-success');
           $(btn).html('Copied <i class="fa fa-copy"></i> ');
  
       }
  
       function clickableRow(url) {
           window.location.href = url;
       }
  
   </script>
  <script>
       // WORK IN PROGRESS BELOW
  
       $('document').ready(function() {
  
  
           // RESTYLE THE DROPDOWN MENU
           $('#google_translate_element').on("click", function() {
  
               // Change font family and color
               $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div, .goog-te-menu2 *")
                   .css({
                       'color': '#544F4B',
                       'font-family': 'Roboto',
                       'width': '100%'
                   });
               // Change menu's padding
               $("iframe").contents().find('.goog-te-menu2-item-selected').css('display', 'none');
  
               // Change menu's padding
               $("iframe").contents().find('.goog-te-menu2').css('padding', '0px');
  
               // Change the padding of the languages
               $("iframe").contents().find('.goog-te-menu2-item div').css('padding', '20px');
  
               // Change the width of the languages
               $("iframe").contents().find('.goog-te-menu2-item').css('width', '100%');
               $("iframe").contents().find('td').css('width', '100%');
  
               // Change hover effects
               $("iframe").contents().find(".goog-te-menu2-item div").hover(function() {
                   $(this).css('background-color', '#4385F5').find('span.text').css('color', 'white');
               }, function() {
                   $(this).css('background-color', 'white').find('span.text').css('color', '#544F4B');
               });
  
               // Change Google's default blue border
               $("iframe").contents().find('.goog-te-menu2').css('border', 'none');
  
               // Change the iframe's box shadow
               $(".goog-te-menu-frame").css('box-shadow', '0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3)');
  
  
  
               // Change the iframe's size and position?
               $(".goog-te-menu-frame").css({
                   'height': '100%',
                   'width': '100%',
                   'top': '0px'
               });
               // Change iframes's size
               $("iframe").contents().find('.goog-te-menu2').css({
                   'height': '100%',
                   'overflow': 'scroll',
                   'width': '100%'
               });
           });
       });
  
   </script>

@endsection