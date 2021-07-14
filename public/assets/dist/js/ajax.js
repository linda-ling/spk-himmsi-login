$('body').on('click','#', function(event) {
    event.preventDefault();
    var id = $(this).data('id');

    $get(store+'/'+ id+'/edit', function(data){

        $('#kriteria').blade.php("Edit kriteria");
        $('$submit').val
    })
})   


<script>
  $(document).ready(function() {
    $('#sample_form_edit').submit(function() {
        $.ajax({
          type: 'POST',
          url: '{{ route('kriteria-update') }}',
          data: $(this).serialize(),
          data: new FormData(this),
          contentType: false,
          cache:false,
          processData: false,
          dataType:"json",
          success: function(data) {
            var html = '';
            if(data.errors)
              {
                iziToast.warning({
                title: 'Data Gagal Di Simpan!',
                message: 'Pastikan isi Nama, Email, Password, Level dan Foto Profil !!!',
                position: 'topRight'
                });
              }
              if(data.success)
              {
                iziToast.success({
                  title: 'Berhasil !',
                  message: 'Data Berhasil di Simpan',
                  position: 'topRight'
                });
                $('#sample_form_edit')[0].reset();
                $('#avatar').html('');
                $('#table-2_wrapper').DataTable().ajax.reload();
                $('#editUser').modal('hide');
              }
          }
        })
       return false;
    });
  })
  </script>