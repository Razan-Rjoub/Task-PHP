<script src="Admin/assets/vendor/libs/jquery/jquery.js"></script>
<script src="Admin/assets/vendor/libs/popper/popper.js"></script>
<script src="Admin/assets/vendor/js/bootstrap.js"></script>
<script src="Admin/assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="Admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="Admin/assets/vendor/libs/hammer/hammer.js"></script>
<script src="Admin/assets/vendor/libs/i18n/i18n.js"></script>
<script src="Admin/assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="Admin/assets/vendor/js/menu.js"></script>

<script src="Admin/assets/vendor/libs/moment/moment.js"></script>
<script src="Admin/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="Admin/assets/vendor/libs/select2/select2.js"></script>
<script src="Admin/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js"></script>
<script src="Admin/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"></script>
<script src="Admin/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"></script>
<script src="Admin/assets/vendor/libs/quill/katex.js"></script>
<script src="Admin/assets/vendor/libs/quill/quill.js"></script>
<!-- Main JS -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="Admin/assets/js/main.js"></script>
<!-- Page JS -->
<script src="Admin/assets/js/app-ecommerce-category-list.js"></script>
<script>
    function confirmation(ev) {
        ev.preventDefault();

        var form = ev.target.form;
        swal({
                title: "Are you sure to Delete this ",
                text: "You will not be able to revert this!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel) => {
                if (willCancel) {
                    form.submit();
                }
            });
    }
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
{{-- ****  --}}

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script src="https://kit.fontawesome.com/09ce849ccf.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click', '.delete-item', function(event) {
            event.preventDefault()
            let deleteUrl = $(this).attr('href');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#02508b',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        type: 'DELETE',
                        url: deleteUrl,
                        success: function(data) {
                            if (data.status == 'success') {
                                Swal.fire(
                                    'Deleted!',
                                    data.message,
                                    'success'
                                )
                                window.location.reload()
                            } else if (data.status == 'error') {
                                Swal.fire(
                                    'Cant Delete!',
                                    data.message,
                                    'error'
                                )
                            }

                        },
                        error: function(xhr, status, error) {
                            console.log(error);
                        }
                    })


                }
            })
        })
    })
</script>
@stack('scripts')
</body>


</html>
