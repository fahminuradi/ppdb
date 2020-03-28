$(document).ready(function () {
// Custom js
$.validate({
  modules: 'date, security, sanitize',
});
$('.datepicker').datepicker({
    format: 'mm-dd-yyyy',
    autoclose: true,
    // todayHighlight: true,
    keyboardNavigation: true,
    startView: "years"
});

$('#orang_tua').click(function() {
  $('#wali_box').hide();
  $('#ortu').show();
});

$('#wali').click(function() {
  $('#ortu').hide();
  $('#wali_box').show();
});
$('#asrama').click(function() {
  $('#wali_box').hide();
  $('#ortu').show();
});
// select2
$('.select2').select2();

// ppdb kota
$('#kota').on('click', function() {
  var id = $this.val();
  console.log(id);
  // $.get("{{route('getKelurahan')}}", id, function(kecamatan) {
  //   console.log(kecamatan);
  //   $.each(kecamatan, function(k, v) {
  //     $('#kecamatan').append($("<option/>", {
  //       value: $(v).val(),
  //       text: $(v).val()
  //     }))
  //   });
  // });
});
  // Default wizard
    //Initialize tooltips
    $('.nav-tabs > li a[title]').tooltip();

    //Wizard
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

        var $target = $(e.target);

        if ($target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);

    });
    $(".prev-step").click(function (e) {

        var $active = $('.wizard .nav-tabs li.active');
        prevTab($active);

    });

    //Add Inactive Class To All Accordion Headers
    $('.accordion-header').toggleClass('inactive-header');

	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({});

	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');

	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}

		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});

	return false;
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}
