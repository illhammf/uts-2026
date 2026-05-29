<script src="{{ asset('front/js/jquery.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/smoothscroll.js') }}"></script>
<script src="{{ asset('front/js/jquery.nav.js') }}"></script>
<script src="{{ asset('front/js/isotope.js') }}"></script>
<script src="{{ asset('front/js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('front/js/custom.js') }}"></script>

<script>
$(document).ready(function () {
    $('.filter-wrapper a').on('click', function () {
        const filterValue = $(this).attr('data-filter');

        setTimeout(function () {
            $('#empty-category').remove();

            let totalItem = filterValue === '*'
                ? $('.iso-box').length
                : $('.iso-box' + filterValue).length;

            if (totalItem === 0) {
                $('.iso-box-wrapper').append(`
                    <div id="empty-category" class="col-md-12 text-center empty-project">
                        <h3>Project Belum Tersedia</h3>
                        <p>Belum ada project pada kategori ini.</p>
                    </div>
                `);
            }
        }, 300);
    });
});
</script>